<?php  include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
        <header>Realtime chat app</header>
        <form action="#" autocomplet="off">
            <div class="error-txt"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder=" Votre Addresse email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Mot de passe">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field Button">
                    <input type="submit" value="Continue to chat">
                </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Sign Up</a></div>
    </section>
        
    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/login.js"></script>
</body>
</html>