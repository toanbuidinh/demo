<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function listContacts()
    {
        $contacts = Contact::all();
        return view('admin.contact' , ['contacts' => $contacts]);
    }
}
