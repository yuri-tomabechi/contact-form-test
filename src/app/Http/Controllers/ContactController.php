<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'category', 'detail']);
        return view('contact.confirm', ['contact' => $contact]);
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'category', 'detail']);
        Contact::create($contact);
        // return view('thanks');
        redirect('/thanks');
    }
}
