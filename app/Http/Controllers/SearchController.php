<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class SearchController extends Controller
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
      public function searchuser(Request $request)
    {

       
     $user = AUTH::user();
        
        $search=$request->input('search');

$profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$user->id)
        ->first();



         $searchuser= DB::table('users')
      ->join('profile', 'profile.user_id', '=', 'users.id')
         //->join('users', 'users.id', '=', 'post.user_id')
      ->select('users.*','profile.*')
      ->where('users.name', 'LIKE', "%{$search}%") 
      ->orWhere('users.email', 'LIKE', "%{$search}%") 
      ->orWhere('profile.city', 'LIKE', "%{$search}%") 
      ->where('users.id','!=',$profile->user_id)

       //->where('users.id','<>',$user->id) 
       //->whereNotIn( 'users.id', $user->id)
      ->get();
        


        
        //  $user = DB::table('users')
        // ->select('users.*')
        // ->where('id','=',$user->id)
        // ->first();

        // $amountd = DB::table('donate')
        // //->select(DB::raw('sum(amount)'))
        //  ->select('donate.*')
        // ->where('user_id','=',$user->id)
        // ->get();

        // $postt = DB::table('post')
        // //->select(DB::raw('sum(amount)'))
        //  //->select('donate.*')
        // ->where('user_id','=',$user->id)
        // ->count();

        // $userpost = DB::table('post')
        //  ->join('profile', 'profile.user_id', '=', 'post.user_id')
        //  ->join('users', 'users.id', '=', 'post.user_id')
        // ->select('post.*','profile.*','users.name as uname')
        // ->where('post.user_id','=',$user->id)
        // ->get();




//print_r($amountd);exit();
        
        



       return view('smilehelp.search-user',['searchuser'=>$searchuser]);
        //

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
