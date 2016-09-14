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
        //----- ่json call table name is    tb_history_patient
        //   127.0.0.1/dental/index.php/welcome/json_tb1/
        //    http://127.0.0.1/dental/index.php/welcome/json_tb1/
        function  json_tb1()  //$tb="tb_history_patient";
        {
            $tb="tb_history_patient";
            $this->db->order_by("id_history_patient","DESC");
           //  $query=$this->db->get($tb,10);
            $query=$this->db->get($tb);
            foreach($query->result() as $row)
            {
                  $rows[]=$row;
            }
            echo json_encode($rows);
        }
        
          //    http://127.0.0.1/dental/index.php/welcome/delete_tb1/22
        function delete_tb1() // delete => $tb="tb_history_patient";
        {
            
              
              /*
               $tables = array('table1', 'table2', 'table3');
$this->db->where('id', '5');
$this->db->delete($tables);
               */
              
                $tb="tb_history_patient";
                $id=trim($this->uri->segment(3));
                
                //id_history_patient
                $this->db->where('id_history_patient',$id);
                $ck=$this->db->delete($tb);
                 if( $ck )
                 {
                     echo 1;
                 }
                 else if( !$ck )
                 {
                     echo 0;
                 }
              
        }
        
          //    http://127.0.0.1/dental/index.php/welcome/insert_tb2
        function insert_tb2() //table insert   => tb_diagnosis
        {
               //echo "T";
            //  id_diagnosis //1
                $id_history_patient=trim($this->input->get_post("id_history_patient"));  //2
               //echo "<br>";
                $result_analysis=trim($this->input->get_post("result_analysis"));  //3  วิเคราะห์ผล
               //echo  "<br>";
                $facialcleft=trim($this->input->get_post("facialcleft"));  //4 Facial cleft : 1=Non-cleft ,2=Cleft ระบุ	 

              // echo "<br>";
                $otherfacialcleft=trim($this->input->get_post("otherfacialcleft"));  //5  ระบุ Facial cleft : 	

              // echo "<br>";
               
               // `tb_diagnosis` 
                $tb="tb_diagnosis";
                $data=array(
                    'id_history_patient'=>$id_history_patient,
                    'result_analysis'=>$result_analysis,
                    'facialcleft'=>$facialcleft,
                    'otherfacialcleft'=>$otherfacialcleft,
                );
                   $check_inst=$this->db->insert($tb,$data);
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
        
          //    http://127.0.0.1/dental/index.php/welcome/json_tb2
        function  json_tb2() //ดึงข้อมูล => `tb_diagnosis` 
        {
              $tb1="tb_diagnosis";   //main table
              $tb2="tb_history_patient";  // table join  name
              
              $this->db->join($tb2, $tb2.".id_history_patient=".$tb1.".id_history_patient" ,"left");
              $query=$this->db->get($tb1);
              foreach($query->result() as $row )
              {
                    $rows[]=$row;
              }
              echo  json_encode($rows);
        }
          //    http://127.0.0.1/dental/index.php/welcome/del_tb2/7
        function del_tb2()  #   delete  ข้อมูล => `tb_diagnosis` 
        {
             $tb="tb_diagnosis";
             $id=$this->uri->segment(3);
             $this->db->where('id_diagnosis',$id);
             $del=$this->db->delete($tb);
             if( $del )
             {  echo 1; }
             elseif( !$del )
             {  echo 0;  }
             
        }
        //-------------- Treatment -------------------------------------------------------
        //---------Treatment 1-----------------------------------
         //    http://127.0.0.1/dental/index.php/welcome/inst_tr1
        function inst_tr1() //form treatment 1
        {
            
                $id_history_patient=trim($this->input->get_post("id_history_patient"));  //2
               //echo "<br>";
                 $doctor_fr1=trim($this->input->get_post("doctor_fr1"));  //ทันตแพทย์ผู้ทำการรักษา
               //echo "<br>";
                $joindoctor_fr1=trim($this->input->get_post("joindoctor_fr1")); // ทันตแพทย์ผู้ร่วมทำการรักษา :
               //echo "<br>";
               
               
                $date_fr1=trim($this->input->get_post("date_fr1"));   //วัน/เดือน/ปี ที่เริ่มทำการรักษา :
              
                  //---------- convert วัน-เดือน-ปี  in database
            if(  !empty($date_fr1)  &&  $date_fr1 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date_fr1);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr1= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                  $conv_date_fr1='';
            }
            
              // echo  $conv_date_fr1;
              // echo "<br>";
               
        
              
          
              //  echo  $age2_fr1=trim($this->input->get_post("age2_fr1"));   //  วัน/เดือน/ปี ที่สิ้นสุดการรักษา :
              //  echo "<br>";
               
               
                $date2_fr1=trim($this->input->get_post("date2_fr1"));  //  วัน/เดือน/ปี ที่สิ้นสุดการรักษา :
              // echo "<br>";
                
                
                     if(  !empty($date2_fr1)  &&  $date2_fr1  != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date2_fr1);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date2_fr1 = $ex2[2]."-".$ex2[0]."-".$ex2[1];    //24   =>   birthdatemother
                    //  echo "<br>";       
            }
            else{
                   $conv_date2_fr1 ='';
            }

                
                
               //echo   $conv_date2_fr1;
               // echo "<br>";
                

              $procedure_fr1=trim($this->input->get_post("procedure_fr1"));  //Procedure : 
            // echo "<br>";
              
               $otherprocedure_fr1=trim($this->input->get_post("otherprocedure_fr1"));  // 5.อื่นๆ   Procedure : 
              //echo "<br>";
             
              //  id="file1_fr1" 
              //--------------รูปถ่าย :--รูปถ่ายก่อนการรักษา (Before) : ------------------------------- ให้ upload ไปไว้ที่ ้upload
                                 $file1_fr1 =  $_FILES['file1_fr1']['name'];  //9   =>filename
                               // echo "<br>";
                                 $fsize1_fr1=$_FILES['file1_fr1']['size'];
                              // echo "<br>";
                     	 $ftmpname1_fr1=$_FILES['file1_fr1']['tmp_name'];
                              //  echo "<br>";
                     	 $ftypename1_fr1=$_FILES['file1_fr1']['type'];
                                //echo "<br>";
                                  if(   !empty(  $file1_fr1   )      )
                                   {
                                           $source = $_FILES['file1_fr1']['tmp_name'];
                                           $file_rec = $_FILES['file1_fr1']['tmp_name'];
                                           $target = "upload/".$_FILES['file1_fr1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }        
                                
                                
              //  id="file2_fr1" 
               //--------------รูปถ่าย :--รูปถ่ายระหว่างการรักษา (During) :------------------------------- ให้ upload ไปไว้ที่ ้upload
                                 $file2_fr1 =  $_FILES['file2_fr1']['name'];  //9   =>filename
                               // echo "<br>";
                                $fsize2_fr1=$_FILES['file2_fr1']['size'];
                               // echo "<br>";
                     	 $ftmpname2_fr1=$_FILES['file2_fr1']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename2_fr1=$_FILES['file2_fr1']['type'];
                                //echo "<br>";
                                  if(   !empty(   $file2_fr1   )      )
                                   {
                                           $source = $_FILES['file2_fr1']['tmp_name'];
                                           $file_rec = $_FILES['file2_fr1']['tmp_name'];
                                           $target = "upload/".$_FILES['file2_fr1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   } 
                                   
                                   
                                   
              //  id="file3_fr1" 
                   //--------------รูปถ่ายหลังการรักษา (After) : ------------------------------ ให้ upload ไปไว้ที่ ้upload
                                             $file3_fr1 =  $_FILES['file3_fr1']['name'];  //9   =>filename
                              //  echo "<br>";
                     	 $fsize3_fr1=$_FILES['file3_fr1']['size'];
                              //  echo "<br>";
                     	 $ftmpname3_fr1=$_FILES['file3_fr1']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename3_fr1=$_FILES['file3_fr1']['type'];
                               // echo "<br>";
                                  if(   !empty(   $file3_fr1   )      )
                                   {
                                           $source = $_FILES['file3_fr1']['tmp_name'];
                                           $file_rec = $_FILES['file3_fr1']['tmp_name'];
                                           $target = "upload/".$_FILES['file3_fr1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   } 
                                   
                 
                       $cast=trim($this->input->get_post("cast"));             
                     // echo "<br>";
                      
                      
                      $data=array(
                          'id_history_patient'=>$id_history_patient,       #
                          'doctor'=>$doctor_fr1,  #ทันตแพทย์ผู้ทำการรักษา        
                          'joindoctor'=>$joindoctor_fr1,  #ทันตแพทย์ผู้ร่วมทำการรักษา :
                          'begin_date'=>$conv_date_fr1,  #//วัน/เดือน/ปี ที่เริ่มทำการรักษา :
                          'end_date'=> $conv_date2_fr1,   #วัน/เดือน/ปี ที่สิ้นสุดการรักษา : 
                          'procedure'=>$procedure_fr1, #Procedure : 
                          'otherprocedure'=>$otherprocedure_fr1,   #5.อื่นๆ   Procedure : 
                          'file1'=>$file1_fr1 ,   #รูปถ่ายก่อนการรักษา (Before) : 
                          'file2'=>$file2_fr1,  #รูปถ่ายระหว่างการรักษา (During)
                          'file3'=>$file3_fr1,  #รูปถ่ายหลังการรักษา (After) :
                          'cast'=>$cast,  #Dental Cast : 
                      );
                      
                      $tb="tb_psot";
                      $ck=$this->db->insert($tb,$data);
                      if( $ck )
                      {  echo 1; }
                      elseif( !$ck )
                      {  echo 0;  }
                                   
        }
       //    http://127.0.0.1/dental/index.php/welcome/json_tr1
        function  json_tr1() # json  call  1.Pre-surgical orthopedics therapy (PSOT)
        {
             $tb1="tb_psot";
             // `tb_history_patient` 
             $tbj1="tb_history_patient";
             $this->db->join($tbj1,$tb1.".id_history_patient=".$tbj1.".id_history_patient","left");
             $q=$this->db->get($tb1);
             foreach($q->result() as $row)
             { $rows[]=$row;  }
             echo json_encode($rows);
        }
        #   http://127.0.0.1/dental/index.php/welcome/del_tr1/3
        function del_tr1()# delete table =>1.Pre-surgical orthopedics therapy (PSOT)
        {
            $id=trim($this->uri->segment(3));
            $tb="tb_psot";
            $this->db->where('id_psot',$id);
             $ck=$this->db->delete($tb);
             if( $ck )
             {
                 echo 1;
             }
             elseif( !$ck )
             {
                 echo 0;
             }
        }
        #   http://127.0.0.1/dental/index.php/welcome/insert_fr4
        function  insert_fr4() //------- เพิ่ม  in table  =>   	4. Interceptive orthodontic treatment 
        {
            
            /*
                          $data=array(
                          'id_history_patient'=>$id_history_patient,       #
                          'doctor'=>$doctor_fr1,  #ทันตแพทย์ผู้ทำการรักษา        
                          'joindoctor'=>$joindoctor_fr1,  #ทันตแพทย์ผู้ร่วมทำการรักษา :
                          'begin_date'=>$conv_date_fr1,  #//วัน/เดือน/ปี ที่เริ่มทำการรักษา :
                          'end_date'=> $conv_date2_fr1,   #วัน/เดือน/ปี ที่สิ้นสุดการรักษา : 
                          'procedure'=>$procedure_fr1, #Procedure : 
                          'otherprocedure'=>$otherprocedure_fr1,   #5.อื่นๆ   Procedure : 
                          'file1'=>$file1_fr1 ,   #รูปถ่ายก่อนการรักษา (Before) : 
                          'file2'=>$file2_fr1,  #รูปถ่ายระหว่างการรักษา (During)
                          'file3'=>$file3_fr1,  #รูปถ่ายหลังการรักษา (After) :
                          'cast'=>$cast,  #Dental Cast : 
                      );
             */
            
              $id_history_patient_fr4=trim($this->input->get_post("id_history_patient_fr4"));
             //echo "<br>";
               $doctor_fr4=trim($this->input->get_post("doctor_fr4"));
            //echo "<br>"; 
               
               
               
               $date_fr4=trim($this->input->get_post("date_fr4"));
             //echo "<br>"; 
               if(  !empty($date_fr4)  &&  $date_fr4 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date_fr4);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr4= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                  $conv_date_fr4='';
            }
           // echo  $conv_date_fr4;
           //echo "<br>";
            
            
              $date2_fr4=trim($this->input->get_post("date2_fr4"));
              //echo "<br>";
                             if(  !empty($date2_fr4)  &&  $date2_fr4 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date2_fr4);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date2_fr4= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                    $conv_date2_fr4='';
            }
            //echo    $conv_date2_fr4;
            //echo "<br>";
            
             $goslon=trim($this->input->get_post("goslon"));  //Classification of GOSLON
            //echo "<br>";
            
             $incisor=trim($this->input->get_post("incisor")); //ncisor classification of malocclusion 
            //echo "<br>";
            
           $skeletal=trim($this->input->get_post("skeletal")); //Skeletal classification of malocclusion : 
           // echo "<br>";
             

            

            
           
             //--------------รูปถ่าย :--------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file1_fr1 =  $_FILES['fileupload1_fr4']['name'];  //9   =>filename
                               // echo "<br>";
                           //echo "<br>";
                     	 $fsize1=$_FILES['fileupload1_fr4']['size'];
                                //echo "<br>";
                     	 $ftmpname1=$_FILES['fileupload1_fr4']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename1=$_FILES['fileupload1_fr4']['type'];
                                //echo "<br>";
                                
                                if(   !empty(  $file1_fr1   )      )
                                   {
                                           $source = $_FILES['fileupload1_fr4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                   
                       //--------------รูปถ่าย :--------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file2_fr1 =  $_FILES['fileupload2_fr4']['name'];  //9   =>filename
                               // echo "<br>";
                           //echo "<br>";
                     	 $fsize2=$_FILES['fileupload2_fr4']['size'];
                                //echo "<br>";
                     	 $ftmpname2=$_FILES['fileupload2_fr4']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename2=$_FILES['fileupload2_fr4']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2_fr1     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }               
            
      //--------------รูปถ่าย :--------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file3_fr1 =  $_FILES['fileupload3_fr4']['name'];  //9   =>filename
                               // echo "<br>";
                           //echo "<br>";
                     	 $fsize3=$_FILES['fileupload3_fr4']['size'];
                                //echo "<br>";
                     	 $ftmpname3=$_FILES['fileupload3_fr4']['tmp_name'];
                                //echo "<br>";
                     	 $ftypename3=$_FILES['fileupload3_fr4']['type'];
                                //echo "<br>";
                                
                                if(   !empty(    $file3_fr1     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }    
            
            
            

            
            
              $dentalcast=trim($this->input->get_post("dentalcast"));  //Dental Cast
            //echo "<br>";
  
    $data=array(
                  //  'id_interceptive'        #1
                   "id_history_patient"=>$id_history_patient_fr4,   #2
                   "doctor"=>$doctor_fr4,  //ทันตแพทย์ผู้ทำการรักษา    #3
                   "begin_date"=>$conv_date_fr4,  //วัน/เดือน/ปี ที่เริ่มทำการรักษา  #4
                    "end_date"=>$conv_date2_fr4,  //วัน/เดือน/ปี ที่สิ้นสุดการรักษา  #5
                   "goslon"=>$goslon,  //Classification of GOSLON  #6
                    "incisor"=>$incisor,  //Incisor classification of malocclusion   #7
                    "skeleta"=>$skeletal,  //Skeletal classification of malocclusion   #8
                    "filename1"=> $file1_fr1,  //รูปถ่าย (Before)  #9
                      "filename2"=>$file2_fr1,  //รูปถ่ายระหว่างการรักษา (During)   #10
                    "filename3"=> $file3_fr1,  //รูปถ่ายหลังการรักษา (After)  #11
                    "dentalcast"=>$dentalcast,   //Dental Cast :  #12
              );
              $tb="tb_interceptive";  #4. Interceptive orthodontic treatment 
              $ck=$this->db->insert($tb,$data);
              $inst=$this->db->insert($tb,$data);
              if( $inst  )
              {
                      echo 1;
              }
              elseif( $inst )
              {
                      echo  0;
              }
        }
        
        #   http://127.0.0.1/dental/index.php/welcome/json_fr4
        function json_fr4()  //=>table    `tb_interceptive` 
        {
                  $tb="tb_interceptive";  #4. Interceptive orthodontic treatment 
                  $tbj1="tb_history_patient";
                  $this->db->join($tbj1,$tbj1.".id_history_patient=".$tbj1.".id_history_patient","left");
                  $q=$this->db->get($tb);
                  foreach($q->result() as $row)
                  {
                        $rows[]=$row;
                  }
                  echo  json_encode($rows);
                  
        }
        #   http://127.0.0.1/dental/index.php/welcome/del_fr4
        function del_fr4()
        {
               $tb="tb_interceptive";  #4. Interceptive orthodontic treatment 
               $id=$this->uri->segment(3);
              
               $this->db->where('id_interceptive',$id);
               
               
               $ck=$this->db->delete($tb);
               if( $ck )
               {
                   echo 1;
               }
               elseif( !$ck )
               {
                   echo 0;
               }
                
        }
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
