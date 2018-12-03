<?php
header('Content-Type:text/html;charset=utf-8');

require_once('Git.php');

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

    sleep(1);

    echo Git::get_bin();

    echo '-----';
    echo __DIR__;

    $repo = Git::open( __DIR__ );  // -or- Git::create('/path/to/repo')

    $repo->add('.');
    // $repo->commit('GroupMeeting data update');
    // $repo->push('origin', 'master');

    // system('git add data/presentationHistory.json', $out);
    // var_dump($out);
    // print_r($out);
    // exec('git commit -m "GroupMeeting data update"', $out, $r);
    // var_dump($out);
    // echo $r;
    // exec("git push", $out);
    // print_r('git push => '.$out);
}

// header ("Location:  index.php");
?>