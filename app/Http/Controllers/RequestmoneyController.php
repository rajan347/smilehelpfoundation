<?php
use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use auth;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class RequestmoneyController extends Controller
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
        public function totalrequest()
    {
       
     $user = AUTH::user();

        $totalr = DB::table('request_money')
         ->join('profile', 'profile.user_id', '=', 'request_money.user_id')
         ->join('users', 'users.id', '=', 'request_money.user_id')
        ->select('request_money.*','profile.*','users.*')
        ->where('request_money.status','=','2')
         ->get();

         $todayr = DB::table('request_money')
         ->join('profile', 'profile.user_id', '=', 'request_money.user_id')
         ->join('users', 'users.id', '=', 'request_money.user_id')
         ->select('request_money.*','profile.*','users.*')
         ->where('request_money.status','=','2')
          ->where('request_money.created_at','>=',Carbon::now()->subdays(0))
         ->get();


  $todayrcount = DB::table('request_money')
         ->where('request_money.status','=','2')
          ->where('request_money.created_at','>=',Carbon::now()->subdays(0))
         ->count();


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



//print_r($amountd);exit();
        
       return view('smilehelp.total-request',['todayrcount'=>$todayrcount,'totalr'=>$totalr,'todayr'=>$todayr,'request7days'=>$request7days]);
        //

    }
     

      public function verify_mail(Request $request)
    {
        $user = AUTH::user();
       
      // print_r($user);exit();
$mail = DB::table('mail_verification')
        ->select('mail_verification.otp as motp')
        ->where('uid','=',$user->id)
        ->orderBy('id','DESC')
        ->first();

//print_r($mail);exit();
        $sotp=$mail->motp;
        $cotp = $request->input('code');


      //print_r($sotp);exit();  
        if ($sotp===$cotp) {
//print_r($user);exit();
            return view('smilehelp.money-request');


            # code...
        }else
        {
            //print_r($user);exit();
//print_r($mail);exit();
            return redirect()->route('request-money')->with('messagemail', 'You Entered Wrong Otp!');
        }

        



       
     

    }
     


    
       public function requestmoney(Request $request)
    {
       
   

$termcondiction = DB::table('termcondiction')
        ->select('termcondiction')
        ->get();




       return view('smilehelp.request-money',['termcondiction'=>$termcondiction]);
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
    public function emailverification(Request $request)
  {

$user = AUTH::user();
        $profile = DB::table('users')
        ->select('users.*')
        ->where('id','=',$user->id)
        ->first();

$mail=($profile->email);


         $this->validate($request,[
            

        ]); 
        $insert = DB::table('mail_verification')->insert([
            'uid' =>$request->input('uid'),
            'email' => $mail,
            'otp' => $request->input('otp')
            ]);

        $insert = DB::table('accept_term_condiction')->insert([
            'uid' =>$request->input('uid'),
            'check' => $request->input('check')
            ]);



// start mail sending

  //2nd mail
                     $cmessage = $request->input('otp');
                    
                    $u='<html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                        </head>
                        <body style="margin: 0; padding: 0;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
                                <tr>
                                    <td style="padding: 10px 0 30px 0;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                                            <tr>
                                                <td align="" style="padding: 0px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                                                    <img align="left" src="https://smilehelpfoundation.com/public/loo.png"  style="display: block;width:83px;height:70px" />
                                                    <img align="right" src="https://smilehelpfoundation.com/public/smile.png"  style="display: block;width:83px;height:70px" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                                                <b>Your Verification Code Is : '.$cmessage.'</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                Hope you are having a great day. I am Rajan, CEO at “Smile Help Foundation”.<br><br>
                                                                <b>“You can have everything you want in life if you just help enough people get what they want in life.” </b><br><br>
                                                                <center><button style="background-color:#41bc3f;border-radius: 25px;color: #fff;border: none;font-size: 14px;padding: 10px;"><a href="https://smilehelpfoundation.com/">Visit Now</a></button></center><br><br>
                                                                
                                                                “Those who are happiest are those who do the most for others.”<br><br>
                                                                Want to learn more about Smile Help Foundation ?  <a href="https://smilehelpfoundation.com/about">About Us.</a><br><br>
                                                                
                                                                Looking forward to Helping Others!
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                Best Regards,<br>
                                                                Team Smile Help Foundation
                                                                
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#41bc3f" style="padding: 30px 30px 30px 30px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            
                                                            <td align="left" width="50%">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                                            <a target="_blank" class="social-icon text-dark" href="https://m.facebook.com/smilehelpfoundation"><img src="https://smilehelpfoundation.com/public/facebook.png" style="width:30px;height:30px;margin-right:5px;"></a>
                                                                        </td>
                                                                       
                                                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                                            <a target="_blank" class="social-icon text-dark" href="https://twitter.com/smilehelpfound1"><img src="https://smilehelpfoundation.com/public/twitter.png" style="width:30px;height:30px;margin-right:5px;"></a>
                                                                        </td>
                                                                       
                                                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                                            <a target="_blank" class="social-icon text-dark" href="https://www.instagram.com/smile_help_foundation"><img src="https://smilehelpfoundation.com/public/insta.png" style="width:30px;height:30px;margin-right:5px;"></a>
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td style="color: #ffffff !important; font-family: Arial, sans-serif; font-size: 14px;float:right;margin-right:45px;" width="50%" >
                                                                <span style="white-space:nowrap;line-height:25px;">www.smilehelpfoundation.com </span><br/>
                                                                <span style="white-space:nowrap;line-height:25px;">info@smilehelpfoundation.com </span><br>
                                                                <span style="white-space:nowrap;line-height:25px;">+91 87921 26994</span>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table><br>
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td style="padding: 10px 0 10px 0; color: #ffffff !important; font-family: Arial, sans-serif;text-align:center; font-size: 14px; line-height: 20px;border-bottom:1px solid #fff;">
                                                                If you wish to receive emails from Smile Help Foundation in future, <a href="https://smilehelpfoundation.com" style="color:#ffffff !important">Subscribe</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 10px 0 10px 0; color: #fff; font-family: Arial, sans-serif; font-size: 15px; line-height: 20px;text-align:center;">
                                                                Copyright &copy; 2020 smilehelpfoundation  All rights reserved.
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                        
                                    </td>
                                </tr>
                            </table>
                        </body>
                        </html>';
                    $to_email = $mail;
                    $subject = ' Your Mail Verification! ';
                    $message = $u;
                    $headers = "From: info@smilehelpfoundation.com \r\n";
                    //$headers .= 'Cc: rajanku347@gmail.com' . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    mail($to_email,$subject,$message,$headers);
  
  
  
  //end 2nd mail

//end mail sending




            return view('smilehelp.mail-verification');
        //

        


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
    public function applyrequestmoney(Request $request)
    {


         $this->validate($request,[
            

        ]); 

$profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$request->input('uid'))
        ->first();

if (empty($profile->phone && $profile->city) ) {

    return redirect()->route('myaccount')->with('messageupdatep', 'plz Update Your profile For Money Request!');
}


           $fileContents = $request->aadharfront;
        $imgfront = Storage::disk('custom')->put('/requestmoney',$fileContents);
      
        $fileContentss = $request->aadharback;
        $imgback = Storage::disk('custom')->put('/requestmoney',$fileContentss);
      
$fileContentsss = $request->reasonimg;
        $reasonimg = Storage::disk('custom')->put('/requestmoney',$fileContents);
      

//print_r($imgback);exit();
        $insert = DB::table('request_money')->insert([
            'user_id' =>$request->input('uid'),
            
            'reason' =>$request->input('reason'),
            'amount' => $request->input('amount'),
            'aadhar_front' =>$imgfront,
            'reason_img' =>$reasonimg,
            'aadhar_back' => $imgback
            ]);



// start mail sending

    $to = "rajanku347@gmail.com";
    $from = "smilehelpfoundation@smilehelpfoundation.com";
    //$name = $_REQUEST['name'];
    $subject = "Request Money";
    //$number = $_REQUEST['number'];
    $camount = $request->input('amount');
    $creason = $request->input('reason');
    $cname = $profile->firstname;
    $ccity = $profile->city;

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $csubject = "Request Money From Smile Help Foundation";

    $logo = 'img/logo.png';
    $link = '#';

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
    $body .= "<tr><td></td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$camount}<br>{$creason}</br>{$cname}</br>{$ccity}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

//end mail sending




            return redirect()->route('thankyou');
        //

        




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
