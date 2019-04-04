<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Frontend;
use App\Logo;
use App\Team;
use App\Work;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $logos = Logo::where('publication_status', 1)->get();
        $services = Work::where('publication_status', 1)->take(4)->get();
        $abouts = About::where('publication_status', 1)->get();
        $all_member = Team::where('publication_status', 1)->take(8)->get();
        $contact_us = Contact::where('publication_status', 1)->get();
        return view('frontend.home', [
            'logos' => $logos,
            'services' => $services,
            'abouts' => $abouts,
            'all_member' => $all_member,
            'contact_us' => $contact_us
        ]);
    }

    public function sent_mail(Request $request){
        $send_mail = new Frontend();
        $send_mail->name = $request->name;
        $send_mail->email = $request->email;
        $send_mail->message = $request->message;
        $send_mail->save();
        return redirect()->back()->with('message', 'Your Mail Has been send');
    }
}
