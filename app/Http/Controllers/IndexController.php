<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use auth;
use Illuminate\Support\Facades\Storage;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

//         $top = DB::table('topexperience')
//         ->select('occassion.name as oname','topexperience.*')
//         ->leftjoin('occassion', 'topexperience.oid', '=', 'occassion.id')
//         ->limit(6)
//         ->get();

//total donation
 $donate = DB::table('donate')
        ->select('donate.*')
        //->where('user_id','=',$user->id)
        ->get();
        $donatet = $donate->sum('amount');

//total help amount
 $helpa = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=',2)
        ->get();
        $helpat = $helpa->sum('amount');

//total help people
 $helpp = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=',2)
        ->count();

       
$leftat=$donatet-$helpat;

$howtohelp = DB::table('howtohelp')
        ->select('howtohelp.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(6)
        ->get();


        $ourcauses = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(6)
        ->get();

        $blogs = DB::table('blogs')
        ->select('blogs.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->limit(3)
        ->get();

        $partner = DB::table('partner')
        ->select('partner.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        ->get();


 $userc = DB::table('users')
        ->select('users.*')
        //->where('status','=',2)
        ->count();
   

$quote = DB::table('quota')   
->select('quota.*')
->whereDay('date', date('d'))
//->where('date', Carbon::now()->format('d'))
->first();


//print_r($quote);exit();

       return view('smilehelp.index',['quote'=>$quote,'ourcauses'=>$ourcauses,'blogs'=>$blogs,'partner'=>$partner,'userc'=>$userc,'howtohelp'=>$howtohelp,'helpat'=>$helpat,'leftat'=>$leftat,'helpp'=>$helpp, 'donatet'=>$donatet]);
        //

    }
      

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aeronauit()
    {

        return view('smilehelp.AeronauIT');
        //
    }

 public function luckypaperbox()
    {

        return view('smilehelp.lucky-paper-box');
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

     public function news(Request $request)
    {

//
        $this->validate($request,[
 
        ]); 
   
  $newsletter = DB::table('newsletter')
        ->select('newsletter.*')
        //->where('status','=','1')
        ->where('email','=',$request->input('email'))
        //->limit(6)
        ->get();
  
  if(empty($newsletter)){      
         $insert = DB::table('newsletter')->insert([

       
            
            'email' => $request->input('email'),
          

           ]);
           
           
            return redirect()->back()->with('message', 'Thank You For Subscribe!');
  }else{
      
      return redirect()->back()->with('message', 'You Allready Subscribed!');
  }
            // print_r($insert);exit;



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
