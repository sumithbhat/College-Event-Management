<?php
$m = new MongoDB\Driver\Manager("mongodb+srv://sharan:jbsharan@cluster0-uvaui.mongodb.net/test");
$name=$_POST["Name"];
$email=$_POST["Email"];
$department=$_POST["department"];
$usn=$_POST["USN"];
$sem=$_POST["SEM"];

    $bulk = new MongoDB\Driver\Bulkwrite;
    $document = ['Name' =>$name,'Email' =>$email,'Department'=>$department,'USN'=>$usn,'SEM'=>$sem
];
    $_id1 = $bulk->insert($document);
    var_dump('THANKS FOR REGISTERING');
    $m = new MongoDB\Driver\Manager('mongodb+srv://sharan:jbsharan@cluster0-uvaui.mongodb.net/test');
    $result = $m->executeBulkWrite('cultural.fashion', $bulk);

 ?>
