<?php
$sql="select * from news";
$result=mysqli_query($connect,$sql);
?>
 <body>
	<div class="container newshomewrapper">
	
	<div class="row">
		<div class="col-md-12">
			<h1>HABARI</h1>
				<?php
				 while($data=mysqli_fetch_assoc($result))
				 {
					 ?>
					 <div class="newshome-artice-container">
					 <div class="panel panel-info">
					 <div class="panel-header" style="padding-left:20px">
						<h3><strong><?php echo $data["title"];?></strong></h3>
					 </div>
					 <div class="panel-body">
					  <div class="row">
						<div class="col-md-12">
						<tr>
						<td><?php echo $data["description"];?></td><br>
						<td><?php echo $data["date"];?></td>
						</tr>
						</div>
						</div>
					 </div>
					 </div>
					 </div>
					<?php
				 }
				 ?>
		</div>
	</div>
	
	 </div>
 </body>