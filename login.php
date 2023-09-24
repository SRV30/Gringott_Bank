<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="https://ps.w.org/login-customizer/assets/icon-256x256.png?rev=2455454" type="image/x-icon">
    <style>
        body {
            background-color: black;
            color: gold;
            background-image: url('https://th.bing.com/th/id/OIG.2lGUVFC3EFSIA9vu6UVF?pid=ImgGn');
            background-size: 100% 150%;
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
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-box {
            background-color: silver;
            padding: 40px;
            border-radius: 30px;
            margin: auto;
            max-width: 1000px;
        }
        .form-box label, .form-box input {
            display: block;
            margin-bottom: 10px;
        }
        .form-box button {
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

        </div>
    <table align="right" rules="all" cellpadding="10">
        <tr>
            <td><h2><a href="http://127.0.0.1:5500/DBMS/home.html">Home</a></h2></td>
            <td><h2><a href="http://127.0.0.1:5500/DBMS/About_Us.html">About Us</a></h2></td>
            <td><h2><a href="http://localhost/zproject/dbms/openacc.html" target="_blank">Opening Account</a></h2></td>
        </tr>
    </table>
    <br /> <br /> <br /> <br /> <br /> <br /> <br />
    <h3 class="c"><b>Hi, <?php echo isset($_POST['username']) ?  htmlspecialchars($_POST['username']) : ''; ?>.</h3>
    

    <div class="container">
        <div class="form-box">
            <form align="center" action="login.php" method="post" id="login-form">
                <h3 id="abc">Login</h3>
                <div class = "input">
                Username: <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" /><br>
                Password : <input type="password" name="psw" id="password" value="<?php echo isset($_POST['psw']) ? htmlspecialchars($_POST['psw']) : ''; ?>" /><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
