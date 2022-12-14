<table class="table table-hover table-bordered  " id="tablefill">
  <thead>
    <tr>
        <th>Whatwedo Vision & Mission</th>
        <th>Whatwedo Know How</th>
        
        <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 
  <?php 
                  	
    foreach($res as $row){?>
      <tr>
		      
          <td><?php echo $row->whatwedo_vision?></td>
          <td><?php echo $row->whatwedo_knowhow?></td>	     
                       
            <!-- <a target="blank"> is used to open the linked document in new window -->

          <td><div class="media-right" class="col-md-2">
                <div class="col-md-12">
                  <i data-toggle="modal" data-target="#trackermodal" onclick="editwhatwedo('<?php echo $row->whatwedo_id;?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>

                </div>
              </div></td>                         
      </tr>

  <?php }?>  
                
  </tbody>
</table>
  