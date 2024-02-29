<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.index', [
            "menu" => DB::table("vwmenu")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create', [
            'jenis' => Jenis::all()
        ]);
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
        // dd($request);
        $mn = DB::table('menus')->where('menu', '=', $request->menu)->value('menu');
        if($mn){
            return view('menu.create', [
                'status' => 'duplicate',
                // 'pesan' => 'Menu data, "'
                // . $request ->menu . '" already exists!',
                // 'menu' => DB::table("vwmenu")->get()
                'jenis' => Jenis::all(),
                'menu' => $request->menu,
                'idjenis' => $request->idjenis,
                'deskripsi' => $request->deskripsi,
            ]);
        }else{
            $data = $request->only([
                'menu', 'idjenis', 'harga', 'deskripsi'
            ]);
            $data['stok'] = 0;
            $data['foto1'] = $request['foto1']->store('Products/Photos');
            if($request['foto2'] !== null){
                $data['foto2'] = $request['foto2']->store('Products/Photos');
            }
            if($request['foto3'] !== null){
                $data['foto3'] = $request['foto3']->store('Products/Photos');
            }
            $save = Menu::create($data);
            return view('menu.index', [
                'status' => 'save',
                'pesan' => 'The new Menu data, "'
                . $request ->menu . '" has been successfully saved!',
                'menu' => DB::table("vwmenu")->get()
            ]);
        }
        
        // DB::table('menu')->insert([
        //     'menu' => $request->menu,
        //     'idjenis' => $request->idjenis,
        //     'harga' => $request->harga
        // ]);
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