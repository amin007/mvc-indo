		<br />
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">Library System &copy; All rights reserved 2016</label>
			</div>
		</nav>
	</body>
	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js"></script>
	<script src = "<?php echo BASEURL?>public/js/login.js"></script>
	<script src = "<?php echo BASEURL?>public/js/sidebar.js"></script>
	<script src = "<?php echo BASEURL?>public/js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_admin').click(function(){
				$(this).hide();
				$('#show_admin').show();
				$('#admin_table').slideUp();
				$('#admin_form').slideDown();
				$('#show_admin').click(function(){
					$(this).hide();
					$('#add_admin').show();
					$('#admin_table').slideDown();
					$('#admin_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Deleting...</label></center>');
			$('.deladmin_id').click(function(){
				$admin_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.deladmin_id').attr('disabled', 'disabled');
				$('.eadmin_id').attr('disabled', 'disabled');
				setTimeout(function(){
					window.location = 'delete_admin.php?admin_id=' + $admin_id;
				}, 1000);
			});
			$('.eadmin_id').click(function(){
				$admin_id = $(this).attr('value');
				$('#show_admin').show();
				$('#show_admin').click(function(){
					$(this).hide();
					$('#edit_form').empty();
					$('#admin_table').show();
					$('#add_admin').show();
				});
				$('#admin_table').fadeOut();
				$('#add_admin').hide();
				$('#edit_form').load('load_admin.php?admin_id=' + $admin_id);
			});
		});
	</script>
</html>