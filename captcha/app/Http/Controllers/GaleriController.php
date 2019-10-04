<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
      public function index(){
    	$listgaleri=Galeri::all();
    	return view ('galeri.index',compact('listgaleri'));
    }
     public function show($id){
    	$Galeri=Galeri::find($id);
    	return view ('galeri.show',compact('Galeri'));
    }

    public function create(){
    	$Galeri=Galeri::pluck('nama', 'id');
    	return view ('galeri.create',compact('Galeri'));
    }

    public function store(Request $request){
    	$input= $request->all();
    	Galeri::create($input);
    	return redirect(route('galeri.index'));
    }
}
