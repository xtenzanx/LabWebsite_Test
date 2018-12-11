<?php
header('Content-Type:text/html;charset=utf-8');

require_once('lib/JsonDB.php');
require_once('lib/Git.php');

if( isset($_POST['gm_date']) && isset($_POST['gm_name']) && isset($_POST['gm_topic']) ){

    $json_db = new JsonTable(__DIR__."/data/presentationHistory.json", true);
    $json_db->insert(array('date' => $_POST['gm_date'], 'name' => $_POST['gm_name'], 'topic' => $_POST['gm_topic']));

    sleep(0.5);

    // $repo = Git::open( __DIR__ );  // -or- Git::create('/path/to/repo')
    // $repo->add('data/presentationHistory.json');
    // $repo->commit('GroupMeeting data update');
    // $repo->run('config user.email "labsesdt@gmail.com"'); 
    // $repo->run('config user.name "SELab"');
    // $repo->run('config user.password "password"');
    // $repo->push('origin', 'master');
}

header ("Location:  index.php");
?>