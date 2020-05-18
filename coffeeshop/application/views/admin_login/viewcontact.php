<?php
include ("header.php");
include ("rightmenu.php");

?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">

                    <div class="col-md-12 table-responsive ">
                        <h4 class="page-title">Contact Management</h4>
						<table class="table table-bordered">
						<tr>
						<th>Sr. No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Message</th>
						<th>Delete</th>
					
						</tr>
						<?php
						$sr=1;
					foreach($fetch as $row)
						{
						?>
						<tr>
						<td><?php echo $sr;?></td>
						<?php
						
						?>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['subject'];?></td>
						<td><?php echo $row['message'];?></td>
						<td><a href='<?php echo site_url('admin/delcontact');?>?id=<?php echo $row['id'];?>'>Delete</a></td>
					
						</tr>
						<?php
						$sr++;
						}
						?>
						</table>
                  
                </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
   include ("footer.php");
   ?>