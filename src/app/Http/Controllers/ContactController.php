<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('contacts');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['first_name','last_name','gender','email', 'tel_1','tel_2','tel_3','address', 'building','detail','contact']);
    return view('confirm', compact('contact'));
  }

  public function store(Request $request)
  {
    $contact = $request->only(['first_name','last_name','gender','email', 'tel_1','tel_2','tel_3','address', 'building','detail','contact']);
    Contact::create($contact);
    return view('thanks');
  }
}