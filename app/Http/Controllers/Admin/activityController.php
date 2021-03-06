<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use File;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class activityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.activityRecord.activityRecord');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($default=null)
    {
        $albums=DB::table('activityrecordalbum')->get();
        return view('admin.activityRecord.activityRecordUpload',['albums'=>$albums,'default'=>$default]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
            $fileAry=$request->userfile;

            //空陣列
            if($fileAry[0]==null){
            $request->session()->flash('status', '-1'); 
            return back();
            }

            $fileCount=count($fileAry);
            $destinationPath = public_path().'/img/';
            
                foreach($fileAry as $file){
                    $filetype = $file->getMimeType();
                    if($filetype != 'image/jpeg')
                        return "檔案格式錯誤(*.jpg)";
                    $filename = $file->getclientoriginalname();
                    $uniquename = md5($filename. time()).'.jpg';
                    
                    //move to public/img
                    $file->move($destinationPath,$uniquename);
        
                    //insert database
                    $fileurl='img/'.$uniquename;
                    $filename=$filename;
                    DB::table('activityrecord')->insert(
                        ['albumid' => $request->albumid,
                        'filepath' => $fileurl,
                        'filename' => $filename,
                        ]
                    );
                }
            $request->session()->flash('status', '0'); 
        
        
               
        return back();
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
    public function destroy(Request $request)
    {
        //
        try{   
            foreach($request->ids as $id){
                // DB::table('classicbook')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return back();
    }

    public function mfclass(){
        $albums=DB::table('activityrecordalbum')->get();
        return view('admin.activityRecord.activityRecordClassManager',["datas"=>$albums]);
    }

    public function mfclassadd(Request $request){
        DB::table('activityrecordalbum')->insert(
            ['className' => $request->input('className')]
        );
        return back();
    }

    public function mfclassdel($id){
        $conunt=DB::table('activityrecord')->where('albumid',$id)->get();
        //必須要空相簿才能刪除
        if($conunt==null){
            DB::table('activityrecordalbum')->where('id',$id)->delete();
        }
        return back();
    }

    public function showalbums(){
        $albums = DB::table('activityrecordalbum')->get();
        return view('admin.activityRecord.selectAlbum',["datas"=>$albums]);
    }

    public function showalbum($id){
        $album = DB::table('activityrecord')->where('albumid',$id)->get(); 
        return view('admin.activityRecord.album',['id' => $id, 'datas' => $album]);
    }

    public function delphoto(Request $request){
        
        try{   
            foreach($request->paths as $path){
                File::delete($path);
            }

            foreach($request->ids as $id){
                DB::table('activityrecord')->where('id', $id)->delete();
            } 
        } 
        catch(\Exception $e){
            // 
        }
       return back();
    }
}
