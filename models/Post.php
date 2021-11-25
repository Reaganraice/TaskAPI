<?php

include_once '../../config/Database.php';

class Post {
    // DB connection
    private $conn;
    private $table = 'posts';

    // Post Properties
    public $id;
    public $device;
    public $time;
    public $snr;
    public $station;
    public $data;
    public $avgSnr;
    public $lat;
    public $lng;
    public $rssi;
    public $seqNumber;

    // Constructor with DB
    public function __construct() {
        return $this->conn = $db;
    }


    // Get Posts 
    public function read() {
        var_dump('asd'); die;
        // Create Query
        $query =
            'SELECT 
                p.id, 
                p.device, 
                p.time, 
                p.snr, 
                p.station, 
                p.data, 
                p.avgSnr, 
                p.lat, 
                p.lng, 
                p.rssi, 
                p.seqNumber
            FROM
                ' . $this->table .'p ';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->excecute();
    }
}