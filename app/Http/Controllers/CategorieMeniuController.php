<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategorieMeniu;
use DB;

class CategorieMeniuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('meniu.catmeniu')->with('categorie_meniu', CategorieMeniu::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meniu.addcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);

        $this->validate($request, [
            'catname' => 'required'
        ]);

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('categorie_meniu', $fileNameToStore, 'view');
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $catmeniu = new CategorieMeniu;
        $catmeniu->nume = $request->input('catname');
        $catmeniu->imagine = $fileNameToStore;
        $catmeniu->save();

        return redirect('/catmeniu')->with('success', 'Meniu Creat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CategorieMeniu::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $catmeniu = CategorieMeniu::findOrFail($id);
        return view('meniu.editcat')->with('catmeniu', $catmeniu);
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
            'catname' => 'required'

        ]);

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('categorie_meniu', $fileNameToStore, 'view');
        }

        $catmeniu = CategorieMeniu::findOrFail($id);
        $catmeniu->nume = $request->input('catname');
        if($request->hasFile('image')){
            $catmeniu->imagine = $fileNameToStore;
        }
        $catmeniu->save();

        return redirect('/catmeniu')->with('success', 'Meniu Modificat');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catmeniu = CategorieMeniu::findOrFail($id);
        $catmeniu->delete();
        return redirect('/catmeniu')->with('success', 'Succes');
    }
}
