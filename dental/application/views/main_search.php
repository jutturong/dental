  
<div id="dia_search" class="easyui-window" title="แสดงรายการค้นหาหลัก" 
         data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:500px;height:200px;padding:10px;">
      
        <!--
        <div class="easyui-layout" data-options="fit:true">
            <div data-options="region:'east',split:true" style="width:100px"></div>
            <div data-options="region:'center'" style="padding:10px;">
                jQuery EasyUI framework help you build your web page easily.
            </div>
            <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Ok</a>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Cancel</a>
            </div>
        </div>
        -->
        
        
                <form id="fr_main_search" method="post">
            <table cellpadding="5">
                <tr>
                    <td>
                         ค้นหาจากโดย : <?php echo nbs(2); ?>                    
                    </td>
                    
                    <td>
                        
                 
                        <input id="cmb_search" name="cmb_search"  style="height:30px" class="easyui-combobox" data-options="
                                 valueField: 'label',
		 textField: 'value',
                                 data:[{
                                              label:'1',
                                              value:'1.รายชื่อ'                                 
                                           },
                                           {
                                                label:'2',
                                                value:'2.นามสกุล'      
                                           },
                                           {
                                              label:'3',
                                              value:'3.เลขบัตรประชาชน'   
                                           },
                                           {
                                              label:'4',
                                              value:'4.จังหวัด' 
                                           },
                                           {
                                               label:'5',
                                               value:'5.DN' 
                                           },
                                           {
                                               label:'6',
                                               value:'6.Ortho No.' 
                                           },
                                           {
                                               label:'7',
                                               value:'7.HN' 
                                           },
                                           {
                                                label:'8',
                                                value:'8.CN Series' 
                                           },
                                           {
                                                label:'9',
                                                value:'9.Diagnosis' 
                                           },
                                           {
                                                label:'10',
                                                value:'10.แพทย์เจ้าของไข้' 
                                           },
                                           {
                                                label:'11',
                                                value:'11.Treatment' 
                                           }
                                         ],
                                onSelect:function()
                                {  
                                     //$.messager.alert('Info','test','info');
                                     //$('#diag1').window('open');
                                      //$('#dia_search').window('open');
                                      var  cmb_search=$('#cmb_search').combobox('getValue');
                                     if(  cmb_search == 11  )
                                     {
                                            //  $.messager.alert('Info',  cmb_search  ,'info');
                                            $('#sr_treatment').dialog('open');
                                     }     
                                }         
                                         
                          
                          ">
                        
                    </td>
                    
              
                    
                </tr>
               
                <tr>
                           <td>
                                  ระบุรายละเอิียด :
                        
                            </td>
                            <td>
                                <input class="easyui-combobox" style="width:200px;height: 30px;" data-options="
                                                    iconCls:'icon-man',  
                                           
                                                  
                                                 
                                                 
                                                    
                                                    "   />
                                
                            </td>
                </tr>
           
                
                
            </table>
        </form>
        
        
    </div>


<!--
<h2>Window Layout</h2>
    <p>Using layout on window.</p>
    <div style="margin:20px 0;">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#w').window('open')">Open</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#w').window('close')">Close</a>
    </div>
    <div id="dia_search" class="easyui-window" title="แสดงรายการค้นหาหลัก" data-options="iconCls:'icon-save'" style="width:500px;height:200px;padding:5px;">
        <div class="easyui-layout" data-options="fit:true">
            <div data-options="region:'east',split:true" style="width:100px"></div>
            <div data-options="region:'center'" style="padding:10px;">
                jQuery EasyUI framework help you build your web page easily.
            </div>
            <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                <a class="easyui-linkbutton" data-options="iconCls:'icon-ok'" href="javascript:void(0)" onclick="javascript:alert('ok')" style="width:80px">Ok</a>
                <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="javascript:alert('cancel')" style="width:80px">Cancel</a>
            </div>
        </div>
    </div>
-->

<!-- เพิ่มเติมการค้นหา teatemtn -->
<div id="sr_treatment"  class="easyui-dialog"  title=" Search Treatment "  style="width:400px;height: 400px;"  data-options="
     closed:true,
     buttons:[ {  text:'Search', iconCls:'icon-search',handler:function(){ alert('t'); } }, { text:'Close',iconCls:'icon-cancel',handler:function(){  $('#sr_treatment').dialog('close');  }  } ]
     " >
    <div style="padding: 20px 10px"  >
            <ul class="easyui-datalist" title="รายละเอียดแผนการรักษา" data-options=" url:'',  lines:true ,checkbox:true  "  >
                            <li value="1">1. Pre-surgical orthopedics therapy (PSOT) </li>
                            <li value="2">2. Lip nasal and nasal floor repair </li>
                            <li value="3">3. Palate repair </li>
                            <li value="4">4. Interceptive orthodontic treatment </li>
                            <li value="5">5. Orthodonic preparation for bone graft surgery </li>
                            <li value="6">6. Bone graft surgery</li>
                            <li value="7">7. Growth modification </li>
                            <li value="8">8. Corrective Orthodontic Treatment </li>
                             <li value="9">9. Orthognathic surgery </li>
                              <li value="10">10. Other surgery  </li>
                              <li value="11">11. Other dental procedure  </li>
            </ul>
    </div>
</div>
<!-- เพิ่มเติมการค้นหา teatemtn -->