<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{$TemplateWebPath}images/Musicicon.png">

    <title>Music-cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="{$TemplateWebPath}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$TemplateWebPath}css/style.css" rel="stylesheet">
</head>

<body>
<div id="bg_layer" class="register"></div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Music-Cloud</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form" id="rghid">
                <div class="form-group">
                    <input type="text" name="emailUser" id="emailUser" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwdUser" id="pwdUser" placeholder="Password" class="form-control">
                </div>
                <button type="button" class="btn btn-success" onclick="login();">Sign in</button>
                <button id="togMy" type="button" class="btn btn-primary">Register</button>
            </form>
            {include file="login.tpl"}
        </div><!--/.navbar-collapse -->
    </div>
</div>