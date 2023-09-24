<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRINGOTTS BANK</title>

    <link rel="shortcut icon" href="./logo.jpeg" type="image/x-icon">

    <style>
        body{
            background-color:black;
            color:gold;
        }
       ul {
        color: azure;
       }

       #abc {
        color: rgb(242, 170, 83);
       }

       .container {
        display: flex;
        
        }
        .tB table{
            width: 0px;
            height: 0px;
            border: none solid black;
            
        }
        .container h1{
            margin-top: 59px;
            margin-left:539px ;
            margin-bottom:0px ;
            margin-right:0px ;
        }
        .img {
            align-items: start;
        }
        .header {
            align-items: center;
            justify-content: center;
            align-items: center;
        }
        .table {
            display: flex;
            justify-content: space-between;
        }
        table {
            border-collapse: collapse;
            width: 48%;
            border: 3px solid gold;
        }
        table td, table th {
            border: 1px solid gold;
            padding: 10px;
        }
        table caption {
            text-align: center;
            font-size: 1.5em;
        }
        .table1 {
            float: left;
            color: silver;
        }
    
        .table2 {
            float: right;
            color: silver;
        }
        #table {
            color: gold;
        }

        
    </style>
</head>
<body>
<div class="container">
        <div class="img">
        <img src="logo.jpeg" alt="logo"
                    border = 3
                    width =100px
                    height="100px"
                    hspace="10">
        </div>

                <h1>Gringotts Bank</h1>
           
        
        
        
    </div>
     
    <div class="tB">
        <TABLE align = right rules ="all" cellpadding = 10>
            <tr>
                <TD><h2><a href="http://127.0.0.1:5500/DBMS/home.html">Home</a></h2></TD>
                <TD><h2><a href="http://127.0.0.1:5500/DBMS/About_Us.html">About Us</a></h2></td>
                <TD><h2><a href="http://localhost/zproject/dbms/login.php" target="_blank">Login</a></h2></td>
                <TD><h2><a href="http://localhost/zproject/dbms/openacc.php">Opening Account</a></h2></TD>
            </tr>
        </TABLE>
    </div>
    <br/><br/><br/><br/><br/><br/>
    
    <div>
        <header class="header" align="center">
            <h1>Dashboard</h1>
        </header>
    </div>

    <div class="table">
        <table class="table1">
            <caption><h1 id="table"><b>List Of Depositers</b></h1></caption>
            <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Account No.</th>
                <th>Balance</th>
                <th>Details</th>
            </tr>
            
            <?php
            
            $depositorData = [
                ['1', 'John Doe', '12345', '$1,000', 'path_to_file_1.pdf'],
                ['2', 'Smith', '67890', '$2,500', 'path_to_file_2.pdf'],
                ['3', 'Bob Johnson', '98765', '$3,200', 'path_to_file_3.pdf'],
                ['4', 'Alice Brown', '54321', '$4,800', 'path_to_file_4.pdf'],
                ['5', 'David Lee', '11223', '$6,750', 'path_to_file_5.pdf'],
                ['6', 'Eve Taylor', '99887', '$8,300', 'path_to_file_6.pdf'],
                ['7', 'Frank Williams', '77665', '$9,600', 'path_to_file_7.pdf'],
                ['8', 'Grace Davis', '33445', '$5,400', 'path_to_file_8.pdf'],
            ];
            
            foreach ($depositorData as $row) {
                echo '<tr>';
                foreach ($row as $cell) {
                    
                    if (strpos($cell, 'path_to_file_') === 0) {
                        echo '<td><a href="' . $cell . '" target="_blank">Click To View</a></td>';
                    } else {
                        echo '<td>' . $cell . '</td>';
                    }
                }
                echo '</tr>';
            }
            ?>
            
        </table>
        
        <table class="table2">
            <caption><h1 id="table"><b>List Of Borrowers</b></h1></caption>
            <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Account No.</th>
                <th>Balance</th>
                <th>Details</th>
            </tr>
            <?php
            
            $depositorData = [
                ['1', 'John Doe', '12345', '$1,000', 'path_to_file_1.pdf'],
                ['2', 'Smith', '67890', '$2,500', 'path_to_file_2.pdf'],
                ['3', 'Bob Johnson', '98765', '$3,200', 'path_to_file_3.pdf'],
                ['4', 'Alice Brown', '54321', '$4,800', 'path_to_file_4.pdf'],
                ['5', 'David Lee', '11223', '$6,750', 'path_to_file_5.pdf'],
                ['6', 'Eve Taylor', '99887', '$8,300', 'path_to_file_6.pdf'],
                ['7', 'Frank Williams', '77665', '$9,600', 'path_to_file_7.pdf'],
                ['8', 'Grace Davis', '33445', '$5,400', 'path_to_file_8.pdf'],
            ];
            
            foreach ($depositorData as $row) {
                echo '<tr>';
                foreach ($row as $cell) {
                    
                    if (strpos($cell, 'path_to_file_') === 0) {
                        echo '<td><a href="' . $cell . '" target="_blank">Click To View</a></td>';
                    } else {
                        echo '<td>' . $cell . '</td>';
                    }
                }
                echo '</tr>';
            }
            ?>

    </div>
</body>
</html>
