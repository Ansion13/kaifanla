
<?php
header('Content-Type:application/json');

@$id = $_REQUEST['id'];
if(empty($id))
{
    echo '[]';
    return;
}

$output = [];

$conn = mysqli_connect('https://github.com/Ansion13/kaifanla','root','','kaifanla');
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);

$sql = "SELECT did,name,price,img_lg,detail,material FROM kf_dish WHERE did=$id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
if(empty($row))
{
    echo '[]';
}
else
{
    $output[] = $row;
    echo json_encode($output);
}

?>
