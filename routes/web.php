<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('smilehelp/index');
});

Auth::routes();


//front end
//Route::get('/home', 'HomeController@index')->name('home');

//user login and update info
Route::get('/signup-login', 'RegisterController@signuplogin')->name('signup-login');
Route::get('/contact', 'RegisterController@contact')->name('contact');
Route::post('/enquiry', 'RegisterController@enquiry')->name('enquiry');
Route::post('/storeuser', 'RegisterController@storeuser')->name('storeuser');
Route::post('/updatepassword', 'RegisterController@updatepassword')->name('updatepassword');


//others 
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/member', 'AboutController@member')->name('member');
Route::post('/enquiryaeronauit', 'AboutController@enquiryaeronauit')->name('enquiryaeronauit');

//home page
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/news', 'IndexController@news')->name('news');
Route::get('/AeronauIT', 'IndexController@aeronauit')->name('AeronauIT');
// Route::get('/lucky-paper-box', 'IndexController@luckypaperbox')->name('lucky-paper-box');

//blog front end
Route::get('/pamuli-blog', 'BlogController@pamuliblog')->name('pamuli-blog');
Route::get('/bijay-blog', 'BlogController@bijayblog')->name('bijay-blog');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/blogdetail/{id}', 'BlogController@blogdetail')->name('blogdetail');


//ourcauses
Route::get('/causes', 'CausesController@causes')->name('causes');
Route::get('/ourcauses-details/{id}', 'CausesController@ourcausesdetails')->name('ourcauses-details');



//all request money
Route::get('/total-request', 'RequestmoneyController@totalrequest')->name('total-request');
Route::get('/request-money', 'RequestmoneyController@requestmoney')->name('request-money');
Route::post('/emailverification', 'RequestmoneyController@emailverification')->name('emailverification');
Route::post('/verify-mail', 'RequestmoneyController@verify_mail')->name('verify-mail');
Route::post('/applyrequestmoney', 'RequestmoneyController@applyrequestmoney')->name('applyrequestmoney');

//user account
Route::get('/myaccount', 'MyaccountController@myaccount')->name('myaccount');
Route::post('/userpost', 'MyaccountController@userpost')->name('userpost');
Route::post('/edituserinfo', 'MyaccountController@edituserinfo')->name('edituserinfo');
Route::get('/delete-post/{id}', 'MyaccountController@deletepost')->name('delete-post');
Route::post('/profile-view-noti', 'MyaccountController@profileviewnoti')->name('profile-view-noti');



//search user and donation
Route::get('/search-user', 'SearchController@searchuser')->name('search-user');
Route::get('/user-profile/{id}', 'UserprofileController@userprofile')->name('user-profile');
Route::get('/total-donation', 'DonationController@totaldonation')->name('total-donation');



//sociallogin
Route::get('/facebook', 'SocialController@facebook')->name('facebook');
Route::get('/callback', 'SocialController@callback')->name('callback');




//thanku
Route::get('/thankyou', 'ThankyouController@thankyou')->name('thankyou');
Route::get('/thank-you', 'ThankyouController@thanku')->name('thank-you');






//payment
// Get Route For Show Payment Form
Route::post('paywithrazorpay', 'RazorpayController@payWithRazorpay')->name('paywithrazorpay');
// Post Route For Makw Payment Request
Route::post('payment', 'RazorpayController@payment')->name('payment');







//back end admin 

//admin and member section
Route::get('/dashboard', 'AdminIndexController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/admin', 'AdminIndexController@admin')->name('admin');
Route::get('/memberlist', 'AdminIndexController@memberlist')->name('memberlist');


//admin contact section
Route::get('/contactdone', 'AdminContactController@contactdone')->name('contactdone');
Route::get('/contactlist', 'AdminContactController@contact')->name('contactlist');
Route::post('/done-enquiry', 'AdminContactController@doneenquiry')->name('done-enquiry');
Route::get('/enquirynoti', 'AdminContactController@enquirynoti')->name('enquirynoti');


//admin donation list section
Route::get('/donationlist', 'AdminDonationController@donationlist')->name('donationlist');
Route::get('/donationnoti', 'AdminDonationController@donationnoti')->name('donationnoti');

//admin user list section
Route::get('/userlist', 'AdminUserController@userlist')->name('userlist');
Route::post('/unblockuser', 'AdminUserController@unblockuser')->name('unblockuser');
Route::post('/blockuser', 'AdminUserController@blockuser')->name('blockuser');
Route::get('/blockuserlist', 'AdminUserController@blockuserlist')->name('blockuserlist');
Route::get('/usernoti', 'AdminUserController@usernoti')->name('usernoti');


