<?php

if (isset($_REQUEST['travel_mode'])) {
    save_search_results();
}


function save_search_results()
{
    if (isset($_REQUEST["travel_mode"])
        && isset($_REQUEST["origin"]) && isset($_REQUEST["username"]) &
        isset($_REQUEST["destination"]) && isset($_REQUEST["distance_in_kilo"]) &
        isset($_REQUEST["distance_in_mile"]) && isset($_REQUEST["duration_text"])
    ) {

        $username = $_REQUEST["username"];
        $travel_mode = $_REQUEST["travel_mode"];
        $in_kilo = $_REQUEST["distance_in_kilo"];
        $in_mile = $_REQUEST["distance_in_mile"];
        $origin = $_REQUEST["origin"];
        $destination = $_REQUEST["destination"];
        $duration_text = $_REQUEST["duration_text"];
        $values = "('$username','$travel_mode','$in_kilo','$in_mile','$origin',
                        '$destination','$duration_text')";
        $sql = "INSERT INTO search_results(
                        username,travel_model,distance_in_kilo,distance_in_mile,origin,
                        destination,duration_in_text) 
                        VALUES {$values}";
        $db = mysqli_connect("localhost", "root", "", "demo") or die ("Failed to connect");
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        header('Content-Type: application/json');
        if ($result) {
            echo json_encode(array("status" => "1"));
        } else {
            echo json_encode(mysqli_error($db));
        }

    }else{
        echo json_encode("missing input");

    }
}
/*
 * End of common.php
 */