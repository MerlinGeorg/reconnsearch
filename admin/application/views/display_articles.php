<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr><th>articles Title</th>
        <th>articles Date</th>
        <th>articles Image</th>
        <th>articles Description</th>
        <th>articles Status</th>
        
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
                  	
    foreach($res as $row){?>
      <tr>
          <!--<td><?php echo $row->about_pic ?></td>-->
          
          <td><?php echo $row->articles_title?></td>
          <td><?php echo $row->articles_date?></td>

          <?php 
         $filename = explode(".", $row->articles_pic);
          //$temp=end($filename);
         // echo $temp;
         $fcount=count($filename); 
         $type='';
         for($i=0;$i<$fcount;$i++){
            if($i==1){
              $type=$filename[$i];
            }
          }
          // echo $type; 
         if ($type=="mp4") 
          {?>
            <td><video height="150" width="200" controls="controls"><source src="<?php echo base_url();?>uploads/<?php echo $row->articles_pic; ?>" type="video/mp4"></video></td>
            
    <?php }
          else{ ?>
            <td><img height="60" width="60" src="<?php echo base_url();?>uploads/<?php echo $row->articles_pic; ?>"></td>
    <?php }?>


          <!--<td><a target="blank" href="<?php //echo base_url();?>/uploads/<?php //echo $row->articles_pic; ?>"></a></td>-->
          <td><?php echo $row->articles_desc?></td>
          <?php
                             
                             $rqst_status = $row->articles_status;

                             if ($rqst_status== 0)
                              {
                            
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->articles_id?>,<?php echo $row->articles_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                            
                           ?>

                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->articles_id?>,<?php echo $row->articles_status?>);">showing</button></td>

                           <?php } ?> 
		     
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->


          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editarticles('<?php echo $row->articles_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>


                  <i onclick="deletearticles('<?php echo $row->articles_id;?>','<?php echo $row->articles_pic;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  