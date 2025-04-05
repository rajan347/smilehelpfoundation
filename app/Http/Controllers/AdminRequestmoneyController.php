<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class AdminRequestmoneyController extends Controller
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


public function requestnoti(Request $request)
    {
       
    $insert = DB::table('request_money')
            ->update([
            'noti' =>'1',
           
            ]);
            return redirect()->route('requestmoneylist');
        //

    }
    
      public function requestmoneylist()
    {
       
     $user = AUTH::user();
        

         $rmoney= DB::table('request_money')
        
        ->join('users', 'users.id', '=', 'request_money.user_id')
        //->where('user_id','=',$user->id)
        ->select('request_money.*','users.*','request_money.id as rmid')
        ->where('request_money.status','=','1')
        ->get();

        // $userpost = DB::table('post')
        //  ->join('profile', 'profile.user_id', '=', 'post.user_id')
        //  ->join('users', 'users.id', '=', 'post.user_id')
        // ->select('post.*','profile.*','users.name as uname','post.id as pid')
        // ->where('post.user_id','=',$user->id)
        //  ->orderBy('post.id','desc')
        // ->get();

 

//print_r($amountd);exit();
        
        



       return view('smilehelpadmin.requestmoney-list',['rmoney'=>$rmoney]);
        //

    }
     
      public function acceptrlist()
    {
       
     $user = AUTH::user();
        

         $rmoney= DB::table('request_money')
        ->join('users', 'users.id', '=', 'request_money.user_id')
        ->join('profile', 'profile.user_id', '=', 'request_money.user_id')

        //->where('user_id','=',$user->id)
        ->select('request_money.*','users.*','profile.*')
        ->where('request_money.status','=','2')
        ->get();

        // $userpost = DB::table('post')
        //  ->join('profile', 'profile.user_id', '=', 'post.user_id')
        //  ->join('users', 'users.id', '=', 'post.user_id')
        // ->select('post.*','profile.*','users.name as uname','post.id as pid')
        // ->where('post.user_id','=',$user->id)
        //  ->orderBy('post.id','desc')
        // ->get();

 

//print_r($amountd);exit();
        
        



       return view('smilehelpadmin.acceptr-list',['rmoney'=>$rmoney]);
        //

    }
      public function rejectrlist()
    {
       
     $user = AUTH::user();
        

         $rmoney= DB::table('request_money')
        ->join('users', 'users.id', '=', 'request_money.user_id')
        //->where('user_id','=',$user->id)
        ->select('request_money.*','users.*')
        ->where('request_money.status','=','3')
        ->get();

        // $userpost = DB::table('post')
        //  ->join('profile', 'profile.user_id', '=', 'post.user_id')
        //  ->join('users', 'users.id', '=', 'post.user_id')
        // ->select('post.*','profile.*','users.name as uname','post.id as pid')
        // ->where('post.user_id','=',$user->id)
        //  ->orderBy('post.id','desc')
        // ->get();

 

//print_r($amountd);exit();
        
        



       return view('smilehelpadmin.rejectr-list',['rmoney'=>$rmoney]);
        //

    }
    
     


    
     public function requestaccept(Request $request)
    {
        $this->validate($request,[
             
            
            ]);
            

//print_r($request->input('id'));exit;

            $insert = DB::table('request_money')
            ->where ('id','=', $request->input('id'))
            ->update([
                'status' =>$request->input('acceptr'), 
             
                ]);
               
                // $query=DB::getQueryLog();
                 //print_r($insert);exit;
                return redirect()->route('acceptrlist')->with('messagear', 'You Accept One Request !');
        //
    }
    public function updaterequestamount(Request $request)
    {
        $this->validate($request,[
             
            
            ]);
             //print_r($request->input('id'));exit;

            $insert = DB::table('request_money')
            ->where ('id','=', $request->input('id'))
            ->update([
                'amount' =>$request->input('amount'), 
             
                ]);
               
                // $query=DB::getQueryLog();
                
                return redirect()->back()->with('messageua', 'You Update One User Amount!');
        //
    }
    
     public function requestreject(Request $request)
    {
        $this->validate($request,[
             
            
            ]);
            
            $insert = DB::table('request_money')
            ->where ('id','=', $request->input('id'))
            ->update([
                'status' =>$request->input('rejectr'), 
             
                ]);
               
                // $query=DB::getQueryLog();
                // print_r($query);exit;
                return redirect()->route('rejectrlist')->with('messagerr', 'You Reject One Request !');
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
    public function deletepost($id)
    {
           DB::delete('delete from post where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One Post!');
      
        //
    }
}
