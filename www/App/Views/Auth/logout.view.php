<?php $layout = 'auth' ?>
<div class="container-fluid">
    <div class="container rounded bg-white">
        <div class="row">
            <div class="align-items-center text-center p-3 py-5">
                Logged out <br>
                Log in <a href="<?= \App\Config\Configuration::LOGIN_URL ?>">again</a> or return <a href="?c=home">back to</a> home page?
            </div>
        </div>
    </div>
</div>
