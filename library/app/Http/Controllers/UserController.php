<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return User::all();

       //SELECT * From Users 


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $record = new User();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        return User::find($id);

        //SELECT * From Users Where id=$is
    }

    /**
     * Update the specified resource in storage.
     * patch részleges módosítás 
     * put teljes módosítás
     */
    public function update(Request $request, string $id)
    {
        //
        $record =  User::find($id);
        $record->fill($request->all());
        $record->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::find($id)->delete();

    }
}
