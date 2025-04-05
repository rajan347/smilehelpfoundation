<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

//         $top = DB::table('topexperience')
//         ->select('occassion.name as oname','topexperience.*')
//         ->leftjoin('occassion', 'topexperience.oid', '=', 'occassion.id')
//         ->limit(6)
//         ->get();


    }
      

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {


         $ourcauses = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(6)
        ->get();

        $blogs = DB::table('blogs')
        ->select('blogs.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(4)
        ->get();

        return view('smilehelp.blog' ,['ourcauses'=>$ourcauses,'blogs'=>$blogs,]);
        //
    }
    public function pamuliblog()
    {
        $blogs = DB::table('pamuliblog')
        ->select('pamuliblog.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(4)
        ->get();

$name="Pamuli-blogs";
        return view('smilehelp.new-blog' ,['blogs'=>$blogs,'name'=>$name,]);
        //
    }
    public function bijayblog()
    {
        $blogs = DB::table('bijayblog')
        ->select('bijayblog.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(4)
        ->get();

$name="Bijay-blogs";
        return view('smilehelp.new-blog' ,['blogs'=>$blogs,'name'=>$name,]);
        //
    }

  public function blogdetail($id)
    {


        //  $ourcauses = DB::table('ourcauses')
        // ->select('ourcauses.*')
        // ->where('status','=','1')
        // ->where('user_id','=',$user->id)
        // ->limit(6)
        // ->get();

$ourcauses = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(6)
        ->get();

        $blogs = DB::table('blogs')
        ->select('blogs.*')
        ->where('status','=','1')
        //->where('user_id','=',$user->id)
        //->limit(4)
        ->get();

        $blogdetail = DB::table('blogs')
        ->select('blogs.*')
        ->where('status','=','1')
        ->where('heading','=',$id)
        //->limit(4)
        ->first();



        return view('smilehelp.blog-detail' ,['blogdetail'=>$blogdetail,'ourcauses'=>$ourcauses,'blogs'=>$blogs,]);
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
