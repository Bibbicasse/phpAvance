<div class="row">
    <div class="col-12 mx-auto mt-5 p-0">
        <div class="login-box">
            <div class="login-snip">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                <label for="tab-1" class="tab">Se connecter</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up">
                <label for="tab-2" class="tab text-dark"><a href="inscription.php">S'inscrire</a></label>
                <div class="login-space">
                    <form action="login.php" method="POST" class="sign-up-form login">
                        <!-- <div class="login"> -->
                        <div class="group">
                            <label class="label text-white">Nom utilisateur</label>
                            <input name="username" type="text" class="input" placeholder="Entre ton nom utilisateur" required>
                        </div>
                        <div class="group">
                            <label class="label text-white">Mot de passe</label>
                            <input name="password" type="password" class="input" data-type="password" placeholder="Entre ton mot de passe" required>
                        </div>

                        <div class="group text-center">
                            <input type="submit" id="submit" class="btn btn-outline-light w-50" value="Se connecter">
                        </div>
                        <div class="hr"></div>
                        <div class="foot text-white">
                            <a href="#">Mot de passe oublié ?</a>
                            <br>
                            <a href="index.php<?= $fiche['id'] ?? '' ?>" class="my-2">Accueil</a>
                            <p class="alert-danger"> <?= $message ?? '' ?> </p>
                        </div>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>