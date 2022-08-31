<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=Person::all();
        return view('admin.people.index',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required|min:3|max:255|unique:people',
            'first_name'=>'required|min:3|max:255|',
            'middle_name'=>'required|min:3|max:255|',
            'last_name'=>'required|min:3|max:255|'
        ]);
        Person::create($request->all());
        return redirect()->route('people.index')->with('success','Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person=Person::find($id);
        return view('admin.people.edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'number'=>'required|min:3|max:255',
            'first_name'=>'required|min:3|max:255|',
            'middle_name'=>'required|min:3|max:255|',
            'last_name'=>'required|min:3|max:255|'
        ]);
        $person=Person::find($id);
        $person->update($request->all());
        return redirect()->route('people.index')->with('success','Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Person::destroy($id);
        return redirect()->route('people.index')
        ->with('success','Запись удалена');
    }
}
