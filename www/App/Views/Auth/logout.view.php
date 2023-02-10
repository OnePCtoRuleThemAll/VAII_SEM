<?php $layout = 'auth' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5">
            Logged out <br>
            Log in <a href="<?= \App\Config\Configuration::LOGIN_URL ?>">again</a> or return <a href="?c=home">back to</a> home page?
        </div>
    </div>
</div>
