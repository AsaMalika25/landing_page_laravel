<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\riwayat;
class riwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_riwayat = riwayat::orderby('id','asc')->get();
        return view('Riwayat.riwayat',compact('data_riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Riwayat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_riwayat'=>'required',
            'deskripsi'=>'required',
        ]);

        $data_riwayat = new riwayat;
        $data_riwayat->judul = $request->input('judul_riwayat');
        $data_riwayat->deskripsi = $request->input('deskripsi');
        $data_riwayat->save();

        return redirect()->to('list-cms')->with('success','berhasil menambahkan data');
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
        $data_riwayat = riwayat::where('id',$id)->first();

        if ($data_riwayat) {
            return view('riwayat.edit',compact('data_riwayat'));
        }else {
            return redirect()->back();
        }
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
        $request -> validate([
            'judul_riwayat' => 'required',
            'deskripsi' => 'required',
        ]);

        $data_riwayat = [
            'judul' => $request->judul_riwayat,
            'deskripsi' => $request->deskripsi,
        ];

        riwayat::where('id',$id)->update($data_riwayat);
        return redirect()->to('list-cms')->with('success','berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_riwayat = riwayat::where('id', $id)->first();
        if ($data_riwayat) {
            
            $data_riwayat->delete();

            return redirect()->to('list-cms')->with('succes','berhasil menghapus data');
        }
    }
}
