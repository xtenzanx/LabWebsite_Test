<?php
header('Content-Type:text/html;charset=utf-8');

require_once("JSONDB.php");
use Jajo\JSONDB;
$json_db = new JSONDB( __DIR__ );

if( isset($_POST['gm_date']) && isset($_POST['gm_name']) && isset($_POST['gm_topic']) ){

    $json_db->insert( 'data/presentationHistory.json', 
        [ 
            'date' => $_POST['gm_date'], 
            'name' => $_POST['gm_name'], 
            'topic' => $_POST['gm_topic']
        ]
    );

}

header ("Location:  index.php");
?>