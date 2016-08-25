<html>
<head><title><?php echo $title; ?></title></head>

<body>
<center>
<form method="POST" action="login_process.php">
<p><?php echo $error; ?></p>
<table>
  <tr>
    <td>User Name</td>
    <td><input type="text" name="username" value=""/></td>
  </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="password" value=""/></td>
  </tr>
    <tr>
 
    <td colspan="2"><input type="submit" name="login" value="Login"/></td>
  </tr>
</table>
</form>
</center>

</body>
</html>