<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Http\Requests\StoreDonationsRequest;
use App\Http\Requests\UpdateDonationsRequest;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = donations::all();
        return $donations;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonationsRequest $request)
    {
        $donation = new Donations;
        
        $donations->user_id = $request->user_id;
        $donations->category_id = $request->category_id;
        $donations->amount = $request->amount;

        $donations->save();
        return $donations;
    }

    /**
     * Display the specified resource.
     */
    public function show(Donations $donations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonationsRequest $request, Donations $donations)
    {
        $donations = Donations::find($request->id);

        $donations->user_id = $request->user_id;
        $donations->category_id = $request->category_id;
        $donations->amount = $request->amount;

        $donations->save();
        return $donations;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
