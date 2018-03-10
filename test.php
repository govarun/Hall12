<?php
$passwords = array('Abhishek'=>'singh1', 'Nilay'=>'tiwari2' ,'Adhip'=>'garg3', 'Gajendra'=>'meena4','Siddhartha'=>'srivastava5','Chitral'=>'gupta6','Suryansh'=>'agarwal7','Kalpraj'=>'chaudhari8','Akash'=>'singh9','Sharique'=>'md10');
    if(!$passwords['Abhishek']){
        echo "<script type='text/javascript'>alert('M');</script>";
        header('Location:http://localhost/web_hall12/login.php');
    }else {
            echo $passwords['Abhishek'];
    }

?>
