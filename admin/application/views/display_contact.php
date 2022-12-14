<table id="tablefill" class="table table-bordered table-striped"> 
                <thead>
                <tr>
                  <th>Contact Name</th>
                  <th>Contact Primary Email</th>
                  <th>Contact Alternate Email</th>
                  <th>Contact Primary Number</th>
                  <th>Contact Alternate Number</th>
                  <th>Contact Message</th>
                  <th>Contact Fax</th>
                  <th>Contact Address</th>
                  <th>Contact Locationsrc</th>
                  <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach($res as $row){?>  
                <tr>
                  <td><?php echo $row->contact_name ?></td>
                  <td><?php echo $row->contact_mail1 ?></td>
                  <td><?php echo $row->contact_mail2 ?></td>
                  <td><?php echo $row->contact_phone1 ?></td>
                  <td><?php echo $row->contact_phone2 ?></td>
                  <td><?php echo $row->contact_msg ?></td>
                  <td><?php echo $row->contact_fax ?></td>
                  <td><?php echo $row->contact_address ?></td>
                  <td><?php echo $row->contact_locationsrc ?></td>
                  

                   <td> <div class="btn-group btn-group-sm">
                        <i data-toggle="modal" data-target="#trackermodal" onclick="editadminContact('<?php echo $row->contact_id ?>');" style="margin-left: 10px" class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
                    </div>


                  </td>
                </tr>

                <?php } ?>

             
                </tbody>
              </table>