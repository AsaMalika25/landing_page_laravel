<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('keahlian.mesin');
    }
    public function las()
    {
        return view('keahlian.las');
    }
    public function tkr()
    {
        return view('keahlian.tkr');
    }
    public function rpl()
    {
        return view('keahlian.rpl');
    }
    public function multi()
    {
        return view('keahlian.multi');
    }
    public function tkj()
    {
        return view('keahlian.tkj');
    }
    public function akuntan()
    {
        return view('keahlian.akuntan');
    }
    public function busana()
    {
        return view('keahlian.busana');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
