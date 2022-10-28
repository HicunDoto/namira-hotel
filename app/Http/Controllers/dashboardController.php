<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\namiraEmailController;
use Illuminate\Support\Facades\DB;
use App\Models\promoDashboard;
use App\Models\articleDashboard;
use App\Models\contactDashboard;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = promoDashboard::where('deleteStatus','0')->get();
        $article = articleDashboard::where('deleteStatus','0')->get();
        $contact = contactDashboard::get();
        return view('index',['promos' => $promo, 'articles' => $article, 'contacts' => $contact]);
    }

    public function home()
    {
        return view('home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function email(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $details = [
        'title' => 'Mail from hicundoto.com',
        'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('jekrai8@gmail.com')->send(new \App\Mail\namiraEmailController($details));
       
        dd("Email sudah terkirim.");
    }

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
