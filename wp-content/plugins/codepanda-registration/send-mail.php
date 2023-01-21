<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
if(isset($_POST['sendmail'])){
    global $wpdb;
    $cpid     = $_POST['cpid'];
    $sql = "SELECT * FROM `{$wpdb->prefix}cpid` WHERE cpid = '$cpid'";
    $check = $wpdb->get_results($sql);   
    if ($check){
        $cpid               = esc_attr($_POST['cpid']);
        $name               = esc_attr($_POST['name']);
        $email              = sanitize_email($_POST['email']);
        $phoneno            = esc_attr($_POST['phoneno']);
        $course             = esc_attr($_POST['course']);
        $coursefees         = esc_attr($_POST['coursefees']);
        $totalfees          = esc_attr($_POST['totalfees']);
        $paidfees           = esc_attr($_POST['paidfees']);
        $remainingfees      = esc_attr($_POST['remainingfees']);
        $headers            = array('Content-Type: text/html; charset=UTF-8');
        // $attachments        = array( WP_CONTENT_DIR . '.xyz.pdf' );
        $sql3 = "INSERT INTO `{$wpdb->prefix}fees` (cpid, name, email, phoneno, course, coursefees, totalfees, paidfees ,remainingfees) VALUES ('$cpid','$name','$email','$phoneno','$course','$coursefees','$totalfees','$paidfees','$remainingfees')";
        $result = $wpdb->query($sql3);
        // var_dump($result);
        if($result){
            // var_dump($email);
            ob_start();
            include "mail-template.php";
            $msg = ob_get_clean();
            wp_mail($email,"Thanks For Registration",$msg, $headers);
            echo "<script>alert('Your Mail Has Been Sent')</script>";
        }
        else{
            echo "Some Errors Occured To Save Data In DataBase..";
        }
    }
    else{
        echo "<script>alert('Invalid CodePanda Id')</script>";
    }            
}
?>
<div class="container">
<div class="content">
    <div class="right-side">
    <h2>Send Mail To Student After Registration</h2>
    <form method="post" enctype="multipart/form-data">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="" class="mr">Code Panda Passkey</label></th>
                    <td><input type="text" name="cpid" placeholder="Enter Code Panda Passkey" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Name</label></th>
                    <td><input type="text" name="name" placeholder="Enter Your Name" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Email</label></th>
                    <td><input type="email" name="email" placeholder="Enter Your Mail" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Phone Number</label></th>
                    <td><input type="number" name="phoneno" placeholder="Enter Your Number" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Course</label></th>
                    <td><input type="text" name="course" placeholder="Course Name" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Course Fees</label></th>
                    <td><input type="text" name="coursefees" placeholder="Course fees" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Total Amount</label></th>
                    <td><input type="text" name="totalfees" placeholder="Total Amount" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Paid Amount</label></th>
                    <td><input type="text" name="paidfees" placeholder="Paid Amount" class="center regular-text" size="20" required></td>
                </tr>
                <tr>
                    <th scope="row"><label for="" class="mr">Remaining Amount</label></th>
                    <td><input type="text" name="remainingfees" placeholder="Remaning Amount" class="center regular-text" size="20" required></td>
                </tr>
            </tbody>
        </table>
        <br>
        <input class="button" type="submit" value="Send Mail" name="sendmail">
    </form>
</div>
</div>
</div>