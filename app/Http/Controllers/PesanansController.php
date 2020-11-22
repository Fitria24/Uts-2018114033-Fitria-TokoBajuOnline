<?php

namespace App\Http\Controllers;
use App\Models\Pesanans;
use Illuminate\Http\Request;

class PesanansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $pesanans = Pesanans::orderBy('id','desc')->paginate(3);
            return view('pesanans.index', compact('pesanans'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesanans.create');
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
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required ',
            'notelpon_pemesan' => 'required |numeric',
            'jumlah_dipesan' => 'required |numeric',
            'ukuran'=>'required',
            'barang_dipesan'=> 'required',
        ]);

        $pesanans = new Pesanans;

        $pesanans->nama_pemesan = $request->nama_pemesan;
        $pesanans->alamat_pemesan = $request->alamat_pemesan;
        $pesanans->notelpon_pemesan = $request->notelepon_pemesan;
        $pesanans->jumlah_dipesan = $request->jumlah_dipesan;
        $pesanans->ukuran = $request->keterangan;
        $pesanans->barang_dipesan = $request->barang_dipesan;
       
        $pesanans->save();
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
        $pesanans = Pesanans::where('id', $id)->first();
        return view('pesanan.show' ,['pesanan' => $pesanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = Pesanans::where('id', $id)->first();
        return view('pesanans.edit' , ['pesanan' => $pesanan]);
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
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'notelpon_pemesan' => 'required |numeric',
            'jumlah_dipesan' => 'required |numeric',
            'ukuran'=>'required',
            'barang_dipesan' => 'required',
        ]);
            Pesanans::find($id)->update([
                'nama_pesanan' => $request->nama_pesanan,
                'alamat_pemesan' => $request->alamat_pemesan,
                'notelpon_pemesan' => $request->notelepon_pemesan,
                'jumlah_dipesan' => $request->jumlah_dipesan,
                'ukuran'=>$request->ukuran,
                'barang_dipesan' => $request->barang_dipesan,
                
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
        Pesanans::find($id)->delete();
        return redirect('/');
    }
}
