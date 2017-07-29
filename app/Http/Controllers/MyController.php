<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\Anak;
class MyController extends Controller
{
    //
     public function index()
    {
    	$a = "Silvani Rizky Agustiani";
    	return "Nama Saya Adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view('about',compact('ortu','anak'));

    }



}
