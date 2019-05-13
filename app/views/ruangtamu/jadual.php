<div class="container-fluid">
	<div class="col-lg-12 well" style="margin-top:60px;">
<?php
semakPembolehubah($data,'data');
foreach($data as $tajuk => $d):
	//$paparTajuk = ($tajuk == 'admin_id') 'Action' : huruf('Besar', $tajuk);
	//if(in_array($tajuk,array('tajukAtas','bgcolor'))
	if( $tajuk == 'tajukAtas'):
		unset($data['tajukAtas']);
	elseif( $tajuk == 'bgcolor')://echo "\n'12.4' found with strict check\n";
		unset($data['bgcolor']);
	elseif( $tajuk == 'fail')://echo "\n'12.4' found with strict check\n";
		$failApa = huruf('Besar_Depan', $d);
		unset($data['fail']);
	elseif( $tajuk == 'admin_id'):
		$paparTajuk[$tajuk] = 'Action';
	else:
		$paparTajuk[$tajuk] = huruf('Besar_Depan', $tajuk);
	endif;
endforeach; ?>
	</div><!-- / class="col-lg-9 well" style="margin-top:60px;" -->
</div><!-- / class="container-fluid" -->
<!-- ===================================================================================================================================================================== -->
<div class="container-fluid">
	<!-- ===================================================================================================================================================================== -->
<?php include 'menu_kiri.php'; ?>
	<!-- ===================================================================================================================================================================== -->
	<div class="col-lg-1"></div>
	<!-- ===================================================================================================================================================================== -->
	<div class="col-lg-9 well" style="margin-top:60px;">
		<div class="alert alert-info"><?php echo $failApa; ?></div>
			<button id="add_admin" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add new</button>
			<button id="show_admin" type="button" style="display:none;" class="btn btn-success"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</button>
			<br /><br />
			<!-- ===================================================================================================================================================================== -->
			<div id="admin_table">
			<table id="table" class="table table-bordered">
			<thead class="alert-success">
			<tr><?php
			foreach($paparTajuk as $d => $tajuk):
				echo "\n\t\t\t\t";
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
			<tr class="target"><?php
			foreach($data as $tajuk => $papar):
				if( $tajuk == 'admin_id'):
					echo "\n\t\t\t\t";
					?><td><a href="#" class="btn btn-danger deladmin_id" value="<?php
					echo !isset($data['admin_id']) ? '' : $data['admin_id']
					?>"><span class="glyphicon glyphicon-remove"></span> Delete</a><?php
					echo "\n\t\t\t\t";
					?><a href="#" class="btn btn-warning eadmin_id" value="<?php
					echo !isset($data['admin_id']) ? '' : $data['admin_id']
					?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td><?php
					echo "\n\t\t\t\t";
				elseif( $tajuk == 'status' and $papar == 'Borrow'):
					echo "\n\t\t\t\t<td>" . '<button name="save_borrow" class="btn btn-primary">'
						. '<span class="glyphicon glyphicon-thumbs-up"></span> Borrow</button></td>';
					/*?><td>Pinjam:<?php echo $papar ?></td><?php*/
				elseif( $tajuk == 'status' and $papar == 'Returned'):
					echo "\n\t\t\t\t<td>" . '<button disabled="disabled" class="btn btn-primary"'
					. ' type="button" href="#" data-toggle="modal" data-target="#return">'
					. '<span class="glyphicon glyphicon-check"></span> Returned</button></td>';
					/*?><td>Pulang:<?php echo $papar ?></td><?php*/
				else:
					echo "\n\t\t\t\t";
					?><td><?php echo $papar ?></td><?php
				endif;
			endforeach;
			echo "\n\t\t\t\t";
			?>
			</tr>
			<?php
			//	}
			?>
			</tbody>
			</table>
			</div>
			<!-- ===================================================================================================================================================================== -->
			<div id="edit_form"></div>
			<div id="admin_form" style="display:none;">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<form method="POST" action="save_admin_query.php" enctype="multipart/form-data">
						<div class="form-group">
							<label>Username:</label>
							<input type="text" required="required" name="username" class="form-control" />
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" maxlength="12" name="password" required="required" class="form-control" />
						</div>
						<div class="form-group">
							<label>Firstname:</label>
							<input type="text" name="firstname" required="required" class="form-control" />
						</div>
						<div class="form-group">
							<label>Middlename:</label>
							<input type="text" name="middlename" placeholder="(Optional)" class="form-control" />
						</div>
						<div class="form-group">
						<label>Lastname:</label>
						<input type="text" required="required" name="lastname" class="form-control" />
						</div>
						<div class="form-group">
							<button class="btn btn-primary" name="save_admin"><span class="glyphicon glyphicon-save"></span> Submit</button>
						</div>
					</form>
				</div>
			</div>
			<!-- ===================================================================================================================================================================== -->
	</div>
</div>
