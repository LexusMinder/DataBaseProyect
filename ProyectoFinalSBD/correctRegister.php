<?php

include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/User.class.php';
include_once 'app/Redirection.inc.php';

$title = 'Registro Correcto';

include 'templates/start.php';
include 'templates/navbar.php';

?>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Correct Register!
                </div>
                <div class="panel-body">
                    <p>
                        Welcome to web site please sign in for use.
                    </p>
                    <p><a href="<?php  echo LOGIN ?>">Login</a> for start to use your account.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/end.php';
