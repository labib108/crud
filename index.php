<?php
    include 'header.php';
    include 'database.php';
?>

<div class="panel-heading">
    <h3>Student List <a href="addstudent.php" class=" btn btn-primary float-right">Add Student Data </a></h3>
</div>
    <div class="panel-body">
        <table class="table table-striped" >
            <tr>
                 <th>Serial</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                $db = new Database();
                $table = 'db_table';
                $order_by = array('order_by' => 'id DESC');
                $studentData = $db->select($table, $order_by);
                if (!empty($studentData))
                {
                    $i=0;
                    foreach ($studentData as $data) { ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['roll'] ?></td>
                <td><?php echo $data['phone'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>
                    <a class="btn btn-secondary" href="edit.php?id=<?php echo $data['id'] ?>">Edit </a>
                    <a class="btn btn-danger" href="process_student.php?action=delet &id=<?php echo $data['id'] ?>" onclick="return confirm('Are you sure to delet ?')">Delet</a>
                </td>
            </tr>
            <?php }} else{ ?>
                <tr><td colspan="5"><h2>No Student Data Found......</h2></td></tr>
            <?php } ?>
        </table>
    </div>
<?php include 'footer.php' ?>





    