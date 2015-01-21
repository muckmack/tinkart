<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>/img/logo.png">

    <title><?php echo @$title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/css/bootstrap.super.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/css/main.css" rel="stylesheet">

    <style>
        body {
            padding-top: 75px;
        }
    </style>

</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--            <a class="navbar-brand" href="#">Project name</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="#Search">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"
                                                                            aria-hidden="true"></span></button>
                    </form>
                </li>
                <?php if (!logged_in()): ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Login<span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <form method="post" name="login" class="navbar-form navbar-left" action="<?php echo base_url() ?>/login" >
                                <li>
                                    <div class="form-group">
                                        <input name="loginMail" type="text" id="loginMail" class="form-control" placeholder="Email address">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <input name="loginPass" type="password" id="loginPass" class="form-control" placeholder="Password">
                                    </div>
                                </li>
                                <li>
                                    <input name="submit" type="submit" class="btn btn-default" value="login">
                                    <a href="register" class="btn btn-default">Register Now!</a>
                                </li>
                            </form>
                        </ul>
                    </li>

                <?php endif; ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<?php echo $content ?>


<script src="<?php echo base_url() ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
<footer>©Yeong-Cheol Jang, Michali Alexandrakis</footer>
</html>
