<?php

namespace App\Http\Controllers;

use App\Qcm;
use DB;
use App\Result;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class QcmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('qcmcreator.index');
    }
    public function qcmList()
    {
        //
        $result = Result::where('user_id', Auth::user()->id)->get();
        $list = DB::table('results')
            ->where('user_id', Auth::user()->id)
            ->join('qcms', 'results.qcm_id', '=', 'qcms.id')
            ->select('qcms.name', 'results.moyenne', 'results.created_at')
            ->get();
        return view('qcmcreator.afficheQcm',[
            'list' => $list,
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
        $key = $request->qcmKey;

        $qcm =  Qcm::where('key', $key)->first();
        if($qcm){
            return view('/qcmcreator.repondre', [
                'qcm' => $qcm
            ]);
        }
      
        else{
            return view('/qcmcreator.index', [
                'alert' => true
            ]);
        }
       
    }

}
