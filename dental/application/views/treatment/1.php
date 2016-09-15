 
<!--   วัน/เดือน/ปี ที่เริ่มทำการรักษา   ----------------->
<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr1').datebox('getValue')
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
                             $('#age1_fr1').textbox('setValue',c);
                       }
                      
                        
                 });
             });

</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr1').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr1').datebox('getValue')
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
                             $('#age2_fr1').textbox('setValue',c);
                       }
                      
                        
                 });
             });

</script>

<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr4').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr4').datebox('getValue')
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
                             $('#age1_fr4').textbox('setValue',c);
                       }
                      
                        
                 });
             });

</script>

 <script type="text/javascript">
            //-- วัน/เดือน/ปี ที่สิ้นสุดการรักษา --
             $(function(){
                 $('#cal2_fr4').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date2_fr4').datebox('getValue')
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
                             $('#age2_fr4').textbox('setValue',c);
                       }
                      
                        
                 });
             });

</script>


<script type="text/javascript">
            //-- คำนวณอายุของบิดา --
             $(function(){
                 $('#cal1_fr6').bind('click',function(){
                      //date_fr1
                       var  strdate=$('#date_fr6').datebox('getValue')
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
                             $('#age1_fr6').textbox('setValue',c);
                       }
                      
                        
                 });
             });

</script>

<!--   คำนวณอายุ  daiag 1   ----------------->

<script type="text/javascript">
     $(function(){
           // $("#procedure1_fr1")
          //procedure2_fr1
          //procedure3_fr1
          //procedure4_fr1
          //procedure5_fr1
          //otherprocedure_fr1
          
          //   else if(    $('#completed_left').is(":checked")    )
          
          /*
          if(   $('#procedure1_fr1').is(':checked')  )
          {
                  alert('t');
          }
          */
         
         $('#procedure1_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
         });
         
                 $('#procedure2_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                  $('#otherprocedure_fr1').textbox('setValue',"");
         });
         
                       $('#procedure3_fr1').bind('click',function(){
                 //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                   $('#otherprocedure_fr1').textbox('setValue',"");
         });
         
         
                                $('#procedure4_fr1').bind('click',function(){
                //alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',true);
                   $('#otherprocedure_fr1').textbox('setValue',"");
         });
         
         
                                         $('#procedure5_fr1').bind('click',function(){
                // alert('t');
                 $('#otherprocedure_fr1').textbox('readonly',false);
                 $('#otherprocedure_fr1').textbox('setValue',"ระบุ");
         });
         
          
     });
</script>



<div id="dia10"  title="10. Other surgery " style="width:800px;height: 800px;padding: 10px;" class="easyui-dialog"     data-options="
     
     closed:true,
     buttons:[
     {  text:'Save', iconCls:'icon-save'   },
     {  text:'Close', iconCls:'icon-cancel',handler:function(){  $('#dia10').dialog('close');  } }
     ]
     ">
    
    
      <div class="easyui-tabs" style="width:700px;height:800px">
                <div title="Vestibuloplasty" style="padding:10px">
       
     <!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
            
               <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />

            
            
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>       

  <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>


     
      <!-------------------- begin ---------------------->                   
                       
                       
                </div>
               <div title="Frenectomy" style="padding:10px">
                         <!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>    
                         
                           <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>

                         
      <!-------------------- begin ---------------------->   
                </div>
                 <div title="Gingivectomy" style="padding:10px">
       <!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>   
       
         <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>

       
       
      <!-------------------- begin ---------------------->                     
                </div>
          
              <div title="Torectomy" style="padding:10px">
      <!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>   
      
        <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>

      <!-------------------- begin ---------------------->                      
                </div>
                
                <div title="Oronasal fistula closure" style="padding:10px">
     <!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>     
     
       <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>

      <!-------------------- begin ---------------------->                       
                </div>
          
                <div title="อื่นๆ " style="padding:10px">
       <!-------------------- begin ----------------------> 
       <div style="padding: 10px 5px"  >
           อื่นๆ : <input class="easyui-textbox"  style="width: 200px;height: 30px;"    />
           
       </div>
       
       
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>           
       
       
         <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>

      <!-------------------- begin ---------------------->                     
                </div>
          
            </div>  
    
    
    
    
    
     
    
</div>


