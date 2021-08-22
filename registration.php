<?php
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
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
    $m = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $result = $m->executeBulkWrite('mine.name', $bulk);

 ?>
