<?php require './config/database.php'; ?>
<?php include './inc/header.php';?>
<?php

$task = '';
$taskErr = '';
if(isset($_POST['submit'])){
    if(empty($_POST['task'])){
        $taskErr = 'Put Your Task';
    } else {
        $task = filter_input(INPUT_POST,'task',FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if(empty($taskErr)){
        $sql = "INSERT INTO tasks (task) VALUE ('$task')";
        if(mysqli_query($conn,$sql)){
        } else {
            echo 'Error'. mysqli_error($conn);
        }
    }
    header("Refresh:0");
}
?>
    <div class="container">
        <div class="head">
            <header>Organize & Perform Your Tasks With Ease!</header>
        </div>
        <div class="form_container">
            <form class="formy" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="task">Schedule Your Task!</label>
                <input autocomplete="off"  class="input_field" id="task" type="text" name="task" placeholder="Get On With It!...">
                <input class="input_btn" type="submit" name="submit" value="Your First Step Into Doing It!">
            </form>
            <?php include "./tasklist.php"; ?>

        </div>
    </div>
    <script src="./index.js" ></script>
</body>
</html>