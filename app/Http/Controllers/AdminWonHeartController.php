<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class AdminWonHeartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$rule = DB::table('wonheart')
            ->select('wonheart.*')
            //->where('user_id','=',$request->id)
            //->orderBy('id','desc')
            ->get();

 return view('smilehelpadmin.wonheart-list',['rule'=>$rule]);
       
        //
  
    }
        public function index1()
    {
$rule = DB::table('termcondiction')
            ->select('termcondiction.*')
            //->where('user_id','=',$request->id)
            //->orderBy('id','desc')
            ->get();

 return view('smilehelpadmin.termcondiction-list',['rule'=>$rule]);
       
        //
  
    }
         public function index2()
    {
$rule = DB::table('howtohelp')
            ->select('howtohelp.*')
            //->where('user_id','=',$request->id)
            //->orderBy('id','desc')
            ->get();

 return view('smilehelpadmin.howtohelp-list',['rule'=>$rule]);
       
        //
  
    }
      public function addwonheart()
    {
       
     


       return view('smilehelpadmin.addwonheart');
        //

    }
      public function addterm()
    {
       
     


       return view('smilehelpadmin.add-termcondiction');
        //

    }
      public function addhowtohelp()
    {
       
     


       return view('smilehelpadmin.add-howtohelp');
        //

    }
     


    
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
     public function storewonheart(Request $request)
    {
        //
        $this->validate($request,[
 'wonheart' => 'required'
        ]); 
        
         $insert = DB::table('wonheart')->insert([

       
            
            'wonheart' => $request->input('wonheart'),
          

           ]);
            return redirect()->route('wonheartlist');
            // print_r($insert);exit;
           
    }

 public function storeterm(Request $request)
    {
        //
        $this->validate($request,[
            
'wonheart' => 'required'
        ]); 
        
         $insert = DB::table('termcondiction')->insert([

       
            
            'termcondiction' => $request->input('wonheart'),
          

           ]);
            return redirect()->route('termlist')->with('messageadd', 'You Add One Row!');
            // print_r($insert);exit;
           
    }
    public function storehowtohelp(Request $request)
    {
        //
        $this->validate($request,[
            
'heading' => 'required',
'subheading' => 'required'
        ]); 
        
         $insert = DB::table('howtohelp')->insert([

       
            
            'heading' => $request->input('heading'),
            'subheading' => $request->input('subheading'),
          

           ]);
            return redirect()->route('howtohelplist')->with('messageadd', 'You Add One Row!');
            // print_r($insert);exit;
           
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
    public function deletewonheart($id)
    {

         DB::delete('delete from wonheart where id = ?',[$id]);
         

            return redirect()->back()->with('message', 'You Deleted One Row!');
        //
    }
     public function deleteterm($id)
    {

         DB::delete('delete from termcondiction where id = ?',[$id]);
         

            return redirect()->back()->with('message', 'You Deleted One Row!');
        //
    }
    public function deletehowtohelp($id)
    {

         DB::delete('delete from howtohelp where id = ?',[$id]);
         

            return redirect()->back()->with('message', 'You Deleted One Row!');
        //
    }
}
