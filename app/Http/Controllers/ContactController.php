<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getContact(){
        $contacts = Contact::all();
        return $contacts;
    }
}
