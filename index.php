<!DOCTYPE html>
<html>
<head>
	<title>Tasklist Dencina</title>
	<style type="text/css">
		table,tr,td {	border: solid 1px black;
		}
	</style>
</head>
<body>	
	<table cellpadding="10">
	<?php 
		$dbh = new PDO("pgsql:dbname=d1r8ptd53v6r0l;
						host=ec2-54-247-178-166.eu-west-1.compute.amazonaws.com",
						'vaxwzkgujzkxxc',
						'2e8b2bed6608741a531ca29214961211f899bbf529cec2afe58c918aeec189f0'
						); 

			$query = $dbh->query('SELECT * FROM tasks');
			while ($row = $query->fetch()) {

				echo '<tr><td>'.$row['id'].'</td><td>'.$row['task'].'</td><td>'.$row['description'].'</td></tr>';
			}
	?>
	</table>
</body>
</html>
