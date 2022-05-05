<?php include '../shared/head.php';
include '../shared/nav.php';
include '../genral/env.php';
$select = "SELECT doctor.id as id ,doctor.name as name ,doctor.email as email ,specializations.name as spiliz_name FROM `doctor` JOIN specializations ON doctor.specilization_id=specializations.id";
$s = mysqli_query($conn, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delet = "DELETE FROM `doctor` WHERE id=$id";
    $d = mysqli_query($conn, $delet);
    header("location:/hms/doctor/list.php");
}
?>


<h1 class="display-1 text-center text-info">List Doctor </h1>
<table class="table table-dark w-50 mx-auto">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach ($s as $data) { ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['spiliz_name'] ?></td>
            <td> <a href="/hms/doctor/add.php?edit=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a></td>
            <td> <a href="/hms/doctor/list.php?delete=<?php echo $data['id'] ?>" onclick="return confirm('Are You Sure')" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>



</table>

<?php include '../shared/script.php' ?>