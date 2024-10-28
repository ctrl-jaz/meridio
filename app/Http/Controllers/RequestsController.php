<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Http\Requests\StoreRequestsRequest;
use App\Http\Requests\UpdateRequestsRequest;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = requests::all();
        return $requests;
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
    public function store(StoreRequestsRequest $request)
    {
        $requests=new requests;
        $requests->user_id = $request->user_id;
        $requests->category_id = $request->category_id;
        $requests->request_status = $request->requests_status;

        $requests->save();
        return $requests;
    }

    /**
     * Display the specified resource.
     */
    public function show(Requests $requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestsRequest $request, Requests $requests)
    {
        $requests = request::find($request->id);

        $requests->user_id = $request->user_id;
        $requests->category_id = $request->category_id;
        $requests->request_status = $request->request_status;

        $requests->save();
        return $requests;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requests $requests)
    {
        //
    }
}