<div id="dia9" title="9. Orthognathic surgery "    class="easyui-dialog" style="width:800px;height: 550px;left:10px;top: 10px;padding: 5px  5px  ;"  data-options="
     closed:true,
     
     ">
    
    <div class="easyui-tabs" style="width:700px;" >
        <div title=" Orthognathic surgery ( Main ) " style="padding:10px">
            <!---------------------- begin ------------------------------------------>
    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา : <input class="easyui-combobox" data-options=" prompt:'เลือกแพทย์ผู้ทำการรักษา '   "  style="width:200px;height: 40px;"   />
        </label>
    </div>
    <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่ทำการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
            
             <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    /> 
            
        </label>
    </div>
   

    <!--
           <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
        </label>
    </div> 
    -->
    
    

  
    
    <div style="padding: 10px 5px;">
              Classification of GOSLON  : 
                </td>
                <td>
              <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
            Incisor classification of malocclusion : 
            
            <!--
            <input class="easyui-combobox" data-options=" prompt:' Angle \'s classicfication '   "  style="width:200px;height: 40px;"   />
             -->
             
               <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>
               
                </select>
             
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
            Skeletal  classicfication : 
            
            <!--
            <input class="easyui-combobox" data-options=" prompt:' Skeleton  classicfication '   "  style="width:200px;height: 40px;"   />
            -->
            
            
            
                    <input type="radio" name="inc1"   />  I
                    
                       <input type="radio"   name="inc1"  />  II 
              
      
                    
                    <input type="radio"  name="inc1"   />  III
                 
                    
            </label>
    </div>
    
      <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด : 
            
            <input type="radio"  > Maxilla    ระบุ  : <input  class="easyui-textbox"   style="width: 100px;height: 30px;"   />   
            
            <input type="radio"  > Mandible  ระบุ  : <input  class="easyui-textbox"  style="width: 100px;height: 30px;"   />  
            
          
            <!--
            <input class="easyui-combobox" data-options=" prompt:'  เลือกเทคนิคการผ่าตัด '   "  style="width:200px;height: 40px;"   />
            -->
            
         
            
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
               ชนิดเครื่องมือ : <input class="easyui-textbox"   style="width: 200px;height: 30px;"   />
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>
    
    
    
    
    <div style="padding: 10px 120px;">
        <a href="javascript:void(0)"  iconCls="icon-save"  style="width:90px;height: 40px"   class="easyui-linkbutton">Save</a>
          <a href="javascript:void(0)"  iconCls="icon-cancel"   style="width:90px;height: 40px"  onclick=" $('#dia9').dialog('close');  "  class="easyui-linkbutton">Close</a>
    </div>
    
      <!---------------------- end ------------------------------------------>
        </div>
        
        <div title="Distraction" style="padding:10px">
          
            
            <!---------------------- begin ------------------------------------------>
    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา : <input class="easyui-combobox" data-options=" prompt:'เลือกแพทย์ผู้ทำการรักษา '   "  style="width:200px;height: 40px;"   />
        </label>
    </div>
    <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่ทำการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
            
             <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    /> 
            
        </label>
    </div>
   
             <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
            
             <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    /> 
            
        </label>
    </div>
            

    <!--
           <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา : <input class="easyui-datebox" style="width:200px;height: 40px;"  />
        </label>
    </div> 
    -->
    
    <div style="padding: 10px 5px;">
              Classification of GOSLON  : 
                </td>
                <td>
              <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
    
    
    <div style="padding: 10px 5px;">
        <label>
            Incisor classification of malocclusion : 
            
            <!--
            <input class="easyui-combobox" data-options=" prompt:' Angle \'s classicfication '   "  style="width:200px;height: 40px;"   />
           -->
           
                          <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>
               
                </select>
        
        
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
            Skeletal  classicfication : 
            <!--
            <input class="easyui-combobox" data-options=" prompt:' Skeleton  classicfication '   "  style="width:200px;height: 40px;"   />
            -->
            
                       <input type="radio" name="inc1"   />  I
                    
                       <input type="radio"   name="inc1"  />  II 
              
      
                    
                    <input type="radio"  name="inc1"   />  III
        
        </label>
    </div>
    
      <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด : 
            
            <input type="radio"  > Maxilla    ระบุ  : <input  class="easyui-textbox"   style="width: 100px;height: 30px;"   />   
            
            <input type="radio"  > Mandible  ระบุ  : <input  class="easyui-textbox"  style="width: 100px;height: 30px;"   />  
            
          
            <!--
            <input class="easyui-combobox" data-options=" prompt:'  เลือกเทคนิคการผ่าตัด '   "  style="width:200px;height: 40px;"   />
            -->
            
         
            
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
               ชนิดเครื่องมือ : <input class="easyui-textbox"   style="width: 200px;height: 30px;"   />
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายระหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
    <div style="padding: 10px 120px;">
        <a href="javascript:void(0)"  iconCls="icon-save"  style="width:90px;height: 40px"   class="easyui-linkbutton">Save</a>
          <a href="javascript:void(0)"  iconCls="icon-cancel"   style="width:90px;height: 40px"  onclick=" $('#dia9').dialog('close');  "  class="easyui-linkbutton">Close</a>
    </div>
    
      <!---------------------- end ------------------------------------------>
            
        </div>
        
    </div>
    
    
    
</div>



<div id="dia_treat1" class="easyui-window" title=" 5. Orthodonic preparation for bone graft surgery  " data-options="modal:true,closed:true" style="width:600px;height:600px;padding:5px;">

    
    
    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา :  <input class="easyui-combobox"  style="width: 200px;height: 40px;"   />
        </label>
    </div>
  
    
    
        <div style="padding: 10px 5px;">
        <label>
            
            วัน/เดือน/ปี ที่เริ่มทำการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
            
            <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 30px;"    />
            
            
        </label>
    </div>
    
            <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
            
          
            
            <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 30px;"    />
            
            
        </label>
    </div>
    
      
    

    
    <!--
    <div style="padding: 10px 5px;">
        <label>
            <?=nbs(30)?>
            Diagnosis :   
      
            <input class="easyui-textbox"   style="width:300px;height: 30px;"  />
         
  
        </label>
    </div>
    -->
    
    
 
    
 <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
       <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
    
       <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
     
    
      <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>
    
    
    
    <div  style="padding: 10px 100px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;"  data-options=" iconCls:'icon-save' "  >Save</a>
           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;" data-options=" iconCls:'icon-cancel'  "  onClick="  $('#dia_treat1').window('close');  "  >Close</a>
    </div>
    
    
</div> 

<div id="dia_treat2_mo"  class="easyui-window"  title="2. Lip nasal and nasal floor repair "   style="width:700px;height: 550px;left:10px;top: 10px"
     data-options="
     iconCls:'icon-add' ,
     closed:true, 
    
      "
     >
    
    
    <!--
    <div style="padding: 10px 5px;" >
        <label>
            แพทย์ผู้ทำการรักษา :
            <input class="easyui-textbox"  style="width:200px;height: 40px;"   data-options=" iconCls:'icon-man',  "   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;" >
        <label>
           วัน/เดือน/ปี ที่เริ่มทำการรักษา :
            <input class="easyui-datebox"  style="width:150px;height: 40px;"    />
        </label>
    </div>
    
            <div style="padding: 10px 5px;" >
        <label>
           วัน/เดือน/ปี ที่สิ้นสุดการรักษา :
            <input class="easyui-datebox"  style="width:150px;height: 40px;"    />
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
        <label>
            เทคนิคการผ่าตัด :
            <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
        </label>
    </div>
    -->

    
    <!--
    <div style="padding: 10px 5px;">
        <label>
            Procedure : 
            <input type="checkbox"  />  1.Strapping  
                        <input type="checkbox"  />  2.Nasal Molding 
                        <input type="checkbox"  />  3.Alveolar  Molding  
                        <input type="checkbox"  /> 4. Simple Obturator 
                        <br>
                        <input type="checkbox"  />  อื่นๆ 
                        <input class="easyui-textbox"   data-options=" mutilne:true, "  style="width:300px;height: 50px"    /> 
                        
                        
                       
        </label>
        
    </div>
    -->
    
    <!--
    <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายก่อนการรักษา (Before) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    
            <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายระหว่างการรักษา (During) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    
    
        <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายหลังการรักษา (After) :
            <input class="easyui-filebox"   data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    -->
    
    <div style="padding:10px  100px;">
        
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-reload'  "  onclick="  window.open('http://www.sanook.com');  "  style="height: 40px;width:80px;"  >เชื่อมโยง</a>
        
        <!--
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-save'  "  style="height: 40px;width:80px;"  >Save</a>
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel' ,onClick:function(){  $('#dia_treat2_mo').window('close');  }  "    style="height: 40px;width:80px;"  >Close</a>
        -->
        
    
    </div>
    
</div>


<div id="dia_treat2" class="easyui-window" title=" Diagnose of congenital abnormalities " data-options="modal:true,closed:true" style="width:400px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ตรวจ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                     <tr>
                    <td>Diagnosis :</td>
                    <td><input name="name1" id="name1"  class="easyui-textbox" ></input></td>
                </tr>
                
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                             <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>   


