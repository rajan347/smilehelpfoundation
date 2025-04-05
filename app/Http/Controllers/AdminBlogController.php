<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use auth;
use Illuminate\Support\Facades\Storage;
class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

    }
    public function addblog()
    {
        return view('smilehelpadmin.add-blog');
    }
   
public function addpamuliblog()
    {
        return view('smilehelpadmin.add-pamuli-blog');
    }
   
public function addbijayblog()
    {
        return view('smilehelpadmin.add-bijay-blog');
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
    public function storeblog(Request $request)
    {
         $this->validate($request,[
            'name'=> 'required',
           'img' => 'mimes:jpeg,jpg,png|required|max:10000',
            'discription' => 'required',
            'tag' => 'required'
        ]); 
       $fileContentsss = $request->img;
        $img = Storage::disk('custom')->put('/blog',$fileContentsss);

        $insert = DB::table('blogs')->insert([
            'heading' =>$request->input('name'),
             'tags' =>$request->input('tag'),
            'description' => $request->input('discription'),
            'description2' => $request->input('discription2'),
            'description3' => $request->input('discription3'),
            'image' => $img
           
            ]);
            return redirect()->route('bloglist')->with('messageaddcauses', 'You Added One blogs!');
            // print_r($insert);exit;
    }


        public function storepamuliblog(Request $request)
    {
         $this->validate($request,[
            'discription' => 'required',
           
        ]); 
      
        $insert = DB::table('pamuliblog')->insert([
            'subheading' => $request->input('discription'),
            
           
            ]);
            return redirect()->route('pamulibloglist')->with('messageaddcauses', 'You Added One blogs!');
            // print_r($insert);exit;
    }
   

        public function storebijayblog(Request $request)
    {
         $this->validate($request,[
            'discription' => 'required',
           
        ]); 
      
        $insert = DB::table('bijayblog')->insert([
            'subheading' => $request->input('discription'),
            
           
            ]);
            return redirect()->route('bijaybloglist')->with('messageaddcauses', 'You Added One blogs!');
            // print_r($insert);exit;
    }
   

    public function bloglist()
    {
         $causes = DB::table('blogs')
        ->select('blogs.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.blog-list',['causes'=>$causes]);
       



    }


    public function pamulibloglist()
    {
         $causes = DB::table('pamuliblog')
        ->select('pamuliblog.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.pamuli-blog-list',['causes'=>$causes]);
       



    }
   
    public function bijaybloglist()
    {
         $causes = DB::table('bijayblog')
        ->select('bijayblog.*')
        ->orderBy('id','desc')
        ->get();
        return view('smilehelpadmin.bijay-blog-list',['causes'=>$causes]);
       



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
            'img' => $img
           
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
  
     public function deleteblog($id)
    {
        
     DB::delete('delete from blogs where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
     public function deletepamuliblog($id)
    {
        
     DB::delete('delete from pamuliblog where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
    public function deletebijayblog($id)
    {
        
     DB::delete('delete from bijayblog where id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One row!');


    }
}
