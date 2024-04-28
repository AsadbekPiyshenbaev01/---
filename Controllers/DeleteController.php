<?php
$data = json_decode(file_get_contents("../Models/data.json"), 1);
if (isset($_GET["delete_id"])) {
    $new = [];
    foreach ($data as $v) {
        if ($_GET["delete_id"] != $v["id"]) {
            array_push($new, $v);
        }
    }
    file_put_contents('../Models/data.json', json_encode($new));
    header("location: ../");
}


?>