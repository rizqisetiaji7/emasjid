<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Http\Requests\StoreMasjidRequest;
use App\Http\Requests\UpdateMasjidRequest;
use App\Models\User;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjid = auth()->user()->masjid ?? new Masjid();
        return view('masjid.create', compact('masjid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMasjidRequest $request)
    {
        // Check the mosque management data
        $masjid = auth()->user()->masjid ?? new Masjid();

        // Set and save mosque data values ​​from user requests
        $masjid->nama    = $request->nama;
        $masjid->telepon = $request->telepon;
        $masjid->email   = $request->email;
        $masjid->alamat  = $request->alamat;
        $masjid->save();

        // Update the mosque id on the user as the administrator of the mosque
        $user = User::where('id', auth()->user()->id)->first();
        $user->masjid_id = $masjid->id;
        $user->update();

        // Send a flash message and return to the mosque form page
        flash('Data masjid telah berhasil disimpan.')->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Masjid $masjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masjid $masjid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasjidRequest $request, Masjid $masjid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masjid $masjid)
    {
        //
    }
}
