<?php

namespace App\Http\Controllers;
use App\Models\Barangs;
use Illuminate\Http\Request;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barangs::orderBy('id','desc')->paginate(3);
        return view('barangs.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the request...
         $request->validate([
            'kode_barang' => 'required|unique:barangs|max:255',
            'nama_barang' => 'required ',
            'harga_barang' => 'required |numeric',
            'jumlah_barang'=> 'required |numeric',
            'keterangan'=> 'required ',
        ]);

        $barangs = new Barangs;

        $barangs->kode_barang = $request->kode_barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->harga_barang = $request->harga_barang;
        $barangs->jumlah_barang = $request->jumlah_barang;
        $barangs->keterangan = $request->keterangan;
       
        $barangs->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barangs::where('id', $id)->first();
        return view('barangs.show' ,['barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barangs::where('id', $id)->first();
        return view('barangs.edit' , ['barang' => $barang]);
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
        $request->validate([
            'kode_barang' => 'required|unique:barangs|max:255',
            'nama_barang' => 'required',
            'harga_barang' => 'required |numeric',
            'jumlah_barang' => 'required |numeric',
            'keterangan' => 'required',
        ]);
            Barangs::find($id)->update([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'harga_barang' => $request->harga_barang,
                'jumlah_barang' => $request->jumlah_barang,
                'keterangan' => $request->keterangan,
            ]);
            
            return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barangs::find($id)->delete();
        return redirect('/');
    }
}

