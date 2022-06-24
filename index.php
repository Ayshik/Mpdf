
<?php
require_once __DIR__ . '/vendor/autoload.php';
// Grab variables
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$mpdf = new \Mpdf\Mpdf();
$data = "";
$data .= "<h1>Your Details</h1>";
$data .='<strong>First Name</strong> '. $fname.'<br>';
$data .='<strong>Last Name</strong> '. $lname.'<br>';
$data .='<strong>Email</strong> '. $email .'<br>';
$data .='<strong>Message</strong> '. $message.'<br>';
$mpdf->WriteHtml($data);
$mpdf->output("myProject.pdf",'D');
}
?>
  
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
<title>Create Pdf with HTML Form with Mpdf</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Create Pdf From Form</h1>
        <p>Fill out the Below details to generate the form</p>
        <form action="index.php" method="post">
        <input type="text" name="fname" class="form-control" placeholder="First Name" required><br>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" required><br>
        <input type="email" name="email" class="form-control" placeholder="Email" required><br>
        <textarea class="form-control" name="message" placeholder="Message">
        
        </textarea><br>
        <button class="btn btn-primary" type="submit">Create PDF</button>
        </form>
    </div>
</body>
</html>