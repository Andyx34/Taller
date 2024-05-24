<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module=Module::orderBy('id','asc')->get();
        return view('module.index',compact('module'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $module=new Module();
        $module->name=$request->name;
        $module->id_teacher=$request->id_teacher;


        $module->save();

        echo'guardado';
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        return view('module.show',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('module.edit',compact('module'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        $module=new Module();
        $module->name=$request->name;
        $module->id_teacher=$request->id_teacher;
        

        $module->save();
        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('module.index');
    }
}