<div id="dia_treat3" class="easyui-window" title="1. Pre-surgical orthopedics therapy (PSOT)" data-options="modal:true,closed:true" 
     style="width:700px;height:480px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
    <div class="easyui-panel"  style="padding: 5px;"  >
        <a href="javascript:void(0)"  class="easyui-linkbutton"   iconCls="icon-man"  style="width:100px;height: 40px;" 
           onclick="    
                    $('#dia_psot').dialog('open');
                    // buttons:[ { text:'Close', }  ]  
                   
                    $('#dg_psot').datagrid({
                        url:'<?=base_url()?>index.php/welcome/json_tr1',
                        rownumbers:true,
                        singleSelect:true,
                        columns:[[
                                { field:'doctor',title:' ทันตแพทย์ผู้ทำการรักษา ' , align:'center' },
                                {  field:'joindoctor'  , title:'ทันตแพทย์ผู้ร่วมทำการรักษา' , align:'center'  },
                                {  field:'begin_date', title:'เริ่มทำการรักษา' ,  align:'center'    },
                                {  field:'end_date', title:'สิ้นสุดการรักษา' ,  align:'center'    },
                                {  field:'procedure', title:'Procedurev' ,  align:'center'    },
                                {  field:'otherprocedure', title:' Procedurev อื่นๆ ระบุ ' ,  align:'center'    },
                              //  {  field:'otherprocedure', title:'Procedurev' ,  align:'center'    },
                                {  field:'cast', title:'Dental Cast' ,  align:'center'    },
                                
                        ]],
                         toolbar:[
                            { text:'Reload',iconCls:'icon-reload',handler:function(){   $('#dg_psot').datagrid('reload');   }   },
                          
                            { text:'Delete' , iconCls:'icon-remove' ,handler:function()
                                {
                                     var  row=    $('#dg_psot').datagrid('getSelected');
                                       if( row )
                                       {
                                           var  id=row.id_psot;
                                           //alert( id );
                                           var  url='<?=base_url()?>index.php/welcome/del_tr1/'  + id ;
                                           $.post(url,function(data){ 
                                                  //alert(data);
                                                  if( data == 1 )
                                                  {
                                                       $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                       $('#dg_psot').datagrid('reload');
                                                  }
                                                  else if( data == 0 )
                                                  {
                                                       $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');
                                                      //$('#dg_psot').datagrid('reload');
                                                  }
                                                  
                                                  
                                             });
                                           
                                       }
                                 } 
                             },
                         ] ,
                         
                    });
                     

           "
           
           
           >แสดงข้อมูล</a>
        
        <div class="easyui-dialog"  id="dia_psot"  data-options=" closed:true "  title="  Pre-surgical orthopedics therapy (PSOT)  " style="width: 700px;height: 400px;" >
            <div class="easyui-datagrid"  id="dg_psot"  ></div>
        </div>
        
        
    </div>
    
            <form id="fr1"     method="post" enctype="multipart/form-data">
            <table>
                
                 <tr>
                    <td align="right">
                        ชื่อ - นามสกุล :
                    </td>
                    <td>
                        <input class="easyui-textbox"  id="id_history_patient"   name="id_history_patient"  style="width:30px;height: 30px;"  readonly="true"  />
                        <input class="easyui-textbox"  id="name_lastname"  name="name_lastname"  style="width:200px;height: 30px;" readonly="true"  />
                    </td>
                </tr>
                
                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td> <input name="doctor_fr1" id="doctor_fr1"    class="easyui-textbox"   style="width: 200px;height: 30px;"  value="นพ.ปราโมทย์  คำชะนินท์"    /> </td>
                </tr>
                
                 <tr>
                    <td>ทันตแพทย์ผู้ร่วมทำการรักษา :</td>
                    <td>
                        
                        <input class="easyui-textbox"   name="joindoctor_fr1"  id="joindoctor_fr1"    style="width:200px;height: 30px"  value="พญ.อินทญา  คำชะนินท์"   />
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>
                        <input name="date_fr1" id="date_fr1" class="easyui-datetimebox"></input>
                        
                        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-man'  ,  "   style="widht:80px;height: 30px;"   id="cal1_fr1"    />คำนวณอายุ</a>
                        <input class="easyui-textbox"  id="age1_fr1"  name="age1_fr1"   style="width: 50px;height: 30px;"   />
                        
                    </td>
                </tr>
                
                <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>
                        <input    name="date2_fr1"   id="date2_fr1"   class="easyui-datetimebox"></input>
                        
                     <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-man'  ,  "   style="widht:80px;height: 30px;"    id="cal2_fr1"    />คำนวณอายุ</a>
                        <input class="easyui-textbox"   style="width: 50px;height: 30px;"    id="age2_fr1"  name="age2_fr1"    />
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                         Procedure : 
                    </td>
                    <td>
                        <input type="radio"  name="procedure_fr1"  id="procedure1_fr1"  value="1" />  1.Strapping  
                        <input  type="radio"  name="procedure_fr1"   id="procedure2_fr1"   value="2"  />  2.Nasal Molding 
                        <input  type="radio"  name="procedure_fr1"    id="procedure3_fr1"  value="3" />  3.Alveolar  Molding  
                        <input  type="radio"  name="procedure_fr1"   id="procedure4_fr1" value="4" /> 4. Simple Obturator 
                        <br>
                        <input   type="radio" name="procedure_fr1"  id="procedure5_fr1"  value="5" />  5.อื่นๆ 
                        <input class="easyui-textbox"   name="otherprocedure_fr1"  id="otherprocedure_fr1"   data-options=" mutilne:true, "  style="width:300px;height: 20px"  readonly="true"   value="อื่นๆ ระบุ"  /> 
                    </td>
                </tr>
                
           
                <tr>
                    <td>
                       รูปถ่ายก่อนการรักษา (Before) :   
                    </td>
                    <td>
                        <input class="easyui-filebox"  id="file1_fr1"  name="file1_fr1"  />
                    </td>
                </tr>
                
                                <tr>
                    <td>
                       รูปถ่ายระหว่างการรักษา (During) :   
                    </td>
                    <td>
                        <input class="easyui-filebox"   id="file2_fr1"  name="file2_fr1"  />
                    </td>
                </tr>
                
                                <tr>
                    <td>
                       รูปถ่ายหลังการรักษา (After) :   
                    </td>
                    <td>
                        <input class="easyui-filebox"    id="file3_fr1"  name="file3_fr1"    />
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                         <label>
                         Dental Cast :
                        </label>

                    </td>
                    <td>
                         
                        <input  type="radio"  name="cast"  id="yes"  value="1" > Yes  <input  type="radio"  name="cast"    id="no"  value="2" > No
                        
                    </td>
                    
                </tr>
                
               <!-- 
                     <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator
                        
                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping
                        
                    </td>
                </tr>
                
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>
                
                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"
                           onclick="
                                 $('#fr1').form('submit',{
                                       url:'<?=base_url()?>index.php/welcome/inst_tr1',
                                       success:function(data){
                                           //alert(data);
                                           
                                             if( data == 1 )
                                             {
                                                  $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                                  $('#dia_psot').dialog('open');
                                                  $('#dg_psot').datagrid('reload');                                             
                                             }
                                              else if( data==0)
                                              {
                                                    $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                                    $('#dg_psot').datagrid('reload');       
                                              }
                                                
                                             
                                       }

                                  });
                           
                           "
                           
                           
                           
                           style="width:100px;height: 40px;">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'"  style="width:100px;height: 40px;" >Close</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-man'"  onclick=" $('#dia_sub_dia_treat3').dialog('open');  "   style="width:100px;height: 40px;" >Preview</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>   

