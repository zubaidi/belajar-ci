
<body>
    <div class="container">
        <div class="title">
                <h2>Login Page</h2>
            </div>
            <div class="main">
                <form action="" method="post">
                    <input type="text" id="username" name="username" placeholder="Username or Email" required/><br/>
                    <input type="password" id="password" name="password" placeholder="Password" required/><br/>
                    <a href="#" class="forgetpass">Forget Password?</a><br>
                    <a href="<?= base_url('backend/admin') ?>"><input type="button" value="LOGIN" class="signin"/></a><br>
                    <p>Not a member? <a href="" class="signup">Sign Up</a></p>
                </form>
            </div>
    </div>
</body> 
</html>