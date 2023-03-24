<?php
  //Including the files
  include( 'includes/database.php' );
  include( 'includes/header.php' );
?>
<h2>Sale</h2>
<div class="itemlist">
<?php

  //Sql query for fetching the data where sale is more than 0
  $query= "SELECT * FROM Items WHERE Sale>0 ORDER BY Item_id";
  $result = mysqli_query($connect,$query)
  or die(mysqli_error($connect));

  //fetching the data while it exists
  while($record = mysqli_fetch_assoc($result)){
    //getting only the items that are on sale
    if($record['Sale']>0){
      echo'<div class="item">';
      $CaCurrency="CA$";
      $discount="% Discount";
      //Displaying the Data
      echo '<img src="'.$record['Img'].'" alt="'.$record['Name'].'" id="itemImg">';
      echo '<p>'.$record['Name'].'</p>';
      echo '<p class="sale dis">'.$CaCurrency.$record['Price'].'</p>';
      echo '<p class="sale" id="saleamount">'.$record['Sale'].$discount.'</p>';
      //Calculating the reduced price
      $NewPrice=$record['Price'] - ($record['Price'] * $record['Sale'] / 100);
      echo '<p>'.$CaCurrency.$NewPrice.'</p>';
      //Displaying the rating in form of stars
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