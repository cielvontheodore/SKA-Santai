<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($request->validate($this->rules()));

        return redirect()->route('admin.contact.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->validate($this->rules()));

        return redirect()->route('admin.contact.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('success', 'Data deleted successfully.');
    }

    /**
     * Store a contact submitted from the public form.
     */
    public function storePublic(Request $request)
    {
        Contact::create($request->validate($this->rules()));

        return redirect('/')->with('contact_success', 'Pesan berhasil dikirim!');
    }

    /**
     * Validation rules shared by the admin and the public form.
     * The message is intentionally not length-limited.
     */
    private function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }
}
