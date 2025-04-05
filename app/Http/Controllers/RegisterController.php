<?php

use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class RegisterController extends Controller
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
      public function signuplogin()
    {
       
   print_r("expression");

       return view('smilehelp.login');
        //

    }
     public function storeuser(Request $request)
    {
        //
     
        $this->validate($request,[
             
            'name' => ['required', 'string', 'max:255'],
            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            

            ]);
         $insert = DB::table('users')->insertGetId([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' => Hash::make($request->input('password'))
            
            ]);
            
            
             $insert2 = DB::table('profile')->insertGetId([
            'user_id' =>$insert
            
            
            ]);

             $insert3 = DB::table('member')->insertGetId([
            'uid' =>$insert
            
            
            ]);
            
// start mail sending


//end mail sending
            
  
  
  //2nd mail
                       
                    $u ="<html><body><p>Hello Smile Help Foundation you have new registration</p>";
                    $uu ="<p> user name ".$request->input('name')."</p>";
                    $uuu ="<p> user email ".$request->input('email')."</p>";
                    $to_email = 'rajanku347@gmail.com';
                    $subject = 'Registration For Smile Help Foundation';
                    $message = $u.$uu.$uuu;
                    
                    $headers = 'From: info@smilehelpfoundation.com'. "\r\n";
                    $headers .= 'Cc: rajanku347@gmail.com' . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    mail($to_email,$subject,$message,$headers);
                    //end of mail
                    
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
                                                                <b>Hi '.$request->input('name').'</b>
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
                    $to_email = $request->email;
                    $subject = ' Welcome to Smile Help Foundation! ';
                    $message = $u;
                    $headers = "From: info@smilehelpfoundation.com \r\n";
                    //$headers .= 'Cc: rajanku347@gmail.com' . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    mail($to_email,$subject,$message,$headers);
  
  
  
  //end 2nd mail
            
              return redirect()->back()->with('messager', 'Thank You For Register, You Can Login!');
       
            // print_r($insert);exit;
           
           
    }
      public function contact()
    {
       
   



       return view('smilehelp.contact');
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
    public function enquiry(Request $request)
    {
         $this->validate($request,[
            

        ]); 
        $insert = DB::table('contact')->insert([
            'name' =>$request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' =>$request->input('message'),
            'subject' => $request->input('subject')
            ]);

           return redirect()->back()->with('message', 'Thank You For Enquery, We Will Connect With You Soon!');
        //

        
        //
    }
     public function updatepassword(Request $request)
    {
         $password =$request->input('password');
       
        
         $user = AUTH::user();
         
         
        $insert = DB::table('users')
            ->where ('id','=', $request->input('uid'))
            ->update([
                'password' => Hash::make($password),
           
               ]);
            
       return redirect()->back()->with('messageup', 'Thank You , Your Password Is Changed!');
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
