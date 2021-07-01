<?php

namespace App\Http\Controllers;

use App\CategorieMeniu;
use Illuminate\Http\Request;
use App\Meniu;
use DB;

class MeniuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('meniu.meniu')->with('meniu', Meniu::select('meniu.*','categorie_meniu.nume as cat_name')->leftJoin('categorie_meniu','categorie_meniu.id','=','meniu.category_id')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie_meniu =  CategorieMeniu::get();
        $meniu = Meniu::select('meniu.*','categorie_meniu.nume as cat_name')->leftJoin('categorie_meniu','categorie_meniu.id','=','meniu.category_id')->get();
        return view('meniu.addmenu')
            ->with(compact('categorie_meniu', 'meniu'));
        //return view('meniu.addmenu')->with('categorie_meniu');
        //return view('meniu.addmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'image' => 'image|nullable|max:1999',
            'category_id' => 'required',
            'descriere' => 'required'
        ]);

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('meniu', $fileNameToStore, 'view');
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $meniu = new Meniu;
        $meniu->nume = $request->input('name');
        $meniu->pret = $request->input('price');
        $meniu->imagine = $fileNameToStore;
        $meniu->category_id = $request->input('category_id');
        $meniu->descriere = $request->input('descriere');
        $meniu->save();
        return redirect('/meniu/index')->with('success', 'Succes');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meniu = Meniu::all();
        return view('meniu.meniu')->with('meniu', $meniu);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meniu = Meniu::findOrFail($id);
        return view('meniu.editmeniu')->with('meniu', $meniu);
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
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'image' => 'image|nullable|max:1999',
            'category_id' => 'required',
            'descriere' => 'required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('meniu', $fileNameToStore, 'view');
        }
        $meniu = Meniu::findOrFail($id);
        $meniu->nume = $request->input('name');
        $meniu->pret = $request->input('price');
        if($request->hasFile('image')){
            $meniu->imagine = $fileNameToStore;
        }
        $meniu->category_id = $request->input('category_id');
        $meniu->descriere = $request->input('descriere');
        $meniu->save($request->all());
        return redirect('/meniu/index')->with('success', 'Succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meniu = Meniu::findOrFail($id);
        $meniu->delete();
        return redirect('/meniu/index')->with('success', 'Succes');
    }
}
