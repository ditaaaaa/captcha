<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\kategori_artikel;

class ArtikelController extends Controller
{
     public function index(){
    	$listartikel=artikel::all();
    	return view ('artikel.index',compact('listartikel'));
    }
     public function show($id){
    	//$KategoriArtikel=kategori_artikel::where('id',$id)->first();
    	$Artikel=artikel::find($id);
    	return view ('artikel.show',compact('Artikel'));
    }

    public function create(){
    	$KategoriArtikel=kategori_artikel::pluck('nama', 'id');
    	return view ('artikel.create',compact('KategoriArtikel'));
    }

    public function store(Request $request){
    	$input= $request->all();
    	artikel::create($input);
    	return redirect(route('artikel.index'));
    }
}