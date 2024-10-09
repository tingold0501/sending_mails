<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListMRequest;
use App\Http\Requests\UpdateListMRequest;
use App\Models\ListM;

class ListController extends Controller
{
   

    public function get_v_list_all_contracts() {
        return view('layouts.contract.list.list-contract');
    }
    public function get_v_create_list_contracts() {
        return view('layouts.contract.list.create-list-contract');
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListMRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ListM $listM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListM $listM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListMRequest $request, ListM $listM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListM $listM)
    {
        //
    }
}
