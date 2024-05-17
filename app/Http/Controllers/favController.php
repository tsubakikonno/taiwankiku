<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FavContact;
use App\Models\Contact;

class favController extends Controller
{

    public function favcontact(Request $request)
    {
        $favcontact = new FavContact();
        $favcontact->contact_id = $request->contact_id;
        $favcontact->save();
        
        return redirect()->route('manage');
    }

    public function unfavcontact(Request $request)
    {
        FavContact::where('contact_id', $request->contact_id)->delete();
        return redirect()->route('manage');
    }

}
