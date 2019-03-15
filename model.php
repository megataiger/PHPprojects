 <?php
$link = mysqli_connect("127.0.0.1","student","student","student");

$menu = print_r(mysqli_fetch_array(mysqli_query ($link, 'select * from 321_Nemolyaev_CMS ')), 1);
 $body = 'So, hello';
 ?>
