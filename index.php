<?php
	$koneksi = mysqli_connect("localhost","root","","php-api");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<a href="input.php" class="add">+Insert Data</a>
	<table border="2" align="center" width="70%">
		<tr>
			<td colspan="6" style="background-color: green; color: #fff">
				<h3><center>DATA</center></h3>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Action</th>
		</tr>
		<?php
			$qry = mysqli_query($koneksi,"SELECT * FROM users");
			while($data = mysqli_fetch_array($qry)){
		 ?>
		<tr>
			<td align="center"><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td align="center">
				<a href="ubah.php?id=<?php echo $data['id']; ?>">Ubah</a>
				<a href="hapus.php?id=<?php echo $data['id']; ?>"><span style="color: #C62828;">Hapus</span></a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>