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

                        // id="comp_left"  1.1
                        //  var    comp_left=$('#comp_left');

                        // id="comp_right"   1.2
                          var    comp_right=$('#comp_right');

                        // id="comp_both"  1.3
                         var    comp_both=$('#comp_both');

                      //name="lip"  value="1.4"   id="incomplete_left"
                                  var    incomplete_left=$('#incomplete_left');

                      //name="lip"  value="1.5"    id="incomplete_right"
                          var    incomplete_right=$('#incomplete_right');

               // id="incomplete_both"   value="1.6"

                var    incomplete_both=$('#incomplete_both');

                //-------------Alveolus------------
                        // id="noncleft_al"
                        // id="completed_left"    value="2.1"
                     var    completed_left=$('#completed_left');
                      // id="completed_right"  value="2.2"
                         var    completed_right=$('#completed_right');

                       // id="completed_both"  value="2.3"
                      var    completed_both=$('#completed_both');

                    //---------------Hard palate ----------
                    //  id="hardpalate_complete"  value="3.1"
                       var    hardpalate_complete=$('#hardpalate_complete');

                   //  id="hardpalate_incomplete"   value="3.2"
               var    hardpalate_incomplete=$('#hardpalate_incomplete');

                       //  id="hardpalate_submucous"    value="3.3"
                      var    hardpalate_submucous=$('#hardpalate_submucous');


                       //------------Soft palate :-------------
                   // id="softpalate_cleft"  value="4.1"
                     var    softpalate_cleft=$('#softpalate_cleft');
                   //id="softpalate_bifid_uvula"  value="4.2"
                    var    softpalate_bifid_uvula=$('#softpalate_bifid_uvula');


                      //  1.3+2.3
                      // id="comp_both"  1.3
                      // id="completed_both"  value="2.3"
                    if(   $('#completed_both').is(":checked")  &&   $('#comp_both').is(":checked")    )
                     {
                            var  ans1="Bilateral cleft lip with alveolus";
                          //  alert(ans1);
                            $.messager.alert('วิเคราะห์ผล',ans1);
                     }

                     // 1.2  id="comp_right"   1.2
                     else if(    $('#comp_right').is(":checked")    )
                     {
                              var  ans1="Unilateral cleft lip with alveolus";
                              $.messager.alert('วิเคราะห์ผล',ans1);
                     }
                       // id="comp_left"  1.1
                       else if(    $('#comp_left').is(":checked")    )
                       {
                                var  ans1="Unilateral cleft lip with alveolus";
                                $.messager.alert('วิเคราะห์ผล',ans1);
                       }
                      // id="completed_left"    value="2.1"
                      else if(    $('#completed_left').is(":checked")    )
                      {
                               var  ans1="Unilateral cleft lip with alveolus";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      // id="completed_right"  value="2.2"
                      else if(    $('#completed_right').is(":checked")    )
                      {
                               var  ans1="Unilateral cleft lip with alveolus";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      // id="incomplete_both"   value="1.6"
                      else if(    $('#incomplete_both').is(":checked")    )
                      {
                               var  ans1="Bilateral cleft lip";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      //name="lip"  value="1.5"    id="incomplete_right"
                      else if(    $('#incomplete_right').is(":checked")    )
                      {
                               var  ans1="Unilateral cleft lip";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      //name="lip"  value="1.4"   id="incomplete_left"
                      else if(    $('#incomplete_left').is(":checked")    )
                      {
                               var  ans1="Unilateral cleft lip";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      //  id="hardpalate_complete"  value="3.1"
                      // id="softpalate_cleft"  value="4.1"
                      else if(    $('#hardpalate_complete').is(":checked")  &&  $('#softpalate_cleft').is(":checked")   )
                      {
                               var  ans1="Complete hard palate cleft";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      // id="hardpalate_incomplete"   value="3.2"
                      else if(    $('#hardpalate_incomplete').is(":checked")    )
                      {
                               var  ans1="Incomplete hard palate cleft";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                      //  id="hardpalate_submucous"    value="3.3"
                      else if(    $('#hardpalate_submucous').is(":checked")    )
                      {
                               var  ans1="Submucous cleft";
                               $.messager.alert('วิเคราะห์ผล',ans1);
                      }
                       //id="softpalate_bifid_uvula"  value="4.2"
                       else if(    $('#softpalate_bifid_uvula').is(":checked")    )
                       {
                                var  ans1="Bi fid uvala";
                                $.messager.alert('วิเคราะห์ผล',ans1);
                       }

          });

   });
</script>

<script type="text/javascript">
      $(function(){

      /*
          //-------1.3------
           $('#comp_both').click(function(){
                  //alert('t');
                  var  ans1=" Cleft Complete";
                  alert(  ans1   );
           });
        */



      });
</script>


<script type="text/javascript">
       function  btnclr()
       {

           //lip_noncleft
            $('#lip_noncleft').attr('checked',false); //1.1

             $('#comp_left').attr('checked',false); //1.1
             $('#comp_right').attr('checked',false);  //1.2
             $('#comp_both').attr('checked',false); //1.3
             //value="1.4"    id="incomplete_left"
              $('#incomplete_left').attr('checked',false); //1.4
              //  id="incomplete_right"  1.5
                $('#incomplete_right').attr('checked',false); //1.5
                //  id="incomplete_both"   value="1.6"
               $('#incomplete_both').attr('checked',false); //1.6
               //

               // id="lip_noncleft" value="0"
                $('#alveolus_noncleft').attr('checked',false);
               //  id="completed_left"    value="2.1"
                $('#completed_left').attr('checked',false); //2.1
                // id="completed_right"  value="2.2"
                $('#completed_right').attr('checked',false); //2.2
                //completed_both
                $('#completed_both').attr('checked',false); //2.2
                // id="completed_both"  value="2.3"
                $('#completed_both').attr('checked',false); //2.3


                //hardpalate_non
                $('#hardpalate_non').attr('checked',false);
                //  id="hardpalate_complete"  value="3.1"
                $('#hardpalate_complete').attr('checked',false);
                // id="hardpalate_incomplete"   value="3.2"
                $('#hardpalate_incomplete').attr('checked',false);
                // id="hardpalate_submucous"    value="3.3"
                $('#hardpalate_submucous').attr('checked',false);

                //id="softpalate_non"
                $('#softpalate_non').attr('checked',false);
                // id="softpalate_cleft"  value="4.1"
                 $('#softpalate_cleft').attr('checked',false);
                 // id="softpalate_bifid_uvula"  value="4.2"
                  $('#softpalate_bifid_uvula').attr('checked',false);

       }
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
                        <input type="radio" name="lip"  id="lip_noncleft" value="0"  ><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                     <!--   <input type="radio" name="lip" id="Complete"  value="">  -->  <span>Complete : </span>  <input type="radio" name="lip" value="1.1"  id="comp_left"><span>Left</span>  <input type="radio" name="lip"  id="comp_right"   value="1.2"><span>Right</span>   <input type="radio"  name="lip" value="1.3"   id="comp_both" /> Both
                        <div style="margin:10px 0;"></div>
                       <!-- <input type="radio" name="lip"  value="">--><span>Incomplete : </span>  <input type="radio" name="lip"  value="1.4"    id="incomplete_left"><span>Left</span>  <input type="radio" name="lip"  value="1.5"    id="incomplete_right" ><span>Right</span>  <input type="radio"  name="lip"     id="incomplete_both"   value="1.6" /> Both
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><hr/></td>

                </tr>


                 <tr>
                    <td align="right" valign="top">Alveolus :</td>
                    <td>
                        <div style="margin:20px 0;"></div>
                        <input type="radio" name="alveolus"  id="alveolus_noncleft"  ><span>Non-cleft</span>


                         <div style="margin:10px 0;"></div>
                        <!-- <input type="radio" name="alveolus"   id="completed_al" >--> <span>Completed : </span>   <input type="radio"   name="alveolus"    id="completed_left"    value="2.1"> Left    <input type="radio"  name="alveolus"    id="completed_right"  value="2.2"> Right  <input type="radio" name="alveolus"   id="completed_both"  value="2.3"> Both

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
                        <input type="radio" name="hardpalate"  id="hardpalate_non"   ><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="radio"  name="hardpalate"   id="hardpalate_complete"  value="3.1"><span>Complete : </span>
                        <!-- <input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span> -->
                        <div style="margin:10px 0;"></div>
                        <input type="radio"  name="hardpalate"  id="hardpalate_incomplete"   value="3.2"><span>Incomplete : </span>
                        <!--<input type="checkbox" name="lang" value=""><span>Left</span>  <input type="checkbox" name="lang" value=""><span>Right</span>-->
                        <div style="margin:10px 0;"></div>
                        <input type="radio"  name="hardpalate"   id="hardpalate_submucous"    value="3.3"><span>Submucous : </span>
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
                        <input type="radio" name="softpalate"  id="softpalate_non"><span>Non-cleft</span>
                        <div style="margin:10px 0;"></div>
                        <input type="radio" name="softpalate"   id="softpalate_cleft"  value="4.1"><span>Cleft  </span>
                        <div style="margin:10px 0;"></div>
                        <input type="radio" name="softpalate"   id="softpalate_bifid_uvula"  value="4.2"><span>Bifid uvula </span>
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
                        <input type="radio" name="lang" value=""><span>Non-cleft</span>
                        <input type="radio" /> Cleft
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
                        <a href="#" class="easyui-linkbutton"  style=" width: 100px;  height: 40px; "  id="btn_clear"  data-options=" iconCls:'icon-cancel'   "      onclick=" btnclr()"   > Clear </a>
                        <a  id="analy1"   href="#"   class="easyui-linkbutton"  style=" width: 100px;  height: 40px; "   data-options="  iconCls:'icon-man'     " > วิเคราะห์ผล </a>

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
