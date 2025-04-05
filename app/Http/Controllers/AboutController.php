<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
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
        //->limit(6)
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
        ->limit(4)
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
   





       return view('smilehelp.about',['ourcauses'=>$ourcauses,'blogs'=>$blogs,'partner'=>$partner,'userc'=>$userc,'howtohelp'=>$howtohelp,'helpat'=>$helpat,'leftat'=>$leftat,'helpp'=>$helpp, 'donatet'=>$donatet]);
        //

    }
      

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function member()
    {

$member = DB::table('member')
         ->join('profile', 'profile.user_id', '=', 'member.uid')
         ->join('users', 'users.id', '=', 'member.uid')
        ->select('member.*','profile.*','users.name as uname')
        ->where('member.member','=',11)
         
         //->orderBy('post.id','desc')
        ->get();
        


 return view('smilehelp.member',['member'=>$member]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
       public function enquiryaeronauit(Request $request)
    {
         $this->validate($request,[
            
        ]); 
       

            $name =$request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $message =$request->input('message');
            $subject = $request->input('subject');
     
           

           return redirect()->back()->with('message', 'Thank You For Enquery, We Will Connect With You Soon!');
        //

        
        //
    }
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
