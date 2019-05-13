<div class="container-fluid">
	<!-- ===================================================================================================================================================================== -->
<?php include 'menu_kiri.php'; ?>
	<!-- ===================================================================================================================================================================== -->
	<div class="col-lg-1">
<?php
foreach($data as $tajuk => $d):
	//$paparTajuk = ($tajuk == 'admin_id') 'Action' : huruf('Besar', $tajuk);
	//if(in_array($tajuk,array('tajukAtas','bgcolor'))
	if( $tajuk == 'tajukAtas'):
		unset($data['tajukAtas']);
	elseif( $tajuk == 'bgcolor')://echo "\n'12.4' found with strict check\n";
		unset($data['bgcolor']);
	elseif( $tajuk == 'fail')://echo "\n'12.4' found with strict check\n";
		$failApa = huruf('Besar', $d);
		unset($data['fail']);
	elseif( $tajuk == 'admin_id'):
		$paparTajuk[$tajuk] = 'Action';
	else:
		$paparTajuk[$tajuk] = huruf('Besar', $tajuk);
	endif;
endforeach; ?>
	</div>
	<!-- ===================================================================================================================================================================== -->
	<div class="col-lg-9 well" style = "margin-top:60px;">
		<div class="alert alert-info">Accounts / <?php echo $failApa; ?></div>
			<button id = "add_admin" type = "button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add new</button>
			<button id = "show_admin" type = "button" style = "display:none;" class="btn btn-success"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</button>
			<br /><br />
			<!-- ===================================================================================================================================================================== -->
			<div id = "admin_table">
			<table id = "table" class="table table-bordered">
			<thead class="alert-success">
			<tr><?php
			foreach($paparTajuk as $d => $tajuk):
				echo "\n\t\t\t";
				?><th><?php echo $tajuk ?></th><?php
			endforeach;
			echo "\n\t\t\t";
			?>
			</tr>
			</thead>
			<tbody>
			<?php
				/*$q_admin = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
				while($data = $q_admin->fetch_array()){*/
			?>
			<tr class="target">
				<td><?php echo !isset($data['username']) ? '' : $data['username'] ?></td>
				<td><?php echo !isset($data['password']) ? '' :  md5($data['password'])?></td>
				<td><?php echo !isset($data['firstname']) ? '' :  $data['firstname']?></td>
				<td><?php echo !isset($data['middlename']) ? '' :  $data['middlename']?></td>
				<td><?php echo !isset($data['lastname']) ? '' :  $data['lastname']?></td>
				<td><a href = "#" class="btn btn-danger deladmin_id" value = "<?php
				echo !isset($data['admin_id']) ? '' : $data['admin_id']?>"><span class="glyphicon glyphicon-remove"></span> Delete</a>
				<a href = "#" class="btn btn-warning eadmin_id" value = "<?php
				echo !isset($data['admin_id']) ? '' : $data['admin_id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
			</tr>
			<?php
			//	}
			?>
			</tbody>
			</table>
			</div>
			<!-- ===================================================================================================================================================================== -->
			<div id = "edit_form"></div>
			<div id = "admin_form" style = "display:none;">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<form method = "POST" action = "save_admin_query.php" enctype = "multipart/form-data">
						<div class="form-group">
							<label>Username:</label>
							<input type = "text" required = "required" name = "username" class="form-control" />
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type = "password" maxlength = "12" name = "password" required = "required" class="form-control" />
						</div>
						<div class="form-group">
							<label>Firstname:</label>
							<input type = "text" name = "firstname" required = "required" class="form-control" />
						</div>
						<div class="form-group">
							<label>Middlename:</label>
							<input type = "text" name = "middlename" placeholder = "(Optional)" class="form-control" />
						</div>
						<div class="form-group">
						<label>Lastname:</label>
						<input type = "text" required = "required" name = "lastname" class="form-control" />
						</div>
						<div class="form-group">
							<button class="btn btn-primary" name = "save_admin"><span class="glyphicon glyphicon-save"></span> Submit</button>
						</div>
					</form>
				</div>
			</div>
			<!-- ===================================================================================================================================================================== -->
	</div>
</div>
