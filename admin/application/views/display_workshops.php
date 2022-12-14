<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>workshops Title</th>
      <th>workshops SubTitle</th>
        <th>workshops Date</th>
        <th>workshops Image</th>
        <th>workshops Description</th>
        <th>workshops Status</th>
        
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
                  	
    foreach($res as $row){?>
      <tr>
          <!--<td><?php echo $row->about_pic ?></td>-->
          
          <td><?php echo $row->workshops_title?></td>
          <td><?php echo $row->workshops_subtitle?></td>
          <td><?php echo $row->workshops_date?></td>
          <?php $filename = explode(".", $row->workshops_pic);         
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
                <td><video height="150" width="200" controls="controls"><source src="<?php echo base_url();?>uploads/<?php echo $row->workshops_pic; ?>" type="video/mp4"></video></td>
            
              <?php }
              else{ ?>
                <td><img height="60" width="60" src="<?php echo base_url();?>uploads/<?php echo $row->workshops_pic; ?>"></td>
              <?php }?>
          <td><?php echo $row->workshops_desc?></td>
          <?php
                             
                             $rqst_status = $row->workshops_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->workshops_id?>,<?php echo $row->workshops_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->workshops_id?>,<?php echo $row->workshops_status?>);">showing</button></td>

                           <?php } ?> 
		     
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editworkshops('<?php echo $row->workshops_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>


                  <i onclick="deleteworkshops('<?php echo $row->workshops_id;?>','<?php echo $row->workshops_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  