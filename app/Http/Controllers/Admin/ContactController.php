<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contacts = Contact::latest()->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact): View
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact): RedirectResponse
    {
        // Delete associated files if any
        if ($contact->files && is_array($contact->files)) {
            foreach ($contact->files as $file) {
                if (file_exists(storage_path('app/public/'.$file))) {
                    unlink(storage_path('app/public/'.$file));
                }
            }
        }

        $contact->delete();

        return redirect()->route('backend.contacts.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
