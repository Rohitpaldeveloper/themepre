<?php
if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
if(isset($_POST['passkey'])){
    global $wpdb;           
    $cpid = openssl_random_pseudo_bytes(3);
    //Convert the binary data into hexadecimal representation.
    $cpid = bin2hex($cpid);
    $sql3 = "INSERT INTO `{$wpdb->prefix}cpid` (cpid) VALUES ('$cpid')";
    $result = $wpdb->query($sql3);
    // var_dump($result);
    if($result){
        echo "<script>alert('Your Passkey Is :  CP_ $cpid')</script>";
        // echo "<script>Swal.fire('Congratulations','Your Enrollment No Is : CP_$cpid','success')</script>";
    }
    else{
        echo "<script>alert('Error')</script>";
    }            
}
?>
<h2>Here You Can Generate Passkey In One Tap</h2>
<form action="" method="post">
    <button type="submit" class="button-primary" name="passkey" value="Register">Generate New Passkey</button>
</form>