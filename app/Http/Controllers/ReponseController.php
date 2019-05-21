<?php

namespace App\Http\Controllers;

use App\Reponse;
use Illuminate\Http\Request;
use App\Qcm;
use App\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReponseController extends Controller
{
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id ,Request $request)
    {
        $note=0;
        $result = $request->result;
        
        $qcm =  Qcm::find($id);
        
        $nbQuestion = count($qcm->questions);
        $u = DB::select('select id from questions where qcm_id = :id',['id'=>$id]);
        
        for ($i = 0; $i < $nbQuestion; $i++) {
            $x = $u[$i]->id;
            if($result[$x]){
                $note++;
            }
        }
       
        $note = $note / $nbQuestion*20;
        $note = round($note,2);
        
        $result = new Result([
            'qcm_id' => $id,
            'user_id'=> Auth::user()->id,
            'moyenne'=> $note,
          ]);
         
          $result->save();
          return view('/qcmcreator.result', [
            'qcm' => $qcm,
            'moyenne' => $note,
            'res' => $result,
        ]);

    }

}
