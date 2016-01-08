<script type="text/javascript">

      function dia1()
      {
          
          $(function(){
                // alert('t');
                 $("#diag1").window('open');
          });
          
      }
        
</script>



<div id="diag1" class="easyui-window" title=" เพิ่มข้อมูล Diagnosis , ความผิดปกติแต่กำเนิดร่วมกับปากแหว่งเพดานโหว่ " data-options="modal:true,closed:true" style="width:700px;height:750px;padding:5px;">

    <div style="margin:0px 0 0px 0;"></div>
    <div class="easyui-tabs" >
        
        
          <div title="แบบฟอร์มบันทึกข้อมูล Diagnosis" style="padding:10px" data-options="iconCls:'icon-save'">
            
          
            
        <form id="fr_tr1" action="<?=base_url()?>index.php/welcome/insert_fr" method="post" enctype="multipart/form-data">
            <table>
                
                
                <tr>
                    <td>Lip :</td>
                    <td>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>  
                    </td>
                </tr>
                
                     <tr>
                    <td>Hard palate :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Submucous : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>  
                    </td>
                </tr>
                
                <tr>
                    <td>Alveolus :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete : </span>  <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>  
                        
                    </td>
                </tr>
                
                
                <tr>
                    <td>Soft palate :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Complete  </span> 
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Incomplete </span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Submucous  </span>  
                    </td>
                </tr>
                
                    <tr>
                    <td>Facial cleft :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Midline cleft</span> 
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Paramedian cleft</span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Orbital cleft</span>  
                        <div style="margin:10px 0;"></div>
                        <input type="checkbox" name="lang" value=""><span>Lateral cleft</span>  
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูล"></input></td>
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
                
                    </td>
           </tr>
           
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
                
           
        </div>
        
        
      
        

        
        
        
        
    </div>
    
 </div>

