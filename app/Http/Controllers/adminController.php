<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $promo = promoDashboard::all()->where('deleteStatus=0');
        $article = articleDashboard::all();
        $contact = contactDashboard::all();
        return view('adminNamira.index',['promos' => $promo, 'articles' => $article, 'contacts' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function promo()
    {
        $promo = promoDashboard::where('deleteStatus','=','0')->get();
        return view('adminNamira.promo',['promos' => $promo]);
    }
    static function createFolder($pathname='')
    {
        if (!empty($pathname)) {
            if (!is_dir($pathname)) {
                mkdir($pathname, 0755, TRUE);
            }
        }
    }
    public function createPromo(Request $request)
    {
        return view('adminNamira.createPromo');
    }

    public function createStorePromo(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
            ]);
            $promo = new promoDashboard;
            if($request != null && $request->file()) {
                $fileName = date('d-m-Y').'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
                $promo->namaPromo = $request->namaPromo;
                $promo->judulPromo = $request->judulPromo;
                $promo->keteranganPromo = $request->keteranganPromo;
                $promo->fotoPromo = $filePath;
                $promo->deleteStatus = 0;
                $promo->save();
                return redirect('/adminnamira/promo')
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }else{
                return view('adminNamira.createPromo')
                ->with('failed','Cannot Save.');
            }
    }

    public function editPromo(Request $request,$id)
    {
        $promo = promoDashboard::find($id);
        return view('adminNamira.editPromo',['promos' => $promo]);
    }

    public function editStorePromo(Request $request,$id)
    {
                $request->validate([
                    'file' => 'required|mimes:jpg,jpeg,png|max:2048'
                    ]);
                    // var_dump($fotoku);die;
                    
                $getFotoPromo = promoDashboard::find($id);
                $fotoKu = '';
                if($request->file() != null){
                    $fileName = date('d-m-Y').'_'.$request->file->getClientOriginalName();
                    $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
                    $fotoku = $filePath;
                }else{
                    $fotoku = $getFotoPromo->fotoPromo; 
                }
                // die;
                // var_dump($fotoku);die;
                $promo = promoDashboard::where('id',$id)->update([
                    'namaPromo' => $request->namaPromo,
                    'judulPromo' => $request->judulPromo,
                    'keteranganPromo' => $request->keteranganPromo,
                    'fotoPromo' => $fotoku
                ]);
                // var_dump($promo);die;
                return redirect('/adminnamira/promo')
                ->with('success','Data telah di update');
    }

    public function deletePromo(Request $request,$id)
    {
        // var_dump($id);die;
        $promo = promoDashboard::where('id',$id)->update([
            'deleteStatus' => 1,
        ]);
        // var_dump($promo);die;
        return redirect('/adminNamira.promo')->with('status', 'Data berhasil dihapus!');
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
