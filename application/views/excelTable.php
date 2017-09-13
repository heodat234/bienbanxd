<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php
			foreach ($users as $user) {
				echo '
				<tr>
					<td>'.$user->id.'</td>
					<td>'.$user->name.'</td>
					<td>'.$user->email.'</td>
				</tr>
				';
			}
			?>
		</table>
		<div align="center">
			<form method="post" action="<?php echo base_url(); ?>export/excelXayTuong">
				<input type="submit" name="export" class="btn btn-success" value="Excel">
			</form>
			
		</div>
	</div>
</body>
</html>