<?php
  //Including the files
  include( 'includes/database.php' );
  include( 'includes/header.php' );
?>
<h2>Trending</h2>
<div class="itemlist">
<?php
//Sql query for fetching the data
  $query= "SELECT * FROM Items ORDER BY Item_id";
  $result = mysqli_query($connect,$query)
  or die(mysqli_error($connect));

//fetching the data while it exists
  while($record = mysqli_fetch_assoc($result)){
    echo'<div class="item">';
    //Displaying the data
    echo '<img src="'.$record['Img'].'" alt="'.$record['Name'].'" >';
    echo '<p>'.$record['Name'].'</p>';
    //Check if the item is on sale
    $CaCurrency="CA$";
    $discount="% Discount";
    if($record['Sale']>0){
      echo '<p class="sale dis">'.$CaCurrency.$record['Price'].'</p>';
      echo '<p class="sale" id="saleamount">'.$record['Sale'].$discount.'</p>';
      //Calculating the price after discount and displaying it
      $NewPrice=$record['Price'] - ($record['Price'] * $record['Sale'] / 100);
      echo '<p>'.$CaCurrency.$NewPrice.'</p>';
    }else {
      //Display just the regular price
      echo '<p class="sale">'.$CaCurrency.$record['Price'].'</p>';
    }
    //Display stars for the ratings
    $n=0;
   echo'<ul id="rating">';
   while($n < $record['Rating']){
      echo'<li> &#9733; </li>';
      $n++;
   }
   echo '</ul>';
   echo'</div>';
 }

?>
</div>
<?php
  //Including the files
  include( 'includes/footer.php' );     
?>