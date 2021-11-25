<?php

// Headers
header('Access-Control-Allow-Origin: *');  
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';
var_dump($table ); die;
// instantiate DB and Connection
$database = new Database();

$db = $database->connect();

// instantiate post object
$post = new Post($db);
var_dump('asd'); die;
// post query
$result = $post->read();


// Get row count
$num = $result->rowCount();

// Check if any post
if($num > 0) {

    $post_arr = array();
    $post_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $post_item = array(
            'id' => $id,
            'device' => $device,
            'time' => $time,
            'snr' => $snr,
            'station' => $station,
            'data' => $data,
            'avgSnr' => $avgSnr,
            'lat' => $lat,
            'lng'=> $lng,
            'rssi' => $rssi,
            'seqNumber' => $seqNumber
        );

        // Push data
        array_push($post_arr['data'], post_item);
    }

    // Turn to Json & Output
    echo json_encode($post_arr, true);
    var_dump($post_arr); die;

}else {
    // No posts
    echo json_encode(
        array('message' => 'No Post Found')
    );
}

