<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Autor</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo $task->description; ?></td>
                    <td><?php echo $task->username;?></td>
                    <td>
                        <a href="<?php echo base_url('First_cod_igniter/tasks/delete_task/' . $task->id); ?>" onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
                    </td>
                    <td><?php echo $task->id;?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Display task list with associated users -->

    <h1>Add Task</h1>
    <?php echo form_open('First_cod_igniter/tasks/add_task'); ?>
        <label for="description">New Task:</label>
        <input type="text" name="description" required>

        <label for="user_id">Assign to User:</label>
        <select name="user_id">
            <option value="">Unassigned</option>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user->id; ?>"><?php echo $user->username; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Add Task</button>
    <?php echo form_close(); ?>
</body>
</html>
