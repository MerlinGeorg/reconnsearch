<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">MediaCoverage imgs</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
                 <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add Images</button> 
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
                  <h4 class="demo-sub-img">Image</h4>
                  <input class="form-control focus" type="file" name="picnm"  id="picid" required="required">
                       
                  <input type="hidden" name="image1" id="image1">
                  <div id="imagefill"></div>
                </div>
                    
                <div class="form-group col-sm-12">
                  
                  <h4 class="demo-sub-img">Title</h4>
                  
                  <select class="form-control" name="titlenm" id="titleid" required="required">
                       <option value="">select</option>
                      <?php foreach($getimg as $row){ ?>
                        <option value="<?php echo $row->mediacoverage_id; ?>"><?php echo $row->mediacoverage_title; ?></option>
                        <?php } ?>
                     </select>
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
          getimg();

      });
      var chk = 0;
      function getimg(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoverageimg/displaymimg');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }


      
    function editimg(id){
        $('#modalcaption').text("Edit image");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoverageimg/editimg');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                  // alert(data);
                  var res = JSON.parse(data);
                  getimg();
                  // console.log(data);
                   
                  $('#pageid').val(res.mediacoverageimg_id);   //sets value for the field having id="imgid"
                   $("#picid").prop('required',false);

                  $('#image1').val(res.mediacoverageimg_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.mediacoverageimg_pic+'">') 

              $('#titleid').val(res.mediacoverageimg_title);    
              
                  } 
               
              });
      }




      $("#prodForm").submit(function(e) {
        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_mediacoverageimg/updateimg');?>/",
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
                  getimg();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the img table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  getimg();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the img table.
               }

              // show response from the php script.            
              }
             });
      });

   
      function statuschange(id,status)
        {
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('index.php/Admin_mediacoverageimg/changestatus');?>/",
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


function delete_img(id,img)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_mediacoverageimg/deleteImgs');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getimg();
               }else{
                  notifyresult('Error','danger');
                  getimg();
               }
               

            }
          });
     }         
}



   function clearall()
  {
    $('#modalcaption').text("Add Image");
     $('#pageid').val('');
    $('#picid').val('');
    $('#titleid').val('');

    getimg();
  }        
     
</script>
   
   