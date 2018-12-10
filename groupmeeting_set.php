<?php
header('Content-Type:text/html;charset=utf-8');

require_once('JsonDB.php');
require_once('Git.php');

if( isset($_POST['gm_date']) && isset($_POST['gm_name']) && isset($_POST['gm_topic']) ){

    $json_db = new JsonTable(__DIR__."/data/presentationHistory.json", true);
    $json_db->insert(array('date' => $_POST['gm_date'], 'name' => $_POST['gm_name'], 'topic' => $_POST['gm_topic']));

    sleep(0.5);

    $repo = Git::open( __DIR__ );  // -or- Git::create('/path/to/repo')

    $repo->add('data/presentationHistory.json');
    $repo->commit('GroupMeeting data update');
    $repo->run('config user.email "labsesdt@gmail.com"'); 
    $repo->run('config user.name "SELab"');
    $repo->run('config user.password "password"');
    $repo->push('origin', 'master');
    
    

    // system('git add data/presentationHistory.json', $out);
    // var_dump($out);
    // print_r($out);
    // exec('git commit -m "GroupMeeting data update"', $out, $r);
    // var_dump($out);
    // echo $r;
    // exec("git push", $out);
    // print_r('git push => '.$out);
}

header ("Location:  index.php");
?>