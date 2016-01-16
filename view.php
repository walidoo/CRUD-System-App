<?php require_once './includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = new DB();
$conn->getCon();

$sql = "indfdflk";
$result = $conn->query($sql);
$dataResult = array("dataarray" => array());
while ($row = $result->fetch_assoc()) {
    $dataResult["dataarray"][] = $row;
}

$conn->close();

json_encode($dataResult);

echo "<pre>";
print_r($dataResult);
echo "</pre>";
?>