<div class="easyui-dialog"  id="dia_sub_dia_treat3"  title=" จำนวนวันที่ทำการรักษา "   style="width:300px;height: 400px;top: 10px;left: 10px;" 
     data-options="  modal:false,closed:true   "
     >
       
</div>


<div id="dia_treat4" class="easyui-window" title=" Feeding and neonatal care in children with cleft lip-palate " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
          
            <table>
                
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>Diagnosis :</td>
                    <td><input name="name1" id="name1" class="easyui-textbox"></input></td>
                </tr>
                 
                <!--
                <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator
                        
                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping
                        
                    </td>
                </tr>
                -->
                
                <!--
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>
                
                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                        
                        <input class="easyui-datebox"></input>
                        
                        <!--<input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">-->
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
       
    
    
</div>  





<div id="dia_treat5" class="easyui-window" title=" MRI, CT scan " data-options="modal:true,closed:true" style="width:500px;height:250px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ให้การรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                        <!--<input name="name1" id="name1" class="easyui-textbox"></input>-->
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                 
                <!--
                <tr>
                    <td>เครื่องมือที่ใช้ :</td>
                    <td>
                        <input name="name1" id="name1"  type="checkbox" ></input>NAM
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Obturator
                        
                              <select class="easyui-combobox" name="state" style="width:200px;">
                                      <option value="1">Mc-Neil-type approaches</option>
                                      <option value="2">T-traction</option>
                                       <option value="3">Pin-retainer plate</option>
                                      <option value="4">Transverse bar and screw</option>
                                      <option value="5">Passive plates with lip surgery</option>
                                       <option value="6">Zurich appliance</option>
                                       <option value="7">Growth stimulator</option>
                              </select>
                        <br>
                        <input name="name1" id="name1"  type="checkbox" ></input>Strapping
                        
                    </td>
                </tr>
                -->
                
                <!--
                <tr>
                    <td>รูปถ่าย :</td>
                    <td><input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"></td>
                </tr>
                
                <tr>
                    <td>วันที่ถอดเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
                
                
                <tr>
                    <td>รูปภาพ MRI :</td>
                    <td>
                        
                        <!--<input class="easyui-datebox"></input>-->
                        
                       <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                    
                    </td>
                </tr>
                
                 <tr>
                    <td>รูปภาพ CT scan :</td>
                    <td>
                        
                        <!--<input class="easyui-datebox"></input>-->
                        
                       <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                    
                    </td>
                </tr>
                
               <tr>
                    <td>Diagnosis :</td>
                    
                    <td>
                        
                        <!--<input class="easyui-datebox"></input>-->
                        
                     <!--  <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%"> -->
                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>





