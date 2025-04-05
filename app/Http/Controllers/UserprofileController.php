<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
  
    }
      public function userprofile($id)
    {
       
     $user = AUTH::user();
        
         

        $profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$id)
        ->first();

        $profileu = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$user->id)
        ->first();
        
         $user = DB::table('users')
        ->select('users.*')
        ->where('id','=',$id)
        ->first();

               $amountd = DB::table('donate')
        //->select(DB::raw('sum(amount)'))
         ->select('donate.*')
        ->where('user_id','=',$id)
        ->get();
$amountdt = $amountd->sum('amount');


        $postt = DB::table('post')
        //->select(DB::raw('sum(amount)'))
         //->select('donate.*')
        ->where('user_id','=',$id)
        ->count();

        $userpost = DB::table('post')
         ->join('profile', 'profile.user_id', '=', 'post.user_id')
         ->join('users', 'users.id', '=', 'post.user_id')
        ->select('post.*','profile.*','users.name as uname','post.id as pid')
        ->where('post.user_id','=',$id)
         ->orderBy('post.id','desc')
        ->get();


$userpostcount = DB::table('post')
         ->join('profile', 'profile.user_id', '=', 'post.user_id')
         ->join('users', 'users.id', '=', 'post.user_id')
        ->select('post.*','profile.*','users.name as uname','post.id as pid')
        ->where('post.user_id','=',$id)
         ->orderBy('post.id','desc')
        ->count();

        $requestcu = DB::table('request_money')
        //->select(DB::raw('sum(amount)'))
         ->select('request_money.*')
        ->where('user_id','=',$id)
        ->where('status','=',2)
        ->count();

        $donatecu = DB::table('donate')
        //->select(DB::raw('sum(amount)'))
         ->select('donate.*')
        ->where('user_id','=',$id)
        ->count();

        $amountr = DB::table('request_money')
        //->select(DB::raw('sum(amount)'))
         ->select('request_money.*')
        ->where('user_id','=',$id)
        ->where('status','=',2)
        ->get();
$amountrt = $amountr->sum('amount');

//print_r($amountd);exit();
        $heartwon=($amountdt*2)+$postt+10;

$heartw = (int)$heartwon;       


$member = DB::table('member')
        ->select('member.*')
        ->where('uid','=',$user->id)
        ->where('member','=',11)
         //->orderBy('post.id','desc')
        ->first();
       

        

     $userId = Auth::id();                         
     $insert = DB::table('profilev')->insert([
            'uid' => $userId,
            'clickuid' =>$id,
           
           ]);



        $userdonation= DB::table('donate')
         ->join('profile', 'profile.user_id', '=', 'donate.user_id')
         ->join('users', 'users.id', '=', 'donate.user_id')
        ->select('donate.*','profile.*','users.*')
        ->where('donate.user_id','=',$id)
         ->get();

 $userrequestmoney = DB::table('request_money')
         ->join('profile', 'profile.user_id', '=', 'request_money.user_id')
         ->join('users', 'users.id', '=', 'request_money.user_id')
        ->select('request_money.*','profile.*','users.*')
        ->where('request_money.status','=','2')
        ->where('request_money.user_id','=',$id)
         ->get();



       return view('smilehelp.user-profile',['userdonation'=>$userdonation,'userrequestmoney'=>$userrequestmoney,'member'=>$member,'amountdt'=>$amountdt,'heartw'=>$heartw,'amountrt'=>$amountrt,'donatecu'=>$donatecu,'requestcu'=>$requestcu,'userpostcount'=>$userpostcount,'postt'=>$postt,'userpost'=>$userpost,'profile'=>$profile,'profileu'=>$profileu,'user'=>$user,'amountd'=>$amountd]);
    }
   
   
   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
