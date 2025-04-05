<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;

class AdminContactController extends Controller
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
    
      public function contact()
    {
       
   $contact = DB::table('contact')
        //->join('occassion', 'occassion.id', '=', 'experience.oid')
        ->select('contact.*')
         ->where ('status','=',1)
        ->orderBy('id','desc')
        ->get();
       

       return view('smilehelpadmin.contact-list',['contact'=>$contact]);
        //

    }
       public function contactdone()
    {
       
   $contact = DB::table('contact')
        //->join('occassion', 'occassion.id', '=', 'experience.oid')
        ->select('contact.*')
         ->where ('status','=',2)
        ->orderBy('id','desc')
        ->get();
       

       return view('smilehelpadmin.contact-done',['contact'=>$contact]);
        //

    }

      public function doneenquiry(Request $request)
    {
       
    $insert = DB::table('contact')
            ->where ('id','=', $request->input('id'))
            ->update([
            'status' =>$request->input('doneen')
           
            ]);
            return redirect()->back()->with('doneenquiry', 'You Done Enquiry With One!');
        //

    }
     public function enquirynoti(Request $request)
    {
       
    $insert = DB::table('contact')
            ->update([
            'noti' =>'1',
           
            ]);
            return redirect()->route('contactlist');
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
