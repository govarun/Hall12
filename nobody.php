<?php
@ob_start();
session_start();
if ($_POST['message']) {

 function send_notification ($message)
 {
     $url = 'https://fcm.googleapis.com/fcm/send';
     $fields = array(
           "to"=> "/topics/all",
          'data' => $message
         );
     $headers = array(
         'Authorization:key = AAAA1mEgRSU:APA91bGmw8wyWceRSmGYapXsAKrum9Ayf2QoyJfGeAmt4tMyvODZ1ytS7r6HL5HCwh1VroDVL23j_yWCikzc4i8AUoPqnEuLGlNGjM4mKKfeHFkQM3q1WMNaNHZD_z2nlgmww-06LZc3',
         'Content-Type: application/json'
         );
    $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
      $result = curl_exec($ch);
      if ($result === FALSE) {
          die('Curl failed: ' . curl_error($ch));
      }
      curl_close($ch);
      return $result;
 }
 $message = array("message" => $_POST["message"], "title"=>$_POST["title"]);
 $message_status = send_notification($message);
 echo $message_status;
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
<script>
    let db;

    let config = {
    apiKey: "AIzaSyB09BJHHUiPtfTmsGyQ785q1-7MzO1PVTY",
    authDomain: "my-project-1496533920980.firebaseapp.com",
    databaseURL: "https://my-project-1496533920980.firebaseio.com",
    projectId: "my-project-1496533920980",
    storageBucket: "my-project-1496533920980.appspot.com",
    messagingSenderId: "920752506149"
  };
  firebase.initializeApp(config);
  db=firebase.database();
  let ref=db.ref('hec-message');
  let data={
    user:<?php echo "'".$_SESSION['user']."'" ?>,
    title:<?php echo "'".$_POST['title']."'" ?>,
    text:<?php echo "'".$_POST['message']."'" ?>
  }
  ref.push(data);
</script>
<?php
}else{
    header('Location:http://localhost/web_hall12/login.php');
}
 ?>
