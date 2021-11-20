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
            animation: animate 3s ease-out forwards;

        }

        .butn {
            transition: transform .5s ease;
        }

        .butn:hover {
            transform: scale(1.2);

        }

        @keyframes animate {
            0% {
                letter-spacing: -12px;
            }

            20% {
                letter-spacing: 10px;
            }

            60% {
                letter-spacing: 2px;
            }

            100% {
                letter-spacing: 2px;
            }
        }

        .heading2 {
            font-weight: bold;
            animation: animate2 3s ease-out forwards;

        }
@keyframes animate2 {
            0% {
                letter-spacing: -12px;
            }

            20% {
                letter-spacing: 10px;
            }

            60% {
                letter-spacing: 2px;
            }

            100% {
                letter-spacing: 2px;
            }
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
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $str = "Select * from customers where id='$id'";
        $result = mysqli_query($link, $str);
        $row = mysqli_fetch_array($result);
        $acc = $row["account_no"];
    }
    ?>
</head>

<body>
    <div class="my-bar my-black my-padding my-hide-small">
        <a href="index.html" class="my-bar-item my-margin-left"><i class="fa fa-home my-xlarge" aria-hidden="true"></i></a>
        <a href="about.php" class="my-bar-item my-right">About Us</a>
        <a href="selectmoney.php" class="my-bar-item my-right my-xlarge my-text-aqua">Transfer Money</a>
        <a href="viewtransactions.php" class="my-bar-item my-right">View Transactions</a>
        <a href="viewcustomers.php" class="my-bar-item my-right ">View Customers</a>
    </div>

    <!-- responsive -->
    <div class="my-bar my-black my-padding my-hide-large" style="display:flex; text-align: center;">
        <a href="index.html" class="my-bar-item "><i class="fa fa-home my-xlarge " aria-hidden="true"></i></a>
        <a href="viewcustomers.php" class="my-bar-item my-small">View Customers</a>
        <a href="viewtransactions.php" class="my-bar-item my-small">View Transactions</a>
        <a href="selectmoney.php" class="my-bar-item my-small my-text-aqua">Transfer Money</a>
        <a href="about.php" class="my-bar-item my-small">About Us</a>
    </div>

    <div class="my-content my-margin-top">
        <p class="my-center my-xxlarge heading my-hide-small">
            TRANSFER MONEY
        </p>
        <p class="my-center my-xxlarge heading2 my-hide-large">
            TRANSFER <br>MONEY
        </p>

        <div class="my-container my-padding-48 my-hide-small">
            <form action="transfermoney.php" method="post">
                <div class="my-row" style="max-width: 900px; margin:0 auto">
                    <div class="my-third my-center my-padding">
                        From: <?php
                                if (isset($_GET["id"])) {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round">';
                                    echo '<option selected>' . $acc . '</option>';
                                    echo '</select>';
                                } else {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round">';
                                    echo '<option disabled selected>Select account no.</option>';
                                    $sql2 = mysqli_query($link, "Select account_no from customers");
                                    while ($s1 = mysqli_fetch_array($sql2)) {
                                        echo '<option> ' . $s1[0] . '  </option>';
                                    }
                                    echo '</select>';
                                }
                                ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        To: <?php
                            echo '<select type="text" name="receiver" class="my-padding my-white my-round my-center">';
                            echo '<option disabled selected>Select account no.</option>';
                            $sql2 = mysqli_query($link, "Select account_no from customers");
                            while ($s1 = mysqli_fetch_array($sql2)) {
                                echo '<option> ' . $s1[0] . '  </option>';
                            }
                            echo '</select>';
                            ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        <input type="submit" name="submit" value="Proceed >>" style="width: 80%;" class="my-btn my-black my-round butn">
                        <!-- <a href="transfermoney.php" style="width: 80%;" class="my-btn my-black my-round">Proceed >></a> -->
                    </div>
                </div>
            </form>
        </div>

        <div class="my-container my-padding-48 my-hide-large">
            <form action="transfermoney.php" method="post">
                <div class="my-row" style="max-width: 900px; margin:0 auto">
                    <div class="my-third my-center my-padding">
                        From: <?php
                                if (isset($_GET["id"])) {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round">';
                                    echo '<option selected>' . $acc . '</option>';
                                    echo '</select>';
                                } else {
                                    echo '<select type="text" name="sender" class="my-padding my-white my-center my-round">';
                                    echo '<option disabled selected>Select account no.</option>';
                                    $sql2 = mysqli_query($link, "Select account_no from customers");
                                    while ($s1 = mysqli_fetch_array($sql2)) {
                                        echo '<option> ' . $s1[0] . '  </option>';
                                    }
                                    echo '</select>';
                                }
                                ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        To: &nbsp;&nbsp;&nbsp; <?php
                            echo '<select type="text" name="receiver" class="my-padding my-white my-round my-center">';
                            echo '<option disabled selected>Select account no.</option>';
                            $sql2 = mysqli_query($link, "Select account_no from customers");
                            while ($s1 = mysqli_fetch_array($sql2)) {
                                echo '<option> ' . $s1[0] . '  </option>';
                            }
                            echo '</select>';
                            ?>
                    </div>
                    <div class="my-third my-center my-padding">
                        <input type="submit" name="submit" value="Proceed >>" style="width: 60%;" class="my-btn my-black my-round butn">
                        <!-- <a href="transfermoney.php" style="width: 80%;" class="my-btn my-black my-round">Proceed >></a> -->
                    </div>
                </div>
            </form>
        </div>

        <div class="my-container my-content my-padding my-center">
            <img src="images/undraw_transfer_money_rywa.svg" alt="" style="width: 40%; transform: scaleX(-1);">
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