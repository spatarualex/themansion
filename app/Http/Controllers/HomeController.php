<?php

namespace App\Http\Controllers;
use App\Form;
use App\Termi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome(){
        $termi = Termi::orderBy('updated_at')->get();
        $formi = Form::orderBy('updated_at')->get();
        return view('welcome')
            ->with(compact('termi','formi'));


    }
    public function migrate($status){
        if((int)$status == 1){
            Artisan::call('migrate:refresh');
        }else{
            Artisan::call('migrate');
        }
        system('composer dump-autoload');
    }
}
