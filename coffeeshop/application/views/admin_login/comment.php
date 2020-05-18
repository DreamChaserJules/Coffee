<?php
include ("header.php");
include ("rightmenu.php");
?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row table-responsive">
                	<h1>Shop List</h1>
              <table class="table  table-stripped table-hover table-bordered">
			  <tr>
			  <th>Sr. No.</th>
			  <th> Shop Name</th>
			  <th>Comment</th>
			  <th>Status</th>
			  <th>Action</th>
			  </tr>
			  <?php
			  $sr=1;
			  foreach($comment as $data)
			  :
			  ?>
			  <tr>
			  <td><?php echo $sr;?></td>
			  <td><?php echo $data['name'];?></td>
			  <td><?php echo $data['comment'];?></td>
			  <td><?php if($data['status'] == 1){ ?> Not Approved <?php }else{?> Approved <?php }?></td>
			  <td>
			  <?php if($data['status'] == 1){ ?>
			  	<a href="<?php echo site_url('admin/approvedComment')?>?id=<?php echo $data['id']; ?>">Approved</a>
			  <?php }?>
			  </td>

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