<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Work;
use Illuminate\Http\Request;
use Image;
class WorkController extends Controller
{
    public function work_index(){
        $show_project = Work::orderBy('id', 'desc')->get();
        return view('backend.work.work-index', compact('show_project'));
    }

    public function work_save(Request $request){
        $save_work = new Work();
        if ($request->hasFile('project_upload')){
            $work_img = $request->file('project_upload');
            $img_name = $work_img->getClientOriginalName();
            $file_name = time().'_projectimg_'.$img_name;
            $directory = public_path('/work-images/');
            $imgUrl = $directory.$file_name;
            Image::make($work_img)->resize(200, 200)->save($imgUrl);
            $save_work->project_upload = $file_name;
        }
        $save_work->project_title = $request->project_title;
        $save_work->publication_status = $request->publication_status;
        $save_work->save();
        return redirect()->back()->with('message', 'Project Uploaded');
    }

    public function work_published($id){
        $published_work = Work::find($id);
        $published_work->publication_status =0;
        $published_work->save();
        return redirect()->back()->with('message', 'Project Unpublished');
    }

    public function work_unpublished($id){
        $published_work = Work::find($id);
        $published_work->publication_status =1;
        $published_work->save();
        return redirect()->back()->with('message', 'Project Published');
    }

    public  function work_edit($id){
        $edit_work = Work::find($id);
        return view('backend.work.work-edit', compact('edit_work'));
    }

    public function update_work(Request $request){
        $update_project = Work::find($request->id);
        if ($request->hasFile('project_upload')){
            if ($request->project_upload){
                unlink(public_path('/work-images/'.$update_project->project_upload));
            }
        }
        if ($request->hasFile('project_upload')){
            $work_img = $request->file('project_upload');
            $img_name = $work_img->getClientOriginalName();
            $file_name = time().'_projectimg_'.$img_name;
            $directory = public_path('/work-images/');
            $imgUrl = $directory.$file_name;
            Image::make($work_img)->resize(200, 200)->save($imgUrl);
            $update_project->project_upload = $file_name;
        }
        $update_project->project_title = $request->project_title;
        $update_project->publication_status = $request->publication_status;
        $update_project->save();
        return redirect('/our-work')->with('message', 'Project Updated');
    }

    public function delete_work($id){
        $delete_project = Work::find($id);
        $delete_project->delete();
        return redirect()->back()->with('delete', 'Project Delete Successfully');
    }

//Contact information

    public function contact_us(){
        $our_contact = Contact::all();
        return view('backend.contact.contact-index', compact('our_contact'));
    }


    public function contact_save(Request $request){
        $contact_address = new Contact();
        $contact_address->email = $request->email;
        $contact_address->phone = $request->phone;
        $contact_address->street = $request->street;
        $contact_address->location = $request->location;
        $contact_address->publication_status = $request->publication_status;
        $contact_address->save();
        return redirect()->back()->with('message', 'Contact Information Save');
    }

    public function contact_published($id){
        $published_contact = Contact::find($id);
        $published_contact->publication_status =0;
        $published_contact->save();
        return redirect()->back()->with('message', 'Contact Information Unpublished Successfully');
    }

    public function contact_unpublished($id){
        $unpublished_contact = Contact::find($id);
        $unpublished_contact->publication_status =1;
        $unpublished_contact->save();
        return redirect()->back()->with('message', 'Contact Information Published Successfully');
    }

    public function contact_edit($id){
        $edit_contact = Contact::find($id);
        return view('backend.contact.edit-contact', compact('edit_contact'));
    }

    public function contact_update(Request $request){
        $update_contact = Contact::find($request->id);

        $update_contact->email = $request->email;
        $update_contact->phone = $request->phone;
        $update_contact->street = $request->street;
        $update_contact->location = $request->location;
        $update_contact->publication_status = $request->publication_status;
        $update_contact->save();
        return redirect('/contact')->with('message', 'Contact Information Updated');
    }

    public function contact_delete($id){
        $delete_contact = Contact::find($id);
        $delete_contact->delete();
        return redirect()->back()->with('delete', 'Contact Information Deleted');
    }


}
