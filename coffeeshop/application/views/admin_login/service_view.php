<?php
include ("header.php");
include ("rightmenu.php");
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$fet=mysqli_query($con,"select * from service where s_id='$id'");
	$row=mysqli_fetch_array($fet,MYSQLI_BOTH);
	$location="../upload/$row[image]";
	$del=mysqli_query($con,"delete from service where s_id='$id'");
	if($del)
	{
		unlink($location);
		echo "<script>alert('Data Deleted Successfully');window.location.href='view_service.php';</script>";
	}
}
?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 table-responsive ">
                        <h4 class="page-title">service Management</h4>
						<table class="table table-bordered">
						<tr>
						<th>Sr. No.</th>
						<th>Heading</th>
						<th>Content</th>
						<th>Image</th>
						<th>Delete</th>
						<th>Edit</th>
						</tr>
						<?php
						include ("../connect.php");
						$sr=1;
						$sel=mysqli_query($con,"select * from service");
						while($row=mysqli_fetch_assoc($sel))
						{
						?>
						<tr>
						<td><?php echo $sr;?></td>
						<td><?php echo $row['heading'];?></td>
						<td><?php echo $row['content'];?></td>
						<td><img src="../upload/<?php echo $row['image'];?>" style="height:150px;width:150px;"></td>
						<td><a href='view_service.php?id=<?php echo $row['s_id'];?>'>Delete</a></td>
						<td><a href='edit_service.php?id=<?php echo $row['s_id'];?>'>Edit</a></td>
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