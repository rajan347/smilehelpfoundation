<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class MyaccountController extends Controller
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
      public function myaccount()
    {
       
     $user = AUTH::user();
        

         $wonheart = DB::table('wonheart')
        ->select('wonheart.*')
        //->where('user_id','=',$user->id)
        ->get();

        $profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$user->id)
        ->first();
        
         $user = DB::table('users')
        ->select('users.*')
        ->where('id','=',$user->id)
        ->first();

        $requestcu = DB::table('request_money')
        //->select(DB::raw('sum(amount)'))
         ->select('request_money.*')
        ->where('user_id','=',$user->id)
        ->where('status','=',2)
        ->count();

        $donatecu = DB::table('donate')
        //->select(DB::raw('sum(amount)'))
         ->select('donate.*')
        ->where('user_id','=',$user->id)
        ->count();

        $amountd = DB::table('donate')
        //->select(DB::raw('sum(amount)'))
         ->select('donate.*')
        ->where('user_id','=',$user->id)
        ->get();
$amountdt = $amountd->sum('amount');

        $amountr = DB::table('request_money')
        //->select(DB::raw('sum(amount)'))
         ->select('request_money.*')
        ->where('user_id','=',$user->id)
        ->where('status','=',2)
        ->get();
$amountrt = $amountr->sum('amount');

        $postt = DB::table('post')
        //->select(DB::raw('sum(amount)'))
         //->select('donate.*')
        ->where('user_id','=',$user->id)
        ->count();

        $userpost = DB::table('post')
         ->join('profile', 'profile.user_id', '=', 'post.user_id')
         ->join('users', 'users.id', '=', 'post.user_id')
        ->select('post.*','profile.*','users.name as uname','post.id as pid')
        ->where('post.user_id','=',$user->id)
         ->orderBy('post.id','desc')
        ->get();

        $userpostcount = DB::table('post')
         ->join('profile', 'profile.user_id', '=', 'post.user_id')
         ->join('users', 'users.id', '=', 'post.user_id')
        ->select('post.*','profile.*','users.name as uname','post.id as pid')
        ->where('post.user_id','=',$user->id)
         ->orderBy('post.id','desc')
        ->count();

       
  // $ip = $_SERVER['REMOTE_ADDR']; // your ip address here
  //   $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
  //   if($query && $query['status'] == 'success')
  //   {
  //       $bannercity= $query['city'];
        
        
  //   }


        $nfrnd = DB::table('users')
         ->join('profile', 'profile.user_id', '=', 'users.id')
         //->join('users', 'users.id', '=', 'donate.user_id')
        ->select('profile.*','users.*')
         ->where('city','=',$profile->city)
         ->where('users.id','!=',$profile->user_id)

        ->limit(10)
         ->get();
         $nfrndtotal = DB::table('users')
         ->join('profile', 'profile.user_id', '=', 'users.id')
         //->join('users', 'users.id', '=', 'donate.user_id')
        ->select('profile.*','users.*')
         ->where('city','=',$profile->city)
         ->where('users.id','!=',$profile->user_id)

         ->count();




        

        //condiction....heart
$heartwon=($amountdt*2)+$postt+10;

$heartw = (int)$heartwon;       


 if ($heartw > 1000000) {
   $insert = DB::table('member')
            ->where ('uid','=',$user->id)
            ->update([
                'member' =>11, 
             
                ]);      
            

}


$member = DB::table('member')
        ->select('member.*')
        ->where('uid','=',$user->id)
        ->where('member','=',11)
         //->orderBy('post.id','desc')
        ->first();
       



$user = AUTH::user();

        $userdonation= DB::table('donate')
         ->join('profile', 'profile.user_id', '=', 'donate.user_id')
         ->join('users', 'users.id', '=', 'donate.user_id')
        ->select('donate.*','profile.*','users.*')
        ->where('donate.user_id','=',$user->id)
         ->get();

 $userrequestmoney = DB::table('request_money')
         ->join('profile', 'profile.user_id', '=', 'request_money.user_id')
         ->join('users', 'users.id', '=', 'request_money.user_id')
        ->select('request_money.*','profile.*','users.*')
        ->where('request_money.status','=','2')
        ->where('request_money.user_id','=',$user->id)
         ->get();

