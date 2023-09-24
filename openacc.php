<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opening Account</title>

    <link rel="shortcut icon" href="https://static.thenounproject.com/png/3108841-200.png" type="image/x-icon">

    <style>
         body {
            background-color: black;
            color: gold;
            background-image: url('https://th.bing.com/th/id/OIG.NOLiqdC4Ur2SHHKFborB?pid=ImgGn');
            background-size: 100% 130%;

        }
        #abc {
            color: brown;
            font-size: large;
            font-style: italic;
        }
        .c{
            text-align: center;
            color: rgb(255, 255, 255);
        }
        .coin {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .formbox {
            background-color: silver;
            padding: 40px;
            border-radius: 30px;
            margin: auto;
            max-width: 1000px;
        }
        .formbox label, .formbox input {
            display: block;
            margin-bottom: 10px;
            
        }
        .formbox button {
            background-color: gold;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }   
        .input {
            border: solid black;
            color: black;
            text-decoration: solid;
        }
    </style>
</head>

<body>
<div class="cont">
        <div class="img">
        <img src="logo.jpeg" alt="logo"
                    border = 3
                    width =100px
                    height="100px"
                    hspace="10">
        </div>
    </div>
        <div class="header">
            <header align = "center">
                <h1>Gringotts Bank</h1>
            </header>
        </div>
        

    <table align=right rules="all" cellpadding=10>
        <tr>
            <td>
                <h2>Dashboard</h2>
            </td>
            <td>
                <h2><a href="http://127.0.0.1:5500/DBMS/login.html">Login</a></h2>
            </td>
            <td>
                <h2>Loan</h2>
            </td>
            <td>
                <h2>Deposit</h2>
            </td>
        </tr>
    </table>
    <br /> <br /> <br /> <br /> <br /> <br /> <br />

    <h3 class="c"><b>Thank You <?php echo isset($_POST['firstname']) ?  htmlspecialchars($_POST['firstname']) : ''; ?> for opening a account in our bank.</3>

    <div class="coin">
        <div class="formbox">
            <form align="center" action="openacc.php" method="post" id="openacc-form">
                <p id="abc">Account Opening</p>
                <div class = "input">
                Customer Name :
                <input type="text" name="firstname" value="<?php echo isset($_POST['firstname']) ?  htmlspecialchars($_POST['firstname']) : ''; ?>" />
                Address : <br />
                <input type="text" name="address" value="<?php echo isset($_POST['address']) ?  htmlspecialchars($_POST['address']) : ''; ?>" />
                <!-- <textarea rows="2" cols="20" name="address" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?>" >  </textarea><br /> -->
                City :
                <input type="text" name="text" value="<?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?>" />
                </div>
            </form>
        </div>
    </div>

</body>

</html>