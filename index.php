<?php include './shared/head.php';
include './shared/nav.php';
include './genral/env.php';

$select = "SELECT * FROM them";
$s = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($s);
$numOfColor = $row['color'];

if (isset($_GET['change'])) {
    if ($numOfColor == '1') {
        $update = "UPDATE `them` SET `color`='2' ";
        $u = mysqli_query($conn, $update);
        header('location:/hms/index.php');
    }else{
        $update = "UPDATE `them` SET `color`='1' ";
        $u = mysqli_query($conn, $update);
        header('location:/hms/index.php');
    }
}
?>

<div class="home">
    <h1 class="display-1 text-center text-info">Welcome To Me Page </h1>
</div>
<?php include './shared/script.php' ?>