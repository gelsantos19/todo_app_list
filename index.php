<!DOCTYPE html>
<html>
<head>
  <title>Todo list App</title>
  <link rel ="stylesheet" type="text/css" href ="style.css">
</head>
<body>
    <div class="header">
      <h2>Todo list App</h2>
    </div>

    <form method="POST" action="index.php">
      <input type="text" name="task" class="taskbox">
      <button type="submit" class="addbtn" name="submit"> Add Task</button>
    </form>

    <table>
        <thead>
            <tr>
              <th>Task number</th>
              <th>Task</th>
              <th>Action</th>
            <tr>
        <thead>

        <tbody>
            <tr>
              <td>1</td>
              <td class="taskholder">First Task</td>
              <td class="delete">
                <a href="#">Delete</a>
              </td>
            <tr>
        <tbody>
    </table>
</body>
</html>
