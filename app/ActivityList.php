<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class ActivityList extends Model
{
    public static function getAll(){
        return DB::table('activity')
        // ->join('branch','branch.branch_id','profressor.branch_id')
        ->get();
    }
    public static function postAc($data){//กิจกรรม
        return DB::table('activity')
        ->insert($data); //
    }
    public static function getAc(){
        return DB::table('activity')
      
        ->get();//get รับค่ามาทั้งหมด

    }
    public static function select($id)
    {
        return DB::table('activity')
        ->where('Ac_ID',$id)
        ->first();
    }
    public static function updateAc($data,$Ac_ID)//อัพเดต

    {
      
        return DB::table('activity')
        ->where('Ac_ID',$Ac_ID)
        ->update($data);
    }
    public static function delst_ac($id){//ลบทั้งกิจกรรมและนศ
        return DB::table('student')
        //->join('student','student.id','activity.id')
        ->where('Ac_ID',$id)
        ->delete();
    }
    public static function del($id){//ลบกิจกรรม
        return DB::table('activity')
        //->join('student','student.id','activity.id')
        ->where('Ac_ID',$id)
        ->delete();
    }
    public static function postSt($data){//นักศึกษา
        return DB::table('student')
        ->insert($data); //
    }
    public static function getSt(){
        return DB::table('student')
      
        ->get();//get รับค่ามาทั้งหมด

    }
    public static function getAll_St(){
        return DB::table('student')
        // ->join('branch','branch.branch_id','profressor.branch_id')
        ->get();
    }
    public static function getAll_St2($id){
        return DB::table('student')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }
    public static function getAll_St2_first($id){//หน้าแสดงรายชื่อ นศ จะแสดงหัวว่าเป็นนักศึกษากิจกรรมอะไร
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม

        ->get()->first();
    }
    public static function getAll_Ac2($id){
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }
    public static function getAll_AcSt(){
        return DB::table('activity')
        // ->join('branch','branch.branch_id','profressor.branch_id')
        ->get();
    }
    public static function getAll_Ac2St($id){
        return DB::table('activity')
        ->where('Ac_ID',$id)//แสดงรายละเอียดของแต่ละกิจกรรม
       
        ->get();
    }

    public static function del_st($id){//ลบ นศ
        return DB::table('student')
        ->where('id',$id)
        ->delete();
    }

    public static function select_st($id,$ac)//แก้ไขนศ
    {
        return DB::table('student')
        ->where('id',$id)
        ->where('Ac_ID',$ac)
        ->first();
    }
    public static function updateSt($data,$id)//อัพเดต

    {
      
        return DB::table('student')
        ->where('id',$id)
        
        ->update($data);
    }
}
