<?php
// Check if the user is authenticated
if (!logged_in()) {
    // If not authenticated, redirect to the login page
    redirect('login');
    exit;
}

// Retrieve the user's role from the session
$user_role = $_SESSION['USER']['role'];

// Check if the user is an admin
if ($user_role !== 'admin') {
    // If not an admin, display an error message or redirect to a different page
    echo "You are not authorized to access this page.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/users-view.css">
</head>
<body>

<div class="container">
    <h2 class="text-center">Add User</h2>
    <form id="form-id" class="mb-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email">
            <div id="email-error" class="form-text error-text"></div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username">
            <div id="username-error" class="form-text error-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container">
    <div class="table-responsive">
        <h4 class="text-center">Users</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody id="users-table-body">
            <?php 
                $query = "SELECT * FROM users ORDER by id DESC";
                $rows = query($query);
                if(!empty($rows)):
                    foreach($rows as $row):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['role'] ?></td>
                <td><?= date("jS M, Y", strtotime($row['date'])) ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
               
            </tbody>
        </table>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="users.js"></script>
</body>
</html>
