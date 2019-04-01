<?php

namespace App\Http\Controllers;

use App\Logo;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;
use Image;

class LogoController extends Controller
{
    public function insert_logo(){
        $view = Logo::all();
        return view('backend.logo.insert-logo', compact('view'));
    }

    public function save_logo(Request $request){
        $new_logo = new Logo();

        if ($request->hasFile('logo_upload')){
            $logo = $request->file('logo_upload');
            $logo_name = $logo->getClientOriginalName();
            $filename = time().'_logo_'.$logo_name;
            $directory = public_path('/logo-images/');
            $logoUrl = $directory.$filename;
            Image::make($logo)->resize(300, 300)->save($logoUrl);
            $new_logo->logo_upload = $filename;
        }
        $new_logo->publication_status = $request->publication_status;
        $new_logo->save();
        return redirect()->back()->with('message', 'Logo Upload Successfully');
    }

    public function published_logo($id){
        $published_logo = Logo::find($id);
        $published_logo->publication_status = 0;
        $published_logo->save();
        return redirect()->back()->with('message', 'Logo has been Unublished');
    }

    public function unpublished_logo($id){
        $published_logo = Logo::find($id);
        $published_logo->publication_status = 1;
        $published_logo->save();
        return redirect()->back()->with('message', 'Logo has been Published');
    }

    public function edit_logo($id){
        $edit_logo = Logo::find($id);
        return view('backend.home.edit-logo', compact('edit_logo'));
    }

    public function update_logo(Request $request){
        $update_logo = Logo::find($request->id);

        if ($request->hasFile('logo_upload')){
            if ($request->logo_upload){
                unlink(public_path('/logo-images/'.$update_logo->logo_upload));
            }
        }
        if ($request->hasFile('logo_upload')){
            $logo = $request->file('logo_upload');
            $logo_name = $logo->getClientOriginalName();
            $filename = time().'_logo_'.$logo_name;
            $directory = public_path('/logo-images/');
            $logoUrl = $directory.$filename;
            Image::make($logo)->resize(300, 300)->save($logoUrl);
            $update_logo->logo_upload = $filename;
        }
        $update_logo->publication_status = $request->publication_status;
        $update_logo->save();
        return redirect('/logo')->with('message', 'Logo Update Successfully');
    }

    public function delete_logo($id){
        $delete_logo = Logo::find($id);
        $delete_logo->delete();
        return redirect()->back()->with('message', 'Logo Delete Successfully');

    }
}
