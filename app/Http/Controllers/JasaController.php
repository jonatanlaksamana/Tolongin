<?php

namespace App\Http\Controllers;


use App\jasa;
use Request;
use DB;
use Auth;
use File;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Jasa=Jasas::all();

        $jasa1 = DB::table('jasas')
            ->join('categories', 'id', '=', 'jasas.category.id')
            ->get();

        $jasas = DB::table('jasas')->Orderby('id', 'asc')->limit(4)->get();
        return view('index', compact('Jasa','jasa1', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function show(jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(jasa $jasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jasa $jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(jasa $jasa)
    {
        //
    }

    public function insertJasa(){
        $jasa = new jasa();
        $jasa->user_id = Auth::id();
        $jasa->jasaName = request('nama');
        $jasa->harga = request('harga');
        $jasa->category_id = 1;
        $status = Request::hasFile('gantifoto');
        $image = request('gantifoto');
        $dest =  storage_path('/app/public');
        File::delete($dest. "/" . $jasa->image ."");
        $jasa->image =  time().".".$image->extension();
        $image->move($dest,$jasa->image);
        $jasa->deskripsi = request('message');
        $jasa->save();
        return redirect()->route('home');
    }
}
