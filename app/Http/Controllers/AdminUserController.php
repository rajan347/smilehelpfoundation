<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
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
    
      public function userlist()
    {
       
   $user = DB::table('users')
        ->join('profile', 'profile.user_id', '=', 'users.id')
        ->select('users.*','profile.*','users.email as uemail','users.id as uid')
        ->where('users.status','=','1')
        ->get();

       

       return view('smilehelpadmin.user-list',['user'=>$user]);
        //

    }

    public function usernoti(Request $request)
    {
       
    $insert = DB::table('users')
            ->update([
            'noti' =>'1',
           
            ]);
            return redirect()->route('userlist');
        //

    }


      public function blockuser(Request $request)
    {
       
    $insert = DB::table('users')
            ->where ('id','=', $request->input('id'))
            ->update([
            'status' =>$request->input('blocku')
           
            ]);

            //print_r($request->input('blocku'));exit();
            return redirect()->back()->with('userb', 'You Blocked One User!');
        //

    }


     public function unblockuser(Request $request)
    {
       
    $insert = DB::table('users')
            ->where ('id','=', $request->input('id'))
            ->update([
            'status' =>$request->input('unblocku')
           
            ]);
            return redirect()->back()->with('userb', 'You UnBlocked One User!');
        //

    }
   
    public function blockuserlist()
    {
       
  $user = DB::table('users')
        ->join('profile', 'profile.user_id', '=', 'users.id')
        ->select('users.*','profile.*','users.email as uemail','users.id as uid')
        ->where('users.status','=','2')
        ->get();

         

       return view('smilehelpadmin.blockuser-list',['user'=>$user]);
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
