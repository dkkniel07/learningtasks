<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
	<head>
	<title>CLE1 - Rogel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.png"></a>
             <div class="nav" id="nav">
                  <ul>
                    <li><a href="index.php"><span style="color: #ff0000">Home</span> </a></li>
                    <li><a href="index.php?page=learning"> Learning Tasks </a></li>
                    <li><a href="index.php?page=about"> About </a></li>
                  </ul>
             </div>
         </nav>
    </section>
<?php
switch ($load) {
case 'learning':
        require_once('learningtasks.php');
                    break;
    case 'about':
            require_once('about.php');
                break;
    case 'home':
        require_once('index.php');
            break;
    default:
                require_once('home.php');
                    break;
            }
?>       

	