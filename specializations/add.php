<?php include '../shared/head.php';
include '../shared/nav.php';
include '../genral/env.php';
include '../genral/functions.php';
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $insert="INSERT INTO `specializations` VALUES (NULL,'$name')";
    $i=mysqli_query($conn,$insert);
    testMessage($i,"Insert Specializ");
}
$name='';
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `specializations` WHERE  id=$id";
    $su = mysqli_query($conn, $select);
    $data=mysqli_fetch_assoc($su);
    $name=$data['name'];
    
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $update = "UPDATE `specializations` SET `name`='$name' WHERE id=$id";
        $u = mysqli_query($conn, $update);
        header("location:/hms/specializations/list.php");
    }
}
?>

<?php if($update): ?>
<h1 class="display-1 text-center text-info">UPdate specializ </h1>
<?php   else: ?>
<h1 class="display-1 text-center text-info">ADD specializ </h1>
<?php endif; ?>
<div class="container col-md-6 text-center">
    <div class="card  bg-dark text-light">
        <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label >Speciliz Name</label>
                <input type="text" value="<?php echo $name ?>" name="name"  class="form-control" >
            </div>
            <?php if($update): ?>
            <button name="update" class="btn btn-primary btn-block w-50 mx-auto">Update</button>
            <?php   else: ?>
            <button name="send" class="btn btn-info btn-block w-50 mx-auto">Add</button>
            <?php endif; ?>
        </form>
        </div>

    </div>
</div>

<?php include '../shared/script.php' ?>