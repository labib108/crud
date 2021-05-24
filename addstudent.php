<?php include 'header.php' ?>

<div class="panel-heading">
    <h3>Add Student <a href="index.php" class="btn btn-primary float-right">Back</a></h3>
</div>
<div class="panel-body">
    <form action="process_student.php" method="post">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" name="name" id="name" class="form-control" required="1">
        </div>
        <div class="form-group">
            <label for="roll">Student's Roll</label>
            <input type="number" name="roll" id="roll" class="form-control" required="1">
        </div>
        <div class="form-group">
            <label for="mobile">Student's Mobile Number</label>
            <input type="number" name="mobile" id="mobile" class="form-control" required="1">
        </div>
        <div class="form-group">
            <label for="email">Student's Email</label>
            <input type="email" name="email" id="email" class="form-control" required="1">
        </div>
        <div class="form-group">
            <input type="hidden" name="action" value="add">
            <input type="submit" name="submit" class="btn btn-primary" value="Add Student">
        </div>
    </form>
</div>
<?php include 'footer.php' ?>