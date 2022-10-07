<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\promoDashboard;
use App\Models\articleDashboard;
use App\Models\contactDashboard;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = promoDashboard::get();
        $article = articleDashboard::get();
        $contact = contactDashboard::get();
        return view('adminNamira.index',['promos' => $promo, 'articles' => $article, 'contacts' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function promo()
    {
        $promo = promoDashboard::get();
        return view('adminNamira.promo',['promos' => $promo]);
    }

    public function createPromo(Request $request)
    {
        $promo = new promoDashboard;
        $promo->namaPromo = $request->namaPromo;
        $promo->judulPromo = $request->judulPromo;
        $promo->keteranganPromo = $request->keteranganPromo;
        $promo->fotoPromo = $request->fotoPromo;
        $promo->save();
        return view('adminNamira.promo');
    }

    public function editPromo(Request $request)
    {
        $promo = promoDashboard::find($request->ID);
        return view('adminNamira.promo',['promos' => $promo]);
    }

    public function storePromo(Request $request)
    {
        $promo = promoDashboard::find($request->ID);
        $promo->namaPromo = $request->name;
        $promo->judulPromo = $request->name;
        $promo->keteranganPromo = $request->name;
        $promo->fotoPromo = $request->name;
        $promo->save();
        return view('adminNamira.promo');
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
