<?php
if(isset($_POST['seres'])){
$name = $_POST['seres'];
$list = array();
$each = array();
$connection = mysqli_connect("localhost", "root", "","prof_detail");
$query = mysqli_query( $connection,"SELECT uid, name FROM users WHERE name LIKE '%$name%' ");
$rows = mysqli_num_rows($query);

	while($row = $query->fetch_assoc()) {
        $each['uid'] = $row["uid"];
        $each['name'] = $row["name"];
        array_push($list, $each);
    }
    echo json_encode($list);
}

if(isset($_POST['name'])){
$name = $_POST['name'];

$connection = mysqli_connect("localhost", "root", "","prof_detail");
$query = mysqli_query( $connection,"DELETE FROM users WHERE uid= '$name' ");
echo "Record deleted Successfully";


}
?>