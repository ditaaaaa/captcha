<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	$listpengumuman=Pengumuman::all();
    	return view ('pengumuman.index',compact('listpengumuman'));
    }
     public function show($id){
    	$Pengumuman=Pengumuman::find($id);
    	return view ('pengumuman.show',compact('Pengumuman'));
    }

    public function create(){
    	$Pengumuman=Pengumuman::pluck('nama', 'id');
    	return view ('pengumuman.create',compact('Pengumuman'));
    }

    public function store(Request $request){
    	$input= $request->all();
    	Pengumuman::create($input);
    	return redirect(route('pengumuman.index'));
    }
}
