<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">MediaCoverage Titles</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
                 <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Titles</button> 
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
                  
                    
                <div class="form-group col-sm-12">
                  <input type="hidden" id = "pageid" name="pagenm"/>
                  <h4 class="demo-sub-title">Title</h4>
                  <textarea class="form-control focus" name="titlenm"  id="titleid" required="required"></textarea>

                </div>

                <div class="form-group col-sm-12">                 
                  <h4 class="demo-sub-title">Date</h4>
                  <input type="text" class="form-control focus" name="datenm"  id="dateid" required="required">
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
          gettitle();

      });
      var chk = 0;
      function gettitle(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoveragetitle/displaymtitle');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                 console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }


      
    function edittitle(id){
        $('#modalcaption').text("Edit Title");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoveragetitle/edittitle');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                  // alert(data);
                  var res = JSON.parse(data);
                  gettitle();
                  // console.log(data);
                   
                  $('#pageid').val(res.mediacoverage_id);   //sets value for the field having id="titleid"
                   
                  $('#titleid').val(res.mediacoverage_title);
                 $('#dateid').val(res.mediacoverage_date);
                  } 
               
              });
      }




      $("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoveragetitle/updatetitle');?>/",
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
                  gettitle();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the title table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  gettitle();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the title table.
               }

              // show response from the php script.            
              }
             });
      });

   
      function statuschange(id,status)
        {
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('index.php/Admin_mediacoveragetitle/changestatus');?>/",
            data: {id:id,status:status}, // serializes the form's elements.
            success: function(data)
            {
              if($.trim(data)=="success")
              {
                window.location.reload();
              }
            }
          });
        }


function deletetitle(id)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_mediacoveragetitle/deletetitle');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  gettitle();
               }else{
                  notifyresult('Error','danger');
                  gettitle();
               }
               

            }
          });
     }         
}



   function clearall()
  {
    $('#modalcaption').text("Add Titles");
     $('#pageid').val('');
    $('#titleid').val(''); 
    $('#dateid').val('');    

    gettitle();
  }        
     
</script>
   
   