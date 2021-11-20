<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
    <title>Our Customers</title>
    <style>
        body,
        html {
            height: 100%;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: aqua;

        }

        .heading {
            font-weight: bold;
            letter-spacing: 2px;


        }

        hr {
            max-width: 80%;
            margin: 25px auto;
            border: .5px solid;
        }
        .butn{
            transition: transform .5s ease;
        }
        .butn:hover{
            transform: scale(1.2);
            
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
    <?php
    include "connect.php";
    if (isset($_POST["submit"])) {
        $sender = $_POST["sender"];
        $receiver = $_POST["receiver"];

        $str1 = "Select * from customers where account_no='$sender'";
        $result1 = mysqli_query($link, $str1);
        $row1 = mysqli_fetch_array($result1);
        $acc1 = $row1["account_no"];
        $balance=$row1["current_balance"];

        $str2 = "Select * from customers where account_no='$receiver'";
        $result2 = mysqli_query($link, $str2);
        $row2 = mysqli_fetch_array($result2);
        $acc2 = $row2["account_no"];
       
    }
    ?>
</head>

<body>
    <div class="my-bar my-black my-padding">
        <a href="index.html" class="my-bar-item my-margin-left"><i class="fa fa-home my-xlarge" aria-hidden="true"></i></a>
        <a href="about.php" class="my-bar-item my-right">About Us</a>
        <a href="selectmoney.php" class="my-bar-item my-right my-xlarge my-text-aqua">Transfer Money</a>
        <a href="viewtransactions.php" class="my-bar-item my-right">View Transactions</a>
        <a href="viewcustomers.php" class="my-bar-item my-right ">View Customers</a>
    </div>

    <div class="my-auto my-margin-top">
        <p class="my-center my-xxlarge heading">
            TRANSFER MONEY
        </p>

        <br>

        <div class="my-row">
            <div class="my-half my-container my-border">
                <p>
                <h3 style="font-weight: bold;" class="my-center">Sender's Details</h3>
                </p>
                <hr class="my-animate-zoom">
                <div class="my-row">
                    <div class="my-half my-center">
                        <p>
                            <b>Name:</b> <?php echo $row1["name"] ?>
                        </p>
                    </div>
                    <div class="my-half my-center">
                        <p>
                            <b>Account No:</b> <?php echo $row1["account_no"] ?>
                        </p>
                    </div>
                </div>
                <div class="my-row">
                    <div class="my-half my-center">
                        <p>
                            <b>Email:</b> <?php echo $row1["email"] ?>
                        </p>
                    </div>
                    <div class="my-half my-center">
                        <p>
                            <b>Address:</b> <?php echo $row1["address"] ?>
                        </p>
                    </div>
                </div>
                <p class="my-center my-padding">
                    <b>Current Balance:</b> ₹<?php echo $row1["current_balance"] ?>
                </p>
            </div>



            <div class="my-half my-container my-border">
                <p>
                <h3 style="font-weight: bold;" class="my-center">Receiver's Details</h3>
                </p>
                <hr class="my-animate-zoom">
                <div class="my-row">
                    <div class="my-half my-center">
                        <p>
                            <b>Name:</b> <?php echo $row2["name"] ?>
                        </p>
                    </div>
                    <div class="my-half my-center">
                        <p>
                            <b> Account No:</b> <?php echo $row2["account_no"] ?>
                        </p>
                    </div>
                </div>
                <div class="my-row">
                    <div class="my-half my-center">
                        <p>
                            <b>Email:</b> <?php echo $row2["email"] ?>
                        </p>
                    </div>
                    <div class="my-half my-center">
                        <p>
                            <b>Address:</b> <?php echo $row2["address"] ?>
                        </p>
                    </div>
                </div>
                <p class="my-center my-padding">
                    <b>Current Balance:</b> ₹<?php echo $row2["current_balance"] ?>
                </p>
            </div>
        </div><br><br>
        <div class="my-container my-padding my-center">
            <form action="transfer.php" method="POST">
                <input type="text" hidden name="sender" id="" <?php echo 'value="'.$acc1.'"';?>></input>
                <input type="text" hidden name="receiver" id="" <?php echo 'value="'.$acc2.'"';?>></input>
            Select Amount To Transfer: <input class="my-padding" type="number" name="amount" id="" min=0 <?php echo 'max="'.$balance.'"';?>>
            <input type="submit" value="Transfer >> " class="butn my-btn my-black my-round my-padding-12" name="submit" style="margin-left: 10px;">
            </form>
        </div>
    </div>

    <div class="footer">
        <p>
            This website was made by: Abhigyan Borah <br><i class="fa fa-envelope-o"></i> <span
                class="my-small">abhigyanritiz63@gmail.com</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                class="fa fa-linkedin-square"></i> <span class="my-small">www.linkedin.com/in/abhigyan-borah</span>
            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-github"></i> <span
                class="my-small">https://github.com/AbhigyanBorah </span>
        </p>

    </div>

    


</body>

</html>