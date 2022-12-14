<div class="page-header">
  <div class="row">
    <div class="col-md-4">
      <div class="media">
        <div class="media-body">
          <div class="display-6">articles page</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="pull-xs-right" role="toolbar">
               
                 <button class="btn btn-success" data-toggle="modal" data-target="#trackermodal"  onclick="clearall();">Add articles</button> 
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
                  <h4 class="demo-sub-title">Date</h4>
                  <input type="date" class="form-control focus" name="datenm" id="dateid" required="required"/>

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

<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
      $( document ).ready(function() {
          getarticles();

      });
      var chk = 0;
      function getarticles(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_articles/displayarticles');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextend').html(data);   //fetches the requested HTMLsnippet & inserts it on the page
                $('#tablefill').DataTable();
                }
             });
      }


      
    function editarticles(id){
        $('#modalcaption').text("Edit articles");
        $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_articles/editarticles');?>/",
                data: {id:id}, // serializes the form's elements.
                success: function(data){
                  // alert(data);
                  var res = JSON.parse(data);
                  getarticles();
                  // console.log(data);
                   
                  $('#pageid').val(res.articles_id);   //sets value for the field having id="articlesid"
                   $("#picid").prop('required',false);

                  $('#image1').val(res.articles_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.articles_pic+'">') 

                  $('#descid').val(res.articles_desc);
                  //$('#designationid').val(res.articles_designation);
                  $('#titleid').val(res.articles_title);
                  $('#dateid').val(res.articles_date);
                  
                 
                  } 
               
              });
      }




      $("#prodForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_articles/updatearticles');?>/",
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
                  getarticles();  //if data is updated,then prints 'Data Saved' & hides the editing popup section when the data is updated,then displays the articles table.
               }else{
                  notifyresult('Error','danger');      
                  $('#trackermodal').modal('hide');   
                  getarticles();  //if data is not updated,then prints 'Error' & hides the editing popup section when the data is updated,then again displays the articles table.
               }

              // show response from the php script.            
              }
             });
      });

   
      function statuschange(id,status)
        {
          $.ajax({
            method: "POST",
            url: "<?php echo base_url('index.php/Admin_articles/changestatus');?>/",
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


function deletearticles(id,img)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_articles/deletearticles');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getarticles();
               }else{
                  notifyresult('Error','danger');
                  getarticles();
               }
               

            }
          });
     }         
}



   function clearall()
  {
    $('#modalcaption').text("Add Article");
    $('#pageid').val('');
     $('#imagefill').html('');
        $('#image1').val('');
    $('#picid').val('');
    $('#descid').val('');
  //  $('#designationid').val('');
    $('#titleid').val('');
    $('#dateid').val('');
      

    getarticles();
  }        
     
</script>
   
   