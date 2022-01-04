<html>
  <head>
    <title>Admin Login</title>
    <style>
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
    font-family: sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden
}

@media screen and (max-width: 600px) {
    body {
        background-size: cover;
        position: fixed
    }
}

#particles-js {
    height: 100%
}

.loginBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    min-height: 200px;
    background: white;
    border-radius: 10px;
    padding: 40px;
    box-sizing: border-box
}

.user {
    margin: 0 auto;
    display: block;
    margin-bottom: 20px
}

h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #59238F;
    text-align: center
}

.loginBox input {
    width: 100%;
    margin-bottom: 20px
}

.loginBox input[type="text"],
.loginBox input[type="password"] {
    border: none;
    border-bottom: 2px solid #262626;
    outline: none;
    height: 40px;
    /* color: #fff; */
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box
}

.inputBox {
    position: relative
}

.inputBox span {
    position: absolute;
    top: 10px;
    color: #262626
}

.loginBox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    font-size: 16px;
    background: black;
    color: #fff;
    border-radius: 20px;
    cursor: pointer
}

.loginBox a {
    color: #262626;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    display: block
}
    </style>
  </head>
  <body>
  <div class="loginBox"> <img class="user" src="../images/21104.png" height="100px" width="100px">
    <h3 style="color:#ffb600;">Admin</h3>
    <form action="adminlogin.php" method="post">
        <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username">
        <input id="pass" type="password" name="Password" placeholder="Password"> </div> 
        <input type="submit" name="" value="Login">
    </form>
</div>
  </body>
</html>