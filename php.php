<? php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='avni.fuertedevelopers.com';
    $subject='Form Submission';
    $message='Name:'.$name 'Phone:' .$phone 'Wrote:' .$msg.;
    $headers='From' .$email;

    if(mail($to,$subject,$message,$headers){
        echo " Thankyou ";
     } else 
        {
            echo " Wrong ";

    }

}
?>