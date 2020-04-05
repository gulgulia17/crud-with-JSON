<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('test.json');
    $all = json_decode($all, true);
    $jsonfile = $all["details"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["details"][$id]);
        $all["details"] = array_values($all["details"]);
        file_put_contents("test.json", json_encode($all));
    }
    header("Location: all.php");
}

