<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Razorpay\Api\Api;
use Session;
use Redirect;
use DB;
use Auth;

class RazorpayController extends Controller
{    
    public function payWithRazorpay(Request $request)
    {        
$amount =$request->input('amount');
//print_r($amount);exit();
return view('smilehelp.payWithRazorpay',['amount'=>$amount]);
       // return view('smilehelp.payWithRazorpay',['amount'->$amount]);
    }

    public function payment(Request $request)
    {
        
        $user = AUTH::user();
        
        $profile = DB::table('profile')
        ->select('profile.*')
        ->where('user_id','=',$request->input('uid'))
        ->first();
        
        //Input items of form
        $input = $request->all();
        //get API Configuration 
        $api = new Api(config('custom.razor_key'), config('custom.razor_secret'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }

            // Do something here for store payment details in database...
        }
        
//print_r($response);exit();


$amountn = json_decode($response->amount);
$amount = ($amountn/100);
$contact =$response->contact;
$email =$response->email;
// $cap =$response->status;
// $card =$response->card;
// $name =$response->name;
// $entity =$response->entity;
// $network =$response->network;
// $bank =$response->bank;
// $wallet =$response->wallet;
// $method =$response->method;


//print_r($cap);exit();
$donate = DB::table('donate')->insert([
            'user_id' =>$request->input('uid'),
            'donation_id' => $request->input('donation_id'),
            'amount' => $amount,
            'email' => $email,
            'contact' =>$contact,
            // 'method' =>$method,
            // 'capture' => $cap,
            // 'card' => $card,
            // 'name' =>$name,
            // 'entity' =>$entity,
            // 'network' => $network,
            // 'bank' => $bank,
            // 'wallet' =>$wallet,
            
            
            
            ]);



// start mail sending

    $to = "rajanku347@gmail.com";
    $from = "smilehelpfoundation@smilehelpfoundation.com";
    //$name = $_REQUEST['name'];
    $subject = "Donation For Smile Help Foundation";
    //$number = $_REQUEST['number'];
    $cname = $profile->firstname;
    $ccity = $profile->city;
    $cphone = $profile->phone;

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $csubject = "Donation For Smile Help Foundation";

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
    $body .= "<tr><td colspan='2' style='border:none;'>{$amount}<br>{$cphone}</br>{$cname}</br>{$ccity}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

//end mail sending



// start mail sending

    $to =$email;
    $from = "smilehelpfoundation@smilehelpfoundation.com";
    //$name = $_REQUEST['name'];
    $subject = "Thank You For Donation!";
    //$number = $_REQUEST['number'];
    $cname = $profile->firstname;
    

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $csubject = "Thank You For Donation";

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
    $body .= "<tr><td colspan='2' style='border:none;'>{$cname}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

//end mail sending


    
        //print_r($response);exit();
        return redirect()->route('thank-you')->with('message', $request->input('donation_id'));


    }

}
?>