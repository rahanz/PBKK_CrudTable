<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::orderBy('nama_item','asc')->paginate(5);
        return view('web_page.TableView')->with('database',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web_page.TambahData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_item',$request->nama_item);
        Session::flash('harga_item',$request->harga_item);

        $request->validate
        ([
            'nama_item'=>'required|unique:item,nama_item',
            'harga_item'=>'required|integer:item,harga_item',
        ],
        [
            'nama_item.required'=>'Nama Item Wajib di isi',
            'nama_item.unique'=>'Nama Item sudah ada dalam database',
            'harga_item.required'=>'Harga Item Wajib di isi',
            'harga_item.integral'=>'Harga Item harus bernilai angka',
        ]);
        $data = [
            'nama_item'=>$request->nama_item,
            'harga_item'=>$request->harga_item,
        ];
        Item::create($data);
        return redirect()->to('table')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Item::where('nama_item',$id)->first();
        return view('web_page.edit')->with('database', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate
        ([
            'nama_item'=>'required',
            'harga_item'=>'required:item,harga_item',
        ],
        [
            'nama_item.required'=>'Nama Item Wajib di isi',
            'harga_item.required'=>'Harga Item Wajib di isi',
            'harga_item.integral'=>'Harga Item harus bernilai angka',
        ]);
        $data = [
            'nama_item'=>$request->nama_item,
            'harga_item'=>$request->harga_item,
        ];
        Item::where('nama_item', $id)->update($data);
        return redirect()->to('table')->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::where('nama_item',$id)->delete();
        return redirect()->to('table')->with('success', 'Berhasil melakukan delete data');
    }
}
