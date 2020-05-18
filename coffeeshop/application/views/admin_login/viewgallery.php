<?php
include ("header.php");
include ("rightmenu.php");

?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">

                    <div class="col-md-12 table-responsive ">
                        <h4 class="page-title">Product Management</h4>
						<table class="table table-bordered">
						<tr>
						<th>Sr. No.</th>
						<th>Shop Name</th>
						<th>Product Description</th>
						<th>Image</th>
						<th>Delete</th>
						<th>Edit</th>
						</tr>
						<?php
						$sr=1;
					foreach($fetch as $row)
						{
						?>
						<tr>
						<td><?php echo $sr;?></td>
						
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['content'];?></td>
						<td><img src="../upload/<?php echo $row['image'];?>" style="height:150px;width:150px;"></td>
						<td><a href='<?php echo site_url('admin/delgallery');?>?id=<?php echo $row['id'];?>'>Delete</a></td>
						<td><a href='<?php echo site_url('admin/editgallery');?>?id=<?php echo $row['id'];?>'>Edit</a></td>
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