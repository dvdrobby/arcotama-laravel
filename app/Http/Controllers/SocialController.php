<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view('dashboard.social.edit', [
            'social'=> $social
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $validatedData = $request->validate([
            'facebook'=>'max:255',
            'twitter'=>'max:255',
            'instagram'=>'max:255',
            'linkedin'=>'max:255',
            'youtube'=>'max:255'
        ]);
        Social::where('id', $social->id)
                ->update($validatedData);
        
        return redirect('dashboard')->with('success', 'Social media link succesfully updated');
    }

}
