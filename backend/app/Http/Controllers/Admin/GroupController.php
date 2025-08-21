<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\StoreRequest;
use App\Http\Requests\Group\UpdateRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Group::create($request->validated());
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(group $group)
    {
        return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(group $group)
    {
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, group $group)
    {
        $data = $request->validated();
        $group->update($data);
        $group->fresh();

        return view('group.show', compact('group'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(group $group)
    {
        $group->delete();

        return redirect()->route('groups.index');
    }
}
