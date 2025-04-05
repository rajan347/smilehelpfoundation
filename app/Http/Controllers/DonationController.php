<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use auth;
use Illuminate\Support\Facades\Storage;
class DonationController extends Controller
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
      public function totaldonation()
    {
       
     $user = AUTH::user();

        $totald = DB::table('donate')
         ->join('profile', 'profile.user_id', '=', 'donate.user_id')
         ->join('users', 'users.id', '=', 'donate.user_id')
        ->select('donate.*','profile.*','users.*')
         ->get();

         $todayd = DB::table('donate')
         ->join('profile', 'profile.user_id', '=', 'donate.user_id')
         ->join('users', 'users.id', '=', 'donate.user_id')
         ->select('donate.*','profile.*','users.*')
         ->where('donate.created_at','>=',Carbon::now()->subdays(0))
         ->get();

$todaydcount = DB::table('donate')
         ->where('donate.created_at','>=',Carbon::now()->subdays(0))
         ->count();


// donation 7 day 

   
$donate00 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(0))
->select('donate.*')
->get();
$donate0 = $donate00->sum('amount');
//->count();


$donate1 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(1))
->select('donate.*')
->get();
//->count();
$donate31=$donate1->sum('amount')-$donate0;


$donate2 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(2))
->select('donate.*')
->get();
//->count();
$donate32=$donate2->sum('amount')-$donate1->sum('amount');

$donate3 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(3))
->select('donate.*')
->get();
//->count();
$donate33=$donate3->sum('amount')-$donate2->sum('amount');

//print_r($ordercourse32);exit();

$donate4 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(4))
->select('donate.*')
->get();
//->count();
$donate34=$donate4->sum('amount')-$donate3->sum('amount');

$donate5 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(5))
->select('donate.*')
->get();
//->count();
$donate35=$donate5->sum('amount')-$donate4->sum('amount');

$donate6 = DB::table('donate')   
->where('created_at','>=',Carbon::now()->subdays(6))
->select('donate.*')
->get();
//->count();
$donate36=$donate6->sum('amount')-$donate5->sum('amount');


//print_r($enquiryday15);exit();

 $arrrrdonate=array($donate0 ,$donate31,$donate32 ,$donate33,$donate34,$donate35,$donate36);
  
$donate7days=implode(",",$arrrrdonate);



//print_r($amountd);exit();
        
       return view('smilehelp.total-donation',['todaydcount'=>$todaydcount,'totald'=>$totald,'todayd'=>$todayd,'donate7days'=>$donate7days]);
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
     public function userpost(Request $request)
    {
        //
        $this->validate($request,[
            

        ]); 
        $fileContents = $request->image;
        $postimg = Storage::disk('custom')->put('/userpost',$fileContents);
$heading=$request->input('heading');
        //$newrheading=mysqli_real_escape_string('mysql',$heading);
        // print_r($banvid);exit;
         $insert = DB::table('post')->insert([

       
            
            'user_id' => $request->input('uid'),
            'post_image' =>$postimg,
            'heading' => $heading

           ]);
            return redirect()->route('myaccount')->with('messageaddpost', 'Your Post Is Uploaded!');
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
    public function deletepost($id)
    {
           DB::delete('delete from post where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One Post!');
      
        //
    }
}
