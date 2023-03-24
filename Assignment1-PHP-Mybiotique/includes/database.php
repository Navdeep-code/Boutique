<?php
//Database Connectivity
$connect = mysqli_connect( 
    "sql307.epizy.com", //host 
    "epiz_33366024", //username
    "ZYOSptvv5PEniQ8", //password
    "epiz_33366024_Boutique" //database
);
//ConnectionError
if(mysqli_connect_errno())
{
  echo mysqli_connect_errno();
  exit();
}
mysqli_set_charset( $connect, 'UTF8' );
