<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/Sondage.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.5-dist\css/bootstrap.css">
    <!--<link rel="stylesheet" href="bootstrap-3.3.5-dist\css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../bootstrap-3.3.5-dist\css/bootstrap-theme.min.css">
    <!--<link rel="stylesheet" href="bootstrap-3.3.5-dist\css/bootstrap-theme.css">-->
    <link href="data:text/css;charset=utf-8," data-href="../dist/css/bootstrap-theme.min.css" rel="stylesheet"
          id="bs-theme-stylesheet">
    <title>Survey</title>

</head>
<body>
<div class="container">
    <form class="form-Account-Management">
        <div class="panel-body">

            <h2 class="form-signin-heading">Accounts</h2>

            <ul id="lstAccount">
                <li id="Account_1">
                    <div id="normal">
                        <label>Sam@kek.lol</label>
                        <a class="Account-Management" href="#"><span class="glyphicon glyphicon-pencil"
                                                                     aria-hidden="true"></span></a>
                        <a class="Account-Management" href="#"><span class="glyphicon glyphicon-trash"
                                                                     aria-hidden="true"></span></a>
                    </div>
                    <div id="modify">
                        <input type="email" placeholder="Sam@kek.lol">
                        <label>isAdmin</label>
                        <input type="checkbox">
                        <a class="Account-Management" href="#"><span class="glyphicon glyphicon-ok"
                                                                     aria-hidden="true"></span></a>
                        <a class="Account-Management" href="#"><span class="glyphicon glyphicon-remove"
                                                                     aria-hidden="true"></span></a>
                    </div>
                </li>
            </ul>

            <input type="email" id="inputEmail" class="" placeholder="Email address" required autofocus>
            <input type="password" id="inputPassword" class="" placeholder="Password" required>
            <a class="Account-Management" href="#"><span class="glyphicon glyphicon-floppy-disk"
                                                         aria-hidden="true"></span></a>

        </div>
</div>
</form>
</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: 1229753
 * Date: 20/10/2015
 * Time: 10:06
 */

include("Connection.php");

DisplayAccount();


?>