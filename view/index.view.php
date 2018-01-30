<?php
    include 'header.view.php';

 ?>
    <br><br>
    <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-info" role="alert">
       <?php echo $_SESSION['message']?>
    </div>
        <?php unset($_SESSION['message']); ?>
    <?php  endif;?>
    <div class="col-md-6 col-md-offset-3">
        <ul class="list-group">
            <li class="list-group-item active">Todo list</li>
                <?php foreach ($mas as $key=>$val): ?>

                <li class="list-group-item <?php echo $val['done']?>">
                    <?php echo htmlspecialchars($val['title']); ?>
                    <a href="doneTask.php?id=<?php echo $key ?>" class="btn btn-primary float-right">Done</a>
                    <a href="deleteTask.php?id=<?php echo $key ?>" class="btn btn-danger float-right">Delete</a>
                    <a href="view/editTask.view.php?id=<?php echo $key ?>" class="btn btn-primary float-right">Edit</a>

                </li>
                <?php endforeach; ?>
        </ul>
        <hr>
        <a href="view/addTask.view.php" class="btn btn-primary">Prideti</a>
    </div>


<?php
    include 'footer.view.php';