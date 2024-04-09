<?php

namespace App\Http\Controllers;

use App\Models\Maps;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maps $maps)
    {
        return view('dashboard.map.edit', [
            'maps' => $maps
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maps $maps)
    {
        $validatedData = $request->validate([
            'links'=> ''
        ]);

        Maps::where('id', $maps->id)->update($validatedData);

        return redirect('dashboard')->with('success', 'Maps link successfully updated');
    }

    
}
