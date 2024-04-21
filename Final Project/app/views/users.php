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

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

<link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<h4>Users</h4>

<div class="table-responsive">
<table class="table"> 
    <tr>
        <th>#</th><th>Username</th><th>Email</th><th>Role</th><th>Date</th>
    </tr>

    <?php 
        $query = "SELECT * FROM users ORDER by id DESC";
        $rows = query($query);
    ?>
        <tbody>
            <?php if(!empty($rows)):?>
                <?php foreach($rows as $row):?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['role']?></td>
                    <td><?=date("jS M, Y", strtotime($row['date']))?></td>
                </tr>
                <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
</div>
