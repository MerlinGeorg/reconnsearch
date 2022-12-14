<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">About page</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
                 <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Member</button> 
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
              

              <!-- <div class="col-sm-12"> -->
               <input type="hidden" id = "pageid" name="pagenm"/>
                <!-- <div class="col-sm-12"> -->
                <div class="form-group col-sm-6">
                  
                 <h4 class="demo-sub-title">Designation</h4>
                  <!-- <input class="form-control focus " type="text" name="designationnm" id="designationid"><label for="dist">Designation</label>-->
                  <select class="form-control focus" required="required" name="membboardnm" id="membboardid">
                       <option value="">Select</option>
                          <option value="Executive Board">Executive Board</option>
                          <option value="U.S.Advisory Board">U.S.Advisory Board</option>
                          <option value="Kuwait Advisory Board">Kuwait Advisory Board</option>
                        </select>
                </div>  

                <div class="form-group col-sm-6">
                  <h4 class="demo-sub-title">Name</h4>
                  <!-- <textarea class="form-control focus" name="namenm" id="nameid" required="required"></textarea> -->
                  <input type="text" class="form-control focus" name="namenm" id="nameid" required="required">

                </div>

              <!-- </div> -->
                <div class="form-group col-sm-6">
                  <h4 class="demo-sub-title">Role</h4>
                  <!-- <textarea class="form-control focus" name="namenm" id="nameid" required="required"></textarea> -->
                  <input type="text" class="form-control focus" name="rolenm" id="roleid" required="required">

                </div>
                 
                <div class="form-group col-sm-6">
                     
                  <h4 class="demo-sub-title">Pic</h4>
                  <input class="form-control focus" type="file" name="picnm"  id="picid" required="required">
                       
                  <input type="hidden" name="image1" id="image1">
                  <div id="imagefill"></div>
                </div>  
                    
                <div class="form-group col-sm-12">

                  <h4 class="demo-sub-title">Description</h4>
                  <textarea class="form-control focus" name="descnm" data-plugin="summernote" id="summernote"></textarea>

                </div>
              </div>


              
              <div class="col-sm-12">  
                    
                

               <!-- <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Status</h4>
                  <textarea name="statusnm" id="statusid" class="form-control focus" ></textarea>
                </div>-->

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
          getabout();

      });
      var chk = 0;
      function getabout(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_about/displayabout');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }


      
    function editabout(id){
        $('#modalcaption').text("Edit About");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_about/editabout');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                  // alert(data);
                  var res = JSON.parse(data);
                  getabout();
                  // console.log(data);
                   
                  $('#pageid').val(res.about_id);   //sets value for the field having id="aboutid"
                   $("#picid").prop('required',false);

                  $('#image1').val(res.about_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.about_pic+'">') 

                  $('#summernote').val(res.about_description);
                  //$('#designationid').val(res.about_designation);
                  $('#membboardid').val(res.about_designation);
                  $('#nameid').val(res.about_name);
                  $('#roleid').val(res.about_role);
                  $('#statusid').val(res.about_status);
                 
                  } 
               
              });
      }




      $("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_about/updateabout');?>/",
              data: new FormData(this),    //creating a FormData object named 'data'
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                 alert(data);
               if($.trim(data) == "success"){
                  notifyresult('Data Saved','success');  
                  $('#trackermodal').modal('hide');    
                  getabout();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the about table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  getabout();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the about table.
               }

              // show response from the php script.            
              }
             });
      });

   
      function statuschange(id,status)
        {
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('index.php/Admin_about/changestatus');?>/",
            data: {id:id,status:status}, // serializes the form's elements.
            success: function(data)
            {
              if($.trim(data)=="success")
              {
                getabout();
              }
            }
          });
        }


function deleteabout(id,img)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_about/deleteabout');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getabout();
               }else{
                  notifyresult('Error','danger');
                  getabout();
               }
               

            }
          });
     }         
}



   function clearall()
  {
    $('#modalcaption').text("Add Member");
     $('#imagefill').html('');
        $('#image1').val('');
    $('#picid').val('');
    $('#summernote').val('');
  //  $('#designationid').val('');
    $('#membboardid').val('');
    $('#nameid').val('');
    $('#statusid').val(''); 
    $('#roleid').val('');
    $('#pageid').val('');  

    getabout();
  }        
     
</script>
   
   