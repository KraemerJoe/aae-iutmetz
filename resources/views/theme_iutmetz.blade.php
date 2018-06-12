<!DOCTYPE html>
<html lang="fr">
    
    
<!-- Mirrored from dptinfo.iutmetz.univ-lorraine.fr/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 May 2018 14:47:19 GMT -->
<head>
        <meta charset="utf-8">
        <title>Département Informatique IUT de Metz - Actualités</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Actualités au Département Informatique de l'IUT de Metz">
        <meta name="author" content="Pierre Laroche">
        <link rel="icon" href="img/favico.ico" />
        <link href="https://dptinfo.iutmetz.univ-lorraine.fr/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://dptinfo.iutmetz.univ-lorraine.fr/css/main.css" rel="stylesheet" type="text/css" />
        
        <link href="https://dptinfo.iutmetz.univ-lorraine.fr/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.html">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.html">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44784056-2', 'auto');
  ga('send', 'pageview');

</script>
    </head>
    
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> 
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="#">Département informatique</a>
                    <div style="height: 0px;" class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="https://dptinfo.iutmetz.univ-lorraine.fr">Retour à l'accueil</a></li>
                            <li><a href="news">Actualités</a></li>
                            <li><a href="annuaire">Annuaire</a></li>
                            @if (Auth::check())
                        <li><a href="{{ route('home') }}">Modifier mon profil</a></li>
                                    @if (auth()->user()->admin == 1) 
                                    <li><a href="{{ route('admin') }}"><font color="#96b2ea">Panel d'administration</font></a></li>
                                    @endif

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>


                        @else

                        <li><a href="{{ route('login') }}">Connexion</a></li>
                        <li><a href="{{ route('register') }}">Inscription</a></li>
                    @endif

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <div class="container cadre_principal">
            <!-- Main hero unit for a primary marketing message or call to action
            -->
            <div class="hero-unit">
          <a href="http://www.iut-metz.univ-lorraine.fr/"><img class="pull-right img-circle" width="250" src="https://dptinfo.iutmetz.univ-lorraine.fr/img/Logo_IUT_Metz.Info_UL.small.png" alt="logo iut metz département info" /></a>
                 <h1>Association des anciens étudiants</h1>
            </div>

            <div class="row">
            <div class="span12">

        <div class="container">
            @include('flash')
            @yield('content')
        </div>
                
        
            
<hr>
            <footer>
        <p><strong><small>Département Informatique de l'IUT de Metz</small></strong>
        <a href="https://twitter.com/iutinfometz"><img src="https://dptinfo.iutmetz.univ-lorraine.fr/img/twitter.png" width="16" alt="suivez-nous sur twitter"/></a>
        <a href="http://www.linkedin.com/groups/Département-Informatique-IUT-Metz-4911255/about"><img src="https://dptinfo.iutmetz.univ-lorraine.fr/img/linkedin-icone-4058-16.png" width="16" alt="Etudiants ou anciens, adhérez à notre groupe LinkedIn !"/></a></p>
            </footer>

            </div>
            </div>
        </div>
        <!-- /container -->
        <!-- Le javascript==============================================-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="admin_template/vendor/jquery/jquery.min.js"></script>
    <script src="admin_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="admin_template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="admin_template/vendor/chart.js/Chart.min.js"></script>
    <script src="admin_template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin_template/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="admin_template/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="admin_template/js/sb-admin-datatables.min.js"></script>
    <script src="admin_template/js/sb-admin-charts.min.js"></script>
    </body>


<!-- Mirrored from dptinfo.iutmetz.univ-lorraine.fr/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 May 2018 14:47:25 GMT -->
</html>
