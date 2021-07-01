<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Termi;
class TestimonialController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $termi = Termi::orderBy('id')->get();
        return view('testimoniale.index')->with('testimonial',$termi);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
return view('testimoniale.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $this->validate($request, [
            'nume' => 'required',
            'categorie' => 'required',
            'descriere' => 'required',
            'Poza_de_profil' => 'image|nullable',
        ]);

        if($request->hasFile('Poza_de_profil')) {

        
            $filenamewithExt = $request->file('Poza_de_profil')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('Poza_de_profil')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_'  .time() . '.' . $extension;
            $path = $request->file('Poza_de_profil')->storeAs('sliders_2', $fileNameToStore, 'view');
        }

        else

        {
            $fileNameToStore = 'noimage.jpg';

        }

      $termi = new Termi;
      $termi->nume =$request->input('nume');
      $termi->categorie = $request->input('categorie');
      $termi->descriere = $request->input ('descriere');
      $termi->Poza_de_profil = $fileNameToStore;
      $termi->save();

      return redirect(route('testiimoniale.index'))->with('Succes','Testimonialul a fost creat :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $term = Termi::find($id)->first();
        return view('testimoniale.show')->with('testimonial',$term);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $term = Termi::find($id);
        return view('testimoniale.edit')->with('testimonial',$term);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nume' => 'required',
            'categorie' => 'required',
            'descriere' => 'required',
            'Poza_de_profil' => 'image|nullable',
        ]);

        if($request->hasFile('Poza_de_profil')) {
            $filenamewithExt = $request->file('Poza_de_profil')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('Poza_de_profil')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_'  .time() . '.' . $extension;
            $path = $request->file('Poza_de_profil')->storeAs('sliders_2', $fileNameToStore, 'view');
        }

        $termi =Termi::find($id);
        $termi->nume =$request->input('nume');
        if($request->hasFile('Poza_de_profil')){
        $termi->Poza_de_profil = $fileNameToStore;
        }
        $termi->categorie = $request->input('categorie');
        $termi->descriere = $request->input ('descriere');
        $termi->save();

        return redirect(route('testiimoniale.index'))->with('Succes','Testimonialul a fost schimbat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $termi = Termi::find($id);
        $termi->delete();
        return redirect(route('testiimoniale.index'))->with('Succes','Testimonialul a fost sters');
    }
}