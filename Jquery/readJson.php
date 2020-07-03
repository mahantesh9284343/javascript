<?php 
    if(isset($_POST["jquerypost"])){
        echo "This is POST respond";
    }
    if(isset($_GET["jqueryget"])){
        echo "This is GET respond";
    }
    
?>


<?php
    $emps = json_decode($_POST['emps']);
    print_r($emps);
?>

<?php
    $emps = json_decode($_POST['emps']);
    foreach( $emps as $emp){
        print_r($emp->name);

    }
?>

