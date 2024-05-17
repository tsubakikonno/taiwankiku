<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\FavContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('manage');
    }

    public function contact(ContactRequest $request) 
    {
        $contacts = $request->all();
        Contact::create($contacts);
        return view('thanks',compact('contacts'))->with('errors');
    }

    public function manage(Request $request) 
    {
        $contacts = Contact::all(); 
    $favcontacts = FavContact::all(); 
    return view('manage', compact('contacts', 'favcontacts')); 
    }

    public function delete(Request $request) 
    {
        Contact::find($request->id)->delete();
        return back();
    }

    
}
