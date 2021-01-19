

<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        
           <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="Frontpage Of Job Listings"/>
  <meta name="description" content= "Lucrative Offers Awaiting Your Approval"/>
  <meta name="author" content="roqit-t.com" />


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="shortcut icon" type="jpg/png" href='images/roqit-t.png'>
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Alata">
          <link rel="stylesheet" href="styles.css">
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
        <link rel="stylesheet" href="../package/swiper-bundle.min.css">
<title>roqit-t | Home</title>

</head>
<body>



<?php


// display a message to the user to display the keywords
echo '<div class="right"><b><u>'.number_format($result_count).'</u></b> results found</div>';
echo 'Your search for <i>"'.$display_words.'"</i><hr />';

?>


<div class="row row-cols-1 row-cols-md-3">
  <?php

    require_once('FILE.php');
    $result = $conn->prepare("SELECT * FROM search");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
  ?>

<div class="card" style="width: 18rem;">
      <img src='<?php echo $row['']; ?>' class="card-img-top" alt="...">
      <div class="card-body">
       <center> <h2 class="card-title">
         <?php echo $row['keywords']; ?>
       </h2></center>
        <center> <p class="card-title">
         <?php echo $row['desc']; ?>
       </p></center>
       <center> <p class="card-title">
         <?php echo $row['url']; ?>
       </p></center>
       
        <br>
        
      </div>
    </div>
    
    <?php } ?>
</div>
</body>
</html>
