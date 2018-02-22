<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ZOS - Strona główna</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Karol Znojkiewicz">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
 <script>
 $(function(){
    var stt_is_shown = false;
    $(window).scroll(function(){
       var win_height = 300;
       var scroll_top = $(document).scrollTop(); 
       if (scroll_top > win_height && !stt_is_shown) {
          stt_is_shown = true;
          $("#scroll-to-top").fadeIn();
       } else if (scroll_top < win_height && stt_is_shown) {
          stt_is_shown = false;
          $("#scroll-to-top").fadeOut();
       }
   });
   $("#scroll-to-top").click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, 1500);
    });
 });
 </script>
</head>
<body>
<div class="site-header-links">
	<div class="container">
    		<ul class="fast-urls">
                	<li><a href="https://elogin.put.poznan.pl/">ekonto</a></li>
                    <li><a href="http://library.put.poznan.pl/pl">Biblioteka</a></li>
               		<li><a href="#">Wydział Budowy Maszyn i Zarządzania</a></li>
					<li><a href="#">Instytut Technologii Mechanicznej</a></li>
                    <li><a href=""><i class="fas fa-sign-in-alt"></i>
Zaloguj się</a></li>
					<li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
             </ul>
             <ul class="language">
             	<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Języki</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item language-link"  href="/en" xml:lang="en"><img class="language-icon" src="img/flags-mini/gb.png" alt="English" title="English"></a>
                          <a class="dropdown-item language-link" href="/pl" xml:lang="pl"><img class="language-icon" src="img/flags-mini/pl.png" alt="Polski" title="Polski"></a>
                        </div>
                      </li>
             </ul>
        </div>
    </div>
</div>
<div class="top">
	<a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="logo"></a>
    <a class="pp-logo" href="index.php"><img src="img/PP-PUT_logo_pelne-1.png" alt="logo"></a>
    
</div>
<header>
	<nav class="navbar navbar-expand-md menu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-th-list" aria-hidden="true"></i>

      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        	<li class="nav-item active">
            	<a class="nav-link" href="/">Strona główna</a>
          	</li>
        	<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">O zakładzie</a>
                <div class="dropdown-menu">
                  <!--<a class="dropdown-item" href="witamy.php">Witamy</a>-->
                  <a class="dropdown-item" href="historia.php">Historia</a>
                  <a class="dropdown-item" href="kadra.php">Kadra</a>
                  <a class="dropdown-item" href="badania.php">Badania</a>
                  <a class="dropdown-item" href="zzyciazakladu.php">Z życia zakładu</a>
                </div>
          	</li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dla studenta</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="specjalizacja.php">Dydaktyka</a>
              <a class="dropdown-item" href="materialy.php">Materiał do pobrania</a>
              <a class="dropdown-item" href="projekty.php">Linki</a>
              <a class="dropdown-item" href="rekrutacja.php">Studia podyplomowe</a>
              <a class="dropdown-item" href="doktoraty.php">Regulaminy i harmonogramy</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
        </ul>
        
      </div>
    </nav>
        	
</header>

 

