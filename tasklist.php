<?php
// include "./config/database.php";

$sql = 'SELECT * FROM tasks';
$result = mysqli_query($conn,$sql);
$tasks = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>

<div class="tasks_body">
    <h2 class="tasks_header">Upcoming Tasks</h2>
    <?php if(empty($tasks)): ?>
        <p class="no_tasks">There are no Tasks YET!</p>
    <?php endif; ?>


    <div class="task_container">
        <?php foreach($tasks as $items): ?>
            <div class="task" id="<?php echo $items['id'] ?>">
                <p style="background-color: inherit;"><?php echo $items['task']; ?> <br>  <small class="date">On :<?php echo $items['date'] ?></small></p>
                <div class="btns">
                    <!-- <button onclick="done(<?php echo $items['id']; ?>)" class="done-btn"><i class="fa fa-check"></i></button> -->
                    <a href="delete.php?id=<?php echo $items['id'] ?>"   class="del-btn" "><i class="fas fa-trash"></i></a>
                    
        </div>
            </div>    
        <?php endforeach;?>
        

    </div>
</div>


