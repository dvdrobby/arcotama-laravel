<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        
        return view('dashboard.about.edit', [
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $data = [
            'image' => 'image|file|max:5120',
            'about' => 'required'
        ];

        $validatedData = $request->validate($data);
        
        if($request->file('image')){

            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('about-images');
        }

        About::where('id', $about->id)
                ->update($validatedData);

        return redirect('dashboard')->with('success','New post successfully updated.');
    }
}
