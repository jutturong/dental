<script type="text/javascript">

      function dia1()
      {
          
          $(function(){
                // alert('t');
                 $("#diag1").window('open');
          });
          
      }
        
</script>

<script type="text/javascript"  >
   $(function(){
          $('#analy1').bind('click',function(){
                // alert('t');
                $('#dia_analy1').dialog('open');
              
          });
       
   });
</script>



<div id="diag1" class="easyui-window" title=" เพิ่มข้อมูล Diagnosis , ความผิดปกติแต่กำเนิดร่วมกับปากแหว่งเพดานโหว่ " data-options="modal:true,closed:true" style="width:700px;height:750px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    <div class="easyui-tabs" >
        
        
          <div title=" Diagnosis " style="padding:10px" data-options="iconCls:'icon-save'">
            
          
            
        <form id="fr_tr1" action="<?=base_url()?>index.php/welcome/insert_fr" method="post" enctype="multipart/form-data">
            <table>
                
                
                <tr>
                    <td align="right" valign="top">Lip :</td>
                    <td>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>   <input type="checkbox" /> Both
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>  <input type="checkbox" /> Both
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><hr/></td>
           
                </tr>
                
                
                 <tr>
                    <td align="right" valign="top">Alveolus :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        
                        
                         <div style="margin:10px 0;"></div>
                         <input type="checkbox" name="lang" value=""><span>Cleft : </span>   <input type="checkbox" name="lang" value=""> Left    <input type="checkbox" name="lang" value=""> Right  <input type="checkbox" name="lang" value=""> Both    
                        
                        <!--
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span>
                        
                        
                        
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  
                        -->
                        
                        
                    </td>
                </tr>
              
                 <tr>
                    <td colspan="2"><hr/></td>
           
                </tr>
                
                     <tr>
                    <td align="right" valign="top">Hard palate :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span> 
                        <!-- <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span> -->
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  
                        <!--<input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>-->  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Submucous : </span>  
                        <!--<input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>-->  
                    </td>
                </tr>
                
             <tr>
                    <td colspan="2"><hr/></td>
           
                </tr>
                
               
                
                    
                
                <tr>
                    <td align="right" valign="top">Soft palate :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete  </span> 
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Bifid uvula </span>  
                        <div style="margin:10px 0;"></div>
                        <!--
                        <input type="checkbox" name="lang" value=""><span>Submucous  </span>  
                        -->
                    </td>
                </tr>
                
                           <tr>
                    <td colspan="2"><hr/></td>
           
                </tr>
                    <tr>
                    <td align="right" valign="top">Facial cleft :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <input type="checkbox" /> Cleft  
                        ระบุ <input class="easyui-textbox"  style="width: 200px;height: 30px;"   />
                        <!--
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Midline cleft</span> 
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Paramedian cleft</span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Orbital cleft</span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Lateral cleft</span>  
                        -->
                        
                    </td>
                </tr>
                
                     <tr>
                    <td colspan="2"><hr/></td>
           
                </tr> 
                
                <tr>
                    <td>
                        <a  id="analy1"   href="#"   class="easyui-linkbutton"  style=" width: 100px;  height: 40px; "   data-options="  iconCls:'icon-man' 
                      
                           
                           
                           " > วิเคราะห์ผล </a>
                       
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูล"></input></td>
                </tr>
                
                
                        <tr>
                    <td colspan="2"><hr/></td>
           
                </tr>
                
                
            </table>
       </form>
            
            
        </div>
        
        <div title="แบบฟอร์มบันทึกข้อมูล ความผิดปกติแต่กำเนิดร่วมกับปากแหว่งเพดานโหว่" style="padding:10px" data-options="iconCls:'icon-save'">
            
            <div style="margin:10px 0;"></div>
            
            <tr>                 
                    <td>
                        
                        
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>none</span>
                
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Syndrome</span>
                        
                        <?=nbs(5)?>
                        
                        <input  type="radio"  />
                        ไม่สามารถระบุ 
                        <input  type="radio"  />
                        สามารถระบุ 
                        
                        <input class="easyui-textbox"  style="width: 200px;height: 30px;"  />
                        
                    </td>
           </tr>
           
           
           
           
           <!--
             <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Trisomy 13 syndrome</span>
                
                    </td>
           </tr>
      
             <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Trisomy 18 syndrome</span>
                
                    </td>
           </tr>
           
          <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Pierre Robin sequence</span>
                
                    </td>
           </tr>
            
                 <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Stickle syndrome (Hereditary Arthro-Opthalmopathy) </span>
                
                    </td>
           </tr>
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Treacher Collins syndrome (Mandibulofacial dysostosis) </span>
                
                    </td>
           </tr>
           
          <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Shprintzen syndrome (Velo-Cardio-Facial syndrome) </span>
                
                    </td>
           </tr>
           
                <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Cleft lip sequence </span>
                
                    </td>
           </tr>
           
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Van Der Woude Syndrome </span>
                
                    </td>
           </tr>
           
             <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Apert syndrome (Acrocephalo-syndactyly) </span>
                
                    </td>
           </tr>
           
                <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Crouzon syndrome (Craniofacial dysostosis) </span>
                
                    </td>
           </tr>
           
               <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>OFD syndrome (Oral-Facial-Digital syndrome) </span>
                
                    </td>
           </tr>
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>EEC (Ectrodactyly-Ectodermal Dysplasia-Clefting syndrome) </span>
                
                    </td>
           </tr>
           
           
            <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Oto-palato-digital syndrome type I </span>
                
                    </td>
           </tr>
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Oto-palato-digital syndrome type II</span>
                
                    </td>
           </tr>
           
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Fetal alcohol syndrome</span>
                
                    </td>
           </tr>
           
            <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Fetal Hydantoin syndrome (Fetal Dilantin syndrome)</span>
                
                    </td>
           </tr>
           
           <tr>                 
                    <td>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Other ระบุ.........</span>
                
                    </td>
           </tr>
           
           
             <div style="margin:10px 0;"></div>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูล"></input></td>
                </tr>
                -->
           
        </div>
        
        
      
        

        
        
        
        
    </div>
    
 </div>



<!-- dialog analy การวิเคราะห์จากการเลือกผู้ป่วย -->
<div id="dia_analy1"  class="easyui-dialog"  title="  วิเคราะห์  "  
     style=" width:400px;height: 200px;  "
     data-options="  iconCls:'icon-man' 
     ,resizable:true,
     modal:true,
     closed:true,
     buttons:[
        {  text:'Close',  iconCls:'icon-cancel'   , handler:function(){  $('#dia_analy1').dialog('close');  }  }
     ]
     
     "
     >
    
</div>

<!-- dialog analy การวิเคราะห์จากการเลือกผู้ป่วย -->

