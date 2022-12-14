<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>reports Title</th>
        <th>reports Date</th>
        <th>reports Image</th>
        <th>reports Description</th>
        <th>reports Status</th>
        
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
                  	
    foreach($res as $row){?>
      <tr>
          <!--<td><?php echo $row->about_pic ?></td>-->
          
          <td><?php echo $row->reports_title?></td>
          <td><?php echo $row->reports_date?></td>
          <?php $filename = explode(".", $row->reports_pic);         
              $fcount=count($filename); 
              $type='';
              for($i=0;$i<$fcount;$i++){
                if($i==1){
                  $type=$filename[$i];
                }
              }
              //echo $type; 
              if ($type=="mp4") 
              {?>
                <td><video height="150" width="200" controls="controls"><source src="<?php echo base_url();?>uploads/<?php echo $row->reports_pic; ?>" type="video/mp4"></video></td>
            
              <?php }
              else{ ?>
                <td><img height="60" width="60" src="<?php echo base_url();?>uploads/<?php echo $row->reports_pic; ?>"></td>
              <?php }?>
          <td><?php echo $row->reports_desc?></td>
          <?php
                             
                             $rqst_status = $row->reports_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->reports_id?>,<?php echo $row->reports_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->reports_id?>,<?php echo $row->reports_status?>);">showing</button></td>

                           <?php } ?> 
		     
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editreports('<?php echo $row->reports_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>


                  <i onclick="deletereports('<?php echo $row->reports_id;?>','<?php echo $row->reports_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  