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
                 //echo "test ";
                 echo $HN=trim($this->input->get_post("HN"));
                 echo "<br>";
                 echo $DN=trim($this->input->get_post("DN"));
                 echo "<br>";
                 echo $othnumber=trim($this->input->get_post("othnumber"));
                 echo "<br>";
                 echo $CN=trim($this->input->get_post("CN"));
                echo "<br>";
                echo $seriesnumber=trim($this->input->get_post("seriesnumber"));  //บัตรประชนชน
                echo "<br>";
               echo  $firstname=trim($this->input->get_post("firstname"));  //ชื่อ
               echo  "<br>";
               echo  $lastname=trim($this->input->get_post("lastname"));  //นามสกุล
               echo "<br>";


               //--------------รูปถ่าย :---------------------------------
                                echo  $fname1 =  $_FILES['file1']['name'];
                                echo "<br>";
                     	echo $fsize1=$_FILES['file1']['size'];
                                echo "<br>";
                     	echo $ftmpname1=$_FILES['file1']['tmp_name'];
                                echo "<br>";
                     	echo $ftypename1=$_FILES['file1']['type'];
                                echo "<br>";
               //--------------รูปถ่าย :---------------------------------

            echo $birthdate=trim($this->input->get_post("birthdate"));  //วัน/เดือน/ปี เกิด :
            echo "<br>";

            echo  $address=trim($this->input->get_post("address"));  //ที่อยู่ :
            echo "<br>";

            echo $nationality=trim($this->input->get_post("nationality")); //สัญชาติ :
            echo "<br>";

            echo $race=trim($this->input->get_post("race")); //เชื้อชาติ :
            echo "<br>";

            echo  $religion=trim($this->input->get_post("religion")); //ศาสนา :
            echo "<br>";

            echo $namefather=trim($this->input->get_post('namefather')); //ชื่อบิดา
            echo "<br>";

            echo $fatherlastname=trim($this->input->get_post("fatherlastname")); //บิดา - นามสกุล :
            echo "<br>";
            
            echo  $career=trim($this->input->get_post("career")); //อาชีพ :
            echo "<br>";
            
            echo  $birthdatefahter=trim($this->input->get_post("birthdatefahter"));  //วัน/เดือน/ปี เกิด : บิดา
            echo "<br>";
            
            echo  $age1=trim($this->input->get_post("age1")); //อายุบิดา
            echo "<br>";
            
            echo  $disease=trim($this->input->get_post("disease"));  //โรคประจำตัวบิดา :
            echo "<br>";
            
            echo  $mothername=trim($this->input->get_post("mothername"));  //ชื่อมารดา 
            echo "<br>";
            
            echo $motherlastname=trim($this->input->get_post("motherlastname"));  // - นามสกุล 
            echo "<br>";
            
            echo $mothercareer =trim($this->input->get_post("mothercareer")); //อาชีพ : มารดา
            echo "<br>";
            
            echo  $birthdatemother=trim($this->input->get_post('birthdatemother')); // //วัน/เดือน/ปี เกิด : มารดา
            echo "<br>";
             
            echo  $age2=trim($this->input->get_post("age2")); //อายุมารดา
            echo "<br>";
            
            
            echo  $diseasemother=trim($this->input->get_post("diseasemother"));  //โรคประจำตัวมารดา :
            echo "<br>";
            
            
             echo  $spousename=trim($this->input->get_post("spousename"));  //ชื่อ สามี/ภรรยา - นามสกุล :
             echo "<br>";
             
             echo $spouselastname=trim($this->input->get_post("spouselastname"));   //ชื่อ  นามสกุล : 
             echo "<br>";
             
             echo $benefits=trim($this->input->get_post('benefits'));  //สวัสดิการการรักษา 
             echo "<br>";
             
             echo $otherbenefits=trim($this->input->get_post("otherbenefits"));  //สวัสดิการการรักษา  อื่นๆ
             echo "<br>";
                
             echo $numberbenefits=trim($this->input->get_post("numberbenefits"));    //หมายเลข :
             echo "<br>";
                 
             echo  $evertreat=trim($this->input->get_post('evertreat'));     // เคยได้รับการรักษามาก่อน :   1=ไม่ทราบ   2=ไม่เคย  3=เคย ระบุ
             echo "<br>";
             
             echo  $otherevertreat=trim($this->input->get_post("otherevertreat"));   //เคย ระบุ 
             echo "<br>";
             
             echo  $treatmentfacility=trim($this->input->get_post('treatmentfacility'));   // สถานที่ที่ได้รับการรักษามาก่อน :
             echo "<br>";
             
             echo  $doctor=trim($this->input->get_post("doctor"));  // แพทย์เจ้าของคนไข้ :
              echo "<br>";
              
              
              /*
               developmentallevel1

otherdevelopmentallevel
               */
              
              echo  $developmentallevel=trim($this->input->get_post('developmentallevel'));  //ระดับพัฒนาการผู้ป่วย
              echo "<br>";
              
              echo  $otherdevelopmentallevel=trim($this->input->get_post("otherdevelopmentallevel")); //ระดับพัฒนาการผู้ป่วย
              echo "<br>";
              
              
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
