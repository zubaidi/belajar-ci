
<body>
    <div class="container">
        <div class="title">
                <h2>Login Page</h2>
            </div>
            <div class="main">
                <form action="<?php echo base_url('login/login_aksi') ?>" method="post">
                    <input type="text" id="username" name="username" placeholder="Username or Email" required/><br/>
                    <input type="password" id="password" name="password" placeholder="Password" required/><br/>
                    <a href="#" class="forgetpass">Forget Password?</a><br>
                    <input type="submit" value="LOGIN" class="signin"/><br>
                    <p>Not a member? <a href="" class="signup">Sign Up</a></p>
                </form>
            </div>
    </div>
</body> 
</html>