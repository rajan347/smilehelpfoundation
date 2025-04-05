<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class AdminCausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

    }
    public function addcauses()
    {
        return view('smilehelpadmin.add-causes');
    }
    public function addpartner()
    {
        return view('smilehelpadmin.add-partner');
    }
    public function addbanner()
    {
        return view('smilehelpadmin.add-banner');
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
    public function storecauses(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',
           'img' => 'mimes:jpeg,jpg,png|required|max:10000',
            'discription' => 'required'
        ]); 
       $fileContentsss = $request->img;
        $img = Storage::disk('custom')->put('/causes',$fileContentsss);

        $insert = DB::table('ourcauses')->insert([
            'heading' =>$request->input('name'),
            'subheading' => $request->input('discription'),
            'img' => $img,
            'quote' =>$request->input('quote'),
            'description' => $request->input('subdiscription'),
           
            ]);
            return redirect()->route('causes-list')->with('messageaddcauses', 'You Added One Causes!');
            // print_r($insert);exit;
    }
    public function storepartner(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',
           'img' => 'mimes:jpeg,jpg,png|required|max:10000'
        ]); 
       $fileContentsss = $request->img;
        $img = Storage::disk('custom')->put('/partner',$fileContentsss);

        $insert = DB::table('partner')->insert([
            'link' =>$request->input('name'),
            'img' => $img
           
            ]);
            return redirect()->route('partnerlist')->with('messageaddcauses', 'You Added One Partner!');
            // print_r($insert);exit;
    }

    public function storebanner(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',
           'img' => 'mimes:jpeg,jpg,png|required|max:10000'
        ]); 
       $fileContentsss = $request->img;
        $img = Storage::disk('custom')->put('/partner',$fileContentsss);

        $insert = DB::table('banner')->insert([
            'heading' =>$request->input('name'),
            'img' => $img
           
            ]);
            return redirect()->route('bannerlist')->with('messageaddcauses', 'You Added One banner!');
            // print_r($insert);exit;
    }
    

    public function causeslist()
    {
         $causes = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.causes-list',['causes'=>$causes]);
       



    }
    public function partnerlist()
    {
         $causes = DB::table('partner')
        ->select('partner.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.partner-list',['causes'=>$causes]);
       



    }
    public function bannerlist()
    {
         $banner = DB::table('banner')
        ->select('banner.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.banner-list',['banner'=>$banner]);
       



    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcauses($id)
    {
        
 $causes = DB::table('ourcauses')
        ->select('ourcauses.*')
        ->where('id','=',$id)
        //->orderBy('id','desc')
        ->first();
        // print_r($loc);exit;
        return view('smilehelpadmin.edit-causes',['causes'=>$causes]);
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeeditcauses(Request $request)
    {
        
    $this->validate($request,[
           ]);
            $causes = DB::table('ourcauses')
            ->select('ourcauses.*')
            ->where('id','=',$request->id)
            //->orderBy('id','desc')
            ->first();

            if(!empty($request->img)){
                $fileContentsss = $request->img;
                $img = Storage::disk('custom')->put('/causes',$fileContentsss);
                }
                else
                {
                    $img =(!empty($causes->img))? $causes->img : '';   
                }
            // print_r($occ);exit;
            // DB::enableQueryLog();
            $insert = DB::table('ourcauses')
            ->where ('id','=', $request->input('id'))
            ->update([
            'heading' =>$request->input('name'),
            'subheading' => $request->input('discription'),
            'img' => $img,
              'quote' =>$request->input('quote'),
            'description' => $request->input('subdiscription'),
           
            ]);
            return redirect()->route('causes-list')->with('messageeditcauses', 'You Updated One row!');
        //
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
    public function deletecauses($id)
    {
        
     DB::delete('delete from ourcauses where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
     public function deletepartner($id)
    {
        
     DB::delete('delete from partner where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
    public function deletebanner($id)
    {
        
     DB::delete('delete from banner where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
}
