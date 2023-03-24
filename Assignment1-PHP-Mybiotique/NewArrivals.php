<?php
  //Including the files
  include( 'includes/database.php' );
  include( 'includes/header.php' );
?>
<h2>New Arrivals</h2>
<div class="itemlist">
<?php
//Sql query for fetching the data
  $query= "SELECT * FROM Items WHERE Sale=0 ORDER BY Item_id";
  $result = mysqli_query($connect,$query)
  or die(mysqli_error($connect));

//fetching the data while it exists
 while($record = mysqli_fetch_assoc($result)){
  //getting only the items that are not on sale
  if($record['Sale']==0){
    echo'<div class="item">';
    $CaCurrency="CA$";
    //Displaying the data
    echo '<img src="'.$record['Img'].'" alt="'.$record['Name'].'" id="itemImg">';
    echo '<p>'.$record['Name'].'</p>';
    echo '<p>'.$CaCurrency.$record['Price'].'</p>';
    //Displaying the rating in the form of stars
    $n=0;
    echo'<ul id="rating">';
    while($n < $record['Rating']){
      echo'<li> &#9733; </li>';
      $n++;
    }
    echo '</ul>';
    echo'</div>';
  }
 }

?>
</div>
<?php
  //Including the files
  include( 'includes/footer.php' );      
?>