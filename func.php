<?php
include "admin/dbcon.php";
if(isset($_POST['regform1']))
{
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $trainer=$_POST['trainer'];
    $slot=$_POST['slot'];
    $training_type=$_POST['training_type'];
    $current_weight=$_POST['current_weight'];
    $height=$_POST['height'];
    $home_address=$_POST['home_address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $code=$_POST['code'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $plan=$_POST['plan'];
    $query="insert into regform(first_name,last_name,gender,trainer,slot,training_type,current_weight,height,home_address,city,state,code,email,phone,plan)values('$first_name','$last_name','$gender','$trainer','$slot','$training_type','$current_weight','$height','$home_address','$city','$state','$code','$email','$phone','$plan')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Registeration Successful')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }
} 

if(isset($_POST['online_submit']))
{
    $on_first_name=$_POST['on_first_name'];
    $on_last_name=$_POST['on_last_name'];
    $on_gender=$_POST['on_gender'];
    $on_current_weight=$_POST['on_current_weight'];
    $on_height=$_POST['on_height'];
    $on_home_address=$_POST['on_home_address'];
    $on_city=$_POST['on_city'];
    $on_state=$_POST['on_state'];
    $on_code=$_POST['on_code'];
    $on_email=$_POST['on_email'];
    $on_phone=$_POST['on_phone'];
    $query="insert into onlineform(on_first_name,on_last_name,on_gender,on_current_weight,on_height,on_home_address,on_city,on_state,on_code,on_email,on_phone)values('$on_first_name','$on_last_name','$on_gender','$on_current_weight','$on_height','$on_home_address','$on_city','$on_state','$on_code','$on_email','$on_phone')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Registeration Successful')</script>";
        echo "<script>window.open('on_course.html','_self')</script>";
    }
} 
if(isset($_POST['on_plan']))
{
    $sql = "UPDATE click_count SET online1 = (online1 + 1)  WHERE id=0";
    if (mysqli_query($con,$sql)){
    } 
    else{
        echo "Error updating record: " . $conn->error;
    }
    echo "<script>window.open('onlinef.php','_self')</script>";
}
if(isset($_POST['ba_plan']))
{
    $sql = "UPDATE click_count SET basic1 = (basic1 + 1)  WHERE id=0";
    if (mysqli_query($con,$sql)){
    } 
    else{
        echo "Error updating record: " . $conn->error;
    }
    echo "<script>window.open('register.php','_self')</script>";


}
if(isset($_POST['st_plan']))
{
    $sql = "UPDATE click_count SET standard1 = (standard1 + 1)  WHERE id=0";
    if (mysqli_query($con,$sql)){
    } 
    else{
        echo "Error updating record: " . $conn->error;
    }
    echo "<script>window.open('register.php','_self')</script>";

}
if(isset($_POST['pr_plan']))
{
    $sql = "UPDATE click_count SET premium1 = (premium1 + 1)  WHERE id=0";
    if (mysqli_query($con,$sql)){
    } 
    else{
        echo "Error updating record: " . $conn->error;
    }
    echo "<script>window.open('register.php','_self')</script>";

}
?>