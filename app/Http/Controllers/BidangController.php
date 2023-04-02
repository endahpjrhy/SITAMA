<?php

namespace App\Http\Controllers;

use App\Http\Requests\BidangRequest;
use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bidang $bidang)
    {
        //
        $bidanginduk = $bidang->where('status', '1')->get();
        $bidangall = $bidang->orderby('status', 'asc')->get();
        
        return view('file.bidang', ['bidang'=>$bidanginduk, 'daftarbidang'=>$bidangall]);
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
    public function store(BidangRequest $request)
    {
        $data = $request->validated();
        $induk = $request->induk;

        if($induk){
            $data['induk']=$induk;
            $data['status']= '2';
        }else{
            $data['status']= '1';
        }

        $bidang = Bidang::create($data);
        activity()
            ->performedOn($bidang)
            ->causedBy(auth()->user())
            ->withProperties([
                'name' => $bidang->nama,
                'id' => $bidang->id,
                'table' => 'bidang'
            ])
            ->log('Penambahan Bidang Kriteria');
        return redirect()->back()->with(['success' => "Berhasil Menambahkan Bidang"]);

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
        $bidanginduk = Bidang::where('status', '1')->get();
        $bidang = Bidang::find($id);
        return view('file.editbidang', ['bidang'=>$bidanginduk, 'edit'=>$bidang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BidangRequest $request, Bidang $bidang)
    {
        //
        $data = $request->validated();
        $induk = $request->induk;

        if($induk){
            $data['induk']=$induk;
            $data['status']= '2';
        }else{
            $data['status']= '1';
        }
        $bidang->update($data);
        activity()
        ->performedOn($bidang)
        ->causedBy(auth()->user())
        ->withProperties([
            'name' => $bidang->nama,
            'id' => $bidang->id,
            'table' => 'bidang'
        ])
        ->log('Update Bidang Kriteria');
    return redirect()->back()->with(['success' => "Berhasil Update Bidang"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidang $bidang)
    {
        //
        $bidang->delete();
        activity()
        ->performedOn($bidang)
        ->causedBy(auth()->user())
        ->withProperties([
            'name' => $bidang->nama,
            'id' => $bidang->id,
            'table' => 'bidang'
        ])
        ->log('Penghapusan Bidang Kriteria');
    return redirect()->back()->with(['success' => "Berhasil Menghapus Bidang"]);
    }
}
