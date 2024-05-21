<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\models\visi;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_visi = visi::orderby('id', 'DESC')->get();
        
        return view('visi.visi',compact('data_visi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visi.create');
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
            'judul_visi'=> 'required',
        ]);

        $data = new visi();
        $data->judul = $request->Input('judul_visi'); 
        $data -> save();

        return redirect()->to('list-cms')->with('success', 'berhasil menambahkan data');
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
        $data_visi = visi::where('id',$id)->first();
        if ($data_visi) {

            return view('visi.edit',compact('data_visi'));

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
        $request ->validate([
            'judul_visi' => 'required',
        ]);

        $data_visi = [
            'judul' => $request->input('judul_visi'),
        ];

        $data_visi = visi::where('id',$id)->update($data_visi);
        return redirect()->to('list-cms')->with('succes','berhasil menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_visi = visi::where('id',$id)->first();
        if ($data_visi) {
            
            $data_visi->delete();

            return redirect()->to('list-cms')->with('success', 'berhasil menghapus data');
        }
    }
}
