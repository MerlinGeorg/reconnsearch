<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">Contact page</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
               <!--  <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add product</button> -->
      </div>
    </div>

  </div>
</div>

<div class="container-fluid">
  <div class="panel-wrapper">
    <div class="panel" >
      <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextend" >
                
      </div>
    </div>
  </div>
</div>
      <!-- END PAGE CONTENT-->
        </div>
      <!-- END VIEW WAPPER-->

      </div>
    <!-- END MAIN WRAPPER-->

    <!--Below is the model for the editing popup section that appears on clicking the edit icon with modelid="trackermodal" -->
<div class="modal fade-scale" id="trackermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block-header bg-primary" id="modalcaption"></div>
          <div class="modal-body">
           <form method="POST" id="prodForm">

            <div class="row m-b-2">
              
              <div class="col-sm-12">
                <div class="form-group col-sm-6">
                  <input type="hidden" id = "pageid" name="pagenm"/>
                 <h4 class="demo-sub-title">Name</h4>
                   <input class="form-control focus " type="text" name="namenm" id="nameid" required="required"/>
                  
                  
                </div> 

                <div class="form-group col-sm-12">
                  <h4 class="demo-sub-title">Primary Email</h4>
                  <input class="form-control focus" name="mail1nm" id="mail1id" required="required"/>

                </div> 
              </div>


              <div class="col-sm-12">
                <div class="form-group col-sm-12">
                      
                  <h4 class="demo-sub-title">Alternate Email</h4>
                  <input class="form-control focus" name="mail2nm" id="mail2id" required="required"/>
                </div>  
                    
                <div class="form-group col-sm-12">

                  <h4 class="demo-sub-title">Primary Number</h4>
                  <input type="text" class="form-control focus" name="phone1nm" id="phone1id" required="required"/>

                </div>
              </div>

              <div class="col-sm-12">
              <div class="form-group col-sm-12">

                  <h4 class="demo-sub-title">Alternate Number</h4>
                  <input type="text" class="form-control focus" name="phone2nm" id="phone2id"/>

                </div>
              </div>

              <div class="col-sm-12">  
                    
                <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Message</h4>
                  <textarea name="msgnm" id="msgid" class="form-control focus" ></textarea>
                </div>

                <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Fax</h4>
                  <input type="text" name="faxnm" id="faxid" class="form-control focus" />
                </div>

              </div>


              <div class="col-sm-12">  
                    
                <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Address</h4>
                  <textarea name="addrnm" id="addrid" class="form-control focus" required="required"></textarea>
                </div>

                <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Locationsrc</h4>
                  <textarea name="locnm" id="locid" class="form-control focus" ></textarea>
                </div>

              </div>          
          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary"  type="submit" >Save</button>
            <!-- <button type="submit" class="form-control tn btn-primary btn-lg" name="save" value="save">Save</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>

<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function() {
          
          getadminContact();
          
      
      });


function getadminContact(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_contact/getContact');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                // $('#example1').DataTable();
                      
              }
             });
      }

function editadminContact(id)
{
   $('#modalcaption').text("Edit Conatct Details");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_contact/editContact');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              // getprods();
              
              getadminContact();
              // console.log(data);
             
              $('#pageid').val(res.contact_id);
              $('#nameid').val(res.contact_name);
              $('#mail1id').val(res.contact_mail1);
              $('#mail2id').val(res.contact_mail2);              
              $('#phone1id').val(res.contact_phone1);
              $('#phone2id').val(res.contact_phone2);
              $('#msgid').val(res.contact_msg);
              $('#faxid').val(res.contact_fax);
              $('#addrid').val(res.contact_address);
              $('#locid').val(res.contact_locationsrc);
              
            }
        });
}





$("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_contact/updateContact');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                //alert(data);
               if(data == "success"){
                  notifyresult('Data Saved','success');
                  $('#trackermodal').modal('hide');
                  getadminContact();
               }
               
               else{
                  notifyresult('Error','danger');
                  // $('#modal-xl').modal('hide');
                  getadminContact();
               }

              // show response from the php script.            
              }
             });
      });

</script>
</body>
</html>
   
   





























