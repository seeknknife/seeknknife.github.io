<?php

$con=new mysqli('sql110.epizy.com','epiz_32973921','A6FmXrBvGI0O','epiz_32973921_XXX');
if($con){
    echo "Connected Successfully";
}else{
    die(mysqli_error());
}

// $sql="select count(*) as total from `crud`";
// $result=mysqli_query($con,$sql);
// $data=mysqli_fetch_assoc($result);
?>