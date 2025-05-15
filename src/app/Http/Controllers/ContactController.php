<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'email', 'gender', 'tel', 'address', 'building', 'category_id', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'email', 'gender', 'tel1', 'tel2', 'tel3', 'address', 'category_id', 'content']);
        Contact::create($contact);
        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
    
}

