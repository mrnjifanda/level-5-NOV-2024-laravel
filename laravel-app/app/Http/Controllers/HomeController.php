<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcom () {

        $contacts = Contact::get();
        return view('welcome', [
            'title' => 'Welcome Page',
            'contacts' => $contacts
        ]);
    }

    public function contactUs () {
        return view('contact-us', ['title' => 'Contact us Page']);
    }

    public function contactUsPost (Request $request) {

        $name = $request->get('name');
        $email = $request->get('email');
        $contact = new Contact([
            'name' => $name,
            'email' => $email
        ]);

        $contact->save();
        // return redirect()->back();
        return redirect('/');
    }

    public function contactUsEdit ($id) {

        $contact = Contact::find($id);
        return view('contact-us-edit', [
            'title' => 'Contact: ' . $contact->name,
            'contact' => $contact
        ]);
    }

    public function contactUsEditPost(Request $request, $id) {

        $contact = Contact::find($id);
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->save();

        return redirect('/');
    }
}
