<?php include '../shared/head.php';
include '../shared/nav.php';
include '../genral/env.php';
include '../genral/functions.php';

if(isset($_POST['add'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $speciliz=$_POST['specilizID'];
    $insert="INSERT INTO `doctor` VALUES (NULL,'$name','$email',$speciliz)";
    $i=mysqli_query($conn,$insert);
    testMessage($i,"Insert Doctor");
}
$select = "SELECT * FROM `specializations`";
$s = mysqli_query($conn, $select);

$name='';
$email='';
$specilizID='';
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `doctor` WHERE  id=$id";
    $su = mysqli_query($conn, $select);
    $data=mysqli_fetch_assoc($su);
    $name=$data['name'];
    $email=$data['email'];
    $specilizID=$data['specilization_id'];
    
    if (isset($_POST['update'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $speciliz=$_POST['specilizID'];
        $update = "UPDATE `doctor` SET `name`='$name', `email`='$email', specilization_id=$speciliz WHERE id=$id";
        $u = mysqli_query($conn, $update);
        header("location:/hms/doctor/list.php");
    }
}
?>


<?php if($update): ?>
<h1 class="display-1 text-center text-info">UPdate Doctor </h1>
<?php   else: ?>
<h1 class="display-1 text-center text-info">ADD Doctor </h1>
<?php endif; ?>

<div class="container col-md-6 text-center">
    <div class="card  bg-dark text-light">
        <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label >Name </label>
                <input name="name" value="<?php echo $name ?>" type="text"  class="form-control" >
                <label >Email</label>
                <input name="email"type="text"  value="<?php echo $email ?>" class="form-control" >
                <label >specilization</label>
                <select name="specilizID" class="form-control">
                <?php foreach($s as $data){ ?>
                    <option value="<?php echo $data['id'] ?>" > <?php echo $data['name'] ?></option>
                <?php }?>
                </select>
            </div>
            <?php if($update): ?>
            <button name="update" class="btn btn-primary btn-block w-50 mx-auto">Update</button>
            <?php   else: ?>
            <button name="add" class="btn btn-info btn-block w-50 mx-auto">Add</button>
            <?php endif; ?>
        </form>
        </div>

    </div>
</div>

<?php include '../shared/script.php' ?>