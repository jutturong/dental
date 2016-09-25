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
               
                $sex=trim($this->input->get_post('sex'));
                $tel=trim($this->input->get_post("tel"));
                
                
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
                   'sex'=>$sex,
                   'tel'=>$tel,
                   
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
            $id=$this->uri->segment(3);
            $tb="tb_history_patient";
            $this->db->order_by("id_history_patient","DESC");
           //  $query=$this->db->get($tb,10);
          //  $query=$this->db->get_where($tb,array("id_history_patient"=>$id));
             $query=$this->db->get($tb);
            foreach($query->result() as $row)
            {
                  $rows[]=$row;
            }
            echo json_encode($rows);
        }
        
         function  json_fr1()  //$tb="tb_history_patient";
        {
            $id=$this->uri->segment(3);
            //$tb="tb_history_patient";
            $tb="tb_psot";
            $this->db->order_by("id_psot","DESC");
           //  $query=$this->db->get($tb,10);
           $query=$this->db->get_where($tb,array("id_history_patient"=>$id),5);
           //  $query=$this->db->get($tb);
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
               // $id_history_patient=trim($this->input->get_post("id_history_patient"));  //2
                //id_history_patient_diag
                 $id_history_patient=trim($this->input->get_post("id_history_patient_diag"));  //2
                
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
              
              $id=trim($this->uri->segment(3));
              
              $this->db->join($tb2, $tb2.".id_history_patient=".$tb1.".id_history_patient" ,"right");
              //json_tb2
           //   $query=$this->db->get($tb1);
               $query=$this->db->get_where($tb1,array(  $tb1.".id_history_patient"=>$id));
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
                

              $procedure_fr1=trim($this->input->get_post("strapping"));  //Procedure : 
            // echo "<br>";
              
              /*
                                      <input type="checkbox"  name="strapping"  id="strapping"  value="1" />  1.Strapping  
                        <input  type="checkbox"  name="nasal"   id="nasal"   value="1"  />  2.Nasal Molding 
                        <input  type="checkbox"  name="alveolar"    id="alveolar"  value="1" />  3.Alveolar  Molding  
                        <input  type="checkbox"  name="simple"   id="simple" value="1" /> 4. Simple Obturator 
                        <br>
                        <input   type="checkbox" name="other_procedure"  id="other_procedure"  value="1" />  5.อื่นๆ 
                   */
              
              
               $nasal=trim($this->input->get_post("nasal_fr1"));
               $alveolar=trim($this->input->get_post("alveolar"));
               $simple=trim($this->input->get_post("simple"));
                $other_procedure=trim($this->input->get_post("other_procedure"));                             
                                              
              
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
                          
                          
                         
                          /*
                                 $nasal=trim($this->input->get_post("nasal"));
               $alveolar=trim($this->input->get_post("alveolar"));
               $simple=trim($this->input->get_post("simple"));
                $other_procedure=trim($this->input->get_post("other_procedure"));    
                           */
                          
                          "nasal"=> $nasal,
                          "alveolar"=> $alveolar,
                          "simple"=>$simple,
                          "other_procedure"=> $other_procedure,
                          
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
             
             $this->db->order_by("id_psot","desc");
           //  $this->db->join($tbj1,$tb1.".id_history_patient=".$tbj1.".id_history_patient","left");
             $q=$this->db->get($tb1,1);
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
                  $id=$this->uri->segment(3);
                //  $this->db->join($tbj1,$tb.".id_history_patient=".$tbj1.".id_history_patient","left");
                //  $q=$this->db->get($tb);
                    $this->db->order_by("id_interceptive","desc");
                   $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),1);
                   
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
        
        #--------------- form 6  6. Bone graft surgery  -----------------------------------
         #   http://127.0.0.1/dental/index.php/welcome/inst_fr6
        function inst_fr6()
        {

                   $id_history_patient_fr6=trim($this->input->get_post("id_history_patient_fr6"));
                //echo "<br>";
                  $doctor=trim($this->input->get_post("doctor_fr6"));
                //echo "<br>";
                 
                
                $date_fr6=trim($this->input->get_post("date_fr6"));
             //echo "<br>"; 
               if(  !empty($date_fr6)  &&  $date_fr6 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date_fr6);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr6= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr6='';
            }
            
            //echo   $conv_date_fr6;
            //echo "<br>";
            
             $technic=trim($this->input->get_post("technic"));    //เทคนิคที่ใช้ 
            // echo "<br>";
            
            
             
                                    //------------รูปถ่ายก่อนการรักษา (ฺBefore) : ------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file1 =  $_FILES['fileupload1_fr6']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                     
             
             
                               
                                   
                          //------------รูปถ่ายระหว่างการรักษา (ฺDuring) : ------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file2 =  $_FILES['fileupload2_fr6']['name'];  //9   =>filename
                               // echo "<br>";
                           //echo "<br>";
                     	// $fsize2=$_FILES['fileupload2_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname2=$_FILES['fileupload2_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename2=$_FILES['fileupload2_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(      $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
           
                                   
                                   //------------รูปถ่ายหลังการรักษา (ฺAfter) :  : ------------------------------- ให้ upload ไปไว้ที่ ้upload
                                    $file3 =  $_FILES['fileupload3_fr6']['name'];  //9   =>filename
                              
                     	// $fsize3=$_FILES['fileupload3_fr6']['size'];
                                
                     	// $ftmpname3=$_FILES['fileupload3_fr6']['tmp_name'];
                             
                     	// $ftypename3=$_FILES['fileupload3_fr6']['type'];
                                
                                
                                if(   !empty(        $file3        )      )
                                   {
                                           $source = $_FILES['fileupload3_fr6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                                   
                                   $dentalcast_fr6=trim($this->input->get_post("dentalcast_fr6")); //Dental Cast : 
                               //echo "<br>";
                               
                               
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
                               
                                   
                               $tb="tb_bonegraft";
                               $data=array(
                                   // "id_bonegraft",               //1
                                   "id_history_patient"  =>$id_history_patient_fr6,   //2
                                   "doctor"=>$doctor,  //แพทย์ผู้ทำการรักษา :      //3
                                   "date1"=>$conv_date_fr6,  //วัน/เดือน/ปี ที่่ทำการรักษา :      //4
                                   "technic"=>$technic, //เทคนิคที่ใช้ :               //5
                                   "file1"=>$file1, //รูปถ่ายก่อนการรักษา (ฺBefore) :            //6
                                     "file2"=>$file2, //รูปถ่ายระหว่างการรักษา (ฺDuring)         //7
                                    "file3"=> $file3 , //รูปถ่ายหลังการรักษา (ฺAfter) :                //8
                                   "dentalcast"=> $dentalcast_fr6,   //Dental Cast :             //9
                               );
                               
                               
                               $inst=$this->db->insert($tb,$data);
                               if( $inst )
                               {
                                    echo 1;
                               }
                               elseif( !$inst )
                               {
                                   echo 0;
                               }
        }
       #   http://127.0.0.1/dental/index.php/welcome/json_fr6/23 
        function  json_fr6() //6. Bone graft surgery 
        {
            //`tb_bonegraft`
                $tb="tb_bonegraft";
                $tbj1="tb_history_patient";
                
               $id=$this->uri->segment(3);
               $this->db->join($tbj1,$tb.".id_history_patient=".$tbj1.".id_history_patient","left");
              $q= $this->db->get_where($tb,array($tb.".id_history_patient"=>$id));
              foreach($q->result() as $row)
              {
                  $rows[]=$row;
              }
              echo   json_encode($rows);
        }
        #   http://127.0.0.1/dental/index.php/welcome/del_fr6/4
        function  del_fr6()
        {
                $id=trim($this->uri->segment(3));
                $tb="tb_bonegraft";
                $this->db->where('id_bonegraft',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
        
        #----------------7. Growth modification-----------------
         #   http://127.0.0.1/dental/index.php/welcome/insert_fr7
        function insert_fr7()
        {
             $id_history_patient_fr7=trim($this->input->get_post("id_history_patient_fr7"));
            //echo "<br>";
            /*
                         $data=array(
                                   // "id_bonegraft",               //1
                                   "id_history_patient"  =>$id_history_patient_fr6,   //2
                                   "doctor"=>$doctor,  //แพทย์ผู้ทำการรักษา :      //3
                                   "date1"=>$date_fr6,  //วัน/เดือน/ปี ที่่ทำการรักษา :      //4
                                   "technic"=>$technic, //เทคนิคที่ใช้ :               //5
                                   "file1"=>$file1, //รูปถ่ายก่อนการรักษา (ฺBefore) :            //6
                                     "file2"=>$file2, //รูปถ่ายระหว่างการรักษา (ฺDuring)         //7
                                    "file3"=> $file3 , //รูปถ่ายหลังการรักษา (ฺAfter) :                //8
                                   "dentalcast"=> $dentalcast_fr6,   //Dental Cast :             //9
                               );
             */
                $doctor=trim($this->input->get_post("doctor_fr7"));
               //echo "<br>";
               
               $date_fr7=trim($this->input->get_post("date_fr7"));
             //echo "<br>"; 
               if(  !empty($date_fr7)  &&  $date_fr7 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date_fr7);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr7= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr7='';
            }
            
            //echo  $conv_date_fr7;
            //echo "<br>";
            
              $date2_fr7=trim($this->input->get_post("date2_fr7"));
              //echo "<br>";
                             if(  !empty( $date2_fr7 )  &&   $date2_fr7 != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$date2_fr7);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date2_fr7= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                    $conv_date2_fr7='';
            }
            
               //echo  $conv_date2_fr7;
               //echo "<br>";
               
               
            $goslon_fr7=trim($this->input->get_post("goslon_fr7"));     //Classification of GOSLON
            //echo "<br>";
            
            $Incisor_fr7=trim($this->input->get_post("Incisor_fr7"));     //Incisor classification of malocclusion:
            //echo "<br>";
            
             $skeletal_fr7=trim($this->input->get_post("skeletal_fr7"));     //Skeletal classification :
             //echo "<br>";
             
               $typetool_fr7=trim($this->input->get_post("typetool_fr7"));        // Facial mask
               //echo "<br>";
               
            $other_typetool_fr7=trim($this->input->get_post("other_typetool_fr7"));     //Facial mask     ระบุ
           // echo "<br>";
            
            
            $appliance_fr7=trim($this->input->get_post("appliance_fr7"));  //Facial mask
            //echo "<br>";
              
             $other_appliance_fr7=trim($this->input->get_post("other_appliance_fr7"));    // Functional appliance     ระบุ 
            //echo "<br>";
            
            
             //------------รูปถ่ายก่อนการรักษา (Before)----------------------------------------------------
                                    $file1 =  $_FILES['fileupload1_fr7']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr7']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr7']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr7']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                            
                                   
                           //------------รูปถ่ายระหว่างรักษา (During) ---------------------------------------------------
                                    $file2 =  $_FILES['fileupload2_fr7']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(      $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr7']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr7']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr7']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }                   
                                   
                                   
            
                                   
                              //------------รูปถ่ายหลังรักษา (After)  ---------------------------------------------------
                                    $file3 =  $_FILES['fileupload3_fr7']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(      $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr7']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr7']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr7']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }  
                                   
                                   
                          
                             $dentalcast_fr7=trim($this->input->get_post("dentalcast_fr7"));    //Dental Cast :       
                          // echo "<br>";
                           
                           $data=array(
                                 //    id_growth       1
                               "id_history_patient"=>$id_history_patient_fr7,   //2
                               "doctor"=>$doctor,  //ทันตแพทย์ผู้ทำการรักษา :      3
                               "begin_date"=>$date_fr7,  //วัน/เดือน/ปี ที่เริ่มทำการรักษา     4
                               "end_date"=> $date2_fr7,  //วัน/เดือน/ปี ที่สิ้นสุดการรักษา      5
                               "goslon"=>$goslon_fr7,    //Classification of GOSLON        6
                               "incisor"=> $Incisor_fr7,    // Incisor classification of malocclusion:     7
                               "skeletal"=>$skeletal_fr7, //Skeletal classification :      8
                               "typetool"=>$typetool_fr7,  //// Facial mask      9
                               "other_typetool"=>$other_typetool_fr7 ,  //Facial mask     ระบุ      10
                               "appliance"=>$appliance_fr7,    //Facial mask     11
                               "other_appliance"=>$other_appliance_fr7,   // Functional appliance     ระบุ     12
                               "filename1"=>$file1,  //รูปถ่ายก่อนการรักษา (Before)     13
                               "filename2"=>$file2 ,   //รูปถ่ายระหว่างรักษา (During)      14
                               "filename3"=>$file3 ,   //รูปถ่ายหลังรักษา (After) :       15
                               "dentalcast"=>$dentalcast_fr7,   //Dental Cast :       16
                           );
                                $tb="tb_growth";   //7. Growth modification 
                                $inst=$this->db->insert($tb,$data);
                                if( $inst  )
                                {  echo 1;  }
                                elseif( !$inst  )
                                {  echo 0;  }
                                
        }
         #   http://127.0.0.1/dental/index.php/welcome/json_tr7/21
        function json_tr7() //7. Growth modification 
        {
               $id=$this->uri->segment(3);   
              $tb="tb_growth"; 
                      $tbj1="tb_history_patient";
             //   $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","right");
                   // $q=$this->db->get($tb);
                   $this->db->order_by("id_growth","desc");
                  $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),1);
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        }
                #   http://127.0.0.1/dental/index.php/welcome/del_fr7/
        function  del_fr7()
        {
                $id=trim($this->uri->segment(3));
                 $tb="tb_growth"; 
                $this->db->where('id_growth',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
        #-------------8. Corrective Orthodontic Treatment ------------------ 
         #   http://127.0.0.1/dental/index.php/welcome/insert_fr8/
        function insert_fr8()
        {
                $id_history_patient=trim($this->input->get_post("id_history_patient_fr8"));
              //echo "<br>";
              
              /*
                $data=array(
                                 //    id_growth       1
                               "id_history_patient"=>$id_history_patient_fr7,   //2
                               "doctor"=>$doctor,  //ทันตแพทย์ผู้ทำการรักษา :      3
                               "begin_date"=>$date_fr7,  //วัน/เดือน/ปี ที่เริ่มทำการรักษา     4
                               "end_date"=> $date2_fr7,  //วัน/เดือน/ปี ที่สิ้นสุดการรักษา      5
                               "goslon"=>$goslon_fr7,    //Classification of GOSLON        6
                               "incisor"=> $Incisor_fr7,    // Incisor classification of malocclusion:     7
                               "skeletal"=>$skeletal_fr7, //Skeletal classification :      8
                               "typetool"=>$typetool_fr7,  //// Facial mask      9
                               "other_typetool"=>$other_typetool_fr7 ,  //Facial mask     ระบุ      10
                               "appliance"=>$appliance_fr7,    //Facial mask     11
                               "other_appliance"=>$other_appliance_fr7,   // Functional appliance     ระบุ     12
                               "filename1"=>$file1,  //รูปถ่ายก่อนการรักษา (Before)     13
                               "filename2"=>$file2 ,   //รูปถ่ายระหว่างรักษา (During)      14
                               "filename3"=>$file3 ,   //รูปถ่ายหลังรักษา (After) :       15
                               "dentalcast"=>$dentalcast_fr7,   //Dental Cast :       16
                           );
               */
              
               $doctor=trim($this->input->get_post("doctor_fr8")); //ทันตแพทย์ผู้ทำการรักษา :
              //echo   "<br>";
              
               $begin_date=trim($this->input->get_post("date_fr8")); //วัน/เดือน/ปี ที่เริ่มทำการรักษา :
              //echo   "<br>";
              
                      if(  !empty($begin_date)  &&  $begin_date != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$begin_date);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr8= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr8='';
            }
            
            //echo $conv_date_fr8;
            //echo "<br>";
            
              
               $end_date=trim($this->input->get_post("date2_fr8")); //วัน/เดือน/ปี ที่สิ้นสุดการรักษา :
              //echo   "<br>";
                            if(  !empty($end_date)  &&  $end_date != ''  )  //09/14/2016 08:45:29
            {
                      $ex1=explode(" ",$end_date);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date2_fr8= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date2_fr8='';
            }
              
            //  $conv_date2_fr8;
            //echo "<br>";
            
             $goslon_fr8=trim($this->input->get_post("goslon_fr8"));  //Classification of GOSLON : 
            //echo "<br>";
              
              $incisor = trim($this->input->get_post('incisor_fr8'));  //Incisor classification of malocclusion : 
            //echo "<br>";
                 
             $skeletal=trim($this->input->get_post("skeletal_fr8"));  // Skeletal classification of malocclusion :
             //echo "<br>";
             
              $tool_fr8=trim($this->input->get_post("tool_fr8"));   //ชนิดของเครื่องมือ :
             //echo "<br>";
             
             //----------รูปถ่ายก่อนการรักษา (Before) : 
                            $file1 =  $_FILES['fileupload1_fr8']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr8']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr8']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr8']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
             
             //----------รูปถ่ายระหว่างรักษา (During) : 
                                       $file2 =  $_FILES['fileupload2_fr8']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr8']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr8']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr8']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
             
             
             //----------รูปถ่ายหลังรักษา (After) : 
                                 $file3 =  $_FILES['fileupload3_fr8']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr8']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr8']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr8']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                 $dentalcast_fr8=trim($this->input->get_post("dentalcast_fr8"));   //Dental Cast :                  
                //echo "<br>";
                
               
                $data=array(
                    // id_corrective      //1
                     "id_history_patient"=> $id_history_patient,   //2
                      "doctor"=>$doctor,    //3
                      "begin_date"=>$conv_date_fr8 ,   //4
                      "end_date"=>$conv_date2_fr8 ,   //5
                     "goslon"=>$goslon_fr8,   //6
                     "incisor"=>$incisor,    //7
                     "skeletal"=>$skeletal,    //8
                     "tool"=>$tool_fr8,    //9
                     "file1"=>$file1,    //10
                     "file2"=>$file2,    //11
                     "file3"=> $file3,    //12
                     "dentalcast"=>$dentalcast_fr8,    //13
                );
                 $tb="tb_corrective";
                 $ck=$this->db->insert($tb,$data);
                 if( $ck )
                 {
                     echo 1;
                 }elseif( !$ck )
                 {
                     echo 0;
                 }
                
        }
         #   http://127.0.0.1/dental/index.php/welcome/json_tr8
        function json_tr8() //7. Growth modification 
        {
                   $tb="tb_corrective";
                      $tbj1="tb_history_patient";
                      
                       $id=$this->uri->segment(3);
                       
                       
              //  $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","right");
                  //  $q=$this->db->get($tb);
                 $this->db->order_by("id_corrective","desc");
                 $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),1);
                 
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        }
         #   http://127.0.0.1/dental/index.php/welcome/del_fr8/
        function  del_fr8()
        {
                $id=trim($this->uri->segment(3));
                  $tb="tb_corrective";
                $this->db->where('id_corrective',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
        #------------------- 9. Orthognathic surgery -------------
        #   http://127.0.0.1/dental/index.php/welcome/insert_fr9/
        function insert_fr9()
        {
                $id_history_patient=trim($this->input->get_post("id_history_patient_fr9"));
              //echo "<br>";
               $doctor_fr9=trim($this->input->get_post("doctor_fr9")); //แพทย์ผู้ทำการรักษา
               //echo "<br>";
               
                 $date_fr9=trim($this->input->get_post("date_fr9"));
               //echo "<br>";
               if(  !empty($date_fr9)  &&  $date_fr9 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr9);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr9= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr9='';
            }
            
            //echo  $conv_date_fr9;
           // echo "<br>";
            

             $goslon_fr9=trim($this->input->get_post("goslon_fr9"));  //Classification of GOSLON :
           //echo "<br>";
           
             $incisor_fr9=trim( $this->input->get_post("incisor_fr9")  );  //Incisor classification of malocclusion
           //echo "<br>";
           
             $skeletal_fr9=trim($this->input->get_post("skeletal_fr9"));     //Skeletal classicfication :
          // echo "<br>";
           
            $technic_fr9=trim( $this->input->get_post("technic_fr9")  );   //เทคนิคการผ่าตัด
          //echo  "<br>";
          
            $othertechnic_fr9=trim( $this->input->get_post("othertechnic_fr9") );   //Maxilla ระบุ 
          //echo  "<br>";
          
            $mandible_fr9=trim( $this->input->get_post("mandible_fr9"));  //Mandible ระบุ
          //echo  "<br>";
          
            $othermandible_fr9=trim( $this->input->get_post("othermandible_fr9") );   // Mandible ระบุ 
          //echo  "<br>";
          
          
           $tool_fr9=trim(  $this->input->get_post("tool_fr9")  );   //ชนิดเครื่องมือ
         //echo  "<br>";
         
         
         //--------------------------รูปถ่ายก่อนการรักษา (Before) :
         // name="file1_fr9"   id="file1_fr9" 
          //----------รูปถ่ายก่อนการรักษา (Before) : 
                            $file1 =  $_FILES['fileupload1_fr9']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr9']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr9']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr9']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                  //----------รูปถ่ายระหว่างการรักษา (During) ------------------
                            $file2 =  $_FILES['fileupload2_fr9']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr9']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr9']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr9']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                //----------รูปถ่ายหลังการรักษา (After) :------------------------------------------
                            $file3 =  $_FILES['fileupload3_fr9']['name'];  //9   =>filename
                                //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr9']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr9']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr9']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }                
                                   
                                   
                                   
                  
                  $dentalcast_fr9=trim($this->input->get_post("dentalcast_fr9"));   //Dental Cast :
             //echo  "<br>";
             
             //Orthognathic surgery 
             $tb="tb_orthognathic";
             $data=array(
                 //id_orthognathic    //1
                   "id_history_patient"=>$id_history_patient,  //2
                   "doctor"=>$doctor_fr9,  //3
                   "begin_date"=>$conv_date_fr9 ,   //4
                   "goslon"=> $goslon_fr9,  //5
                   "incisor"=>$incisor_fr9,  //6
                   "skeletal"=>$skeletal_fr9,  //7
                    "technic"=>$technic_fr9,  //8
                   "othertechnic"=> $othertechnic_fr9,  //9
                   "mandible"=>$mandible_fr9,  //10
                   "othermandible"=>$othermandible_fr9,  //11
                  "tool"=>$tool_fr9, //12
                  "file1"=> $file1 ,  //13
                  "file2"=> $file2 ,  //13
                  "file3"=> $file3 ,  //13
                  "dentalcast"=>$dentalcast_fr9,     //14
             );
                $inst = $this->db->insert($tb,$data);
                if( $inst )
                {
                    echo 1;
                }
                else
                {
                    echo 0;
                }
                                   
        }
          #   http://127.0.0.1/dental/index.php/welcome/json_tr9/
        function json_tr9()
        {
            $tb="tb_orthognathic";
            //tb_orthognathic
            $tbj1="tb_history_patient";
            
            $id=$this->uri->segment(3);
            
            //    $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","left");
                    //$q=$this->db->get($tb);
                 $this->db->order_by("id_orthognathic","desc");
                 $q=$this->db->get_where($tb,array("id_history_patient"=>$id)); //id_history_patient
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        }
           #   http://127.0.0.1/dental/index.php/welcome/del_fr9/
        function  del_fr9()
        {
                $id=trim($this->uri->segment(3));
                    $tb="tb_orthognathic";
                $this->db->where('id_orthognathic',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
         #   http://127.0.0.1/dental/index.php/welcome/insert_fr9_2/
            function insert_fr9_2()
            {
                      $id_history_patient=trim($this->input->get_post("id_history_patient_fr9_2"));
                     //echo "<br>";
                     
                        $doctor_fr9=trim($this->input->get_post("doctor_fr9_2")); //แพทย์ผู้ทำการรักษา
                     //echo "<br>";
               
                 $date_fr9=trim($this->input->get_post("date_fr9_2"));
               //echo "<br>";
                 
                 
               if(  !empty($date_fr9)  &&  $date_fr9 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr9);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr9= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr9='';
            }
            
            //echo  $conv_date_fr9;
          //  echo "<br>";
            

             $date2_fr9_2=trim($this->input->get_post("date2_fr9_2"));
           //echo "<br>";
                          if(  !empty($date2_fr9_2)  &&  $date2_fr9_2 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date2_fr9_2);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date2_fr9_2= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date2_fr9_2='';
            }
            
           // echo  $conv_date2_fr9_2;
           // echo "<br>";
            
            
            

             $goslon_fr9=trim($this->input->get_post("goslon_fr9_2"));  //Classification of GOSLON :
            //echo "<br>";
     
             
             $incisor_fr9=trim( $this->input->get_post("incisor_fr9_2")  );  //Incisor classification of malocclusion
            //echo "<br>";
           
             
            $skeletal_fr9=trim($this->input->get_post("skeletal_fr9_2"));     //Skeletal classicfication :
          // echo "<br>";
           
             
            $technic_fr9=trim( $this->input->get_post("technic_fr9_2")  );   //เทคนิคการผ่าตัด
           //echo  "<br>";
          
            
           $othertechnic_fr9=trim( $this->input->get_post("othertechnic_fr9_2") );   //Maxilla ระบุ 
          //echo  "<br>";
          
            
            $mandible_fr9=trim( $this->input->get_post("mandible_fr9_2"));  //Mandible ระบุ
          //echo  "<br>";
          
            
           $othermandible_fr9=trim( $this->input->get_post("othermandible_fr9_2") );   // Mandible ระบุ 
         // echo  "<br>";
          
          
           $tool_fr9=trim(  $this->input->get_post("tool_fr9_2")  );   //ชนิดเครื่องมือ
        // echo  "<br>";
         
         
         //--------------------------รูปถ่ายก่อนการรักษา (Before) :
         // name="file1_fr9"   id="file1_fr9" 
          //----------รูปถ่ายก่อนการรักษา (Before) : 
                            $file1 =  $_FILES['fileupload1_fr9_2']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr9_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr9_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr9_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                   
          
           //--------------------------รูปถ่ายระหว่างการรักษา (During) 
       
          //----------รูปถ่ายก่อนการรักษา (Before) : 
                            $file2 =  $_FILES['fileupload2_fr9_2']['name'];  //9   =>filename
                       // echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr9_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr9_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr9_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      
                                   
                     //----------รูปถ่ายหลังการรักษา (After) 
                            $file3 =  $_FILES['fileupload3_fr9_2']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr9_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr9_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr9_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                  /*
                  $dentalcast_fr9=trim($this->input->get_post("dentalcast_fr9"));   //Dental Cast :
             //echo  "<br>";
             */
                
                  $data=array(
                      //""=>id_distraction,
                      "id_history_patient"=>$id_history_patient,  //2
                      "doctor"=>$doctor_fr9 ,  //3
                      "begin_date"=>$conv_date_fr9 ,  //4
                      "end_date"=>$conv_date2_fr9_2,  //5
                      "goslon"=>$goslon_fr9,  //6
                       "incisor"=>$incisor_fr9,  //7
                       "skeletal"=>$skeletal_fr9,  //8
                     "technic"=>$technic_fr9,   //9
                      "othertechnic"=>$othertechnic_fr9,  //9
                       "mandible"=>$mandible_fr9,  //10
                       "othermandible"=>$othermandible_fr9,  //11
                       "tool"=>$tool_fr9,  //12
                        "file1"=> $file1,  //13
                        "file2"=>$file2,  //14
                        "file3"=> $file3,  //15
                  );
                     $tb="tb_distraction";                 
                    $ck=$this->db->insert($tb,$data);
                     
                    if( $ck )
                    { echo 1; }
                    elseif ( !$ck )
                    { echo 0; }
                     
                      
                  
            }
        #   http://127.0.0.1/dental/index.php/welcome/json_tr9_2
        function json_tr9_2()
        {
             $id=$this->uri->segment(3);
            $tb="tb_distraction";     
            $tbj1="tb_history_patient";
            //    $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","right");
                //    $q=$this->db->get($tb);
                 $this->db->order_by("id_distraction","desc");
                 $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),1);
            //    $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),1);
                // $this->db->order_by("id_distraction","desc");
              //   $q=$this->db->get_where($tb,array($tb.".id_history_patient"=>$id),2);
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        } 
         #   http://127.0.0.1/dental/index.php/welcome/del_fr9_2/
           function  del_fr9_2()
        {
                $id=trim($this->uri->segment(3));
                       $tb="tb_distraction";   
                $this->db->where('id_distraction',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
        
         #   http://127.0.0.1/dental/index.php/welcome/insert_fr11_1
        function insert_fr11_1()
        {
              $id_history_patient_fr11_1=trim($this->input->get_post('id_history_patient_fr11_1'));
             //echo "<br>";
              $tooth_fr11_1=trim($this->input->get_post('tooth_fr11_1'));   //Tooth 
             //echo "<br>";
              $dental_11_1=trim( $this->input->get_post("dental_11_1") ); //ทันตแพทย์ผู้ทำการรักษา
             //echo "<br>";
            
               $date_fr11_1=trim($this->input->get_post("date_fr11_1"));   //วัน/เดือน/ปี ที่ทำ : 
             //echo "<br>";
            if(  !empty($date_fr11_1)  &&  $date_fr11_1 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr11_1);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr11_1= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr11_1='';
            }
           // echo $conv_date_fr11_1;
           // echo "<br>";
            
            $tool_tr11_1=trim( $this->input->get_post("tool_tr11_1"));  //เครื่องมือที่ใช้
            //echo "<br>";
            
        
       
          //----------รูปถ่ายก่อนการรักษา (Before ) 
                            $file1 =  $_FILES['fileupload1_fr11_1']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr11_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr11_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr11_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
            //----------รูปถ่ายระหว่างการรักษา ( During )
                            $file2 =  $_FILES['fileupload2_fr11_1']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr11_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr11_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr11_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                  
            //----------รูปถ่ายหลังการรักษา ( After ) :
                            $file3 =  $_FILES['fileupload3_fr11_1']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr11_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr11_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr11_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                            $tb="tb_dentalprocedure";       
                            $data=array(
                                // id_dentalprocedure   //1
                                "id_history_patient"=>$id_history_patient_fr11_1,  //2
                                "tooth"=>$tooth_fr11_1,  //3
                                "dental"=>$dental_11_1,   //4
                                "begin_date"=>$conv_date_fr11_1,  //5
                                "tool"=>$tool_tr11_1,   //6
                                "fileupload1"=>$file1,   //7
                                "fileupload2"=>$file2,   //8
                                "fileupload3"=>$file3,   //9
                            );
                            $inst=$this->db->insert($tb,$data);       
                             if( $inst )
                             { echo 1; }
                             elseif( !$inst  )
                             {  echo 0; }
        }
         #   http://127.0.0.1/dental/index.php/welcome/json_tr11_1
       function json_tr11_1()
        {
           $id=trim($this->uri->segment(3));
           $tb="tb_dentalprocedure";       
            $tbj1="tb_history_patient";
               // $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","left");
                 $this->db->order_by("id_dentalprocedure","desc");
                  //  $q=$this->db->get($tb);
                    $q=$this->db->get_where($tb,array("id_history_patient"=>$id),1);
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        } 
                 #   http://127.0.0.1/dental/index.php/welcome/del_fr11_1/
           function  del_fr11_1()
        {
                $id=trim($this->uri->segment(3));
                $tb="tb_dentalprocedure";   // `tb_dentalprocedure` 
                $this->db->where('id_dentalprocedure',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
       #   http://127.0.0.1/dental/index.php/welcome/insert_fr11_2
        function insert_fr11_2(){
              $id_history_patient_fr11_2=trim($this->input->get_post('id_history_patient_fr11_2'));
            //echo "<br>";
              $dental_fr11_2=trim($this->input->get_post("dental_fr11_2"));  //ทันตแพทย์ผู้ทำการรักษา
            // echo "<br>";
            
             //date_fr11_2
             $date_fr11_2=trim($this->input->get_post("date_fr11_2"));   //วัน/เดือน/ปี ที่ทำ : 
             //echo "<br>";
            if(  !empty($date_fr11_2)  &&  $date_fr11_2 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr11_2);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr11_2= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                   $conv_date_fr11_2='';
            }
            //echo $conv_date_fr11_2;
            //echo "<br>";
            
             $appliance_11_2=trim( $this->input->get_post("appliance_11_2") );  //Type of Appliance : 
            //echo "<br>";
            
             $otherappliance_11_2=trim($this->input->get_post('otherappliance_11_2')); //Type of Appliance :  Other
            //echo "<br>";
             
            
            
             //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr11_2']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr11_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr11_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr11_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                              //----------รูปถ่ายระหว่างการรักษา (During ) :
                            $file2 =  $_FILES['fileupload2_fr11_2']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file2      )      )
                                   {
                                           $source = $_FILES['fileupload2_fr11_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr11_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr11_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }                  
            
            
                       //----------รูปถ่ายหลังการรักษา (After ) :
                            $file3 =  $_FILES['fileupload3_fr11_2']['name'];  //9   =>filename
                        //echo "<br>";
                           //echo "<br>";
                     	// $fsize1=$_FILES['fileupload1_fr6']['size'];
                                //echo "<br>";
                     	// $ftmpname1=$_FILES['fileupload1_fr6']['tmp_name'];
                                //echo "<br>";
                     	// $ftypename1=$_FILES['fileupload1_fr6']['type'];
                                //echo "<br>";
                                
                                if(   !empty(     $file3      )      )
                                   {
                                           $source = $_FILES['fileupload3_fr11_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr11_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr11_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }  
                                   
                    $dentalcast_11_2=trim($this->input->get_post("dentalcast_11_2"));      // Dental Cast :           
                  //echo "<br>";
                  
                  $tb="tb_prosthodontic";
                  $data=array(
                      //id_prosthodontic       //1
                      "id_history_patient"=>$id_history_patient_fr11_2,  //2
                      "dental"=>$dental_fr11_2,  //3
                      "begin_date"=>$conv_date_fr11_2,  //4
                      "appliance"=>$appliance_11_2,  //5
                      "otherappliance"=>$otherappliance_11_2,   //6
                      "file1"=>$file1 ,   //7
                      "file2"=>$file2,    //8
                       "file3"=>$file3,    //9
                       "dentalcast"=>$dentalcast_11_2,   //10
                  );
                
                  $ck=$this->db->insert($tb,$data);
                  if( $ck )
                  { echo 1; }
                  elseif( $ck )
                  {  echo 0; }
        }
         #   http://127.0.0.1/dental/index.php/welcome/json_tr11_2/21
       function json_tr11_2()
        {
             $tb="tb_prosthodontic";   
            $tbj1="tb_history_patient";
            $id=trim($this->uri->segment(3));
             //   $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","left");
            $this->db->order_by("id_prosthodontic","desc");
        $q=$this->db->get_where($tb,array("id_history_patient"=>$id),1);
                  //  $q=$this->db->get($tb,3);
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        } 
                 #   http://127.0.0.1/dental/index.php/welcome/del_fr11_2/
           function  del_fr11_2()
        {
                $id=trim($this->uri->segment(3));
                 $tb="tb_prosthodontic";  // `tb_dentalprocedure` 
                $this->db->where('id_prosthodontic',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
          #http://127.0.0.1/dental/index.php/welcome/insert_fr10_1
        function  insert_fr10_1() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
                $id_history_patient_fr10_1=trim($this->input->get_post("id_history_patient_fr10_1"));
              //echo "<br>";
              
               $doctor_fr10_1=trim($this->input->get_post("doctor_fr10_1")); //ทันตแพทย์ผู้ทำการรักษา
              //echo "<br>";
              
                 $date_fr10_1=trim($this->input->get_post("date_fr10_1"));  //วัน/เดือน/ปี ที่ทำ 
              //echo "<br>";
                if(  !empty(   $date_fr10_1   )  &&  $date_fr10_1 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_1);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_1 = $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                       $conv_date_fr10_1='';
            }
             //echo     $conv_date_fr10_1;
              //echo "<br>";
              
               $tool_tr10_1= trim($this->input->get_post("tool_tr10_1")); //เครื่องมือที่ใช้
              // echo "<br>";
               
               
                            //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr10_1']['name'];  //9   =>filename
                      //echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                             $file2 =  $_FILES['fileupload2_fr10_1']['name'];  //9   =>filename
                        //echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                          $file3 =  $_FILES['fileupload3_fr10_1']['name'];  //9   =>filename
                      //echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_1']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_1']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_1']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

                           
                                   
                     $dentalcast_fr10_1= trim($this->input->get_post("dentalcast_fr10_1"));  //Dental Cast :               
                  //echo  "<br>";
                  
                  $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_1,  //2
                      "id_tab"=>1,  //3
                      "doctor"=>$doctor_fr10_1,   //4
                      "begin_date"=>$conv_date_fr10_1,  //5
                      "tool"=>$tool_tr10_1,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_1,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
              
        }
        #http://127.0.0.1/dental/index.php/welcome/insert_fr10_2
         function  insert_fr10_2() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
                $id_history_patient_fr10_2=trim($this->input->get_post("id_history_patient_fr10_2"));
              //echo "<br>";
              
             $doctor_fr10_2=trim($this->input->get_post("doctor_fr10_2")); //ทันตแพทย์ผู้ทำการรักษา
             // echo "<br>";
              
                  $date_fr10_2=trim($this->input->get_post("date_fr10_2"));  //วัน/เดือน/ปี ที่ทำ 
              //echo "<br>";
              
               if(  !empty(   $date_fr10_2   )  &&  $date_fr10_2 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_2);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_2 = $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                      $conv_date_fr10_2='';
            }
              //echo    $conv_date_fr10_2;
              //echo "<br>";
              
              
              
              
                              $tool_tr10_2= trim($this->input->get_post("tool_tr10_2")); //เครื่องมือที่ใช้
               //echo "<br>";
              
              
                 //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr10_2']['name'];  //9   =>filename
                     // echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                             $file2 =  $_FILES['fileupload2_fr10_2']['name'];  //9   =>filename
                       // echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                          $file3 =  $_FILES['fileupload3_fr10_2']['name'];  //9   =>filename
                     // echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_2']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_2']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_2']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

                           
                                   
                    $dentalcast_fr10_2= trim($this->input->get_post("dentalcast_fr10_2"));  //Dental Cast :               
                 // echo  "<br>";
                  
                  
                  $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_2,  //2
                      "id_tab"=>2,  //3
                      "doctor"=>$doctor_fr10_2,   //4
                      "begin_date"=>$conv_date_fr10_2,  //5
                      "tool"=>$tool_tr10_2,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_2,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
              
        }
         #http://127.0.0.1/dental/index.php/welcome/insert_fr10_2
         function  insert_fr10_3() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
                $id_history_patient_fr10_3=trim($this->input->get_post("id_history_patient_fr10_3"));
              //echo "<br>";
              
              $doctor_fr10_3=trim($this->input->get_post("doctor_fr10_3"));  //ทันตแพทย์ผู้ทำการรักษา
             // echo "<br>";
              
                  $date_fr10_3=trim($this->input->get_post("date_fr10_3"));  //วัน/เดือน/ปี ที่ทำ 
              //echo "<br>";
                if(  !empty(   $date_fr10_3   )  &&  $date_fr10_3 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_3);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_3= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                    $conv_date_fr10_3='';
            }
              //echo  $conv_date_fr10_3;
              //echo "<br>";
              
              $tool_tr10_3= trim($this->input->get_post("tool_tr10_3")); //เครื่องมือที่ใช้
             //  echo "<br>";
               
               
                 //----------รูปถ่ายก่อนการรักษา (Before ) : 
                           $file1 =  $_FILES['fileupload1_fr10_3']['name'];  //9   =>filename
                      //echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_3']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_3']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_3']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                             $file2 =  $_FILES['fileupload2_fr10_3']['name'];  //9   =>filename
                        //echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_3']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_3']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_3']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                          $file3 =  $_FILES['fileupload3_fr10_3']['name'];  //9   =>filename
                      //echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_3']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_3']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_3']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

                           
                                   
                     $dentalcast_fr10_3= trim($this->input->get_post("dentalcast_fr10_3"));  //Dental Cast :               
                  //echo  "<br>";
                  
                  
                  $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_3,  //2
                      "id_tab"=>3,  //3
                      "doctor"=>$doctor_fr10_3,   //4
                      "begin_date"=>$conv_date_fr10_3,  //5
                      "tool"=>$tool_tr10_3,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_3,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
              
        }
        #http://127.0.0.1/dental/index.php/welcome/insert_fr10_2
         function  insert_fr10_4() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
                $id_history_patient_fr10_4=trim($this->input->get_post("id_history_patient_fr10_4"));
              //echo "<br>";
              
                
              $doctor_fr10_4=trim($this->input->get_post("doctor_fr10_4"));  //ทันตแพทย์ผู้ทำการรักษา
            //echo "<br>";
              
              $date_fr10_4=trim($this->input->get_post("date_fr10_4"));  //วัน/เดือน/ปี ที่ทำ 
              //echo "<br>";
                if(  !empty(   $date_fr10_4   )  && $date_fr10_4 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_4);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_4= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                      $conv_date_fr10_4='';
            }
              //echo    $conv_date_fr10_4;
              //echo "<br>";
              
              
              
              
                $tool_tr10_4= trim($this->input->get_post("tool_tr10_4")); //เครื่องมือที่ใช้
               //echo "<br>";
               
               
                 //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr10_4']['name'];  //9   =>filename
                      //echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                            $file2 =  $_FILES['fileupload2_fr10_4']['name'];  //9   =>filename
                        //echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                          $file3 =  $_FILES['fileupload3_fr10_4']['name'];  //9   =>filename
                      //echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_4']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_4']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_4']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

                           
                                   
                    $dentalcast_fr10_4= trim($this->input->get_post("dentalcast_fr10_4"));  //Dental Cast :               
                  //echo  "<br>";
                  
                  
                   $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_4,  //2
                      "id_tab"=>4,  //3
                      "doctor"=>$doctor_fr10_4,   //4
                      "begin_date"=>$conv_date_fr10_4,  //5
                      "tool"=>$tool_tr10_4,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_4,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
              
              
        }         
          #http://127.0.0.1/dental/index.php/welcome/insert_fr10_2
         function  insert_fr10_5() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
                $id_history_patient_fr10_5=trim($this->input->get_post("id_history_patient_fr10_5"));
              //echo "<br>";
              
             $doctor_fr10_5=trim($this->input->get_post("doctor_fr10_5")); //ทันตแพทย์ผู้ทำการรักษา
            //echo "<br>";
            
            
                $date_fr10_5=trim($this->input->get_post("date_fr10_5"));  //วัน/เดือน/ปี ที่ทำ 
              //echo "<br>";
              
                if(  !empty(   $date_fr10_5  )  && $date_fr10_5 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_5);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_5= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                       $conv_date_fr10_5='';
                       
            }
              //echo     $conv_date_fr10_5;
              //echo "<br>";
              

             $tool_tr10_5= trim($this->input->get_post("tool_tr10_5")); //เครื่องมือที่ใช้
              // echo "<br>";
               
               
                //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr10_5']['name'];  //9   =>filename
                      //echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_5']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_5']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_5']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                            $file2 =  $_FILES['fileupload2_fr10_5']['name'];  //9   =>filename
                        //echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_5']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_5']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_5']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                        $file3 =  $_FILES['fileupload3_fr10_5']['name'];  //9   =>filename
                     // echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_5']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_5']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_5']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

               
               
                     $dentalcast_fr10_5= trim($this->input->get_post("dentalcast_fr10_5"));  //Dental Cast :               
                  //echo  "<br>";
                  
                  
                    $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_5,  //2
                      "id_tab"=>5,  //3
                      "doctor"=>$doctor_fr10_5,   //4
                      "begin_date"=>$conv_date_fr10_5,  //5
                      "tool"=>$tool_tr10_5,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_5,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
            
        }
        #http://127.0.0.1/dental/index.php/welcome/insert_fr10_2
         function  insert_fr10_6() //---- รวมการบันทึก ใน table ทั้งหมดของ treatment 10
        {
               $id_history_patient_fr10_6=trim($this->input->get_post("id_history_patient_fr10_6"));
             // echo "<br>";
              
              $other_fr11_6=trim($this->input->get_post("other_fr11_6")); //อื่นๆ : 
              //  echo "<br>";
              
             $doctor_fr10_6=trim($this->input->get_post("doctor_fr10_6")); //ทันตแพทย์ผู้ทำการรักษา
            //echo "<br>";
            
             $date_fr10_6=trim($this->input->get_post("date_fr10_6"));  //วัน/เดือน/ปี ที่ทำ 
            //  echo "<br>";
              
                if(  !empty(   $date_fr10_6  )  && $date_fr10_6 != ''  )  //09/14/2016 08:45:29  วัน/เดือน/ปี ที่ทำการรักษา
            {
                      $ex1=explode(" ",$date_fr10_6);
                      $dmy1=$ex1[0];  
                      $ex2=explode("/",$dmy1);
                        $conv_date_fr10_6= $ex2[2]."-".$ex2[0]."-".$ex2[1];    
                    //  echo "<br>";       
            }
            else{
                       $conv_date_fr10_6='';
                       
            }
              //echo     $conv_date_fr10_6;
              //echo "<br>";
              
              
              
              
              $tool_tr10_6= trim($this->input->get_post("tool_tr10_6")); //เครื่องมือที่ใช้
             //  echo "<br>";
               
               
                //----------รูปถ่ายก่อนการรักษา (Before ) : 
                            $file1 =  $_FILES['fileupload1_fr10_6']['name'];  //9   =>filename
                      //echo "<br>";
                              
                                if(   !empty(     $file1      )      )
                                   {
                                           $source = $_FILES['fileupload1_fr10_6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload1_fr10_6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload1_fr10_6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                                   
                
                             //----------รูปถ่ายระหว่างการรักษา (During)
                            $file2 =  $_FILES['fileupload2_fr10_6']['name'];  //9   =>filename
                        //echo "<br>";
                                
                                if(   !empty(   $file2     )      )
                                   {
                                           $source = $_FILES['fileupload2_fr10_6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload2_fr10_6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload2_fr10_6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                                   
                          
                         //----------รูปถ่ายหลังการรักษา (After) 
                          $file3 =  $_FILES['fileupload3_fr10_6']['name'];  //9   =>filename
                      //echo "<br>";
                                
                                if(   !empty(   $file3     )      )
                                   {
                                           $source = $_FILES['fileupload3_fr10_6']['tmp_name'];
                                           $file_rec = $_FILES['fileupload3_fr10_6']['tmp_name'];
                                           $target = "upload/".$_FILES['fileupload3_fr10_6']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }
                      

               
               
                      $dentalcast_fr10_6= trim($this->input->get_post("dentalcast_fr10_6"));  //Dental Cast :               
                  //echo  "<br>";
                  
                     
                    $tb="tb_othersurgery";
                  $data=array(
                      // id_othersurgery,   //1
                      "id_history_patient"=>$id_history_patient_fr10_6,  //2
                      "id_tab"=>6,  //3
                      "doctor"=>$doctor_fr10_6,   //4
                      "begin_date"=>$conv_date_fr10_6,  //5
                      "tool"=>$tool_tr10_6,  //6
                      "filename1"=> $file1,  //7
                       "filename2"=> $file2,  //8
                        "filename3"=> $file3,  //9
                       "dentalcast"=> $dentalcast_fr10_6,  //10
                  );
                    $inst = $this->db->insert($tb,$data);
                    if(  $inst )
                    {
                        echo 1;
                    }
                    elseif(  !$inst  )
                    {   echo 0; }
              
        }
        
       #http://127.0.0.1/dental/index.php/welcome/json_tr10/1
       function json_tr10()
        {
              $id_call=trim($this->uri->segment(3));
                $id=trim($this->uri->segment(4));
                
              $tb="tb_othersurgery";
            $tbj1="tb_history_patient";
             //   $this->db->join($tbj1,$tbj1.".id_history_patient=".$tb.".id_history_patient","right");
                $this->db->order_by("id_othersurgery","desc");
                  //  $q=$this->db->get_where($tb,array("id_tab"=>$id_call,"id_history_patient"=>$id));
                      $q=$this->db->get_where($tb,array( "id_tab"=>$id_call,$tb.".id_history_patient"=>$id ),1);
                    foreach($q->result() as $row)
                    {
                          $rows[]=$row;
                    }
                    echo  json_encode($rows);
        } 
          #http://127.0.0.1/dental/index.php/welcome/del_fr10/
           function  del_fr10()
        {
                $id=trim($this->uri->segment(3));
               // $id_his=trim($this->uri->segment(4));
                   $tb="tb_othersurgery"; // `tb_dentalprocedure` 
                   
                $this->db->where('id_othersurgery',$id);
                $del=$this->db->delete($tb);
                if( $del )
                {
                    echo 1;
                }
                elseif( !$del )
                {
                    echo 0;
                }
        }
        
        #--1. Pre-surgical orthopedics therapy (PSOT) -----------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr1()
        function showjson_fr1()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             $tb_m="tb_history_patient";
             
             $tbj1="tb_psot";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".id_psot","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
        #---- 4. Interceptive orthodontic treatment ----------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr1()
        function showjson_fr4()
        {
              //FROM `tb_psot` 
             //	id_history_patient
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
        
               $tbj1="tb_interceptive"; 
               
               
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
                #---- 4. Interceptive orthodontic treatment ----------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr1()
        function showjson_fr6()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             $tbj1="tb_othersurgery";  //$tb="tb_othersurgery";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
                        #---7. Growth modification ----------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr7()
        function showjson_fr7()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             $tbj1="tb_growth";  //$tb="tb_othersurgery";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
                                #---8. Corrective Orthodontic Treatment ----------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr8()
        function showjson_fr8()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             $tbj1="tb_corrective";  //$tb="tb_othersurgery";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
       #---9. Orthognathic surgery --------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr8()
        function showjson_fr9()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             $tbj1="tb_othersurgery";  //$tb="tb_othersurgery";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
               #---9. Distraction --------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr8()
        function showjson_fr9_2()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             $tbj1="tb_distraction";  //$tb="tb_othersurgery";
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
         #---10. Vestilbuloplasty --------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr10_1()
        function showjson_fr10_1()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             //$tbj1="tb_distraction";  //$tb="tb_othersurgery";
              $tbj1="tb_othersurgery";
             
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","inner");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        
                 #---10. Vestilbuloplasty --------------------------
        #http://127.0.0.1/dental/index.php/welcome/showjson_fr10_1()
        function showjson_fr10_2()
        {
              //FROM `tb_psot` 
             //	id_history_patient
             //   $tb_m="tb_othersurgery";
            // $tb_m="tb_othersurgery";
              // $tb_m="tb_othersurgery";
             $tb_m="tb_history_patient";
             
             //$tbj1="tb_distraction";  //$tb="tb_othersurgery";
             //  $tb="tb_othersurgery";
              $tbj1="tb_othersurgery";
             
             $this->db->join($tb_m,$tbj1.".id_history_patient=".$tb_m.".id_history_patient","left");
             $this->db->order_by( $tbj1.".begin_date","desc");     
             $q=$this->db->get($tbj1,3);
             foreach($q->result() as $row)
             {
                  $rows[]=$row;
             }
              echo  json_encode($rows);
             
        }
        #--------------- Search รายการค้นหาหลัก------------------------
        // http://127.0.0.1/dental/index.php/welcome/auto_name
        function auto_name()
        {
                //   $main=trim($this->uri->segment(3));
                  //cmb_search
              //  $main=trim($this->input->get_post("cmb_search"));
               // $txt=trim($this->uri->segment());
                    $txt=trim($this->input->get_post("q"));
                    $tb="tb_history_patient";
                    $query=$this->db->get($tb,3);
                    $this->db->like("firstname",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                         echo json_encode($rows);
                   
                    /*
                
               //$this->db->get($tb);
                     
               if(  $main  == 1   )  //ชื่อ
               {
                      //echo  $main;

                        $query=$this->db->get($tb);
                        $this->db->like("firstname",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                         echo json_encode($rows);
               }
               elseif(  $main  == 2 ) //นามสกุล
               {
                     //  echo  $main;
               }
               elseif(  $main  == 3 ) //เลขบัตรประชาชน
               {
                     //  echo  $main;
               }
               elseif(  $main  == 4 ) //จังหวัด
               {
                      // echo  $main;
               }
                elseif(  $main  == 5 ) //DN
               {
                     //  echo  $main;
               }
                elseif(  $main  == 6 ) //ortho No
               {
                      // echo  $main;
               }
                elseif(  $main  == 7 ) //HN
               {
                      // echo  $main;
               }
                elseif(  $main  == 8 ) //CN Series
               {
                     //   echo  $main;
               }
                elseif(  $main  == 9 ) //Diagnosis
               {
                      // echo  $main;
               }
                 elseif(  $main  == 10 ) //แพทย์เจ้าของไข้
               {
                      // echo  $main;
               }
                elseif(  $main  == 11 ) //แพทย์เจ้าของไข้
               {
                       // echo  $main;
               }
               */

        }
        
        // http://127.0.0.1/dental/index.php/welcome/auto_lastname
        function auto_lastname()
        {
                    $txt=trim($this->input->get_post("q"));
                    $tb="tb_history_patient";
                    $query=$this->db->get($tb,3);
                    $this->db->like("lastname",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                    echo json_encode($rows);
            
        }

        // http://127.0.0.1/dental/index.php/welcome/auto_seriesnumber
        function auto_seriesnumber()
        {
                    $txt=trim($this->input->get_post("q"));
                    $tb="tb_history_patient";
                    $query=$this->db->get($tb,3);
                    $this->db->like("seriesnumber",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                    echo json_encode($rows);
            
        }
        
                // http://127.0.0.1/dental/index.php/welcome/auto_address
        function auto_address()
        {
                    $txt=trim($this->input->get_post("q"));
                    $tb="tb_history_patient";
                    $query=$this->db->get($tb,3);
                    $this->db->like("address",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                    echo json_encode($rows);
            
        }
        //ค้นหาจาก DN :
        // http://127.0.0.1/dental/index.php/welcome/auto_DN
        function auto_DN()
        {
                    $txt=trim($this->input->get_post("q"));
                    $tb="tb_history_patient";
                    $query=$this->db->get($tb,3);
                    $this->db->like("DN",$txt);
                        foreach($query->result() as $row )
                        {
                          $rows[]=$row;
                        }
                    echo json_encode($rows);
            
        }
        
            //ค้นหาจาก Ortho No     Ortho
            // http://127.0.0.1/dental/index.php/welcome/auto_ortho
                function auto_ortho()
                {
                            $txt=trim($this->input->get_post("q"));
                            $tb="tb_history_patient";
                            $query=$this->db->get($tb,3);
                            $this->db->like("othnumber",$txt);
                                foreach($query->result() as $row )
                                {
                                  $rows[]=$row;
                                }
                            echo json_encode($rows);

                }
                
            //ค้นหาจาก Ortho No     Ortho
            // http://127.0.0.1/dental/index.php/welcome/auto_ortho
                function auto_hn()
                {
                            $txt=trim($this->input->get_post("q"));
                            $tb="tb_history_patient";
                            $query=$this->db->get($tb,3);
                            $this->db->like("HN",$txt);
                                foreach($query->result() as $row )
                                {
                                  $rows[]=$row;
                                }
                            echo json_encode($rows);

                }
                
              //ค้นหาจาก CN  
            // http://127.0.0.1/dental/index.php/welcome/auto_cn
                function auto_cn()
                {
                            $txt=trim($this->input->get_post("q"));
                            $tb="tb_history_patient";
                            $query=$this->db->get($tb,3);
                            $this->db->like("CN",$txt);
                                foreach($query->result() as $row )
                                {
                                  $rows[]=$row;
                                }
                            echo json_encode($rows);

                }
                
                
            // http://127.0.0.1/dental/index.php/welcome/auto_doctor
                function auto_doctor()
                {
                            $txt=trim($this->input->get_post("q"));
                            $tb="tb_history_patient";
                            $query=$this->db->get($tb,3);
                            $this->db->like("doctor",$txt);
                                foreach($query->result() as $row )
                                {
                                  $rows[]=$row;
                                }
                            echo json_encode($rows);

                }
                
                
              #  http://127.0.0.1/dental/index.php/welcome/json_patient
                //- เรียก FROM `tb_history_patient`  จาก id
               function  json_patient()
               {
                     $id=trim($this->input->get_post("txt_id"));
                     if( empty($id) )
                     {
                         $id=trim($this->uri->segment(3));
                     }
                     
                     $tb="tb_history_patient";
                   //  $id=21;
                     $q=$this->db->get_where($tb,array("id_history_patient"=>$id));
                     foreach($q->result() as $row )
                     {
                          $rows[]=$row;
                     }
                      echo  json_encode($rows);
               }
               
                # ค้นหาจาก Diagnosis  =>  FROM `tb_diagnosis`  
               #  http://127.0.0.1/dental/index.php/welcome/search_diagnosis
               function  search_diagnosis()
               {
                      $tb="tb_diagnosis";
                      $tbj1="tb_history_patient";
                      //	id_history_patient
                      //FROM `tb_history_patient` 
                      $cb_diagnosis=trim($this->input->get_post("cb_diagnosis"));
                       $this->db->join($tbj1,$tb.".id_history_patient=".$tbj1.".id_history_patient","left");
                      $q=$this->db->get($tb,3);
                       $this->db->like("result_analysis",$cb_diagnosis);
                      foreach($q->result() as $row)
                      {
                           $rows[]=$row;
                      }
                      echo  json_encode($rows);
               }
               #  ค้นหาจาก   แพทย์เจ้าของไข้
               #  http://127.0.0.1/dental/index.php/welcome/search_doctor
               function  search_doctor()
               {
                     //doctor
                     // `tb_history_patient` 
                     $tb="tb_history_patient";
                     $cb_doctor=trim($this->input->get_post("cb_doctor"));
                      $q=$this->db->get($tb,3);
                      $this->db->like("doctor",$cb_doctor);
                      foreach($q->result() as $row)
                      {
                           $rows[]=$row;
                      }
                      echo  json_encode($rows);   
               }
                   #  http://127.0.0.1/dental/index.php/welcome/export_excel1
               function export_excel1() 
               {
                   
                   $strExcelFileName="ประวัติผู้ป่วย.xls";
                   header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
                   header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
                   header("Pragma:no-cache");

                   

                    $tb="tb_history_patient";
                    $q=$this->db->get($tb);
                    
                    echo "<table>";
                   
                    /*
                    echo  "<tr>";
                    
                    echo "<td>";
                    echo "HN";                  
                    echo "</td>";
                       echo "<td>";
                    echo "DN";                  
                    echo "</td>";
                     echo "<td>";
                    echo "othnumber";                  
                    echo "</td>";
                    
                    
                    echo "</tr>";
                     * 
                     * 
                     * 
                     */
                    
                    
                    foreach($q->result() as $row )
                    {
                        //$rows[]=$row;
                        echo "<tr>";
                        
                          echo "<td>";
                              echo $row->HN;
                          echo "</td>";
                            echo "<td>";
                              echo $row->DN;
                          echo "</td>";
                            echo "<td>";
                              echo $row->othnumber;
                          echo "</td>";
                            echo "<td>";
                              echo $row->CN;
                          echo "</td>";
                              echo "<td>";
                              echo $row->seriesnumber;
                          echo "</td>";
                           echo "<td>";
                              echo $row->firstname;
                          echo "</td>";
                            echo "<td>";
                              echo $row->lastname;
                          echo "</td>";
                            echo "<td>";
                              echo $row->filename;
                          echo "</td>";
                            echo "<td>";
                              echo $row->lastname;
                          echo "</td>";
                             echo "</td>";
                            echo "<td>";
                              echo $row->birthdate;
                          echo "</td>";
                           echo "<td>";
                              echo $row->address;
                          echo "</td>";
                           echo "<td>";
                              echo $row->nationality;
                          echo "</td>";
                                echo "<td>";
                              echo $row->race;
                          echo "</td>";
                           echo "<td>";
                              echo $row->religion;
                          echo "</td>";
                       echo "<td>";
                              echo $row->namefather;
                          echo "</td>";    
                           echo "<td>";
                              echo $row->fatherlastname;
                          echo "</td>";    
                              echo "<td>";
                              echo $row->career;
                          echo "</td>";    
                             echo "<td>";
                              echo $row->birthdatefahter;
                          echo "</td>";    
                              echo "<td>";
                              echo $row->birthdatefahter;
                          echo "</td>";    
                          echo "<td>";
                              echo $row->age1;
                          echo "</td>";     
                           echo "<td>";
                              echo $row->disease;
                          echo "</td>";  
                           echo "<td>";
                              echo $row->mothername;
                          echo "</td>";  
                          echo "<td>";
                              echo $row->motherlastname;
                          echo "</td>";  
                          echo "<td>";
                              echo $row->mothercareer;
                          echo "</td>"; 
                           echo "<td>";
                              echo $row->birthdatemother;
                          echo "</td>"; 
                            echo "<td>";
                              echo $row->diseasemother;
                          echo "</td>"; 
                           echo "<td>";
                              echo $row->spousename;
                          echo "</td>";  
                           echo "<td>";
                              echo $row->spouselastname;
                          echo "</td>";  
                           echo "<td>";
                              echo $row->benefits;
                          echo "</td>";  
                             echo "<td>";
                              echo $row->otherbenefits;
                          echo "</td>";  
                             echo "<td>";
                              echo $row->numberbenefits;
                          echo "</td>";  
                           echo "<td>";
                              echo $row->evertreat;
                          echo "</td>";    
                            echo "<td>";
                              echo $row->otherevertreat;
                          echo "</td>";    
                          echo "<td>";
                              echo $row->treatmentfacility;
                          echo "</td>";    
                              echo "<td>";
                              echo $row->doctor;
                          echo "</td>";    
                          
                             echo "<td>";
                              echo $row->developmentallevel;
                          echo "</td>";  
                          
                            echo "<td>";
                              echo $row->otherdevelopmentallevel;
                          echo "</td>";  
                          
                            echo "<td>";
                              echo $row->daterecord;
                          echo "</td>";  
                          
                            echo "<td>";
                              echo $row->sex;
                          echo "</td>";  
                          
                            echo "<td>";
                              echo $row->tel;
                          echo "</td>"; 
                          
                        echo "</tr>";
                    }
                    echo "</table>";
                    
                    //echo  json_encode($rows);
                    
               }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
