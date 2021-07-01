<?php

namespace App\Http\Controllers;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class FormController extends Controller
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
        $formi = Form::orderBy('id')->get();
        return view('form.index')->with('formm',$formi);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('form.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'descriere' => 'required',
            'image' => 'image|nullable',
        ]);

        //Handle File Upload
        if($request->hasFile('image')) {

            //Get filname with the extentsion
            $filenamewithExt = $request->file('image')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename . '_'  .time() . '.' . $extension;

            //Uploda the image

            $path = $request->file('image')->storeAs('sliders', $fileNameToStore, 'view');
        }

        else

        {
            $fileNameToStore = '';

        }

        // Create form

        $formi = new Form;

        $formi->title = $request->input('title');

        $formi->image = $fileNameToStore;

        $formi->descriere = $request->input ('descriere');

        $formi->save();

        return redirect(route('form.index'))->with('Succes','Testimonialul a fost schimbat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formi = Form::find($id)->first();
        return view('form.show')->with('form',$formi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formi = Form::find($id);
        return view('form.edit')->with('form',$formi);
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

            'title' => 'required',
            'descriere' => 'required',
            'image' => 'image|nullable'
        ]);

        //Handle File Upload
        if($request->hasFile('image')) {

            //Get filname with the extentsion
            $filenamewithExt = $request->file('image')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename . '_'  .time() . '.' . $extension;

            //Uploda the image
            $path = $request->file('image')->storeAs('sliders', $fileNameToStore, 'view');

        }


        $formi = Form::find($id);

        $formi->title = $request->input('title');

        if($request->hasFile('image')){

            $formi->image = $fileNameToStore;
        }

        $formi->descriere = $request->input ('descriere');

        $formi->save();

        return redirect(route('form.index'))->with('Succes','Testimonialul a fost schimbat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formi = Form::find($id);

        $formi->delete();

        return redirect(route('form.index'))->with('Succes','Testimonialul a fost sters');
    }
}