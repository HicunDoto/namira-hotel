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
        $promo = promoDashboard::where('deleteStatus','0')->get();
        $article = articleDashboard::where('deleteStatus','0')->get();
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
        $promo = promoDashboard::where('deleteStatus','=','0')->get();
        return view('adminNamira.promo',['promos' => $promo]);
    }
    // static function createFolder($pathname='')
    // {
    //     if (!empty($pathname)) {
    //         if (!is_dir($pathname)) {
    //             mkdir($pathname, 0755, TRUE);
    //         }
    //     }
    // }
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
                $fileName = 'promo_'.date('d-m-Y').'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
                $promo->namaPromo = $request->namaPromo;
                $promo->judulPromo = $request->judulPromo;
                $promo->keteranganPromo = $request->keteranganPromo;
                $promo->fotoPromo = $filePath;
                $promo->deleteStatus = 0;
                $promo->save();
                return redirect('/adminnamira/promo')
                ->with('success','Data berhasil tersimpan')
                ->with('file', $fileName);
            }else{
                return view('adminNamira.createPromo')
                ->with('failed','Data tidak berhasil tersimpan');
            }
    }

    public function editPromo(Request $request,$id)
    {
        $promo = promoDashboard::find($id);
        return view('adminNamira.editPromo',['promos' => $promo]);
    }

    public function editStorePromo(Request $request,$id)
    {
        $getFotoPromo = promoDashboard::find($id);
        $fotoKu = '';
        if($request->file() != null){
            $request->validate([
                'file' => 'required|mimes:jpg,jpeg,png|max:2048'
                ]);
            $fileName = 'promo_'.date('d-m-Y').'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fotoku = $filePath;
        }else{
            $fotoku = $getFotoPromo->fotoPromo; 
        }
        $promo = promoDashboard::where('id',$id)->update([
            'namaPromo' => $request->namaPromo,
            'judulPromo' => $request->judulPromo,
            'keteranganPromo' => $request->keteranganPromo,
            'fotoPromo' => $fotoku
        ]);
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

    
    public function article()
    {
        $article = articleDashboard::where('deleteStatus','=','0')->get();
        return view('adminNamira.article',['articles' => $article]);
    }
    // static function createFolder($pathname='')
    // {
    //     if (!empty($pathname)) {
    //         if (!is_dir($pathname)) {
    //             mkdir($pathname, 0755, TRUE);
    //         }
    //     }
    // }
    public function createArticle(Request $request)
    {
        return view('adminNamira.createArticle');
    }

    public function createStoreArticle(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
            ]);
            $article = new articleDashboard;
            if($request != null && $request->file()) {
                $fileName = 'article_'.date('d-m-Y').'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
                $article->namaPromo = $request->namaPromo;
                $article->judulPromo = $request->judulPromo;
                $article->keteranganPromo = $request->keteranganPromo;
                $article->fotoPromo = $filePath;
                $article->deleteStatus = 0;
                $article->save();
                return redirect('/adminnamira/article')
                ->with('success','Data berhasil tersimpan')
                ->with('file', $fileName);
            }else{
                return view('adminNamira.createArticle')
                ->with('failed','Data tidak berhasil tersimpan');
            }
    }

    public function editArticle(Request $request,$id)
    {
        $promo = promoDashboard::find($id);
        return view('adminNamira.editArticle',['promos' => $promo]);
    }

    public function editStoreArticle(Request $request,$id)
    {
        $getFotoPromo = promoDashboard::find($id);
        $fotoKu = '';
        if($request->file() != null){
            $request->validate([
                'file' => 'required|mimes:jpg,jpeg,png|max:2048'
                ]);
            $fileName = 'article_'.date('d-m-Y').'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fotoku = $filePath;
        }else{
            $fotoku = $getFotoPromo->fotoPromo; 
        }
        $promo = promoDashboard::where('id',$id)->update([
            'namaPromo' => $request->namaPromo,
            'judulPromo' => $request->judulPromo,
            'keteranganPromo' => $request->keteranganPromo,
            'fotoPromo' => $fotoku
        ]);
        return redirect('/adminnamira/article')
        ->with('success','Data telah di update');
    }

    public function deleteArticle(Request $request,$id)
    {
        // var_dump($id);die;
        $promo = promoDashboard::where('id',$id)->update([
            'deleteStatus' => 1,
        ]);
        // var_dump($promo);die;
        return redirect('/adminNamira.article')->with('status', 'Data berhasil dihapus!');
    }
}
