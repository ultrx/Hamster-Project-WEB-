<?php 
//login check and validation
function check_login($con){

   if(isset($_SESSION['user_id'])){
       $id = $_SESSION['user_id'];
       $query = "SELECT * from users WHERE user_id = '$id' LIMIT 1";

       $result = mysqli_query($con, $query);
       if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
       }
   }
   //redirect to login if validation fails
   header("Location: login-form.php");
   die;
}
//random user_id generator
function random_number($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for($i=0; $i < $len ; $i++){

        $text = rand(0, 9);
    }
    return $text;
}

?>
<!-- pagereload -->

