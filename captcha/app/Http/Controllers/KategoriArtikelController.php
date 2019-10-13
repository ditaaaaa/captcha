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
    	$KategoriArtikel=kategori_artikel::find($id);
    	return view ('kategori_artikel.show',compact('KategoriArtikel'));
    }

    public function create(){
    	return view ('kategori_artikel.create');
    }

    public function store(Request $request){
    	$input= $request->all();
    	kategori_artikel::create($input);
    	
        return redirect('/kategori_artikel');
    }

    public function edit($id){
        $KategoriArtikel=kategori_artikel::find($id);

        if (empty($KategoriArtikel)){
            return redirect (route('kategori_artikel.index'));
        }

        return view ('kategori_artikel.edit', compact('KategoriArtikel'));
    }

     public function update($id, Request $request){
        $KategoriArtikel=kategori_artikel::find($id);
        $input= $request->all();

        if (empty($KategoriArtikel)){
    
            return redirect (route('kategori_artikel.index'));
        }

        $KategoriArtikel->update($input);
        return redirect (route('kategori_artikel.index'));
    }

    public function destroy($id){
         $KategoriArtikel=kategori_artikel::find($id);

        if (empty($KategoriArtikel)){
            return redirect (route('kategori_artikel.index'));
        }

          $KategoriArtikel->delete();
        return redirect (route('kategori_artikel.index'));
    }

     public function trash(){
        $listkategoriartikel=kategori_artikel::onlyTrashed();
        return view ('kategori_artikel.index',compact('listkategoriartikel'));
    }
}