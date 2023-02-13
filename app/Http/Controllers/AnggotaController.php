<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        $anggota = anggota::all();
        return view('anggota.index',compact(('anggota')));
    }
    public function create(){
        return view('anggota.create');
    }
    public function store(Request $request){
        anggota::create($request->except(['_token','submit']));
        return redirect('/anggota');
    }
}
    
