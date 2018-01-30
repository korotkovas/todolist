<?php
include 'header.view.php';
?>
<br><br>
<div class="col-md-6 offset-md-3">
<form action="../addTask.php" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control"  placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control"  name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <select class="form-control" name="year">
            <?php for($i = 2018; $i < 2025; $i++) :?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="month">Month</label>
        <select class="form-control" name="month">
            <?php for($i = 1; $i <= 12; $i++) :?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="day">Day</label>
        <select class="form-control" name="day">
            <?php for($i = 1; $i <= 31; $i++) :?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <label class="radio-inline">
            <input type="radio" name="priority" value="low">Low
        </label>
        <label class="radio-inline">
            <input type="radio" name="priority" value="normal">Normal
        </label>
        <label class="radio-inline">
            <input type="radio" name="priority" value="high">High
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<?php
include 'footer.view.php';
?>
