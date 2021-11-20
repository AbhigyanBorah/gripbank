<?php
include "connect.php";

if(isset($_POST["submit"]))
{
    $acc1=$_POST["sender"];
    $acc2=$_POST["receiver"];
    $amount=$_POST["amount"];
    date_default_timezone_set('Asia/Kolkata');
    $date=date("d/m/y h:ia");
    $day=date("l");

    $str1 = "Select * from customers where account_no='$acc1'";
    $result1 = mysqli_query($link, $str1);
    $row1 = mysqli_fetch_array($result1);
    $name1 = $row1["name"];
    $sender_amount=$row1["current_balance"];

    $str2 = "Select * from customers where account_no='$acc2'";
    $result2 = mysqli_query($link, $str2);
    $row2 = mysqli_fetch_array($result2);
    $name2 = $row2["name"];
    $receiver_amount=$row2["current_balance"];

    $sender_current=$sender_amount-$amount;
    $receiver_current=$receiver_amount+$amount;

    $result3=mysqli_query($link,"update customers set current_balance=$sender_current where account_no='$acc1'");
    $result4=mysqli_query($link,"update customers set current_balance=$receiver_current where account_no='$acc2'");

    
    $result=mysqli_query($link,"insert into transaction values(null,'$name1','$acc1','$name2','$acc2','$amount','$date','$day')");
    if($result)
    {
       
        header("location:viewtransactions.php?ok=1");
    }
    else{
        echo mysqli_error($link);
    }

}

?>