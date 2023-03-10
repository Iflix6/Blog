<?php 

require 'config/database.php';

//get signup form data if signup button was clicked

if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], 
    FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];


    //validate input values
    if(!$firstname){
        $_SESSION['signup'] = "Please enter your first name";
    } elseif(!$lastname){
        $_SESSION['signup'] = "Please enter your last name";
    } elseif(!$username){
        $_SESSION['signup'] = "Please enter your user name";
    } elseif(!$email){
        $_SESSION['signup'] = "Please enter your valid email";
    } elseif(strlen($createpassword) < 8 && strlen($confirmpassword) < 8){
        $_SESSION['signup'] = "Passwords Should Be More Than 8 Characters";
    } elseif(!$avatar['name']){
        $_SESSION['signup'] = "Please add avatar";
    } else{
        //Check if passwords son't match
     if($createpassword !== $confirmpassword){
        $_SESSION['signup'] = "Passwords Don't Match";
     } else{
        //hash password
        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

        //check if username or email already exist in database
        $user_check_query = "SELECT * FROM user WHERE 
        username='$username' OR email = '$email'";
        $user_check_result = mysqli_query($connection,
        $user_check_query);

        if (mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['signup'] = "Username or Email Already Exist";

        } else{
            //Work On Avatar
            //remain avatar
            $time = time(); //make each image name unique using current timestamp
            $avatar_name = $time . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'images/' . $avatar_name;

            //make sure file is an image
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = explode('.', $avatar_name);
            $extension = end($extension);
            if(in_array($extension, $allowed_files)){
                //1mb+
                if($avatar['size'] < 1000000){
                    //upload Avatar
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                } else{
                    $_SESSION['signup'] = 'files size too big. Should be less than 1mb';
                }
            } else{
                    $_SESSION['signup'] = "file should be png, jpg, or jpeg";
                }
                              
            }
        }
        
    }

    // redirect back to signup if there is an error

    if(isset($_SESSION['signup'])) {
        //pass form data back to signup page 
        $_SESSION['signup-data'] = $_POST; 
            header('location:' . ROOT_URL . 'signup.php');
        die();
    } else {
        //insert new users into users table

        $insert_user_query = "INSERT into user 
        (firstname, lastname , username , email , password , avatar , is_admin)
        VALUES
         ('$firstname' , '$lastname' , '$username', '$email' , '$hashed_password' , '$avatar_name' , 0)";
         $insert_user_result = mysqli_query($connection, $insert_user_query);
         if(!mysqli_errno($connection)) {
            //redirect to login page with success message
            $_SESSION['signup-success'] = "Registration successful, please login";
            header('location:' . ROOT_URL . 'signin.php');
             die();
         }
    }
}
else{
    //if button wasn't clicked, bounce back to signup page

    header('location:' . ROOT_URL . 'signup.php');
    die();
}