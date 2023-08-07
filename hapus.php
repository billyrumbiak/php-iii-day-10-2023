<?php
require_once("conn.php");
require_once("detail.php");

$id = $_GET['id'];

$query = "DELETE FROM `makanan` WHERE id_makanan = $id";

$data = mysqli_query($conn,$query);

var_dump($query);

header("Location:index.php");