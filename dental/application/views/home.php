    <!DOCTYPE html>
    <html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>


        <?=$this->load->view("import_")?>


        <script type="text/javascript">
              var toolbar= [


                       {
                        text: ' เรียกดูประวัติผู้ป่วย  ',
                        iconCls: ' icon-large-chart   ',

                        handler:function(){
                             //alert('t');
                               openpt('เรียกดูประวัติผู้ป่วย');
                        }

                    }
                    ,
                    {
                        text:' Diagnosis ',
                        iconCls:' icon-print  ',
                        handler:function(data)
                        {
                            //alert('t');
                               var  row=   $('#dg1').datagrid('getSelected');    //productid
                                if( row )
                                {
                                      var  id=row.id_history_patient;  
                                      var  	firstname=row.firstname;
                                      var    lastname=row.lastname;
                                      //alert(id);
                                      // $('#diag1').window('open');
                                      showpopup1();
                                      // id="id_history_patient" 
                                      $('#id_history_patient').textbox('setValue',id);
                                      $('#name_lastname').textbox('setValue',firstname+'  '+lastname);
                                      btnclr();
                                 }
                        }
                    },

                    {
                        text:' Treatment ',
                       iconCls:'icon-add',
                       handler:function(data)
                        {
                            //alert('t');
                            var  row=   $('#dg1').datagrid('getSelected');    //productid
                            if( row )
                             {
                                    //alert(row);
                                    var  id=row.id_history_patient;  
                                    var  	firstname=row.firstname;
                                      var    lastname=row.lastname;
                                  
                                  
                                  //-----1. Pre-surgical orthopedics therapy (PSOT)--------- 
                                      $('#id_history_patient').textbox('setValue',id);
                                      $('#name_lastname').textbox('setValue',firstname+'  '+lastname);
                                      
                                      
                                      
                                 //--------4. Interceptive orthodontic treatment -------------   
                                      $('#id_history_patient_fr4').textbox('setValue',id);
                                      $('#name_lastname_fr4').textbox('setValue',firstname+'  '+lastname);
                                 
                                 
                                     showpopup2();                     
                               }

                        }

                    },

                    /*
                    {
                           text:' เพิ่มประวัติผู้ป่วย ',
                           iconCls:' icon-man ',
                           handler:function(){
                                 //alert('t');
                                 openpt('เพิ่มประวัติผุ้ป่วย');
                           }
                    },
                    */


                    {
                        text:' แก้ไขประวัติผู้ป่วย ',
                        iconCls:'icon-edit',
                        handler:function()
                        {
                            var  row =  $('#dg1').datagrid('getSelected');
                            if( row )
                            {
                                  //alert('t');
                            }
                        }
                    },
                    {
                        text:'Reload',
                        iconCls:'icon-reload',
                        handler:function()
                        {
                            $('#dg1').datagrid('reload');
                        }
                    }
                    ,
                    {
                        text:'Delete',
                        iconCls:'icon-remove',
                        handler:function(){
                            //alert('t');
                            var  row=$('#dg1').datagrid('getSelected');
                            if( row )
                            {
                                //alert('t');
                                var  id=row.id_history_patient;
                                //alert(id);
                                if( id > 0 )
                                {
                                    var  url="<?=base_url()?>index.php/welcome/delete_tb1/" +  id ;
                                      $.post(url,function(result){
                                           // alert(result);
                                            if( result == 1  )
                                            {
                                                $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                $('#dg1').datagrid('reload');
                                            }
                                            else if( result == 0 )
                                            {
                                                 $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');
                                            }
                                           
                                            
                                      });
                                }
                            }
                        } 
                    },
                                 ]
        </script>


        <!--  js for search HN -->
        <script type="text/javascript">
            /*
             $(function()
             {
                //alert("t");
                 $("#HN_main").combogrid({
                     panelWidth:500,
                     url: '<?=base_url()?>index.php/welcome/callHN',
                     idField:'HN',
                     textField:'HN',
                     mode:'remote',
                     fitColumns:true,
                     columns:[[
			{field:'HN',title:'HN',width:60},
			{field:'Name',title:'ชื่อ',width:60},
                                                {field:'Surname',title:'นามสกุล',width:60},
		   ]]
                 });
                   $("#HN_main").combogrid({
                       onSelect:function(index,row)
                       {
                            //alert(row.Name);
                             $("#Name").textbox(
                                     {
                                         value : row.Name,
                                          iconCls:"icon-man",
                                           iconAlign:"right",
                                           readonly:"true",
                                     })
                             $("#Surname").textbox(
                                     {
                                         value : row.Surname,
                                         iconCls:"icon-man",
                                          iconAlign:"right",
                                           readonly:"true",
                                     })
                              $("#BirthDate").textbox(
                                      {
                                          value : row.BirthDate,
                                          iconCls:"icon-man",
                                            iconAlign:"right",
                                             readonly:"true",
                                     })
                        }
                   });

             });
             */
        </script>
        <!--  js for search HN -->




        <script type="text/javascript">
            function openpt(title) //ฟอร์มบันทึก ประวัติผู้ป่วย
            {
                $(function()
                {
                      //alert('t');
                      $("#dia1").dialog({
                         // title:"เพิ่มข้อมูลประวัติของผู้ป่วย",
                          title: title ,
                          width:700,
                          height:700,
                          closed:false,
                          cache:false,

                          modal:true,

                      });
                });
            }

            

        </script>
        

        <script type="text/javascript">
        function  showpopup1() //สำหรับแสดง  dialog1
        {
            $(function(){
                //$.messager.alert('Info','','info');
                    $('#diag1').window('open');  //file-> fr_diagnosis.php
                    
            });
        }
        function  showpopup2() //สำหรับแสดง dialog2  ที่เพิ่มมาใหม่
        {
            $(function(){
                  // $('#diag2').window('open');
                    $('#diag3').window('open');
            });
        }
        
        </script>

         <script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#calYear1').bind('click',function(){
                      
                       var  strdate=$('#birthdatefahter').datebox('getValue')
                       var  date1=strdate.split(" ");
                        //alert( date1[0]  );
                          var  bdyear=date1[0].split("/");
                        //   alert( bdyear[2] );  //ปีเกิดปัจจุบัน
                        var   d=new Date();
                        var  curyear=d.getFullYear();
                       // alert( curyear  ); //ปี พศ ปัจจุบัน
                       if(   curyear  >=  bdyear[2]   )
                       {
                             var  c= curyear  -  bdyear[2];
                             //alert( showAge );
                             $('#age1').textbox('setValue',c);
                       }
                      
                        
                 });
             });
             
       
                   //-- คำนวณอายุของมารดา --
             $(function(){
                 $('#calYear2').bind('click',function(){
                      
                       var  strdate=$('#birthdatemother').datebox('getValue')
                       var  date1=strdate.split(" ");
                        //alert( date1[0]  );
                          var  bdyear=date1[0].split("/");
                        //   alert( bdyear[2] );  //ปีเกิดปัจจุบัน
                        var   d=new Date();
                        var  curyear=d.getFullYear();
                       // alert( curyear  ); //ปี พศ ปัจจุบัน
                       if(   curyear  >=  bdyear[2]   )
                       {
                             var  c= curyear  -  bdyear[2];
                             //alert( showAge );
                             $('#age2').textbox('setValue',c);
                       }
                      
                        
                 });
             });
             
             
             //-----ระบุการรักษามาก่อน
             
             
         </script>
         
         <script type="text/javascript" >
              //evertreat3
              //เคยได้รับการรักษามาก่อน : v
              $(function(){
                       $('#evertreat1').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',true);
                            $('#otherevertreat').textbox('setValue',"");
                      });
                      
                          $('#evertreat2').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',true);
                            $('#otherevertreat').textbox('setValue',"");
                      });
                      
                      $('#evertreat3').bind('click',function(){
                            //alert('t');
                            $('#otherevertreat').textbox('readonly',false);
                           // $('#otherevertreat').textbox('setValue',"ระบุ  เคยได้รับการรักษามาก่อน ");
                      });
                  
              });
         </script>
         
        <script type="text/javascript" > 
            //ระดับพัฒนาการผู้ป่วย : 
            $(function(){
                  /*
                   developmentallevel1

otherdevelopmentallevel
                   */  
                  
                     $('#developmentallevel1').bind('click',function()
                     {
                           //alert('1');
                           $('#otherdevelopmentallevel').textbox('setValue','');
                           $('#otherdevelopmentallevel').textbox('readonly',true);
                     });
                
                     $('#developmentallevel2').bind('click',function()
                     {
                           //alert('2');
                           $('#otherdevelopmentallevel').textbox('readonly',false);
                           //ระดับพัฒนาการผู้ป่วย : 
                           $('#otherdevelopmentallevel').textbox('setValue','ระบุระดับพัฒนาการผู้ป่วย');
                     });
                   
                
            });
         </script>


    </head>
    <body>


  <div style="margin:10px 0;"></div>
  <div class="easyui-panel" title="<?=$title?>" style="width:1300px;padding:30px 70px 50px 70px">



   <!-- Begin Frame--->
  <div style="padding:20px;background:#fafafa;width:1200px;border:1px solid #ccc">



	<div style="margin:10px 0;"></div>
	<div class="easyui-tabs" style="width:1200px;height:700px">
		<div title="<?=$title_fr1?>" style="padding:10px">


                   <!--
                    ค้นหาจากโดย : <?php echo nbs(2); ?>

                         <select class="easyui-combogrid" style="width:250px" data-options="
            panelWidth: 500,
            idField: 'itemid',
            textField: 'productname',
            url: '<?=base_url()?>json/datagrid_data1.json',
            method: 'get',
            columns: [[
                {field:'itemid',title:'Item ID',width:80},
                {field:'productname',title:'Product',width:120},
                {field:'listprice',title:'List Price',width:80,align:'right'},
                {field:'unitcost',title:'Unit Cost',width:80,align:'right'},
                {field:'attr1',title:'Attribute',width:200},
                {field:'status',title:'Status',width:60,align:'center'}
            ]],
            fitColumns: true
        ">
                         </select>
                   -->


                   <a href="#"  onclick="$('#dia_search').window('open');"  class="easyui-linkbutton" data-options="iconCls:'icon-large-picture',size:'large' " style="width:100px"> ค้นหา </a>

                   <a href="javascript:void(0)" class="easyui-linkbutton"  data-options="  iconCls:'icon-man' , onClick:function(){   openpt('เพิ่มประวัติผุ้ป่วย');    }  "   style="width:140px;height: 45px; "  >เพิ่มประวัติผู้ป่วย</a>

                   <!--
                   ค้นหาจากโดย : <?php echo nbs(2); ?>
                   <input id="cmb_search" name="cmb_search" class="easyui-combobox" data-options="
                                 valueField: 'label',
		 textField: 'value',
                                 data:[{
                                              label:'1',
                                              value:'1.รายชื่อ'
                                           },
                                           {
                                              label:'2',
                                              value:'2.เลขบัตรประชาชน'
                                           },
                                           {
                                              label:'3',
                                              value:'3.จังหวัด'
                                           },
                                           {
                                               label:'4',
                                               value:'4.DN'
                                           },
                                           {
                                               label:'5',
                                               value:'5.Ortho No.'
                                           },
                                           {
                                               label:'6',
                                               value:'6.HN'
                                           },
                                           {
                                                label:'7',
                                                value:'7.CN Series'
                                           },
                                           {
                                                label:'8',
                                                value:'8.Diagnosis'
                                           },
                                           {
                                                label:'9',
                                                value:'9.แพทย์เจ้าของไข้'
                                           },
                                           {
                                                label:'10',
                                                value:'10.Treatment'
                                           }
                                         ],
                                onSelect:function()
                                {
                                     //$.messager.alert('Info','test','info');
                                     //$('#diag1').window('open');
                                     $('#dia_search').window('open');
                                }

                          ">
                   -->

                   <?=$this->load->view("main_search")?>
                   <?=$this->load->view('popup2')?>

                    <?=$this->load->view('popup3')?>

                   <?=$this->load->view("treatment/1")?>  <!-- popup ท้งหมด -->
                    <?=$this->load->view("fr_diagnosis")?>

                   <!--   Diagnose of neural abnormalities   -->

                   <!--
                   <select class="easyui-combobox" id="cmb_search"  name="cmb_search"   style="width:200px;">
                            <option value="1">1.รายชื่อ</option>
                            <option value="2">2.เลขบัตรประชาชน</option>
                            <option value="3">3.จังหวัด</option>
                            <option value="4">4.DN</option>
                            <option value="5">5.Ortho No.</option>
                            <option value="6">6.HN</option>
                            <option value="7">7.CN Series</option>
                            <option value="8">8.Diagnosis</option>
                            <option value="9">9.แพทย์เจ้าของไข้</option>
                            <option value="10">10.Treatment</option>
                   </select>
                        -->

                   <div style="margin:20px 0 10px 0;"></div>
                  <div class="easyui-tabs" style="width:1200px;height:500px">

                         <div title=" Main System   (หน้าหลักโปรแกรม)  " style="padding:10px">
                             <table id="dg1"  name="dg1" class="easyui-datagrid" title="แสดงประวัติผู้ป่วย" style="width:1100px;height:300px"
            data-options="singleSelect:true,
                                  collapsible:true,
                                  url:'<?=base_url()?>index.php/welcome/json_tb1/',
                                  method:'post',
                                  rownumbers:true,
                                  singleSelect:true,
                                  columns:[[  
                                        { field:'firstname',title:'ชื่อ'  },
                                        { field:'lastname',title:'นามสกุล' },
                                        { field:'HN',title:'HN' ,align:'center' },
                                        { field:'DN' , title:'DN' , align:'center' },
                                        { field:'othnumber',   title:'Ortho No',   align:'center' },
                                        { field:'CN',   title:'CN No',   align:'center' },
                                        { field:'CN',   title:'CN No',   align:'center' },
                                        { field:'seriesnumber',   title:'เลขบัตรประชาชน ',   align:'center' },
                                        { field:'doctor',   title:'แพทย์เจ้าของคนไข้',   align:'left' },  
                                        
                                        
                                        
                                       
                                  ]],
                                  toolbar:toolbar ,
                                  ">
                                 
            <!--                     
        <thead>
            <tr>
                <th data-options="field:'itemid',width:80">ลำดับที่</th>
                <th data-options="field:'productid',width:100">ชื่อ-นามสกุล</th>
                <th data-options="field:'listprice',width:100,align:'right'">เลขบัตรประชาชน</th>
                <th data-options="field:'unitcost',width:100,align:'right'">วัน/เดือน/ปี เกิด</th>
                <th data-options="field:'attr1',width:250">ที่อยู่</th>
                <th data-options="field:'status',width:60,align:'center'">DN</th>
                 <th data-options="field:'status',width:150,align:'center'">Other No.</th>
                 <th data-options="field:'status',width:60,align:'center'">CN series.</th>

        



            </tr>
        </thead>
           -->
        
    </table>

              <div class="easyui-panel">
                    <div class="easyui-pagination" data-options="total:114"></div>
              </div>


     <!--
    <div style="padding:20px 0;">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'" onclick="openpt('เพิ่มประวัติผุ้ป่วย')">เพิ่มประวัติผุ้ป่วย</a>
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-print'" onclick="openpt('เรียกดูประวัติผุ้ป่วย')">เรียกประวัติผุ้ป่วย</a>
    </div>
      -->

    <div id="dia1" class="easyui-window" title="" data-options="modal:true,closed:true,iconCls:'icon-man'" style="width:500px;height:200px;padding:10px;">
    <div style="margin:10px 0 10px 0;"></div>
    <div class="easyui-tabs" style="width:600px;height:600px">
        <div title="ประวัติทั่วไป" style="padding:10px">


            <form id="fr_add_patient" method="post"  enctype="multipart/form-data"  novalidate="novalidate">
            <table cellpadding="5">

                 <tr>
                    <td>HN   :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="HN"  id="HN" data-options="required:false" style="max-width: 90px  " value="ER2315"></input>

                    DN   :
                    <input class="easyui-textbox" type="text" name="DN" id="DN"  style="max-width: 90px  " value="RT2136"></input>

                    Ortho No :
                    <input class="easyui-textbox" type="text" name="othnumber"  id="othnumber"  style="max-width: 90px  " value="TY2316"></input>




                    </td>



                 </tr>

                 <tr>
                     <td>
                              CN No :
                     </td>
                     <td>
                         <input class="easyui-textbox" type="text" name="CN" id="CN"  style="max-width: 90px  " value="RY2135"></input>
                     </td>
                 </tr>



                 <tr>
                     <td>
                         เลขบัตรประชาชน :
                     </td>
                     <td>
                         <input  class="easyui-textbox"  style="width: 200px;height: 30px;"  id="seriesnumber" name="seriesnumber"  value="1111111111111"  />
                     </td>

                 </tr>


                <tr>
                    <td>ชื่อ - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="firstname" id="firstname"    style="width:100px;height: 30px;"  value="สมเกียรติ"></input>

                        <input class="easyui-textbox" type="text" name="lastname" id="lastname"   style="width:200px;height: 30px;" value="สุขเจริญ"></input>
                    </td>
                </tr>

                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input name="file1" id="file1"   class="f1 easyui-filebox"></input></td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td><input class="easyui-datetimebox"  style="width:200px" id="birthdate" name="birthdate" ></td>
                </tr>

                <tr>
                    <td>ที่อยู่ :</td>
                    <td><input class="easyui-textbox" type="text" name="address" id="address" value=" 123 ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002 " ></input></td>
                </tr>

                <tr>
                    <td>
                       สัญชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="nationality"  id="nationality" value="ไทย"></input>

                    </td>

                </tr>

                <tr>
                    <td>
                       เชื้อชาติ :
                    </td>
                    <td>
                       <input class="easyui-textbox" type="text" name="race"  id="race" value="ไทย" ></input>

                    </td>

                </tr>


                 <tr>
                    <td>ศาสนา :</td>
                    <td><input class="easyui-textbox" type="text" name="religion" id="religion"  value="พุทธ" ></input></td>
                </tr>


               <tr>
                    <td>ชื่อบิดา - นามสกุล :</td>
                    <td>
                        <input class="easyui-textbox" type="text" name="namefather"  id="namefather" style="width:150px;height: 30px;" value="สุรพงษ์" />
                        <input class="easyui-textbox" type="text" name="fatherlastname" id="fatherlastname"  style="width:200px;height: 30px;" value="สุขเจริญ" />

                    </td>



                </tr>


                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="career"  id="career" value="รับจ้างทั่วไป" ></input></td>
                </tr>


                <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>
                        <input class="easyui-datetimebox"  style="width:200px"  id="birthdatefahter"  name="birthdatefahter">

                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear1"  name="calYear1">คำนวณอายุ</a>
                        <input class="easyui-textbox"  id="age1"  name="age1"  style="width:50px; height: 30px;"  > ปี

                    </td>



                </tr>


                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="disease" id="disease"  value="โรคลมชัก" ></input></td>
                </tr>



                <tr>
                    <td>ชื่อมารดา - นามสกุล </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="mothername"  id="mothername"  style="width: 150px;height: 30px;" value="นวลฉวี" ></input>
                        <input class="easyui-textbox" type="text" name="motherlastname"  id="motherlastname"  style="width: 200px;height: 30px;"  value="สุขเจริญ"   ></input>

                    </td>



                </tr>



                <tr>
                    <td>อาชีพ :</td>
                    <td><input class="easyui-textbox" type="text" name="mothercareer" id="mothercareer"  value="บริษัทเอกชน" ></input></td>
                </tr>

                 <tr>
                    <td>วัน/เดือน/ปี เกิด :</td>
                    <td>
                        <input class="easyui-datetimebox"  style="width:200px"  name="birthdatemother"  id="birthdatemother" />

                        <a href="javascript:void()"  class="easyui-linkbutton" data-options=" iconCls:'icon-man' "  id="calYear2" name="calYear2" >คำนวณอายุ</a>
                        <input class="easyui-textbox"  style="width:50px; height: 30px;" readonly="true"  id="age2" name="age2" > ปี
                          
                    </td>
                </tr>



                 <tr>
                    <td>โรคประจำตัว :</td>
                    <td><input class="easyui-textbox" type="text" name="diseasemother" id="diseasemother"  value="ความดันสูง" ></input></td>
                </tr>


                <tr>
                    <td>
                        ชื่อ สามี/ภรรยา  - นามสกุล :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="spousename"  id="spousename"  style="width:100px;height: 30px;"  value="อาทิตยา"></input>
                        <input class="easyui-textbox" type="text"   name="spouselastname"  id="spouselastname"    style="width:100px;height: 30px;"  value="นามวงศ์" ></input>
                    </td>
                </tr>






                  <tr>
                    <td>สวัสดิการการรักษา :</td>
                    <td>
                        <select class="easyui-combobox"  id="benefits"  name="benefits"  data-options="
                                onSelect:function(rec){
                                   if( $('#benefits').combobox('getValue') == 5 )
                                   {
                                        $('#otherbenefits').textbox('clear');     
                                        $('#otherbenefits').textbox('setValue','ระบุสวัสดิการการรักษา');
                                        $('#otherbenefits').textbox('readonly',false);    
                                   }
                                   else
                                   {
                                         $('#otherbenefits').textbox('setValue','');
                                      //   $('#otherbenefits').textbox('readonly',false);
                                   }
                                }
                                ">
                            <option value="1">ประกันสังคม</option>
                            <option value="2">บัตรทอง</option>
                            <option value="3">จ่ายตรงข้าราชการ</option>
                            <option value="4">เงินสด</option>
                            <option value="5">อื่นๆ </option>

                        </select>

                        <input class="easyui-textbox"  style="width: 200px;height: 30px;"    id="otherbenefits" name="otherbenefits"  readonly="true"   />

                    </td>
                </tr>


                <tr>
                      <td>หมายเลข :</td>
                      <td> <input class="easyui-textbox"  style="width:200px;height: 30px;"   id="numberbenefits"  name="numberbenefits"  value="TR145287"   />  </td>
                </tr>


             <tr>
            <td>
               เคยได้รับการรักษามาก่อน :
            </td>
            <td>
                <input type="radio" name="evertreat"  id="evertreat1" value="1"    /> ไม่ทราบ
                <input type="radio" name="evertreat"  id="evertreat2"  value="2"   /> ไม่เคย
                <input type="radio" name="evertreat"  id="evertreat3"   value="3" /> เคย ระบุ : <input class="easyui-textbox"  name="otherevertreat"   id="otherevertreat"   style="width:150px;height: 30px;"   />
                

            </td>
           </tr>


           <tr>
               <td>
                   สถานที่ที่ได้รับการรักษามาก่อน :
               </td>
               <td>
                   <input class="easyui-textbox" type="text" name="treatmentfacility"   id="treatmentfacility" style="width:170px;height: 30px;"  value="รพ.พยาบาลศรีนครินทร์"  />
               </td>
           </tr>


           <tr>
               <td>
                   แพทย์เจ้าของคนไข้ :
               </td>
               <td>
                   <input class="easyui-textbox" type="text" name="doctor" id="doctor"  value="นพ.นพคุณ ดวงจินทร์ดา"></input>
               </td>
           </tr>


               <tr>
                   <td>ระดับพัฒนาการผู้ป่วย :  </td>
                   <td>
                       <input type="radio" name="developmentallevel" value="1"  id="developmentallevel1"   class="easyui-validatebox" > ปกติ <input type="radio" name="developmentallevel"   id="developmentallevel2"   value="2"  class="easyui-validatebox" required="true" checked="true"> ไม่ปกติ   <?=nbs(5)?>คำอธิบายเพิ่มเติม <input class="easyui-textbox"  id="otherdevelopmentallevel"  name="otherdevelopmentallevel"  style="width: 150px;height: 30px;"  readonly="true" />
                   </td>
               </tr>

               <tr>
                   <td colspan="2">
                      <?=nbs(50)?>
          <a href="javascript:void(0)" class="easyui-linkbutton"
           iconCls="icon-man"
           style="width:100px;height:40px;"
            onClick="
               $('#fr_add_patient').form('submit',{
                   url:'<?=base_url()?>index.php/welcome/insert_patient/',
                   success:function(data)
                   {
                          //alert(data);
                          
                          if( data == '1' )
                          {
                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');                     
                                    $('#dia1').dialog('close');
                                    $('#dg1').datagrid('reload');
                          }else if( data == '0' )
                          {
                                   $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลล้มเหลว');
                          }
                          
                         
                   }
               });

              "  >  บันทึกข้อมูล </a>
                       <a href="javascript:void(0)"  class="easyui-linkbutton"  style=" width:100px;height: 40px;  "  iconCls="icon-remove"  onclick="  $('#dia1').dialog('close');   "  > ปิด (Close) </a>      

                   </td>
               </tr>

            </table>

                 </form>




        </div>
        <div title="ประวัติการตั้งครรภ์" style="padding:10px">



    <div style="margin:20px 0;"></div>

    <table cellpadding="5">
        <tr>
            <td>
                ยาที่ใช้ในระยะครรภ์ 3 เดือน ยาสตรีปรับประจำเดือน ไม่รวมวิตามิน : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
            <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />

            </td>
        </tr>

          <tr>
            <td>
                สูบบุหรี่ในระยะครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> มวลต่อวัน


                  <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />



            </td>
        </tr>

                  <tr>
            <td>
                ดื่มเครื่องดื่มแอลกอฮอล์ในระยะตั้งครรภ์ 3 เดือนแรก : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่
               <?=nbs(3)?>  <input class="easyui-textbox" type="text" name="subject" data-options="required:true"  style="width:50px"></input> ซีซีต่อวัน


                  <?=nbs(5)?>
            ไม่ทราบ
            <input  type="radio"  />
            จำไม่ได้
              <input  type="radio"  />



            </td>
        </tr>

    </table>



        </div>


        <div title="ประวัติการคลอด" data-options="closable:false" style="padding:10px">
            <table cellpadding="5">
                <tr>
                    <td>
                        อายุครรภ์ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>



                    </td>
                </tr>

                <tr>
                    <td>
                        วิธีคลอด :
                    </td>
                    <td>

                        <!--
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                          -->

                          <input type="radio"> ธรรมชาติ
                          <input type="radio"> ผ่าตัด
                          <input type="radio"> อื่นๆ
                          <input class="easyui-textbox"  style="width:200px;height: 30px;"   />

                    </td>
                </tr>

                <tr>
                    <td>
                        น้ำหนักแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ส่วนสูงแรกคลอด :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        ปัญหาแรกคลอด :
                    </td>
                    <td>
                        <input type="radio" /> ไม่มี  <input type="radio" /> มี
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>

                <!--
                 <tr>
                    <td>
                        อื่นๆ :
                    </td>
                    <td>
                        <input class="easyui-textbox" type="text" name="subject" data-options="required:true"></input>
                    </td>
                </tr>
                -->

            </table>
        </div>


           <div title="ประวัติครอบครัว" data-options="iconCls:'icon-save',closable:false" style="padding:10px">
                <table cellpadding="5">

                <tr>
                    <td>บิดามารดาเป็นปากแหว่งเพดานโหว่หรือไม่ : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ใช่ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่</td>

                </tr>

                <tr>
                    <td>ญาติที่เกี่ยวพันทางสายเลือดมีภาวะปากแหว่งเพดานโหว่หรือไม่ : </td>
                    <td> <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ไม่มี <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> มี  <?=nbs(2)?>  เกี่ยวข้องเป็น <input class="easyui-textbox"  style="width: 200px;height: 30px;"  /> </td>  </td>
                </tr>

                <!--
                <tr>
                     <td>ระดับพัฒนาการผู้ป่วย : <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true"> ปกติ <input type="Radio" name="Gender" value="1"  class="easyui-validatebox" required="true" checked="true"> ไม่ปกติ</td>
                </tr>
                -->

                <tr>
                    <td>อายุบิดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                            <tr>
                    <td>อายุมารดาในขณะที่มีบุตร :</td>
                    <td><input class="easyui-textbox" style="width:70px;height: 30px;"></td>
                </tr>

                <tr>
                     <td></td>
                    <td><input type="submit" value="Submit"></input></td>

                </tr>

            </table>
        </div>




    </div>








    </div>



      </div>











                   </div>
                   <!--  tab all program -->


	</div>




	</div>








</div>
  <!-- End Frame--->
























 </div>












    </body>
    </html>
