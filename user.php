<?php
  @ob_start();
  session_start();
  if($_POST['submit']){
    $_SESSION['user']=$_POST['user'];
    $_SESSION['password']=$_POST['password'];
    /*$passwords = array('Abhishek'=>'2a838d082b4228c6437610ae773467d95eb8ed09'
                , 'Nilay'=>'tiwari2' ,'Adhip'=>'garg3', 'Gajendra'=>'meena4','Siddhartha'=>'srivastava5','Chitral'=>'gupta6','Suryansh'=>'agarwal7','Kalpraj'=>'chaudhari8','Akash'=>'singh9','Sharique'=>'md10');
    */
    $passwords = array('Abhishek'=>'2a838d082b4228c6437610ae773467d95eb8ed09'
                , 'Nilay'=>'e1d1264a698e3648fd7b41320495e192c6eb74f1' ,
                'Adhip'=>'c3240bc9273a7f63ac8c5ce1ab4a5cf70710c4f3',
                 'Gajendra'=>'b04217ccb37252f8d5149e49ce2c5cc654320e61',
                 'Siddhartha'=>'dbcb31dd59ec3b19eb0fe880af4f25bf52cf692a',
                 'Chitral'=>'70dd0f6670058add29bdafea350b2d5f02659829',
                 'Suryansh'=>'eeb6024bb515793d5593b281b8fc2e72fdbbcd09',
                 'Kalpraj'=>'bc67a895642753500295172d7a694c4bda984464',
                 'Akash'=>'0dfbc5c315fc10e981cb1629cda5e7f4c1edcf91',
                 'Sharique'=>'418fd5acf538e0668d4db90c7e27d8b837d661fb');

    if ($passwords[$_SESSION['user']]==sha1($_SESSION['password'])) {
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <script src="js/lib/p5.js"></script>
      	<script src="js/lib/p5.dom.js"></script>
        <link rel="shortcut icon" href="images/other/hall12.png" type="image/x-icon" />
        <title>Hall 12</title>
        <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Akash kumar singh">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      </head>
      <body>
        <form id="a" method="post" action="nobody.php">
          <input type="text" name="title" placeholder="Title" id="tit">
          <textarea rows="4" cols="50" name="message" form="a" id="txt">Message</textarea>
          <input id="submit" type="submit" value="Submit">
        </form>
      </body>

      </html>


      <?php
    }else {
      header('Location:http://localhost/web_hall12/login.php');
    }
  }else {
    header('Location:http://localhost/web_hall12/login.php');
}
 ?>