//print_r($member);exit();#cd9c39;



       return view('smilehelp.my-account',['userrequestmoney'=>$userrequestmoney,'userdonation'=>$userdonation,'member'=>$member,'heartw'=>$heartw,'userpostcount'=>$userpostcount,'donatecu'=>$donatecu,'requestcu'=>$requestcu,'wonheart'=>$wonheart,'postt'=>$postt,'userpost'=>$userpost,'profile'=>$profile,'user'=>$user,'amountdt'=>$amountdt,'amountrt'=>$amountrt,'nfrnd'=>$nfrnd,'nfrndtotal'=>$nfrndtotal]);
        //

    }


       public function profileviewnoti(Request $request)
    {
        //
        $cid= $request->input('cid');

        //print_r( $cid);exit();
        $userId = Auth::id(); 
         $insert = DB::table('profilev')
            ->where ('clickuid','=', $userId)
            ->update([
'noti'=> $cid,
            // print_r($insert);exit;
         ]);  
    

// $count='';
// $profileview = DB::table('profilev')
//         ->where('profilev.noti','=',0)
//         ->where('profilev.clickuid','=',$userId)
//         ->get();

// $count.='<span class="count notic"><b>'.$profilevc.'</b></span>';

// echo $count;
 
 
    }   
     public function edituserinfo(Request $request)
    {
        $this->validate($request,[
             
            
            ]);
            $profile = DB::table('profile')
            ->select('profile.*')
            ->where('user_id','=',$request->id)
            //->orderBy('id','desc')
            ->first();

            if(!empty($request->image)){
            $fileContents = $request->image;
            $userimage = Storage::disk('custom')->put('/userprofile',$fileContents);
            }
            else
            {
                $userimage =(!empty($profile->image))? $profile->image : '';     
            }
           
            // print_r($occ);exit;
            // DB::enableQueryLog();
            $insert = DB::table('profile')
            ->where ('user_id','=', $request->input('id'))
            ->update([
                'firstname' =>$request->input('fname'),
                'Lastname' =>$request->input('lname'),
                'image' =>$userimage,
                'birthdate' => $request->input('dob'),
                'about' => $request->input('about'),
                'hobbie' => $request->input('hobbie'),
                'quote' => $request->input('quote'),
                'activity1' => $request->input('activity1'),
                'activity2' => $request->input('activity2'),

                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
               
                'website' => $request->input('url'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),

                'postalcode' => $request->input('postalcode'),
                'facebook' => $request->input('furl'),
                'instagram' => $request->input('iurl'),

                 'googlepay' => $request->input('googlepay'),
                'phonepay' => $request->input('phonepay'),
                'paytm' => $request->input('paytm'),

                'twitter' => $request->input('turl')
                ]);

            $insert = DB::table('users')
            ->where ('id','=', $request->input('id'))
            ->update([
                'name' =>$request->input('username'), 
             
                ]);
               
                // $query=DB::getQueryLog();
                // print_r($query);exit;
                return redirect()->back();
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
            
            // 'name'=> 'heading',
            // 'image'=>'mimes:jpeg,jpg,png|required|max:10000',
        ]); 
        $user = AUTH::user();
        $postt = DB::table('post')
        //->select(DB::raw('sum(amount)'))
         //->select('donate.*')
        ->where('user_id','=',$user->id)
        ->where('post_date','=',date("d-m-Y"))
        ->count();
        if($postt == 0){
        $fileContents = $request->image;
        $postimg = Storage::disk('custom')->put('/userpost',$fileContents);
        $heading=$request->input('heading');
        //$newrheading=mysqli_real_escape_string('mysql',$heading);
        // print_r($banvid);exit;
         $insert = DB::table('post')->insert([

       
            
            'user_id' => $request->input('uid'),
            'post_image' =>$postimg,
            'heading' => $heading,
            'post_date' => date("d-m-Y")

           ]);
            return redirect()->route('myaccount')->with('messageaddpost', 'Your Post Is Uploaded!');
            // print_r($insert);exit;
        }else{
              return redirect()->route('myaccount')->with('messageaddpost', 'Sorry!, One Day One Post Is Valid!'); 
        } 
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
