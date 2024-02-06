<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->username; ?></td>
                    <td>
                        <a href="<?php echo base_url('First_cod_igniter/users/delete_user/' . $user->id); ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Display user list -->
            <h1>Add User</h1>
    <?php echo form_open('First_cod_igniter/users/add_user'); ?>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" required>

        <button type="submit">Add User</button>
    <?php echo form_close(); ?>
</body>
</html>
