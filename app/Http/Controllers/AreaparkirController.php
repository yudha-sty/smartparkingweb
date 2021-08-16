<?php

namespace App\Http\Controllers;
use App\Models\Areaparkir;
use Illuminate\Http\Request;
use Validator;

class AreaparkirController extends Controller
{
    public function index(){
        $areaparkir = Areaparkir::all();
        return view('pages/dmaster/areaparkir/index', ['areaparkir' => $areaparkir]);
    }
    public function create(){
        return view('pages/dmaster/areaparkir/create');
    }

    public function store(Request $request){
        $validator = Validator::make(
            ['nama_area' => 'required'],
            ['jumlah_slot' => 'required'],
            ['alamat' => 'required'],
            ['kelurahan' => 'required'],
            ['kecamatan' => 'required']
        );
        Areaparkir::create([
            'nama_area' => $request->nama_area,
            'jumlah_slot' => $request->jumlah_slot,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan
        ]);
        return redirect()->route('areaparkir.index')
                        ->with('success','Data Area created successfully.');
    }
    public function update($id){
        $areaparkir = Areaparkir::find($id);
        return view('pages/dmaster/areaparkir/edit', ['areaparkir' => $areaparkir]);
    }
    public function update_action($id, Request $request){
        $validator = Validator::make(
            ['nama_area' => 'required'],
            ['jumlah_slot' => 'required'],
            ['alamat' => 'required'],
            ['kelurahan' => 'required'],
            ['kecamatan' => 'required']
        );
        $areaparkir = Areaparkir::find($id);
        $areaparkir->nama_area = $request->nama_area;
        $areaparkir->jumlah_slot = $request->jumlah_slot;
        $areaparkir->alamat = $request->alamat;
        $areaparkir->kelurahan = $request->kelurahan;
        $areaparkir->kecamatan = $request->kecamatan;
        $areaparkir->save();
        return redirect()->route('areaparkir.index')
                        ->with('success', 'Data Area update successfully');
    }
    public function delete($id){
        $areaparkir = Areaparkir::find($id);
        $areaparkir->delete();
        return redirect()->route('areaparkir.index')
                        ->with('success', 'Data Area delete successfully');
    }
}
