<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr>
      <th>MediaCoverage Image</th>
        <th>MediaCoverage Title</th>
        <th>MediaCoverage Status</th>
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php                   	
    foreach($res as $row){?>
      <tr>           
        <?php $filename = explode(".", $row->mediacoverageimg_pic);         
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
                <td><video height="150" width="200" controls="controls"><source src="<?php echo base_url();?>uploads/<?php echo $row->mediacoverageimg_pic; ?>" type="video/mp4"></video></td>
            
              <?php }
              else{ ?>
                <td><img height="60" width="60" src="<?php echo base_url();?>uploads/<?php echo $row->mediacoverageimg_pic; ?>"></td>
              <?php }?>   
          <td><?php echo $row->image_title?></td>
          
          <?php
                           $rqst_status = $row->mediacoverageimg_status;

                             if ($rqst_status== 0)
                              {
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->mediacoverageimg_id?>,<?php echo $row->mediacoverageimg_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                   
                           ?>
                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->mediacoverageimg_id?>,<?php echo $row->mediacoverageimg_status?>);">showing</button></td>

                           <?php } ?> 

          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editimg('<?php echo $row->mediacoverageimg_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                  <i onclick="delete_img('<?php echo $row->mediacoverageimg_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  