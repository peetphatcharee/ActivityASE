<?php

namespace App\Http\Controllers;
use App\ActivityList as Ac;

use Illuminate\Http\Request;
use DB;

class ActivityListController extends Controller
{
    public function getAc(){

        $Ac = Ac::getAll();
        //dd($Ac);

    	 $data = array('Ac'=>$Ac); 

    		return view('ActivityList',$data);
  	
    	
	}
	public function getForm()
    {
   
        return view('form_addAc');//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
	public function postForm(Request $req)
    {
		
        $data = array("Ac_Name"=>$req->input("Ac_Name"),
		"Ac_Type"=>$req->input("Ac_Type"),
		"Ac_location"=>$req->input("Ac_location"),
		"Ac_DateStart"=>$req->input("Ac_DateStart"),
		"Ac_DateFinish"=>$req->input("Ac_DateFinish"),
		"Ac_TimeStart"=>$req->input("Ac_TimeStart"),
		"Ac_TimeFinish"=>$req->input("Ac_TimeFinish"),
		"Ac_member"=>$req->input("Ac_member"),
		"Ac_Organizer"=>$req->input("Ac_Organizer"),
		"Ac_Tel"=>$req->input("Ac_Tel"),
		"Ac_Email"=>$req->input("Ac_Email"),
		"Ac_Facbook"=>$req->input("Ac_Facbook"));

        $insert = Ac::postAc($data);
        return redirect('ActivityList');
	}
	public function getEdit($id)
    {
		// dd($data);
        $activity = Ac::select($id);
        // // $type = Ac::getType();
        $data = array('activity'=>$activity ,
				   );
		//dd($data)
        return view('edit_Ac',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateForm(Request $req)
    {
		//dd($data);
		$Ac_ID = $req->input('Ac_ID');
        $Ac_Name = $req->input('Ac_Name');
        $Ac_Type = $req->input('Ac_Type');
		$Ac_location = $req->input('Ac_location');
		$Ac_DateStart = $req->input('Ac_DateStart');
        $Ac_DateFinish = $req->input('Ac_DateFinish');
        $Ac_TimeStart = $req->input('Ac_TimeStart');
		$Ac_TimeFinish = $req->input('Ac_TimeFinish');
		$Ac_member = $req->input('Ac_member');
        $Ac_Organizer = $req->input('Ac_Organizer');
        $Ac_Tel = $req->input('Ac_Tel');
		$Ac_Email = $req->input('Ac_Email');      
		$Ac_Facbook = $req->input('Ac_Facbook');

        $data = array("Ac_ID"=>$Ac_ID,
					"Ac_Name"=>$Ac_Name,
					"Ac_Type"=>$Ac_Type,
					"Ac_location"=>$Ac_location,
					"Ac_DateStart"=>$Ac_DateStart,
					"Ac_DateFinish"=>$Ac_DateFinish,
					"Ac_TimeStart"=>$Ac_TimeStart,
					"Ac_TimeFinish"=>$Ac_TimeFinish,
					"Ac_member"=>$Ac_member,
					"Ac_Organizer"=>$Ac_Organizer,
					"Ac_Tel"=>$Ac_Tel,
					"Ac_Email"=>$Ac_Email,
					"Ac_Facbook"=>$Ac_Facbook);


        $insert = Ac::updateAc($data,$Ac_ID);
        return redirect('ActivityList');
	}
	public function del($id)//ลบกิจกรรม
    {
		
		$activity = Ac::del($id);
		$student = Ac::delst_ac($id);

		//dd($activity);
        return redirect("ActivityList");
       
	}
	public function getSt($id)//เพิ่มนักึกษา
    {
		$idac=$id;
		$nameac=DB::table('activity')->where('Ac_ID',$idac)
        ->first(); //"Ac_Name"
		$data = array("id"=>$idac,"name"=>$nameac);
	
        return view('form_addStudent',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
	}
	public function postSt(Request $req)//เพิ่มนักึกษา
    {	
		
        $data = array("St_ID"=>$req->input("St_ID"),
					"St_Name"=>$req->input("St_Name"),
					"Ac_ID"=>$req->input("Ac_ID"));

        $insert = Ac::postSt($data);
        return redirect('ActivityList');
	}
	public function getStudent($id){//แสดงหน้านักศึกษา

		$a=Ac::getAll_St2_first($id);//แสดงหัวว่ากิจกรรมไหน
        $Ac = Ac::getAll_St2($id);
		$data = array('Ac'=>$Ac,'name'=>$a,'Ac_ID'=>$id); 
		//dd($data);
		return view('StudentList',$data);
   	
	}
	public function getAc2($id){//แสดงหน้ากิจกรรม2

		
		$Ac = Ac::getAll_Ac2($id);//แสดงรายละเอียดของแต่ละกิจกรรม 
		   
    	 $data = array('Ac'=>$Ac);     	
    	return view('AcList2',$data);
		
		}



		public function getAc_St(){

			$Ac = Ac::getAll_AcSt();
			//dd($Ac);
	
			 $data = array('Ac'=>$Ac); 
	
				return view('AcList_St',$data);
		  
			
		}

		public function getAc2_St($id){//แสดงหน้ากิจกรรม2 ของ นศ

			// dd('fghjhgf');
			$Ac = Ac::getAll_Ac2($id);//แสดงรายละเอียดของแต่ละกิจกรรม 
			   
			 $data = array('Ac'=>$Ac);     	
			return view('AcList2_St',$data);
			
			}


		public function del_st($id,$ac)//ลบ นศ
    {
		// dd($id);
        $student = Ac::del_st($id);
        return redirect("StudentList$ac");
       
	}
	public function getStudent_st($id){//แสดงหน้านักศึกษา

		$a=Ac::getAll_St2_first($id);//แสดงหัวว่ากิจกรรมไหน
        $Ac = Ac::getAll_St2($id);
    	$data = array('Ac'=>$Ac,'name'=>$a,'Ac_ID'=>$id); 
		return view('ListStudent_st',$data);
	}

	public function getedit_st($id,$ac)//แก้ไขชื่อนศ
    {
		//dd($id);
		
        $student = Ac::select_st($id,$ac);
        // // $type = Ac::getType();
		$data =array('student'=>$student,
	'act_id'=>$ac);
		//dd($data);
        return view('edit_st',$data);//ไปหน้าฟอร์มเเอดเเละดึงดาต้าไปด้วย
       
    }
    public function updateForm_st(Request $req)//บันทึกลง database
    {
	
		$id = $req->input('id');
		$act_id = $req->input('act_id');
		//  dd($id);
        $St_ID = $req->input('St_ID');
        $St_Name = $req->input('St_Name');
		

        $data = array("id"=>$id,
					"St_ID"=>$St_ID,
					"St_Name"=>$St_Name);

					//dd($data);
        $insert = Ac::updateSt($data,$id);
        return redirect("StudentList$act_id");
	}
}