<div id="dia_treat6" class="easyui-window" title=" 2. การผ่าตัดซ่อมแซมริมฝีปาก จมูก และพื้ันจมูก " data-options="modal:true,closed:true" style="width:500px;height:250px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                 
                <tr>
                    <td>เทคนิคการผ่าตัด :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 

                <tr>
                    <td>รุปถ่ายก่อนการรักษา (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                       <tr>
                    <td>รุปถ่ายระหว่างการรักษา (During) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่ายการรักษา (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
            
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat7" class="easyui-window" title=" 3. Palate repair  " data-options="modal:true,closed:true" style="width:600px;height:500px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                
                <!--
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา  :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        วัน/เดือน/ปี ที่สิ้นสุดการรักษา : 
                      
                        
                    </td>
                    <td>
                            <input class="easyui-datebox"></input>
                    </td>
                        
                </tr>
                    
                                
                <tr>
                    <td>เทคนิคการผ่าตัด :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 

                <tr>
                    <td>รุปถ่ายก่อนการรักษา (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                       <tr>
                    <td>รุปถ่ายระหว่างการรักษา (During) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่ายหลังการรักษา (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                -->
            
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-reload'"   onclick=" window.open('http://www.sanook.com'); " >เชื่อมโยง</a>
                        <!--
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove' , onClick:function(){ $('#dia_treat7').window('close');    }   ">Close</a>
                           -->
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>



<div id="dia_treat8" class="easyui-window" title=" Surgical reconstruction of velopharyngeal insufficiency " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                <!--
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                -->
                 
                <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 
                
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               
            
 <tr>
     <td>วัน/เดือน/ปี ที่ทำ</td>
     <td>
          <input class="easyui-datetimebox" required style="width:200px">
     </td>
 </tr>
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>


<div id="dia_treat9" class="easyui-window" title=" Correction of hearing problems " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 
                -->
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               
            
 <tr>
     <td>วิธีการทดสอบ :</td>
     <td>
              <select class="easyui-combobox" name="state" style="width:200px;">
        <option value="1">Otoacoustic emission</option>
        <option value="2">Acoustic immittance audiometry</option>
         <option value="3">Auditory brainstem evoked response</option>
         <option value="4">Behavioral observation audiometry (BOA)</option>
         <option value="5">Visual reinforcement audiometry (VRA)</option>
         <option value="6">Conventional play audiometry (CPA)</option>
        </select>
     </td>
 </tr>
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat10" class="easyui-window" title=" ดูแล ป้องกัน เสริมสร้างสุขภาพช่องปากในระยะฟันน้ำนม " data-options="modal:true,closed:true" style="width:500px;height:150px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 
                -->
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               

                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat11" class="easyui-window" title=" แก้ไขการสบฟันระยะแรกเพื่อป้องกันและเตรียมการจัดฟันต่อไป รวมทั้งกระตุ้นการเจริญเติบโตขากรรไกรบนในกรณีที่จำเป็น " data-options="modal:true,closed:true" style="width:800px;height:150px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                 <!--
                <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 
                -->
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               

                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>


<div id="dia_treat12_7" class="easyui-window" title=" 7. Growth modification  " data-options="modal:true,closed:true" style="width:800px;height:500px;">

            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
                <table >
                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                        
                                                  <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />
            
            
                    </td>
                </tr>
                
                 
                
                    <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                        
                        
           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />
            
            
                    </td>
                </tr>
                
                <tr> 
                    <td>
                <div style="padding: 10px 5px;">
              Classification of GOSLON  : 
                </td>
                <td>
              <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
                    </td>
            </tr>
                
                
                   <tr>
                    <td>Incisor classification of malocclusion:</td>
                    <td>
                        
                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                      -->
                      
                                             <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">I</option>
               <option value="2">II div 1</option>
                       <option value="3">II div 2</option>
               <option value="4">III</option>
               
                </select>
                      
                    
                    </td>
                </tr>
                
                  <tr>
                    <td>Skeletal  classification :</td>
                    <td>
                        
                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                        -->
                        
                         <input type="radio" name="inc1"   />  I
                    
                       <input type="radio"   name="inc1"  />  II 
              
      
                    
                    <input type="radio"  name="inc1"   />  III
                    
                    
                    </td>
                </tr>
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td>
                        
                        <!--
                        <input name="name1" id="name1" class="easyui-combobox"></input>
                    -->
                    
                    <input type="radio"  > Facial mask  <?=nbs(3)?> ระบุ <input  class="easyui-textbox"  style="widht:100px;height: 30px"  />
                    <input type="radio"  > Functional appliance  <?=nbs(3)?>   ระบุ <input  class="easyui-textbox"  style="widht:100px;height: 30px"  />
                    
                    
                    </td>
                </tr>
          
                     
                
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               

 
 
  <tr>
     <td>
         รูปถ่ายก่อนการรักษา (Before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr> 
 
   <tr>
     <td>
         รูปถ่ายระหว่างรักษา (During) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr> 
 
    <tr>
     <td>
         รูปถ่ายหลังรักษา (After) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:50%">
     </td>
 </tr> 
 
 
           <tr>
                    <td>
                         <label>
                         Dental Cast :
                        </label>

                    </td>
                    <td>
                         
                                      <input  type="radio"> Yes  <input  type="radio"> No
                        
                    </td>
                    
                </tr>
 
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat12').window('close'); "  class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>

<div id="dia_treat12" class="easyui-window" title=" 8. Corrective Orthodontic Treatment  " data-options="modal:true,closed:true" style="width:700px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                        
                        
                                                  <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />
                        
                        
                    </td>
                </tr>
                
                 
                
                    <tr>
                    <td>วัน/เดือน/ปี ที่สิ้นสุดการรักษา :</td>
                    <td>
                        
                        
                        
                        
                    
                        <input class="easyui-datebox"></input>
                        
                        
                                                  <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />
                    
            
            
                    </td>
                </tr>
                
                <tr> 
                    <td>
                <div style="padding: 10px 5px;">
              Classification of GOSLON  : 
                </td>
                <td>
              <select class="easyui-combobox"   style="width:200px;height: 40px;"   >
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
                    </td>
            </tr>
            
                <tr>
                    <td>
      <div style="padding: 10px 5px;">
                    Incisor classification of malocclusion : 
      </td>
      <td>
                    <input type="radio" name="inc1"   />  I
                    
                    <input type="radio"   name="inc1"  />  II div 1 
                    
                       <input type="radio"   name="inc1"  />  II div 2
                    
                    <input type="radio"  name="inc1"   />  III
    </div>
                    </td>
            </tr>
                
                <tr>
                    <td>
          <div style="padding: 10px 5px;">
                    Skeletal  classification of malocclusion : 
          </td>
          <td>
                    <input type="radio" name="inc1"   />  I
                    <input type="radio"   name="inc1"  />  II
                    <input type="radio"  name="inc1"   />  III
    </div>
                    </td>
               </tr> 
                   
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
          
                     
                
                
<!--
                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
 -->               

 
 
  <tr>
     <td>
         รูปถ่ายก่อนการรักษา (Before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
   <tr>
     <td>
         รูปถ่ายระหว่างรักษา (During) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
    <tr>
     <td>
         รูปถ่ายหลังรักษา (After) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
 
          <tr>
                    <td>
                         <label>
                         Dental Cast :
                        </label>

                    </td>
                    <td>
                         
                                      <input  type="radio"> Yes  <input  type="radio"> No
                        
                    </td>
                    
                </tr>
 
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat12').window('close'); "  class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat13" class="easyui-window" title=" ขยายขากรรไกรและจัดเรียงสันเหงือกเพื่อเตรียมสำหรับการปลูกถ่ายกระดูกที่บริเวณช่องโหว่ของสันเหงือก " data-options="modal:true,closed:true" style="width:750px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่เริ่มทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
          
                     <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td>
                    
                        <input class="easyui-textbox"></input>
                    </td>
                </tr>
                
                

                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 -->
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>



<div id="dia_treat14" class="easyui-window" title=" ดูแล ป้องกัน เสริมสร้างสุขภาพช่องปากในระยะฟันผสม-ฟันแท้ระยะแรก " data-options="modal:true,closed:true" style="width:550px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->
                
                

                
                

                
<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 -->
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat15" class="easyui-window" title=" 6. Bone graft surgery   " data-options="modal:true,closed:true" style="width:600px;height:500px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    
    <div class="easyui-panel" style="padding: 3px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"   style="width: 100px;height: 40px;"  iconCls="icon-man"  
           onclick="
              // alert('t');
                    $('#dia_fr6').dialog('open');
           "
           >
            เรียกดูข้อมูล</a>
        <div id="dia_fr6"   class="easyui-dialog"  data-options=" closed:true, buttons:[ {  text:'ปิด (Close)' ,handler:function(){ $('#dia_fr6').dialog('close');  }, iconCls:'icon-remove' } ] "  title="6. Bone graft surgery "  style="width:600px;height: 400px;"  >
            <div class="easyui-datagrid"  style="width:580px;height: 390px;"   id="dg_fr6"  
                 data-options="  
                    url:'<?=base_url()?>index.php/welcome/json_fr6 ',
                   singleSelect:true,
                   rownumbers:true,
                   columns:[[
                       { field:'firstname', title:'ชื่อ', align:'center'  },
                       {  field:'lastname', title:'นามสกุล', align:'center' },
                       { field:'doctor',  title:'แพทย์ผู้ทำการรักษา', align:'center' },
                       { field:'date1', title:'วัน/เดือน/ปี ที่่ทำการรักษา', align:'center' },
                        { title:'เทคนิคที่ใช้ :',  field:'technic',  },
                        {  title:'Dental Cast  ',  field:'dentalcast'  },
                   ]],
                   toolbar:[ 
                   { text:'Reload',iconCls:'icon-reload',handler:function(){  $('#dg_fr6').datagrid('reload');  }  } ,
                   {  text:'Delete',iconCls:'icon-remove',handler:function()
                         {   
                              var  rows=$('#dg_fr6').datagrid('getSelected');
                              if( rows )
                              {
                                     
                                     var  id=rows.id_bonegraft;
                                      //alert(id);
                                      $.messager.confirm('สถานะการลบข้อมูล',' คุณต้องการลบข้อมูลหรือไม่ ', function(r){
                                           if( r )
                                             {
                                                   //alert('t');
                                                   //alert(id);
                                                    var  url='<?=base_url()?>index.php/welcome/del_fr6/'   +  id;
                                                    $.post(url,function(data){
                                                            // alert(data);
                                                              if( data == 1 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                     $('#dg_fr6').datagrid('reload');
                                                              }
                                                              else if( data == 0 )
                                                              {
                                                                     $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลล้มเหลว');
                                                              }
                                                    });
                                             }
                                      } );
                                          
                                      
                                     
                                        
                                   
                              }
                         } 
                     }
                   ]
                 "
                 
                 ></div>
        </div>
           
    </div>
        
    
            <form id="fr6"  method="post" enctype="multipart/form-data">
            <table>
                
                
                <tr>
                    <td>
                          ชื่อ - นามสกุล : 
                    </td>
                    <td>
                         <input class="easyui-textbox"  id="id_history_patient_fr6"   name="id_history_patient_fr6"  style="width:30px;height: 30px;"  readonly="true"  />
                        <input class="easyui-textbox"  id="name_lastname_fr6"  name="name_lastname_fr6"  style="width:200px;height: 30px;" readonly="true"  />
                    </td>
                </tr>
                
                
                <tr>
                    <td> แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="doctor_fr6" id="doctor_fr6" class="easyui-combobox"  value="พญ.ภัทรราพร วรรณวดี"></input></td>
                </tr>
                
                
              
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datetimebox"  id="date_fr6"  name="date_fr6" ></input>
                        
                        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "  id="cal1_fr6"    >คำนวณอายุ</a>
                        <input class="easyui-textbox"   style="width: 50px;height: 40px;"   id="age1_fr6"   />
                        
                    </td>
                </tr>
                
                
                <!--
                 <tr>
                    <td>วัน/เดือน/ปี ที่่สิ้นสุดการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                -->
                
                  <tr>
                    <td>เทคนิคที่ใช้ :</td>
                    <td>
                    
                        <input class="easyui-textbox"  id="technic" name="technic"  value="เทคนิคการผ่าตัด"></input>
                    </td>
                </tr>
                
                    <tr>
                    <td>
        <label>
           รูปถ่ายก่อนการรักษา (ฺBefore) : 
            </label>
                    </td>
                    <td>
                        <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload1_fr6" name="fileupload1_fr6"  />
                    </td>
            </tr>               

                
                <tr>
                    <td>
        <label>
           รูปถ่ายระหว่างการรักษา (ฺDuring) : 
            </label>
                    </td>
                    <td>
           <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายระหว่างการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload2_fr6" name="fileupload2_fr6"   />
                    </td>
            </tr>               
                  
            
            
            <tr>
                <td>
               <label>
           รูปถ่ายหลังการรักษา (ฺAfter) : 
           </label>    
                </td>
                <td>
                         <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   id="fileupload3_fr6" name="fileupload3_fr6"   />
                </td>
            </tr>
 
            
            
                     <tr>
                    <td>
                         <label>
                         Dental Cast :
                        </label>

                    </td>
                    <td>
                         
                        <input  type="radio"  id="dentalcast_fr6"  name="dentalcast_fr6"> Yes  <input  type="radio"> No
                        
                    </td>
                    
                </tr>
        
              
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                -->
                
                

                
                

                
<!--
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 -->
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'"  style="width: 100px;height: 40px;"  
                           onclick="
                              $('#fr6').form('submit',{
                                  url:'<?=base_url()?>index.php/welcome/inst_fr6',
                                  success: function(data)
                                  {
                                         //alert(data);
                                         if( data == 1 )
                                         {
                                               $('#dia_fr6').dialog('open');
                                               $('#dg_fr6').datagrid('reload');
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                         }
                                         else{
                                               $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                                         }
                                  }
                              })
                           "
                           
                           >Save</a>
                        <a href="javascript:void(0)" onclick=" $('#dia_treat15').window('close');  "  class="easyui-linkbutton" data-options="iconCls:'icon-remove'" style="width: 100px;height: 40px;">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat16" class="easyui-window" title=" Orthodonic treatment in permanent teeth " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
            
                
                
                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                
                
                
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                
        
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 

                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>


<div id="dia_treat17" class="easyui-window" title=" Distraction osteogenesis " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                

                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>
                        
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>
                        
                    </td>
                </tr>
                
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
 
          
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 


                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>



<div id="dia_treat18" class="easyui-window" title=" ใส่ฟันเทิยมหรือรักษาทันตกรรมอื่นที่จำเป็น  " data-options="modal:true,closed:true" style="width:500px;height:300px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ทันตแพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                

                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>
                        
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>
                        
                    </td>
                </tr>
                
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
 
          
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 


                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>



<div id="dia_treat19" class="easyui-window" title=" Speech therapy  " data-options="modal:true,closed:true" style="width:500px;height:200px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
        
    
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> ผู้ที่ให้คำแนะนำ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                

                <tr>
                    <td>วัน/เดือน/ปี ที่่ทำการรักษา :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                
                <!--
                <tr>
                    <td>
                        เครื่องมือที่ใช้ :
                    </td>
                    <td>
                        <input class="easyui-combobox"></input>
                        
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา
                    </td>
                    <td>
                        <input  class="easyui-datebox"></input>
                        
                    </td>
                </tr>
               --> 
                
                <!--
                   <tr>
                    <td>Angle's classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                  <tr>
                    <td>Skeleton classification :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                 <tr>
                    <td>ชนิดของเครื่องมือ :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                
                
                  <tr>
                    <td>วัน/เดือน/ปี ที่เสร็จสิ้นการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-datebox"></input></td>
                </tr>
                -->
 
<!--          
 <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (before) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
 
  <tr>
     <td>
         รูปถ่ายก่อน-หลัง ทำการรักษา (after) :
     </td>
     <td>
          <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
     </td>
 </tr> 
-->

                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    
    
</div>




<div id="dia_treat4B" class="easyui-window" title=" 4. Interceptive orthodontic treatment  " data-options="modal:true,closed:true" style="width:600px;height:700px;padding:5px;">

    <!--
    <div style="margin:0px 0 0px 0;"></div>
            <form id="ff" action="form1_proc.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>แพทย์ผู้ทำการรักษา :</td>
                    <td><input name="name1" id="name1" class="easyui-combobox"></input></td>
                </tr>
                <tr>
                    <td>วัน/เดือน/ปี ที่ทำ :</td>
                    <td>
                    
                        <input class="easyui-datebox"></input>
                    </td>
                </tr>
                 
                <tr>
                    <td>เทคนิคการผ่าตัด :</td>
                    
                    <td>
                        

                        <input class="easyui-textbox" style="width:100%;height:32px">
                    
                    </td>
                </tr> 

                <tr>
                    <td>รุปถ่าย (Before) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
                     <tr>
                    <td>รุปถ่าย (After) :</td>
                    <td>
                        <input class="easyui-filebox" name="file2" data-options="prompt:'Choose another file...'" style="width:100%">
                        
                    </td>
                </tr>
                
            
                
                
                <tr>
                    <td colspan="2">
                        <a href="javaScript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Save</a>
                        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-remove'">Close</a>
                    </td>
                  
                </tr>
      
            </table>
        </form>
    -->
        
    
    
    
    <form id="fr4"     method="post" enctype="multipart/form-data">
        

    <div class="easyui-panel"  style="padding: 5px;"  >
        <a href="javascript:void(0)"  class="easyui-linkbutton"  iconCls="icon-man" 
           onclick="
                    $('#dia_fr4').dialog('open');
           "
           style="width: 100px;height: 40px;"    >
            แสดงข้อมูล
        </a>
        
        
        <div class="easyui-dialog"  id="dia_fr4"  data-options="closed:true,resizable:true,"  title=" แสดงข้อมูล Interceptive orthodontic treatment "  style="width:600px;height: 400px;"   >
            <div  class="easyui-datagrid"  id="dg_fr4" 
                  data-options="
                     url:'<?=base_url()?>index.php/welcome/json_fr4',
                     rownumbers:true,
                     singleSelect:true,
                     columns:[[   
                         { field:'firstname',title:'ชื่อ' , align:'center' },
                         { field:'lastname',title:'นามสกุล' , align:'center' },
                         { field:'doctor',   title:'ทันตแพทย์ผู้ทำการรักษา',  align:'center' } ,
                         { field:'begin_date',   title:'วัน/เดือน/เริ่มทำการรักษา',  align:'center' } ,
                         { field:'end_date',   title:'สิ้นสุดการรักษา',  align:'center' } ,
                         { field:'goslon',   title:'Classification of GOSLON',  align:'center' } ,
                         { field:'incisor',   title:'Incisor classification of malocclusion',  align:'center' } ,
                         { field:'skeleta',   title:'Skeletal classification of malocclusion',  align:'center' } ,
                         { field:'dentalcast',title:'Dental Cast',align:'center' },
                     ]]
                     ,
                     toolbar:[
                       { text:'Reload', iconCls:'icon-reload', handler:function(){ $('#dg_fr4').datagrid('reload');  } },
                       {  text:'Delete',iconCls:'icon-remove', handler:function()
                               {
                                     var row=$('#dg_fr4').datagrid('getSelected');
                                     if( row )
                                     {
                                           
                                           var  id=row.id_interceptive;
                                           //alert( id );
                                           $.messager.confirm('Delete Data','คุณต้องการลบข้อมูล',function(r)
                                               {
                                                    if(r)
                                                      {
                                                             var  url='<?=base_url()?>index.php/welcome/del_fr4/' + id ;
                                                             $.post(url,function(data)
                                                               {
                                                                      //alert(data);
                                                                      if( data == 1 )
                                                                      {
                                                                           $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลสำเร็จ');
                                                                           $('#dg_fr4').datagrid('reload');
                                                                           
                                                                      }
                                                                      else if( data==0)
                                                                      {
                                                                          $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลผิดพลาด');
                                                                      }
                                                               });
                                                             
                                                      }
                                               });
                                     }
                                }    
                       }
                     ]
                  "
                  style="width:590px;height: 380px;"
                  >
                
            </div>
        </div>
        
    </div>        
   
    <div style="padding:10px 5px;" > 
        <label>
            ชื่อ - นามสกุล : 
            
                        <input class="easyui-textbox"  id="id_history_patient_fr4"   name="id_history_patient_fr4"  style="width:30px;height: 30px;"  readonly="true"  />
                        <input class="easyui-textbox"  id="name_lastname_fr4"  name="name_lastname_fr4"  style="width:200px;height: 30px;" readonly="true"  />
                        
                        
        </label>
    </div>
    
    
          <div style="padding:10px 5px;" > 
              <label>
                  ทันตแพทย์ผู้ทำการรักษา :  <input class="easyui-textbox"  id="doctor_fr4"  name="doctor_fr4"  value="พญ.กานดา สิทธิ"  style="width:200px;height: 40px;"    />
              </label>
          </div>
    <div style="padding: 10px 5px;">
        
        <label>
            วัน/เดือน/ปี ที่เริ่มทำการรักษา :  <input class="easyui-datetimebox"  id="date_fr4"  name="date_fr4"  style="width:150px;height: 40px;"   />

            <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options="  iconCls:'icon-man' "  id="cal1_fr4"  style="width:100px;height: 30px;"  >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width:50px;height: 30px;"  id="age1_fr4"  name="age1_fr4"   />
            
        </label>
        
        
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา :  <input class="easyui-datetimebox"  id="date2_fr4" name="date2_fr4"  style="width:150px;height: 40px;"   />
            
            <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options="  iconCls:'icon-man' "   id="cal2_fr4"  style="width:100px;height: 30px;"  >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width:50px;height: 30px;"   id="age2_fr4"  name="age2_fr4" />
            
        </label>
    </div>
    
    
       <div style="padding: 10px 5px;">
              Classification of GOSLON  : 
          
              <select class="easyui-combobox"  id="goslon"  name="goslon"  style="width:200px;height: 40px;"   >
                       <option value="1">Group 1</option>
                        <option value="2">Group 2</option>
                        <option value="3">Group 3</option>
                        <option value="4">Group 4</option>
                        <option value="5">Group 5</option>
                </select>
    </div>
    
      <div style="padding: 10px 5px;">
                    Incisor classification of malocclusion : 
                    <input type="radio" name="incisor"   id="incisor1"  value="1" />  I
                    <input type="radio"   name="incisor" id="incisor2" value="2" />  II div 1
                    <input type="radio"   name="incisor" id="incisor3"  value="3" />  II div 2
                    <input type="radio"  name="incisor" id="incisor4" value="4"  />  III
    </div>
    
          <div style="padding: 10px 5px;">
                    Skeletal  classification of malocclusion : 
                    <input type="radio" name="skeletal"   id="skeletal1"  value="1"  />  I
                    <input type="radio"  name="skeletal"  id="skeletal2"  value="2"/>  II
                    <input type="radio"  name="skeletal"  id="skeletal3" value="3"  />  III
    </div>
    
    <!--
   <div style="padding: 10px 5px;">
       <label>
                         Procedure : 
     
                        <input type="checkbox"  />  1.Strapping  
                        <input type="checkbox"  />  2.Nasal Molding 
                        <input type="checkbox"  />  3.Alveolar  Molding  
                        <input type="checkbox"  /> 4. Simple Obturator 
                        <br>
                        <input type="checkbox"  />  อื่นๆ 
                        <input class="easyui-textbox"   data-options=" mutilne:true, "  style="width:300px;height: 50px"    /> 
       </label>
   </div>
    -->
    
    
    <div style="padding: 10px 5px;">
        <label>
            รูปถ่าย (Before) :
            <input class="easyui-filebox"   id="fileupload1_fr4"  name="fileupload1_fr4"    data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    

       <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายระหว่างการรักษา (During) :
            <input class="easyui-filebox"   id="fileupload2_fr4"    name="fileupload2_fr4"    data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    
        <div style="padding: 10px 5px;">
        <label>
            รูปถ่ายหลังการรักษา (After) :
            <input class="easyui-filebox"     id="fileupload3_fr4"     name="fileupload3_fr4"     data-options=" prompt:' เลือกไฟล์ ' "  style="width:200px;height: 30px;"   />
        </label>
    </div>
    
    
    <div style="padding: 10px 5px;">
         <label>
             Dental Cast : 
          </label>    
             <input  type="radio"  name="dentalcast"   id="dental_cast_yes" value="1" /> Yes  
             <input  type="radio"  name="dentalcast"  id="dental_cast_no" value="2" /> No
       
    </div>
    
    
    <div style="padding: 5px 120px;">
       
        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-save'  "  style="width:90px;height: 40px;"  onclick="
                $('#fr4').form('submit',{
                    url:'<?=base_url()?>index.php/welcome/insert_fr4',
                    success:function(data)
                     {
                            //alert(data);
                            if( data == 1 )
                            {
                               
                                $('#dia_fr4').dialog('open');
                                $('#dg_fr4').datagrid('reload');
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลสำเร็จ');
                                
                            }
                            else 
                            {
                                $.messager.alert('สถานะการบันทึกข้อมูล','บันทึกข้อมูลผิดพลาด');
                            }
                     }
                });
           
           "   >Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel' , onClick:function(){  $('#dia_treat4B').window('close');  } "     style="width:90px;height: 40px;"     >Close</a>
    </div>
    
</div>

 </form>

<div id="dia_treat9B" class="easyui-window" title=" 9. Orthognathic surgery " data-options="modal:true,closed:true" style="width:700px;height:250px;padding:5px;">

    <div style="padding: 10px 5px;">
        <label>
            แพทย์ผู้ทำการรักษา :  <input class="easyui-combobox"  style="width: 200px;height: 40px;"   />
        </label>
    </div>
  
    
    
        <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่เริ่มทำการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
        </label>
    </div>
    
            <div style="padding: 10px 5px;">
        <label>
            วัน/เดือน/ปี ที่สิ้นสุดการรักษา  :  <input class="easyui-datebox"   style="width: 200px;height: 40px;"  />
        </label>
    </div>
    
       <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
       <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
    
       <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    

    
    <div style="padding: 10px 5px;">
        <label>
            <?=nbs(30)?>
            Diagnosis :   
      
            <input class="easyui-textbox"   style="width:300px;height: 30px;"  />
         
  
        </label>
    </div>
    
    <div style="padding: 10px 5px;">
              Classification of Goslom  : <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
    </div>
    
      <div style="padding: 10px 5px;">
                    Incisor classification : <input class="easyui-textbox"   style="width:200px;height: 40px;"  />
    </div>
    

     
    
    
    
    <div  style="padding: 10px 100px;">
        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;"  data-options=" iconCls:'icon-save' " onclick="
            
    
               
           
           
           " >Save</a>
           <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 90px;height: 40px;" data-options=" iconCls:'icon-cancel'  "  onClick="  $('#dia_treat1').window('close');  "  >Close</a>
    </div>
    
    
</div>



<div id="dia11"  title="11. Other dental procedure  " style="width:800px;height: 400px;padding: 10px;" class="easyui-dialog"     data-options="
     
     closed:true,
     buttons:[
     {  text:'Save', iconCls:'icon-save'   },
     {  text:'Close', iconCls:'icon-cancel',handler:function(){  $('#dia11').dialog('close');  } }
     ]
     ">
    
   
    <div class="easyui-tabs" style="width:700px;height:250px">
        
     <div title="Endontic treament" style="padding:10px">
<!-------------------- begin ---------------------->     

  <div style="padding: 10px 5px"  >

        
        <label>
            Tooth : <input class="easyui-textbox"  data-options=" prompt:'   Tooth  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 


    <div style="padding: 10px 5px"  >

        
        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
            
            
            
                          <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />
            
            
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            เครื่องมือที่ใช้  : <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา ( During ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา ( After ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>            
      <!-------------------- begin ---------------------->    
    </div>
        
     <div title="Prosthodontic treament" style="padding:10px">
<!-------------------- begin ---------------------->               
    <div style="padding: 10px 5px"  >

        <label>
            ทันตแพทย์ผู้ทำการรักษา : <input class="easyui-textbox"  data-options=" prompt:'  ทันตแพทย์ผู้ทำการรักษา  ' "  style="widht:200px;height: 30px;"  />
        </label>
    </div> 
     <div style="padding: 10px 5px"  >
        <label>
            วัน/เดือน/ปี ที่ทำ  : <input class="easyui-datebox"   style="widht:200px;height: 30px;"  />
            
                                      <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  data-options="  iconCls:'icon-man'    "    >คำนวณอายุ</a>
            <input class="easyui-textbox"   style="width: 50px;height: 40px;"    />

            
        </label>
    </div> 
       
        <div style="padding: 10px 5px"  >
        <label>
            Type of Appliance  : 
            
                     <!--
                     <input class="easyui-textbox"  prompt="  ระบุเครื่องมือที่ใช้  " style="widht:250px;height: 40px;"  />
                     -->
                     
                     <select  class="easyui-combobox"  >
                           <option>1.TP</option>
                           <option>2.Crown</option>
                            <option>3.Bridge</option>
                              <option>4.Partial denture</option>
                                <option>5.Implant</option>
                                   <option>6.Speech Appliance</option>
                                     <option>7.Other</option>
                     </select>
                     
                     
                     <input class="easyui-textbox"   style="width:300px;height: 40px;"  />
                     
        </label>
    </div> 
    
    
     <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายก่อนการรักษา (Before ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายก่อนการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
         <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายระหว่างการรักษา (During ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูประหว่างการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>
    
             <div style="padding: 10px 5px;">
        <label>
           รูปถ่ายหลังการรักษา (After ) : <input class="easyui-filebox" data-options=" prompt:'  เลือกรูปถ่ายหลังการรักษา '   "  style="width:250px;height: 40px;"   />
        </label>
    </div>  

  <div style="padding: 10px 5px;">
        <label>
            Dental Cast : <input  type="radio"> Yes  <input  type="radio"> No
        </label>
    </div>


      <!-------------------- begin ---------------------->    
    </div>
        
        
        <!--
     <div title="Gingivectomy" style="padding:10px">
       2 test
    </div>
        
            <div title="Torectomy" style="padding:10px">
       2 test
    </div>
        
              <div title="Oronasal fistula closure" style="padding:10px">
       2 test
    </div>
        
            <div title="อื่นๆ " style="padding:10px">
       2 test
    </div>
        -->
        
        
        </div>
    
</div>

