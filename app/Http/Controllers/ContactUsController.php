<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
        ]);

        $data = $request->all();
        ContactUs::create($data);
        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }

    public function showFromDashboard()
    {
        $data = ContactUs::all();
        return view('dashboard.contact-us', compact('data'));
    }
}
