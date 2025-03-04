<?php

include "connect.php";

$sql = "SELECT * FROM employee";

$stmt = $conn->query($sql);

$result = $stmt->fetch_all(MYSQLI_ASSOC);