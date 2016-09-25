
<script type="text/javascript"  >
       function  load_dg1(url)
       {
              $(function(){            
                  $('#dg1').datagrid({
                                  singleSelect:true,
                                  collapsible:true,
                                   url:url,
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
                  })
                  
              });
           
       }
       
</script>

<div id="dia_search" class="easyui-dialog" title="แสดงรายการค้นหาหลัก" 
         data-options="
                        modal:true,
                        closed:true,
                        iconCls:'icon-save',
                       buttons:[  
                            { text:'ปิด (Close)', iconCls:'icon-cancel', handler:function(){  $('#dia_search').dialog('close');   }  }
                       ]
         
         " style="width:500px;height:500px;padding:10px;">
      
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
        
        
               <!-- <form id="fr_main_search" method="post"   > -->
                <form id="fr_main_search"   method="post"  enctype="multipart/form-data"  novalidate="novalidate" >
            <table cellpadding="5">
                
                <tr>
                    <td>
                        ID :
                        <input class="easyui-textbox"   style="width: 50px;height: 40px;" id="txt_id"  name="txt_id"   readonly="true"  >
                    </td>
                </tr>
               
                
                <!--
                <tr>
                    <td>
                         ค้นหาจากโดย : <?php echo nbs(2); ?>                    
                        <input id="cmb_sr1" name="cmb_sr1"  style="height:40px" class="easyui-combobox" data-options="
                                 valueField: 'label',
		 textField: 'value',
                                 data:[
                                          {
                                                   label:'0',
                                                   value:'เลือกรายการค้นหา'      
                                          },
                                          
                                           {
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
                                         
                                         /*
                                onSelect:function()
                                {  
                                     //$.messager.alert('Info','test','info');
                                     //$('#diag1').window('open');
                                      //$('#dia_search').window('open');
                                     //var  cmb_search=$('#cmb_search').combobox('getValue');
                                     // alert(cm_serarch);
                                   //  var  cmb_sr=$('#cmb_sr1').combobox('getValue');
                                    // alert( cmb_sr );
                                  // var  url='<?=base_url()?>index.php/welcome/sr_main1/' +  cmb_sr  ;
                                     //alert(  url  ); 
                                }      
                                */
                                
                                         
                          
                          ">
                        
                    </td>
                </tr>
                -->
                
               
                
                <!----------------------   ชื่อ  -------------------->          
                <tr>
                           <td>
                                  ค้นหาจากรายชื่อ :
                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_name/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                    ]],
                                                   onSelect:function()
                                                    {
                                                         var  id=$('#cb_name').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                   
                                                    "    id="cb_name"  name="cb_name"  />
                                
                            </td>
                </tr>
                       <!----------------------  นามสกุล  -------------------->          
                <tr>
                           <td>
                                  ค้นหาจากนามสกุล :
                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_lastname/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                    ]],
                                                    onSelect:function()
                                                    {
                                                         var  id=$('#cb_lastname').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_lastname"  name="cb_lastname"  />
                                
                            </td>
                </tr>
                
                 <!-----------------  value:'3.เลขบัตรประชาชน'   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจากเลขบัตรประชาชน :
                        
                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_seriesnumber/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'seriesnumber', title:'เลขบัตรประชาชน' ,   },
                                                    ]],
                                                    onSelect:function()
                                                    {
                                                         var  id=$('#cb_seriesnumber').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_seriesnumber"  name="cb_seriesnumber"  />
                                
                            </td>
                </tr>
                
                         <!-----------------   value:'4.จังหวัด'   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจากจังหวัด :

                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_address/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'address', title:'ที่อยู่' ,   },
                                                    ]],
                                                                 onSelect:function()
                                                    {
                                                         var  id=$('#cb_address').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_address"  name="cb_address"  />
                                
                            </td>
                </tr>
                
                 <!-----------------   DN   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจาก DN :
                        

                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_DN/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'DN', title:'DN' ,   },
                                                    ]],
                                                      onSelect:function()
                                                    {
                                                         var  id=$('#cb_dn').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_dn"  name="cb_dn"  />
                                
                            </td>
                </tr>
                
                    <!-----------------   Ortho No   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจาก Ortho No :
                        

                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_ortho/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'othnumber', title:'Ortho No.' ,   },
                                                    ]],
                                                     onSelect:function()
                                                    {
                                                         var  id=$('#cb_ortho').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_ortho"  name="cb_ortho"  />
                                
                            </td>
                </tr>
                
              <!-----------------   HN   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจาก HN :
                        

                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_hn/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'HN', title:'HN' ,   },
                                                    ]],
                                                     onSelect:function()
                                                    {
                                                         var  id=$('#cb_hn').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_hn"  name="cb_hn"  />
                                
                            </td>
                </tr>
                
                <!-----------------   CN   ----------------->          
                <tr>
                           <td>
                                  ค้นหาจาก CN :
                        

                                <input class="easyui-combogrid" style="width:200px;height: 40px;" data-options="
                                                 //   iconCls:'icon-man',  
                                                    url:'<?=base_url()?>index.php/welcome/auto_cn/' ,
                                                    method:'post',
                                                    idField:'id_history_patient',
                                                    textField:'firstname'  ,
                                                    mode:'remote',
                                                    fitColumns:true,
                                                    columns:[[
                                                        {  field:'firstname', title:'ชื่อ' ,   } ,
                                                        {  field:'lastname', title:'นามสกุล' ,   },
                                                        {  field:'CN', title:'CN' ,   },
                                                    ]],
                                                     onSelect:function()
                                                    {
                                                         var  id=$('#cb_cn').combogrid('getValue');
                                                         $('#txt_id').textbox('setValue',id);
                                                         var url='<?=base_url()?>index.php/welcome/json_patient/'  + $('#txt_id').textbox('getValue');
                                                         load_dg1(url);
                                                    }
                                                    "    id="cb_cn"  name="cb_cn"  />
                                
                            </td>
                </tr>
                
                <!-----------------  Diagnosis  ----------------->          
                <tr>
                           <td>
                                  Diagnosis :
                                  <input class="easyui-combobox"   style="width:200px;height: 40px;"
                                         data-options="
                                              textField:'text',
                                              valueField:'value',
                                              data:[
                                                 {
                                                     'text':'Complete bilateral cleft lip'  ,
                                                     'value': 'Complete bilateral cleft lip'  ,
                                                 },
                                                 {
                                                       'text':'Complete right unilateral cleft lip'  ,
                                                       'value':'Complete right unilateral cleft lip'  ,
                                                 },
                                                  {
                                                       'text':'Complete left unilateral cleft lip'  ,
                                                       'value':'Complete left unilateral cleft lip'  ,
                                                 },
                                                 {
                                                       'text':'Incomplete bilateral cleft lip'  ,
                                                       'value':'Incomplete bilateral cleft lip'  ,
                                                 },
                                                  {
                                                       'text':'Incomplete right cleft lip'  ,
                                                       'value':'Incomplete right cleft lip'  ,
                                                 },
                                                {
                                                       'text':'Incomplete left cleft lip'  ,
                                                       'value':'Incomplete left cleft lip'  ,
                                                 },
                                              ],
                                              /*
                                              onSelect:function(rec)
                                              {
                                                    var  va=$('#cb_diagnosis').combobox('getValue');
                                                    //alert(va);
                                                    var  url='<?=base_url()?>index.php/welcome/search_diagnosis';
                                                   // $('#dg1').datagrid('loadData',
                                              }
                                              */
                                              
                                         "
                                         
                                         id="cb_diagnosis" name="cb_diagnosis" >
                                  
                                  
                                  <a href="javascript:void(0)"  class="easyui-linkbutton"   iconCls="icon-search"  style="width: 100px;height: 40px;"   onclick="
                         $('#fr_main_search').form('submit',{
                               url:'<?=base_url()?>index.php/welcome/search_diagnosis',
                             success:function(data)
                                 {
                                             // alert(data);
                                              //$('#dg1').datagird({
                                                //  url:data,
                                                  
                                                  
                                  });
                                             
                                             
                                     
                                 }
                             
                         });
                   
                   "   >Search</a>
                                  
                                  
                                  
                            </td>
                            
                            
                
                            
                </tr>
                
                <!-----------------  แพทย์เจ้าของไข้  ----------------->          
                <tr>
                           <td>
                                   แพทย์เจ้าของไข้ :
                                   <input class="easyui-combobox"   style="width:200px;height: 40px;"
                                         data-options="
                                              textField:'text',
                                              valueField:'value',
                                              data:[
                                                 {
                                                     'text':'ทพ.ชุติมาพร'  ,
                                                     'value': 'ทพ.ชุติมาพร'  ,
                                                 },
                                                 {
                                                     'text':'ทพ.มณเฑียร'  ,
                                                     'value': 'ทพ.มณเฑียร'  ,
                                                 },
                                                 {
                                                     'text':'ทพ.พูนศักดิ์'  ,
                                                     'value': 'ทพ.พูนศักดิ์'  ,
                                                 },
                                                 {
                                                     'text':'ทพ.ทัศนีย์'  ,
                                                     'value': 'ทพ.ทัศนีย์'  ,
                                                 },
                                              ],
                                              
                                              /*
                                              onSelect:function(rec)
                                              {
                                                    var  va=$('#cb_doctor').combobox('getValue');
                                                    alert(va);
                                              }
                                              */
                                              
                                              
                                         "
                                         
                                         id="cb_doctor" name="cb_doctor" >
                                   
                                    <a href="javascript:void(0)"  class="easyui-linkbutton"   iconCls="icon-search"  style="width: 100px;height: 40px;"   onclick="
                         $('#fr_main_search').form('submit',{
                               url:'<?=base_url()?>index.php/welcome/search_doctor',
                             success:function(data)
                                 {
                                       alert(data);
                                     
                                 }
                             
                         });
                   
                   "   >Search</a>
                                   
                            </td>
                </tr>
                
                <!-----------------  Treatment  ----------------->          
                <tr>
                           <td>
                                   Treatment :
                            </td>
                </tr>
                
                
               
                <!--
                <tr>
                    <td colspan="2">
                        <?=nbs(50)?>
                        <a href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 40px;"  iconCls="icon-search"  
                           onclick="
                                $('#fr_main_search').form('submit',{
                                     url:'<?=base_url()?>index.php/welcome/json_patient',
                                     success:function(data)
                                        {
                                              // alert(data);
                                        }
                                });
                           "
                           >ค้นหา</a>
                    </td>
                </tr>
               -->
                
                
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