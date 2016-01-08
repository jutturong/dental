  
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
                                      //$('#dia_search').window('open');
                                }         
                                         
                          
                          ">
                        
                    </td>
                    
              
                    
                </tr>
               
                <tr>
                           <td>
                                  ระบุรายละเอิียด :
                        
                            </td>
                            <td>
                                <input class="easyui-combobox" data-options="
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