//won heart section
Route::get('/addwonheart', 'AdminWonHeartController@addwonheart')->name('addwonheart');
Route::get('/wonheartlist', 'AdminWonHeartController@index')->name('wonheartlist');
Route::post('/storewonheart', 'AdminWonHeartController@storewonheart')->name('storewonheart');
Route::get('/deletewonheart/{id}', 'AdminWonHeartController@deletewonheart')->name('deletewonheart');

//causes section
Route::get('/add-causes', 'AdminCausesController@addcauses')->name('add-causes');
Route::get('/causes-list', 'AdminCausesController@causeslist')->name('causes-list');
Route::post('/storecauses', 'AdminCausesController@storecauses')->name('storecauses');
Route::get('/edit-causes/{id}', 'AdminCausesController@editcauses')->name('edit-causes');
Route::get('/delete-causes/{id}', 'AdminCausesController@deletecauses')->name('delete-causes');
Route::post('/storeeditcauses', 'AdminCausesController@storeeditcauses')->name('storeeditcauses');

//partner section
Route::get('/addpartner', 'AdminCausesController@addpartner')->name('addpartner');
Route::get('/partnerlist', 'AdminCausesController@partnerlist')->name('partnerlist');
Route::post('/storepartner', 'AdminCausesController@storepartner')->name('storepartner');
Route::get('/deletepartner/{id}', 'AdminCausesController@deletepartner')->name('deletepartner');


//banner section
Route::get('/addbanner', 'AdminCausesController@addbanner')->name('addbanner');
Route::get('/bannerlist', 'AdminCausesController@bannerlist')->name('bannerlist');
Route::post('/storebanner', 'AdminCausesController@storebanner')->name('storebanner');
Route::get('/deletebanner/{id}', 'AdminCausesController@deletebanner')->name('deletebanner');

//term condition section
Route::get('/addterm', 'AdminWonHeartController@addterm')->name('addterm');
Route::get('/termlist', 'AdminWonHeartController@index1')->name('termlist');
Route::post('/storeterm', 'AdminWonHeartController@storeterm')->name('storeterm');
Route::get('/deleteterm/{id}', 'AdminWonHeartController@deleteterm')->name('deleteterm');

//how to help section
Route::get('/addhowtohelp', 'AdminWonHeartController@addhowtohelp')->name('addhowtohelp');
Route::get('/howtohelplist', 'AdminWonHeartController@index2')->name('howtohelplist');
Route::post('/storehowtohelp', 'AdminWonHeartController@storehowtohelp')->name('storehowtohelp');
Route::get('/deletehowtohelp/{id}', 'AdminWonHeartController@deletehowtohelp')->name('deletehowtohelp');

//request money section
Route::get('/requestmoneylist', 'AdminRequestmoneyController@requestmoneylist')->name('requestmoneylist');
Route::post('/requestaccept', 'AdminRequestmoneyController@requestaccept')->name('requestaccept');
Route::get('/acceptrlist', 'AdminRequestmoneyController@acceptrlist')->name('acceptrlist');
Route::post('/requestreject', 'AdminRequestmoneyController@requestreject')->name('requestreject');
Route::get('/rejectrlist', 'AdminRequestmoneyController@rejectrlist')->name('rejectrlist');
Route::get('/updaterequestamount', 'AdminRequestmoneyController@updaterequestamount')->name('updaterequestamount');
Route::get('/requestnoti', 'AdminRequestmoneyController@requestnoti')->name('requestnoti');




//blog section
Route::get('/addblog', 'AdminBlogController@addblog')->name('addblog');
Route::get('/bloglist', 'AdminBlogController@bloglist')->name('bloglist');
Route::post('/storeblog', 'AdminBlogController@storeblog')->name('storeblog');
Route::get('/deleteblog/{id}', 'AdminBlogController@deleteblog')->name('deleteblog');
Route::get('/addpamuliblog', 'AdminBlogController@addpamuliblog')->name('addpamuliblog');
Route::get('/pamulibloglist', 'AdminBlogController@pamulibloglist')->name('pamulibloglist');
Route::post('/storepamuliblog', 'AdminBlogController@storepamuliblog')->name('storepamuliblog');
Route::get('/deletepamuliblog/{id}', 'AdminBlogController@deletepamuliblog')->name('deletepamuliblog');
Route::get('/addbijayblog', 'AdminBlogController@addbijayblog')->name('addbijayblog');
Route::get('/bijaybloglist', 'AdminBlogController@bijaybloglist')->name('bijaybloglist');
Route::post('/storebijayblog', 'AdminBlogController@storebijayblog')->name('storebijayblog');
Route::get('/deletebijayblog/{id}', 'AdminBlogController@deletebijayblog')->name('deletebijayblog');


Addchat::routes();
