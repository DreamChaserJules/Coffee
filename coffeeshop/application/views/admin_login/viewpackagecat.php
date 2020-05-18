<?php
include ("header.php");
include ("rightmenu.php");
?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row table-responsive">
              <table class="table  table-stripped table-hover table-bordered">
			  <tr>
			  <th>Sr. No.</th>
			  <th>Category Name</th>
			  <th>Delete</th>
			  <th>Edit</th>
			  </tr>
			  <?php
			  $sr=1;
			  foreach($msg as $data)
			  :
			  ?>
			  <tr>
			  <td><?php echo $sr;?></td>
			  <td><?php echo $data['name'];?></td>
			  <td><a href="<?php echo site_url('admin/delcat')?>?id=<?php echo $data['id']; ?>">Delete</a></td>
			  <td><a href="<?php echo site_url('admin/editcat')?>?id=<?php echo $data['id']; ?>">Edit</a></td>
			  <?php
			  $sr++;
			  endforeach;
			  ?>
			  </tr>
              </table>
			  </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
  
   include ("footer.php");
   ?>