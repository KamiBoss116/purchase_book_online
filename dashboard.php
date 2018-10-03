<?php
require_once("connection.php");

$sql = "SELECT * FROM books";
$result2 = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <title>eRozgaar Shopping Site</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
  .col-md-12
  {
    background-color: #01FCB4;
    margin-top: 20px;
      font-family: "Comic Sans MS", cursive, sans-serif;


  }
  body
  {
    background-image: url("bgd.jpg");
  }
  .thumbnail>img {
    display: block;
    width: 100%;
    height: 300px; //change as per your requirement }
    .price
    {
      color: #FC0101;
    }
    .title
    {
      font-family: "Arial Black", Gadget, sans-serif;
    }
  </style>
  </head>

  <body>
  	<div class="container">
      <div class="row">
  <div class="col-md-12">
     <center><h1>eRozgaar Books Purchasing Site</h1></center>
      </div>
    </div>
<br>
<center><p><a href="addbook.php" class="btn btn-success btn-lg" role="button">Add Book</a> </p></center>





        <?php
        
          
          while ($row = mysqli_fetch_array($result2)) {

           
          
           
            echo '<div class="row">';
            echo '<div class="col-lg-4 col-md-6 mb-4">';
               echo '<div class="thumbnail">';
                echo '<img src="img/'.$row['book_img'].'"  >';
                echo '<div class="caption">';
                  echo '<h3 class="title">Title : '.$row['book_title'].'</h3>';
                     echo '<h4 class="price">Rs : '.$row['book_price'].'/-</h4>';
                     echo '<h4>Author : '.$row['book_auth'].'</h4>';
                     echo '<p>'.$row['book_des'].'</p><hr>';

                   echo '<center><p><a href="#" class="btn btn-primary" role="button">Order Now</a> </p></center>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            


        }
        ?>



</div>


</div>
  </body>

</html>
