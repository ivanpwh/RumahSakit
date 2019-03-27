<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PasienRequest;
use App\Pasien;
use Session;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pasiens = Pasien::all();
        return view('static/pasien/index')->with('pasiens', $pasiens)->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('static/pasien/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasienRequest $request)
    {
        // dd($request->all());
        $pasiens = new Pasien;

        // upload the image //
        $file = $request->file('file');
        // dd($file);
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        
        // save image data into database //
        $pasiens->file = $destination_path . $filename;
        $pasiens->nama = $request-> input('nama');
        $pasiens->alamat = $request->input('alamat');
        $pasiens->tglLahir = $request->input('tglLahir');
        $pasiens->save();

        // Articles::create($request->all());
        Session::flash('notice','Articles Success created');
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasiens = Pasien::find($id);
        return view('static/pasien/show')->with('pasiens',$pasiens);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
