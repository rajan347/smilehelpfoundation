<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use auth;
use Illuminate\Support\Facades\Storage;

class AdminIndexController extends Controller
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
    public function dashboard()
    {

        // enquiry for 7 days

$contact0 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(0))
->count();
$contact1 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(1))
->count();
$contact31=$contact1-$contact0;

$contact2 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(2))
->count();
$contact32=$contact2-$contact1;

$contact3 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(3))
->count();
$contact33=$contact3-$contact2;

//print_r($enquiryday12);exit();

$contact4 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(4))
->count();
$contact34=$contact4-$contact3;

$contact5 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(5))
->count();
$contact35=$contact5-$contact4;

$contact6 = DB::table('contact')   
->where('date','>=',Carbon::now()->subdays(6))
->count();
$contact36=$contact6-$contact5;
//print_r($enquiryday15);exit();

 $contactarrrr=array($contact0 ,$contact31,$contact32 ,$contact33,$contact34,$contact35,$contact36);
  
$contact7day=implode(",",$contactarrrr);


//users for 7 days
$user0 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(0))
->count();
$user1 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(1))
->count();
$user31=$user1-$user0;

$user2 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(2))
->count();
$user32=$user2-$user1;

$user3 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(3))
->count();
$user33=$user3-$user2;

//print_r($enquiryday12);exit();

$user4 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(4))
->count();
$user34=$user4-$user3;

$user5 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(5))
->count();
$user35=$user5-$user4;

$user6 = DB::table('users')   
->where('created_at','>=',Carbon::now()->subdays(6))
->count();
$user36=$user6-$user5;
//print_r($enquiryday15);exit();

 $userarrrr=array($user0 ,$user31,$user32 ,$user33,$user34,$user35,$user36);
  
$user7day=implode(",",$userarrrr);

// request 7 days 

   
$request00 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(0))
->select('request_money.*')
->get();
$request0 = $request00->sum('amount');
//->count();


$request1 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(1))
->select('request_money.*')
->get();
//->count();
$request31=$request1->sum('amount')-$request0;


$request2 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(2))
->select('request_money.*')
->get();
//->count();
$request32=$request2->sum('amount')-$request1->sum('amount');

$request3 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(3))
->select('request_money.*')
->get();
//->count();
$request33=$request3->sum('amount')-$request2->sum('amount');

//print_r($ordercourse32);exit();

$request4 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(4))
->select('request_money.*')
->get();
//->count();
$request34=$request4->sum('amount')-$request3->sum('amount');

$request5 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(5))
->select('request_money.*')
->get();
//->count();
$request35=$request5->sum('amount')-$request4->sum('amount');

$request6 = DB::table('request_money')   
->where('created_at','>=',Carbon::now()->subdays(6))
->select('request_money.*')
->get();
//->count();
$request36=$request6->sum('amount')-$request5->sum('amount');


//print_r($enquiryday15);exit();

 $arrrrrequest=array($request0 ,$request31,$request32 ,$request33,$request34,$request35,$request36);
  
$request7days=implode(",",$arrrrrequest);



// donation  7 days 

   
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



//total donation
 $donate = DB::table('donate')
        ->select('donate.*')
        //->where('user_id','=',$user->id)
        ->get();
        $donatet = $donate->sum('amount');

//total request people
 $requestpt = DB::table('request_money')
        ->select('request_money.*')
        //->where('status','=','2')
        ->count();
//total help people
 $helpp = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=','2')
        ->count();
   //total reject people
 $rejectp = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=','3')
        ->count();
//total help amount
 $helpa = DB::table('request_money')
        ->select('request_money.*')
        ->where('status','=','2')
        ->get();
        $helpat = $helpa->sum('amount');

$leftat=$donatet-$helpat;

//enquiry total
  $contact = DB::table('contact')
        ->select('contact.*')
        //->where('user_id','=',$user->id)
        ->count();
        

//user total
  $userst = DB::table('users')
        ->select('users.*')
        //->where('user_id','=',$user->id)
        ->count();
        
//usera total
  $usersa = DB::table('users')
        ->select('users.*')
        ->where('status','=','1')
        ->count();
        
//userb total
  $usersb = DB::table('users')
        ->select('users.*')
        ->where('status','=','2')
        ->count();
        



        return view('smilehelpadmin.dashboard',['request7days'=>$request7days,'donate7days'=>$donate7days,'user7day'=>$user7day,'requestpt'=>$requestpt,'rejectp'=>$rejectp,'helpat'=>$helpat,'leftat'=>$leftat,'helpp'=>$helpp, 'userst'=>$userst,'usersa'=>$usersa,'usersb'=>$usersb,'contact7day'=>$contact7day,'donatet'=>$donatet,'contact'=>$contact]);
        //
    }
      public function admin()
    {
       
   

       return view('smilehelpadmin.login');
        //

    }

      public function memberlist()
    {
       
$member = DB::table('member')
         ->join('profile', 'profile.user_id', '=', 'member.uid')
         ->join('users', 'users.id', '=', 'member.uid')
        ->select('member.*','profile.*','users.name as uname')
        ->where('member.member','=',11)
         
         //->orderBy('post.id','desc')
        ->get();
        


 return view('smilehelpadmin.member-list',['member'=>$member]);

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
