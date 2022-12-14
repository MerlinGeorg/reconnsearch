<!--<script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
         });
      </script>-->


<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">workshops page</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
                 <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add workshops</button> 
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
                 <h4 class="demo-sub-title">Title</h4>
                   <textarea class="form-control focus " type="text" name="titlenm" id="titleid" required="required">
                  </textarea>
                  
                </div> 

                <div class="form-group col-sm-12">
                  <h4 class="demo-sub-title">Subtitle</h4>
                  <input type="text" class="form-control focus" name="subtitlenm" id="subtitleid" required="required"/>

                </div>
              </div>
              <div class="col-sm-12">
              <div class="form-group col-sm-12">
                  <h4 class="demo-sub-title">Date</h4>
                  <input type="text" class="form-control focus" name="datenm" id="datepicker-13" required="required"/>

                </div> 
              </div>

              <div class="col-sm-12">
                <div class="form-group col-sm-12">
                      
                  <h4 class="demo-sub-title">Image</h4>
                  <input class="form-control focus" type="file" name="picnm"  id="picid" required="required">
                       
                  <input type="hidden" name="image1" id="image1">
                  <div id="imagefill"></div>
                </div>  
                     
                <div class="form-group col-sm-12">

                  <h4 class="demo-sub-title">Description</h4>
                  <textarea class="form-control focus" name="descnm" data-plugin="summernote" id="descid"></textarea>

                </div>
              </div>


              

             <!-- <div class="col-sm-12">  
                    
                

                <div class="form-group col-sm-12">                     
                  <h4 class="demo-sub-title">Status</h4>
                  <textarea name="statusnm" id="statusid" class="form-control focus" ></textarea>
                </div>

              </div> -->         
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

      <!--<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->


<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

<script type="text/javascript">

    


      $( document ).ready(function() {
          getworkshops();

      });
      var chk = 0;
      function getworkshops(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_workshops/displayworkshops');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }


      
    function editworkshops(id){
        $('#modalcaption').text("Edit workshops");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_workshops/editworkshops');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                  // alert(data);
                  var res = JSON.parse(data);
                  getworkshops();
                  // console.log(data);
                   
                  $('#pageid').val(res.workshops_id);   //sets value for the field having id="workshopsid"
                   $("#picid").prop('required',false);

                  $('#image1').val(res.workshops_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.workshops_pic+'">') 

                  $('#descid').val(res.workshops_desc);
                  //$('#designationid').val(res.workshops_designation);
                  $('#titleid').val(res.workshops_title);
                  $('#subtitleid').val(res.workshops_subtitle);
                  $('#datepicker-13').val(res.workshops_date);
                  
                 
                  } 
               
              });
      }




      $("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_workshops/updateworkshops');?>/",
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
                  getworkshops();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the workshops table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  getworkshops();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the workshops table.
               }

              // show response from the php script.            
              }
             });
      });

   
      function statuschange(id,status)
        {
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('index.php/Admin_workshops/changestatus');?>/",
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


function deleteworkshops(id,img)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_workshops/deleteworkshops');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getworkshops();
               }else{
                  notifyresult('Error','danger');
                  getworkshops();
               }
               

            }
          });
     }         
}



   function clearall()
  {
    $('#modalcaption').text("Add workshop");
    $('#pageid').val('');
     $('#imagefill').html('');
        $('#image1').val('');
    $('#picid').val('');
    $('#descid').val('');
  //  $('#designationid').val('');
    $('#titleid').val('');
    $('#subtitleid').val('');
    $('#datepicker-13').val('');
      

    getworkshops();
  }        
     
</script>
   
   