<?php 
session_start();
include('../config/dbcon.php')
?>
<?php 

if(isset($_POST['contactSubmitBtn'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $business = mysqli_real_escape_string($con, $_POST['business']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $budget = mysqli_real_escape_string($con, $_POST['budget']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    // Validate phone number
    $pattern = '/^07\d{8}$/';
    if (!preg_match($pattern, $phone)) {
        $_SESSION['message'] = "Phone Number is Invalid";
        header('Location: ../contact.php');
        exit();
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Email Address is Invalid";
        header('Location: ../contact.php');
        exit();
    }

    $insert_query = "INSERT INTO contact (name, business, email, phone, subject, budget, description) VALUES 
    ('$name', '$business', '$email', '$phone', '$subject', '$budget', '$description')";

    if(mysqli_query($con, $insert_query)){
        $_SESSION['message'] = "Message sent successfully";
    } else {
        $_SESSION['message'] = "Something went wrong: " . mysqli_error($con);
    }
    header('Location: ../contact.php');
    exit();
} else {
    $_SESSION['message'] = "Invalid Request";
    header('Location: ../contact.php');
    exit();
}

?>
