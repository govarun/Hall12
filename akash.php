
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <link rel="shortcut icon" href="images/other/hall12.png" type="image/x-icon" />
     <title>Guest room</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Hall of Residence 12 guest room." />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="HTML,CSS,JavaScript">
     <meta name="author" content="Akash kumar singh">
 </head>
 <body>
   <?php
     if(isset($_POST['submit'])){
     $msg="yo";
     mail("akashks@iitk.ac.in","My subject",$msg);
     echo $msg;
   }
    ?>
   <form action='#' method="post">
     <input type="submit" name="submit">
   </form>
 </body>
