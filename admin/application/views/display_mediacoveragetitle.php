<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr>
        <th>MediaCoverage Title</th>
        <th>MediaCoverage Date</th>
        <th>MediaCoverage Status</th>
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php                   	
    foreach($res as $row){?>
      <tr>    
          <td><?php echo $row->mediacoverage_title?></td>
          <td><?php echo $row->mediacoverage_date?></td>
          <?php
                           $rqst_status = $row->mediacoverage_status;

                             if ($rqst_status== 0)
                              {
                           ?>
                          
                          <td><button class="btn btn-danger" onclick="statuschange(<?php echo $row->mediacoverage_id?>,<?php echo $row->mediacoverage_status?>);">blocked</button></td>

                          <?php
                              }
                           else
                            { 
                   
                           ?>
                           <td><button class="btn btn-success" onclick="statuschange(<?php echo $row->mediacoverage_id?>,<?php echo $row->mediacoverage_status?>);">showing</button></td>

                           <?php } ?> 

          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="edittitle('<?php echo $row->mediacoverage_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                  <i onclick="deletetitle('<?php echo $row->mediacoverage_id;?>');" style="margin-left: 30px" class="fa fa-times fa-lg" aria-hidden="true"></i>
                </div>
              </div></td>   
                           
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  