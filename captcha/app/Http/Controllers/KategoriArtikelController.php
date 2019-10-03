<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel; 

class KategoriArtikelController extends Controller
{
    public function index(){
    	$listkategoriartikel=kategori_artikel::all();
    	return view ('kategori_artikel.index',compact('listkategoriartikel'));
    }

    public function show($id){
    	//$KategoriArtikel=kategori_artikel::where('id',$id)->first();
    	$KategoriArtikel=kategori_artikel::find($id);
    	return view ('kategori_artikel.show',compact('KategoriArtikel'));
    }

    public function create(){
    	return view ('kategori_artikel.create');
    }

    public function store(Request $request){
    	$input= $request->all();
    	kategori_artikel::create($input);
    	//dd($input);
    		return redirect('/kategori_artikel');
    }
}
