<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class CausesController extends Controller
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
    public function causes()
    {


        $cause = DB::table('ourcauses')
        //->select('occassion.name as oname','topexperience.*')
       // ->leftjoin('occassion', 'topexperience.oid', '=', 'occassion.id')
        ->orderBy('id','desc')
        //->limit(6)
        ->get();

        return view('smilehelp.causes',['cause'=>$cause]);
        //
    }
     public function ourcausesdetails($id)
    {


        $causesdetail = DB::table('ourcauses')
        //->select('occassion.name as oname','topexperience.*')
        //->leftjoin('occassion', 'topexperience.oid', '=', 'occassion.id')
        //->orderBy('id','desc')
        //->limit(6)
        ->where('id','=',$id)
        ->first();

        return view('smilehelp.causes-details',['causesdetail'=>$causesdetail]);
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
