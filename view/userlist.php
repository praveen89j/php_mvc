<html>
<head></head>

<body>

<table border="1">
	<tr><td>Name</td><td>Email Id</td><td>Profile</td></tr>
	<?php 

		foreach ($users as $name => $user)
		{
			echo '<tr><td><a href="viewuser.php?user='.$user->name.'">'.$user->name.'</a></td>
      <td>'.$user->email_id.'</td>
      <td>'.$user->profile.'</td></tr>';
		}

	?>
</table>

</body>
</html>