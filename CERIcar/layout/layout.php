<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <script src="js/layout.js" type="text/javascript"></script>

<!--=========================== Login ressources ==========================================-->		
			<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>
    <title>
        CERIcar
    </title>

</head>

<body style="background-color:#ebeeef">
    <div id="navBar">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="menuIndex">CERIcar</a>
                </div>
                <?php if($context->getSessionAttribute('user_id')): ?>
                    <?php echo $context->getSessionAttribute('user_id')." est connecte"; ?>
                <?php endif; ?>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="" id="menuRechercher"><span class="glyphicon glyphicon-search"></span> Rechercher</a></li>
                            <li><a href="#" id="add"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></li>

                        <li><a href="#" id="register"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                        <li><a href="" id="connection"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                        <li><a href="CERIcar.php?action=logout" id="deconnection"><span class="glyphicon glyphicon-log-out"></span> Se deconnecter</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- <div class="container" style="margin-top:50px"> -->
    <div class="container" style="margin-top:75px">


        <div id="page_maincontent">
            <?php
                foreach($template_views as $view)
                {
                    //assigne le nom de la vue à matches[1]
                    preg_match('/'.$nameApp.'\/view\/(.*?)\.php/',$view, $matches);
                    echo "<div id=".$matches[1].">\n";
                    include($view);
                    echo "</div>\n";
                }
				  
      	?>
        </div>

        <div id="bandeau">
            <?php
        if($context->error)
          echo 'Erreur : ' . $context->error;
        else
          echo 'Action demandée : ' . $action;
        ?>
            <div id="fermer">&#10006;</div>
        </div>
    </div>
</body>

</html>