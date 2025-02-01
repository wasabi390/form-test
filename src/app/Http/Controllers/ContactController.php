<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('contact');
  }

  public function register(ContactRequest $request)
  {
    $contact = $request->only(['name','email', 'password']);
    return view('login', compact('contact'));
  }

  public function login(ContactRequest $request)
  {
    $contact = $request->only(['email', 'password']);
    return view('admin', compact('contact'));
  }

  public function admin(ContactRequest $request)
  {
    $contact = $request->only(['name','email', 'password']);
    return view('index', compact('contact'));
  }

  public function contact(ContactRequest $request)
  {
    $contact = $request->only(['name','email', 'password']);
    return view('login', compact('contact'));
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['name','sex','email', 'tel','address', 'building','contact','content']);
    return view('confirm', compact('contact'));
  }

  public function store(ContactRequest $request)
  {
    $contact = $request->only(['name','sex','email', 'tel','address', 'building','contact','content']);
    Contact::create($contact);
    return view('thanks');
  }
}