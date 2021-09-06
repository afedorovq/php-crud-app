<?php 
	require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Users</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-hover">
		<tr class="table-dark">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Country</th>
			<th></th>
		</tr>
		<?php 
			$users = mysqli_query($connect, "select * from users;");
			$users = mysqli_fetch_all($users);
			
			foreach ($users as $user) {
				?>
				<tr class="table-secondary">
					<td><?= $user[0] ?></td>
					<td><?= $user[1] ?></td>
					<td><?= $user[2] ?></td>
					<td><?= $user[3] ?></td>
					<td>
						<a href="update-page.php?id=<?= $user[0] ?>">Edit</a> /
						<a href="scripts/delete.php?id=<?= $user[0] ?>">Delete</a>
					</td>
				</tr>		
				<?php 
			}
		?>
	</table>
    <form action="scripts/create.php" method="post" class="add-user-form">
    	<h2>Add User</h2>
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">First Name</label>
    			<input type="text" class="form-control" name="first_name">
    		</div>
    	</div>
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">Last Name</label>
    			<input type="text" class="form-control" name="last_name">
    		</div>
    	</div>
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">Country</label>
    			<input type="text" class="form-control" name="country">
    		</div>
    	</div>
    	<button type="submit" class="btn btn-dark">Submit</button>
    </form>
</body>
</html>