<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Newnewsarticle extends Model
{
    protected $table = 'newnewsarticle';

    public function getClassName ($classid){
        try{
            $rs=DB::table('newnewsclass')->where('id', $classid )->first();
            return $rs->className;
        }
        catch (\Exception $e){
            return "其他";
        }
        return "其他";
    }
}
