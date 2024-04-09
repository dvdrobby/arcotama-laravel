<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Maps;
use App\Models\Social;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all()[0];
        $maps = Maps::all()[0];
        $socials = Social::all()[0];

        return view('blog.contact',[
            'contact'=> $contact,
            'maps' => $maps,
            'socials' => $socials
        ]);
    }
   
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Contact::where('id', $contact->id)
                ->update($validatedData);

        return redirect('dashboard')->with('success','Contact successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
