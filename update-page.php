<?php 
    require_once 'config/connect.php';

    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id';");
    $user = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="scripts/update.php" method="post" class="add-user-form">
    	<h2>Update User</h2>
		<input type="hidden" name="id" value="<?= $user['id'] ?>">
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">First Name</label>
    			<input type="text" class="form-control" name="first_name" value="<?= $user['first_name'] ?>">
    		</div>
    	</div>
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">Last Name</label>
    			<input type="text" class="form-control" name="last_name" value="<?= $user['last_name'] ?>">
    		</div>
    	</div>
    	<div class="form-column">
    		<div class="form-group">
    			<label for="">Country</label>
    			<input type="text" class="form-control" name="country" value="<?= $user['country'] ?>">
    		</div>
    	</div>
    	<button type="submit" class="btn btn-dark">Submit</button>
    </form>
</body>
</html>