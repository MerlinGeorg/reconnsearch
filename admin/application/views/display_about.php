<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>About pic</th>
        <th>About Description</th>
        <th>About Designation</th>
        <th>About Name</th>
        <th>About Role</th>
        <th>About Status</th>
        
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
                  	
    foreach($res as $row){?>
      <tr>
          <!--<td><?php echo $row->about_pic ?></td>-->
          <td><a target="blank" href="<?php echo base_url();?>/uploads/<?php echo $row->about_pic; ?>"><img height="60" width="60" src="<?php echo base_url();?>/uploads/<?php echo $row->about_pic; ?>"></a></td>
          <td><?php echo $row->about_description?></td>
          <td><?php echo $row->about_designation?></td>
          <td><?php echo $row->about_name?></td>
          <td><?php echo $row->about_role?></td>
          <?php
                             
                             $rqst_status = $row->about_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->about_id?>,<?php echo $row->about_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->about_id?>,<?php echo $row->about_status?>);">showing</button></td>

                           <?php } ?> 
		     
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editabout('<?php echo $row->about_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>


                  <i onclick="deleteabout('<?php echo $row->about_id;?>','<?php echo $row->about_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  