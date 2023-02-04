<?php  include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
        <header>Realtime chat app</header>
        <form action="#" enctype="multipart/form-data">
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Prenom</label>
                    <input type="text" name="fname" placeholder="Etrez vos prenom"required>
                </div>
                <div class="field input">
                    <label>Nom</label>
                    <input type="text"name="lname" placeholder="Entrez votre Nom"required>
                </div>
            </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder=" Votre Addresse email"required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Mot de passe"required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Choisi un photo</label>
                    <input type="file" name="image" placeholder="Votre photo" required>
                </div>
                <div class="field Button">
                    <input type="submit" value="Continue to chat">
                </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">login now</a></div>
    </section>
        
    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/signup.js"></script>
</body>
</html>