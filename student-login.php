<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
             body{
                background-image: url('image/2.avif');
                /* display: flex;
                justify-content: center;
                font-family: Arial, Helvetica, sans-serif;
                background-position: center;*/
                background-size: cover; 
            
            } 
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                user-select: none;
            }
            .login
            {
                position: absolute;
                top: 50%;
                left: 50%;
                height:400px;
                transform: translate(-50%,-50%);
                padding: 40px;
                color: white;
                font-family: Arial, Helvetica, sans-serif;
                background-color: rgba(0,0,0,0.7);
                border-radius: 5px;
                box-shadow: 1px 1px 20px cyan;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius:9px;
                margin: 10px 0;
            }
            
            .field
            {
                border: 1px solid cyan;
                border-radius: 50px;
                background-color: transparent;
                width: 100%;
                margin-bottom: 15px;
                display: flex;
            }
            .field span{
                color: white;
                width: 35px;
                line-height: 40px;
                text-align: center;
            }
            .field input{
                width: 80%;
                height: 45px;
                font-size: 1.1rem;
                padding: 5px;
                color: cyan;
                background-color: transparent;
                border: none;
            }
            .forgot-password
            {
                width: 100%;
                margin-bottom: 15px;
            }
            .forgot-password a{
                color: white;
                text-decoration: none;
            }
            .forgot-password a:hover
            {
                text-decoration: underline;
            }
            .submit
            {
                display: flex;
                justify-content: center;
                width: 100%;
                height: 45px;
                margin-bottom: 25px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1.2rem;
                color: white;
                background-color: transparent;
                border: 1px solid cyan;
                border-radius: 125px;
            }
            .submit:hover{
                cursor: pointer;
                background-color: orangered;
            }
            .login-form-copy
            {
                margin-bottom: 15px;
            }
            .login-form_sign-up
            {
                text-decoration: none;
                color: rgb(18, 190, 190);
            }
            header i{
               color:#FFFF;
               font-size:70px;
               margin-bottom:35px;
            }
            
            /* .social-icons{
                display: flex;
                width: 100%;
                justify-content: space-between;
                padding-bottom: 5px;
            }
            .social-icon{
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.4rem;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
                margin-bottom: 25px;
            }
            .facebook{
                background-color: #385998;
            }
            .instagram{
                background: linear-gradient(rgb(243,5,171),rgb(205,95,4),yellow);
            }
            .twitter
            {
                background-color: #00ACEE;
            }
            .google
            {
                background-color: #CA3224;
            }
            .linkedin{
                background-color: #0E76AB;
            }
             input:focus,input:hover,input:active
             {
                 outline: none;
             } */
        </style>
    </head>
    <body>
        <?php
        include('db/nav.php');
        ?>
        <form action="include/student-login.php" method="POST" class="login">
            <header><i class="fas fa-user"></i></header>
            <div class="container">
            <div class="field"><span class="fa fa-user"></span><input type="text" placeholder="Email or Username" name="UserName" reqired="true"></div>
            <div class="field"><span class="fa fa-lock"></span><input type="PASSWORD" placeholder="Password" name="Password" required="true"></div>
            <div class="forgot-password"><a href="">Forgot password?</a></div>
            <input type="submit" class="submit" name="LOGIN" value="LOGIN">
            <!-- <span class="login-form-copy">Or Login with</span>
             <div class="social-icons">
                <div class="social-icon instagram"><span class="fa fa-instagram"></span></div>
                <div class="social-icon facebook"><span class="fa fa-facebook"></span></div>
                <div class="social-icon google"><span class="fa fa-google"></span></div>
                <div class="social-icon linkedin"><span class="fa fa-linkedin"></span></div>
                <div class="social-icon twitter"><span class="fa fa-twitter"></span></div>
            </div> 
            <span class="login-form-copy">Don't have an account?<a href="" class="login-form_sign-up">Sign up</a></span> -->
            </div>

        </form>
        <script src="https://kit.fontawesome.com/9ef1cb42dc.js" crossorigin="anonymous"></script>
    </body>
</html>