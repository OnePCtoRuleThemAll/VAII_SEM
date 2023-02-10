<?php
$layout = 'auth';
/** @var Array $data */
?>

<div class="login-container text-c animated flipInX">
    <h3 class="text-whitesmoke">Log In</h3>
    <div class="text-center text-danger mb-3">
        <?= @$data['message'] ?>
    </div>
    <div class="container-content">
        <br class="margin-t" method="post" action="<?= \App\Config\Configuration::LOGIN_URL ?>">
            <div class="form-group">
                <input name="login" type="text" id="login" class="form-control" placeholder="Login"
                       required autofocus>
            </div>
            <div class="form-group">
                <input name="password" type="password" id="password" class="form-control"
                       placeholder="Password" required>
            </div>
            <button type="submit" class="form-button button-l margin-b">Sign In</button>

            <a class="text-redish" href="#"><small>Forgot your password?</small></a>
            <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
            <a class="text-redish" href="#"><small>Sign Up</small></a>
        </form>
    </div>
</div>