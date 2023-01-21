<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
function cprg_process_woofile($files, $post_id=0){

    // var_dump($files);

  require_once(ABSPATH . "wp-admin" . '/includes/image.php');
  require_once(ABSPATH . "wp-admin" . '/includes/file.php');
  require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    $attachment_id = media_handle_upload($files, $post_id);

 $attachment_url = wp_get_attachment_url($attachment_id);
  add_post_meta($post_id, '_file_paths', $attachment_url);

    $attachment_data = array(
    'ID' => $attachment_id,
    'post_excerpt' => ''
  );

  wp_update_post($attachment_data);

  return $attachment_id;

}
// Validation For Empty Name
    // if ( empty ($_POST["userName"])){
    // $errMsg = "This field is .";
    // }
    // else{
    // $name = $_POST["userName"];
    // }
// 
if(isset($_POST['register'])){
    global $wpdb;
    $cpid     = $_POST['cpid'];
    $sql = "SELECT * FROM `{$wpdb->prefix}cpid` WHERE cpid = '$cpid'";
    $check = $wpdb->get_results($sql);    
    if ($check){
        $name               = esc_attr($_POST['userName']);
        $phoneno            = esc_attr($_POST['phoneno']);
        $email              = sanitize_email($_POST['email']);
        $address            = esc_attr($_POST['address']);
        $course             = esc_attr($_POST['course']);
        $university         = esc_attr($_POST['university']);
        $reference          = esc_attr($_POST['reference']);
        $counselor          = esc_attr($_POST['counselor']);
        $qualification      = esc_attr($_POST['qualification']);
        $doj                = $_POST['doj'];
        $yop                = $_POST['yop'];
        $mentor             = esc_attr($_POST['mentor']);
        $timing             = $_POST['timing'];
        $cpid               = esc_attr($_POST['cpid']);
        // 
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "./feesimg/" . $filename;
        // 
        // var_dump($_FILES);
        $imgid = cprg_process_woofile("uploadfile");
        if($imgid){
            $sql2 = "INSERT INTO `{$wpdb->prefix}codepanda` (name, course, phoneno, email, address, university, reference, counselor, qualification, doj, yop, mentor, timing, cpid, filename) VALUES ('$name','$course','$phoneno','$email','$address','$university','$reference','$counselor','$qualification','$doj','$yop','$mentor','$timing','$cpid','$imgid')";
            // var_dump($sql2);
            $result = $wpdb->query($sql2);
            if($result){
                echo "<script>alert('Your Enrollment Number Is :  CP_ $cpid')</script>";
            }
            else{
                echo "Some Errors Occured To Save Data In DataBase..";
            }            
        }
        else{
            echo "Invalid Img";
        }
    }
    else{
        // echo "Invalid CodePanda Id";
        echo "<script>alert('Invalid CodePanda Id')</script>";
    }

}
    
?>
<div id="abc">
    <!-- <nav> -->
        <a href="https://codepanda.in">
        <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/logo-2.png" alt="LOGO" width="210px" height="72px" style="margin-top:10px;">
        </a>
        <!-- <ul>
            <li><a href="https://codepanda.in">Home</a></li>
        </ul> -->
    <!-- </nav> -->
</div>
<h2>Welcome In CodePanda Academy 100% job oriented Online Training with real time project work to gain practical hands on experience using cloud test lab.</h2>
  <div class="container">
    <div class="form">
      <div class="btn">
        <h2 class="registerBtn">Enrollment/Register</h2>
      </div>
      <form class="signUp" method="post" name="myForm" onsubmit="return isEmpty()" enctype="multipart/form-data">
        <div class="formGroup">
            <input type="text" name="cpid" id="cpid" onInput="checkform()" placeholder="CodePanda Passkey *" autocomplete="off" class="regular-text" required>
        </div>
        <div class="formGroup">
            <input type="text" name="userName" id="userName" onInput="checkform()" placeholder="Name *" autocomplete="off"  class="regular-text">
        </div>
        <div class="formGroup">
          <input type="tel" name="phoneno" id="number" onInput="checkform()" placeholder="Number *" pattern="[0-9]{10}" class="regular-text" >
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email *" onInput="checkform()" name="email" autocomplete="off"   class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" name="address" onInput="checkform()" placeholder="Address *" class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" name="university" onInput="checkform()" placeholder="College Name *"  class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" name="qualification" onInput="checkform()" placeholder="Qualification *"  class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" id="yop" name="yop" onInput="checkform()" class="center regular-text" placeholder="Year Of Passout *" onfocus="(this.type='month')"> <br>
        </div>
        <div class="formGroup">
            <input type="text" name="reference" onInput="checkform()" placeholder="Reference Name" class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" name="counselor" onInput="checkform()" placeholder="Counselor Name *"  class="regular-text">
        </div>
         <div class="formGroup">
            <input type="text" name="course" id="fatherName" onInput="checkform()" placeholder="In Which Course You Enrolled *" autocomplete="off"  class="regular-text">
        </div>
        <div class="formGroup">
            <input type="text" id="mentor" name="mentor" onInput="checkform()" class="center regular-text" placeholder="Your Mentor Name *"> <br>
        </div>
        <div class="formGroup">
             <input type="text" name="timing" id="timing" onInput="checkform()" placeholder="Batch Timing *" onfocus="(this.type='time')" class="regular-text"> <br>
        </div>
        <div class="formGroup">
            <input type="text" id="doj" name="doj" class="center regular-text" onInput="checkform()" placeholder="Date Of Joining *" onfocus="(this.type='date')">
        </div>
        <div class="formGroup">
            <input type="file" name="uploadfile" class="center regular-text" onInput="checkform()" id="actual-btn" required> <br>
            <!-- <input type="file" name="file" class="center regular-text" id="actual-btn" hidden/> <br> -->
            <!-- <label for="actual-btn">Upload Payment Screenshot</label> -->
        </div>
        <div class="formGroup">
          <!-- <input class="button" type="submit" value="Register" name="register"> -->
          <button type="submit" class="btn2 button" id="submitbutton" name="register" onClick="disabledbutton()" value="Register" disabled>REGISTER</button>
        </div>
      </form>
    </div>
  </div>
