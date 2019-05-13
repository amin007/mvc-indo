	<div class="col-lg-2 well" style="margin-top:60px;">
		<div class="container-fluid" style="word-wrap:break-word;">
			<img src="<?php echo BASEURL?>public/img/logo/user.png" width="50px" height="50px"/><br /><br />
			<label class="text-muted"><?php //require'account.php'; echo $name;?></label>
		</div>
		<hr style="border:1px dotted #d3d3d3;"/>
		<ul id="menu" class="nav menu">
		<li><a style="border-bottom:1px solid #d3d3d3;" href="<?php echo BASEURL?>login/ruangtamu"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		<li><a style="font-size:18px; border-bottom:1px solid #d3d3d3;" href=""><i class="glyphicon glyphicon-tasks"></i> Accounts</a>
			<ul style="list-style-type:none;">
			<li><a href="<?php echo BASEURL?>login/account/peribadi" style="font-size:15px;"><i class="glyphicon glyphicon-user"></i> Personal</a></li>
			<li><a href="<?php echo BASEURL?>login/account/admin" style="font-size:15px;"><i class="glyphicon glyphicon-user"></i> Admin</a></li>
			<li><a href="<?php echo BASEURL?>login/account/student" style="font-size:15px;"><i class="glyphicon glyphicon-user"></i> Student</a></li>
			</ul>
		</li>
		<li><a style="font-size:18px; border-bottom:1px solid #d3d3d3;" href="<?php echo BASEURL?>login/book/new"><i class="glyphicon glyphicon-book"></i> Books</a></li>
		<li><a style="font-size:18px; border-bottom:1px solid #d3d3d3;" href=""><i class="glyphicon glyphicon-th"></i> Transaction</a>
			<ul style="list-style-type:none;">
			<li><a href="<?php echo BASEURL?>login/items/borrowing" style="font-size:15px;"><i class="glyphicon glyphicon-random"></i> Borrowing</a></li>
			<li><a href="<?php echo BASEURL?>login/items/returning" style="font-size:15px;"><i class="glyphicon glyphicon-random"></i> Returning</a></li>
			</ul>
		</li>
		<li><a  style="font-size:18px; border-bottom:1px solid #d3d3d3;" href=""><i class="glyphicon glyphicon-cog"></i> Settings</a>
			<ul style="list-style-type:none;">
			<li><a style="font-size:15px;" href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
			</ul>
		</li>
		</ul>
	</div>
