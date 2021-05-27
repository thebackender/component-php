<?php
    #namespaces uses for group specific classes
    include 'group1.php';
    include 'group2.php';
    use Data\Table as Database;
    use Thing\Table as Chair;
    $data = new Database();
    $chair = new Chair();
    
    $data->title = "Udata";
    $data->rows = 16;
    $data->message();
    echo "<br>";
    $chair->get_color();
?>