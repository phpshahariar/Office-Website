<?php

namespace App\Http\Controllers;

use App\About;
use App\Team;
use Illuminate\Http\Request;
use Image;
class TeamController extends Controller
{
    public function insert_team_member(){
        $all_member = Team::orderBy('id', 'desc')->get();
        return view('backend.team.insert-team', compact('all_member'));
    }

    public function save_team_info(Request $request){
        $team_info = new Team();

        if ($request->hasFile('team_photo')){
            $teamImage = $request->file('team_photo');
            $imageName = $teamImage->getClientOriginalName();
            $fileName = time().'_teammember_'.$imageName;
            $directory = public_path('/team-images/');
            $teamImgUrl = $directory.$fileName;
            Image::make($teamImage)->resize(350, 350)->save($teamImgUrl);
            $team_info->team_photo = $fileName;
        }

        $team_info->name = $request->name;
        $team_info->designation = $request->designation;
        $team_info->publication_status = $request->publication_status;
        $team_info->save();
        return redirect()->back()->with('message', 'Team Info Saved');
    }

    public function published_team_info($id){
        $published_team = Team::find($id);
        $published_team->publication_status = 0;
        $published_team->save();
        return redirect()->back()->with('message', 'Team Info Unpublished Successfully');
    }

    public function unpublished_team_info($id){
        $published_team = Team::find($id);
        $published_team->publication_status = 1;
        $published_team->save();
        return redirect()->back()->with('message', 'Team Info Published Successfully');
    }

    public function edit_team_info($id){
        $edit_team = Team::find($id);
        return view('backend.team.edit-team', compact('edit_team'));
    }

    public function update_team_info(Request $request){
        $update_team = Team::find($request->id);

        if ($request->hasFile('team_photo')){
            if ($request->team_photo){
                unlink(public_path('/team-images/'.$update_team->team_photo));
            }
        }
        if ($request->hasFile('team_photo')){
            $teamImage = $request->file('team_photo');
            $imageName = $teamImage->getClientOriginalName();
            $fileName = time().'_teammember_'.$imageName;
            $directory = public_path('/team-images/');
            $teamImgUrl = $directory.$fileName;
            Image::make($teamImage)->resize(350, 350)->save($teamImgUrl);
            $update_team->team_photo = $fileName;
        }
        $update_team->name = $request->name;
        $update_team->designation = $request->designation;
        $update_team->publication_status = $request->publication_status;
        $update_team->save();
        return redirect('/team')->with('message', 'Team Info Updated');
    }

    public function delete_team_info($id){
        $delete_team = Team::find($id);
        $delete_team->delete();
        return redirect()->back()->with('message', 'Team Info Deleted');
    }



    //** About Information */

    public function about_info(){
        $about_show = About::orderBy('id', 'desc')->get();
        return view('backend.about.about-insert', compact('about_show'));
    }

    public function save_about(Request $request){
        $about_info  = new About();
        $about_info->heading = $request->heading;
        $about_info->description = $request->description;
        $about_info->publication_status = $request->publication_status;
        $about_info->save();
        return redirect()->back()->with('message', 'About info Save Successfully');
    }

    public function published_about($id){
        $published_about = About::find($id);
        $published_about->publication_status =0;
        $published_about->save();
        return redirect()->back()->with('message', 'About info Unpublished Successfully');
    }

    public function unpublished_about($id){
        $published_about = About::find($id);
        $published_about->publication_status =1;
        $published_about->save();
        return redirect()->back()->with('message', 'About info Published Successfully');
    }

    public function edit_about($id){
        $edit_about = About::find($id);
        return view('backend.about.edit-about', compact('edit_about'));
    }

    public function update_about(Request $request){
        $update_about = About::find($request->id);
        $update_about->heading = $request->heading;
        $update_about->description = $request->description;
        $update_about->publication_status = $request->publication_status;
        $update_about->save();
        return redirect('/about')->with('message', 'About info Updated');
    }

    public function delete_about($id){
        $delete_about = About::find($id);
        $delete_about->delete();
        return redirect()->back()->with('delete', 'About info Deleted');
    }
}
