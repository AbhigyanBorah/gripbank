<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
    <title>Our Customers</title>
    <style>
        body,
        html {
            height: 100%;
        }

        .li:hover {
            color: aqua;

        }

        .heading {
            font-weight: bold;
            animation: animate 3s ease-out forwards;

        }
        .heading2 {
            font-weight: bold;
            animation: animate2 3s ease-out forwards;

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

        @keyframes animate2 {
            0% {
                letter-spacing: -12px;
            }

            20% {
                letter-spacing: 5px;
            }

            60% {
                letter-spacing: 1px;
            }

            100% {
                letter-spacing: 1px;
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
</head>

<body>
    <div class="my-bar my-black my-padding my-hide-small">
        <a href="index.html" style="text-decoration:none" class="li my-bar-item my-margin-left"><i class="fa fa-home my-xlarge" aria-hidden="true"></i></a>
        <a href="about.php" style="text-decoration:none" class="li my-bar-item my-right">About Us</a>
        <a href="selectmoney.php" style="text-decoration:none" class="li my-bar-item my-right">Transfer Money</a>
        <a href="viewtransactions.php" style="text-decoration:none" class="li my-bar-item my-right">View Transactions</a>
        <a href="viewcustomers.php" style="text-decoration:none" class="li my-bar-item my-right my-xlarge my-text-aqua">View Customers</a>
    </div>

     <!-- responsive -->
     <div class="my-bar my-black my-padding my-hide-large" style="display:flex; text-align: center;">
        <a href="index.html"  style="text-decoration:none" class="my-bar-item "><i class="fa fa-home my-xlarge " aria-hidden="true"></i></a>
        <a href="viewcustomers.php" style="text-decoration:none" class="my-bar-item my-small my-text-aqua">View Customers</a>
        <a href="viewtransactions.php" style="text-decoration:none" class="my-bar-item my-small">View Transactions</a>
        <a href="selectmoney.php" style="text-decoration:none" class="my-bar-item my-small">Transfer Money</a>
        <a href="about.php" style="text-decoration:none" class="my-bar-item my-small">About Us</a>
    </div>

    <div class="my-auto my-margin-top">
        <p class="my-center my-xxlarge heading my-hide-small">
            OUR CUSTOMERS
        </p>
        <p class="my-center my-xxlarge heading2 my-hide-large">
            OUR CUSTOMERS
        </p>
        <div class="my-responsive">
        <div class="my-container my-padding-24 my-hide-small">
            <table id="datatable" class="my-table-all" style="font-size:12px;">
                <thead>
                    <th class="my-black" style="text-align:center;">Serial No.</th>
                    <th class="my-black" style="text-align:center;">Account No.</th>
                    <th class="my-black" style="text-align:center;">Name</th>
                    <th class="my-black" style="text-align:center;">Email</th>
                    <th class="my-black" style="text-align:center;">Gender</th>
                    <th class="my-black" style="text-align:center;">Current Balance</th>
                    <th class="my-black" style="text-align:center;">Address</th>
                    <th class="my-black" style="text-align:center;"></th>
                </thead>
                <tbody>

                    <?php
                    include "connect.php";
                    $sql = "select * from customers;";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr class="my-white my-hover-light-blue" style="border-width: 0px;">';
                        echo '<td style="text-align:center;">' . $row[0] . '</td>';
                        echo '<td style="text-align:center;">' . $row[6] . '</td>';
                        echo '<td style="text-align:center;">' . $row[1] . '</td>';
                        echo '<td style="text-align:center;">' . $row[2] . '</td>';
                        echo '<td style="text-align:center;">' . $row[3] . '</td>';
                        echo '<td style="text-align:center;">₹' . $row[4] . '</td>';
                        echo '<td style="text-align:center;">' . $row[5] . '</td>';
                        echo '<td style="text-align:center;" class="my-text-red"> <a href="selectmoney.php?id=' . $row[0] . '" style="text-decoration:none">Transfer Money</a></td>';

                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>
        </div>



        <div class="my-container my-padding my-hide-large">
            <table id="" class="my-table-all" style="font-size:12px;">
                <thead>
                    <th class="my-black" style="text-align:center;">Serial No.</th>
                    <th class="my-black" style="text-align:center;">Account No.</th>
                    <th class="my-black" style="text-align:center;">Name</th>
                    <!-- <th class="my-black" style="text-align:center;">Email</th> -->
                    <!-- <th class="my-black" style="text-align:center;">Gender</th> -->
                    <th class="my-black" style="text-align:center;">Current Balance</th>
                    <!-- <th class="my-black" style="text-align:center;">Address</th> -->
                    <th class="my-black" style="text-align:center;"></th>
                </thead>
                <tbody>

                    <?php
                    include "connect.php";
                    $sql = "select * from customers;";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr class="my-white" style="border-width: 0px;">';
                        echo '<td style="text-align:center;">' . $row[0] . '</td>';
                        echo '<td style="text-align:center;">' . $row[6] . '</td>';
                        echo '<td style="text-align:center;">' . $row[1] . '</td>';
                       /*  echo '<td style="text-align:center;">' . $row[2] . '</td>'; */
                       /*  echo '<td style="text-align:center;">' . $row[3] . '</td>'; */
                        echo '<td style="text-align:center;">₹' . $row[4] . '</td>';
                        /* echo '<td style="text-align:center;">' . $row[5] . '</td>'; */
                        echo '<td style="text-align:center;" class="my-text-red"> <a href="selectmoney.php?id=' . $row[0] . '" style="text-decoration:none">Transfer Money</a></td>';

                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>
            <br><br><br><br><br><br>
        </div>



    </div>

    <div class="footer">
        <p class="my-hide-small">
            This website was made by: Abhigyan Borah <br><i class="fa fa-envelope-o"></i> <span
                class="my-small">abhigyanritiz63@gmail.com</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                class="fa fa-linkedin-square"></i> <span class="my-small">www.linkedin.com/in/abhigyan-borah</span>
            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-github"></i> <span
                class="my-small">https://github.com/AbhigyanBorah </span>
        </p>
        <p class="my-hide-large">
            This website was made by: Abhigyan Borah <br><i class="fa fa-envelope-o" style="font-size: 10px;"></i> <span
                class="my-small" style="font-size: 10px;">abhigyanritiz63@gmail.com</span> <br><i
                class="fa fa-linkedin-square" style="font-size: 10px;"></i> <span style="font-size: 10px;">www.linkedin.com/in/abhigyan-borah</span>
           <br> <i class="fa fa-github" style="font-size: 10px;"></i> <span
                class="my-small" style="font-size: 10px;">https://github.com/AbhigyanBorah </span>
        </p>

    </div>


    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>


</body>

</html>