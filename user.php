<?php
  @ob_start();
  if($_POST['submit']){
    $user=$_POST['user'];
    $password=$_POST['password'];
    $passwords = array('akashks'=>'akashks');
    $c=0;
    foreach ($passwords as $key => $value) {
      if ($user==$key && $password==$value) {
        $c=1;
      }
    }
    if($c){
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
        <form id="a">
          <input type="text" name="title" placeholder="Title" id="tit">
          <textarea rows="4" cols="50" name="message" form="a" id="txt">Message</textarea>
          <button id="submit" type="button" >Submit</button>
        </form>
      </body>
      <script>
      let tit,txt,sub;
      let db;
      function setup() {
        var config = {
          apiKey: "AIzaSyB09BJHHUiPtfTmsGyQ785q1-7MzO1PVTY",
          authDomain: "my-project-1496533920980.firebaseapp.com",
          databaseURL: "https://my-project-1496533920980.firebaseio.com",
          projectId: "my-project-1496533920980",
          storageBucket: "my-project-1496533920980.appspot.com",
          messagingSenderId: "920752506149"
        };
        firebase.initializeApp(config);
        db=firebase.database();
        sub=select('#submit');
        sub.mousePressed(subm);
        txt=select('#txt');
        tit=select('#tit');
      }

      function subm() {
        let ref=db.ref('hec-message');
        let data={
          user:<?php echo "'".$user."'" ?>,
          title:tit.value(),
          text:txt.value()
        }
        ref.push(data);
      }
      </script>
      </html>

      <?php
    }else {
      header('Location:http://localhost/hec-message/login.php');
    }
  }else {
    header('Location:http://localhost/hec-message/login.php');
  }
 ?>
