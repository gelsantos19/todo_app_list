<?php
  $errors = "";

  $db = mysqli_connect('localhost','root','','todolist');
  if (isset($_POST['submit'])){
    $task = $_POST['task'];
      if (empty($task)){
        $errors = "Write your task/s";
      }else{
        mysqli_query($db,"INSERT INTO tasks (task) VALUES ('$task')");
        header('location: index.php');
      }
    }
    if (isset($_GET['del_task'])){
        $id = $_GET['del_task'];
        mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
    }
    $tasks = mysqli_query($db, "SELECT * FROM tasks");
?>
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
      <?php if(isset($errors)){ ?>
        <p> <?php echo $errors;  ?> <p>
      <?php  } ?>
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
          <?php $i =1;   while ($row = mysqli_fetch_array($tasks)) { ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td class="taskholder"><?php echo $row['task']; ?></td>
              <td class="delete">
                <a href='index.php?del_task=<?php echo $row['id']; ?>'>Delete</a>
              </td>
            </tr>
          <?php $i++; } ?>
        <tbody>
    </table>
</body>
</html>
