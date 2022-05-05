<?php include '../shared/head.php';
include '../shared/nav.php';
include '../genral/env.php';
$select = "SELECT * FROM `specializations`";
$s = mysqli_query($conn, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delet = "DELETE FROM `specializations` WHERE id=$id";
    $d = mysqli_query($conn, $delet);
    header("location:/hms/specializations/list.php");
}
?>


<h1 class="display-1 text-center text-info">List specializations </h1>

<table class="table table-dark w-50 mx-auto">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach ($s as $data) { ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td> <a href="/hms/specializations/add.php?edit=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a></td>
            <td> <a href="/hms/specializations/list.php?delete=<?php echo $data['id'] ?>" onclick="return confirm('Are You Sure')" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>



</table>


<?php include '../shared/script.php' ?>