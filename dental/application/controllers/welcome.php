<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {



    var  $title=" ศูนย์ตะวันฉาย มหาวิทยาลัยขอนแก่น | TAWANCHAI KhoenKean University Version 1.0 "; //The Entrar-shadow Website form | w3layouts
    var  $title_fr1=" ระบบการติดตามการรักษา version 1.0 ";
	public function index()
	{
		//$this->load->view('welcome_message');
                $data['title']= $this->title;
                $this->load->view('login',$data);
	}
        public  function checklogin()
        {
            //echo "testing page";
             $data['title']= $this->title;
              $data['title_fr1']= $this->title_fr1;

             $data["tr1"]="บำบัดทางทันตกรรมจัดฟันก่อนการศัลยกรรมสำหรับทารก (PSOT)";
             $data["tr2"]="ตรวจความพิการทางประสาท";
             $data["tr3"]="ตรวจภาวะแทรกซ้อนทางพันธุกรรม";
             $data["tr4"]="แ้ก้ไขการให้อาหารและเลี้ยงดูทารกที่มีภาวะปากแหว่งเพดานโหว่";
             $data["tr5"]="MRI, CT scan";
             $data["tr6"]="ผ่าตัดศัลยกรรมตกแต่งริมฝีปาก (Cheiloplasty)";
             $data["tr7"]="ผ่าตัดศัลยกรรมเพดานปาก (Palatoplasty)";
             $data["tr8"]="รักษาความบกพร่องของเพดานอ่อนและผนังคอหอย";
             $data["tr9"]="แก้ไขปัญหาการได้ยิน";
             $data["tr10"]="บำบัดทางทันตกรรมจัดฟัน";
             $data["tr11"]="ปลูกถ่ายกระดูกสันเหงือก";
             $data["tr12"]="ผ่าตัดตกแต่งกระดูกขากรรไกร";
             $data["tr13"]="ยืดถ่างขยายกระดูกขากรรไกร";
             $data["tr14"]="ฝึกการพูด";

             $this->load->view('home',$data);
        }
        public   function  callHN() //call all System  (12_progress)
        {
             $q = isset($_POST['q']) ? strval($_POST['q']) : '';

             $tb1="12_progress";
             $fname1="Clinic";
             $tb2="01_demographic";
             $va1="Epilepsy Clinic";
             $on1="12_progress.HN=01_demographic.HN";
             $where1="12_progress.Clinic";
             $lk1="12_progress.HN";
             $va_arr = array();
             $this->db->select('*');
            // $this->db->join($tb2,$on1,"left");
             $this->db->join($tb2, $on1 );
             $this->db->like($lk1,$q);
             $query=$this->db->get_where($tb1,array($where1=>$va1),20,0);
            // $query=$this->db->get($tb1,15,0);

             foreach($query->result() as $row )
             {
                 $va_arr[]=$row;
             }
             echo json_encode($va_arr);

        }
        public function insert_patient() //บันทึกประวัติผู้ป่วย
        {
                //---------- create database name=>tb_history_patient
               //id_history_patient     1
            
                  $HN=trim($this->input->get_post("HN"));  //2
                 //echo "<br>";
                  $DN=trim($this->input->get_post("DN"));  //3
                 //echo "<br>";
                  $othnumber=trim($this->input->get_post("othnumber"));  //4
                 //echo "<br>";
                  $CN=trim($this->input->get_post("CN"));  //5
                //echo "<br>";
                 $seriesnumber=trim($this->input->get_post("seriesnumber"));  //บัตรประชนชน  //6
                //echo "<br>";
                 $firstname=trim($this->input->get_post("firstname"));  //ชื่อ  //7
               //echo  "<br>";
                 $lastname=trim($this->input->get_post("lastname"));  //นามสกุล  //8
               //echo "<br>";


               //--------------รูปถ่าย :--------------------------------- ให้ upload ไปไว้ที่ ้upload
                                  $fname1 =  $_FILES['file1']['name'];  //9   =>filename
                                //echo "<br>";
                     	 $fsize1=$_FILES['file1']['size'];
                                //echo "<br>";
                     	 $ftmpname1=$_FILES['file1']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename1=$_FILES['file1']['type'];
                                //echo "<br>";
                                
                                if(   !empty(  $fname1   )      )
                                   {
                                           $source = $_FILES['file1']['tmp_name'];
                                           $file_rec = $_FILES['file1']['tmp_name'];
                                           $target = "upload/".$_FILES['file1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }

               //--------------รูปถ่าย :---------------------------------

             $birthdate=trim($this->input->get_post("birthdate"));  //วัน/เดือน/ปี เกิด :  09/14/2016 08:45:29      //10
            //echo "<br>";
            
            //---------- convert วัน-เดือน-ปี  in database
            if(  !empty($birthdate)  &&  $birthdate != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$birthdate);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                       $conv_birthdate= $ex2[2]."-".$ex2[0]."-".$ex2[1];   // birthdate
                      //echo "<br>";       
            }else{
                 $conv_birthdate='';
            }
            

             $address=trim($this->input->get_post("address"));  //ที่อยู่ :     //11
            //echo "<br>";

             $nationality=trim($this->input->get_post("nationality")); //สัญชาติ :    //12
            //echo "<br>";
 
             $race=trim($this->input->get_post("race")); //เชื้อชาติ :    //13
            //echo "<br>";

              $religion=trim($this->input->get_post("religion")); //ศาสนา :    //14
            //echo "<br>";

             $namefather=trim($this->input->get_post('namefather')); //ชื่อบิดา    //15
            //echo "<br>"; 

             $fatherlastname=trim($this->input->get_post("fatherlastname")); //บิดา - นามสกุล :   //16
            //echo "<br>";
            
              $career=trim($this->input->get_post("career")); //อาชีพ :   //17
            //echo "<br>";
            
              $birthdatefahter=trim($this->input->get_post("birthdatefahter"));  //วัน/เดือน/ปี เกิด : บิดา
           // echo "<br>";
                        //---------- convert วัน-เดือน-ปี  in database
            if(  !empty($birthdatefahter)  &&  $birthdatefahter != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$birthdatefahter);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                       $conv_birthdatefahter= $ex2[2]."-".$ex2[0]."-".$ex2[1];   //18  =>birthdatefahter
                      //echo "<br>";       
            }
            else{
                 $conv_birthdatefahter='';
            }
            
            
            
            
             $age1=trim($this->input->get_post("age1")); //อายุบิดา   //19
            //echo "<br>";
            
              $disease=trim($this->input->get_post("disease"));  //โรคประจำตัวบิดา :    //20
            //echo "<br>";
            
              $mothername=trim($this->input->get_post("mothername"));  //ชื่อมารดา    //21
            //echo "<br>";
            
             $motherlastname=trim($this->input->get_post("motherlastname"));  // - นามสกุล   //22
            //echo "<br>";
            
             $mothercareer =trim($this->input->get_post("mothercareer")); //อาชีพ : มารดา  //23
            //echo "<br>";
            
              $birthdatemother=trim($this->input->get_post('birthdatemother')); // //วัน/เดือน/ปี เกิด : มารดา
            //echo "<br>";
         //---------- convert วัน-เดือน-ปี  in database
            if(  !empty($birthdatemother)  &&  $birthdatemother != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$birthdatemother);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_birthdatemother= $ex2[2]."-".$ex2[0]."-".$ex2[1];    //24   =>   birthdatemother
                    //  echo "<br>";       
            }
            else{
                 $conv_birthdatemother='';
            }
             
              $age2=trim($this->input->get_post("age2")); //อายุมารดา    //25
           // echo "<br>";
            
            
              $diseasemother=trim($this->input->get_post("diseasemother"));  //โรคประจำตัวมารดา :    //26
            //echo "<br>";
            
            
               $spousename=trim($this->input->get_post("spousename"));  //ชื่อ สามี/ภรรยา - นามสกุล :    //27
             //echo "<br>";
             
              $spouselastname=trim($this->input->get_post("spouselastname"));   //ชื่อ  นามสกุล :    //28
             //echo "<br>";
             
              $benefits=trim($this->input->get_post('benefits'));  //สวัสดิการการรักษา   //29
            // echo "<br>";
             
              $otherbenefits=trim($this->input->get_post("otherbenefits"));  //สวัสดิการการรักษา  อื่นๆ    //30
             //echo "<br>";
                
              $numberbenefits=trim($this->input->get_post("numberbenefits"));    //หมายเลข :   //31
             //echo "<br>";
                 
               $evertreat=trim($this->input->get_post('evertreat'));     // เคยได้รับการรักษามาก่อน :   1=ไม่ทราบ   2=ไม่เคย  3=เคย ระบุ      //32
             //echo "<br>";
             
               $otherevertreat=trim($this->input->get_post("otherevertreat"));   //เคย ระบุ    //33
             //echo "<br>";
             
               $treatmentfacility=trim($this->input->get_post('treatmentfacility'));   // สถานที่ที่ได้รับการรักษามาก่อน :     //34
             //echo "<br>";
             
               $doctor=trim($this->input->get_post("doctor"));  // แพทย์เจ้าของคนไข้ :      //35
              //echo "<br>";
              
              
              /*
               developmentallevel1

otherdevelopmentallevel
               */
              
               $developmentallevel=trim($this->input->get_post('developmentallevel'));  //ระดับพัฒนาการผู้ป่วย    //36
              //echo "<br>";
              
               $otherdevelopmentallevel=trim($this->input->get_post("otherdevelopmentallevel")); //ระดับพัฒนาการผู้ป่วย     //37
              //echo "<br>";
              
                $daterecord=date("Y-m-d");   //38
               //echo "<br>";
               
               //39  id_user ของผู้บันทึกข้อมูล
               
               /*
                $data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
);

$this->db->insert('mytable', $data);  
                
                */
               
               $table="tb_history_patient";   //FROM `tb_history_patient` 
               $data=array(
                   'HN'=>$HN,
                   'DN'=>$DN,
                   'othnumber'=>$othnumber,
                   'CN'=>$CN,
                   'seriesnumber'=>$seriesnumber,
                   'firstname'=>$firstname,
                   'lastname'=>$lastname,
                   'filename'=>$fname1,
                   'birthdate'=>$conv_birthdate,
                   'address'=>$address,
                   'nationality'=>$nationality,
                   'race'=>$race,
                   'religion'=>$religion,
                   'namefather'=>$namefather,
                   'fatherlastname'=>$fatherlastname,
                   'career'=>$career,
                   'birthdatefahter'=>$conv_birthdatefahter,
                   'age1'=>$age1,
                   'disease'=>$disease,
                   'mothername'=>$mothername,
                   'motherlastname'=>$motherlastname,
                   'mothercareer'=>$mothercareer,
                   'birthdatemother'=>$conv_birthdatemother,
                   'age2'=>$age2,
                   'diseasemother'=>$diseasemother,
                   'spousename'=>$spousename,
                   'spouselastname'=>$spouselastname,
                   'benefits'=>$benefits,
                   'otherbenefits'=>$otherbenefits,
                   'numberbenefits'=>$numberbenefits,
                   'evertreat'=>$evertreat,
                   'otherevertreat'=>$otherevertreat,
                   'treatmentfacility'=>$treatmentfacility,
                   'doctor'=>$doctor,
                   'developmentallevel'=>$developmentallevel,
                   'otherdevelopmentallevel'=>$otherdevelopmentallevel,
                   'daterecord'=>$daterecord,
                   'id_user'=>'',
                   
               );
               
                  $check_inst=$this->db->insert($table,$data);
                  if(  $check_inst   )
                  {
                       //$jcheck=1;
                        echo 1;
                  }
                  else
                  {
                       //$jcheck=0;
                       echo 0;
                  }
              
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
