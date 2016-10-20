<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="index-style.css" rel="stylesheet">
    <link href="nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="main-header">
        <div class="container">
          	<div class="row">
          		<div class="col-md-6 hidden-xs">
          			<!-- <img src="img/lado.png"> -->
          		</div>
          	</div>
        </div>
    </header>
    
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">L</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container main-content">
    	<main class="row">
	    	<section class="col-md-9 col-sm-12 col-xs-12 pull-right">
	    	      <main class="homeslide">
                <section class="slider">
                  <div id="slider" class="flexslider">
                    <ul class="slides">
                      <li class="lgimg">
                        <div class="fleximg"><img class="lazy" src="" data-src="https://s-media-cache-ak0.pinimg.com/originals/2e/77/0c/2e770c3e3a235efdf05eca072a7f933c.jpg" alt="one" /></div>
                      </li>
                      <li class="lgimg">
                        <div class="fleximg"><img class="lazy" src="" data-src="http://i.jootix.com/o/Jootix--a3e2565022.jpg" alt="jootix" /></div>
                      </li>
                      <li class="lgimg">
                        <div class="fleximg"><img class="lazy" src="" data-src="https://farm5.staticflickr.com/4002/4450587914_dd0c1d25b6_b.jpg" alt="staticflickr"/></div>
                      </li>
                      <li class="lgimg">
                        <div class="fleximg"><img class="lazy" src="" data-src="http://bsnscb.com/data/out/20/39345135-big-wallpapers.jpg" alt="bsnscb" /></div>
                      </li>
                    </ul>
                  </div>
                </section>
            </main>
	    	</section>   

	    	<aside class="col-md-3 col-sm-12 col-xs-12">
	    		<article class="panel panel-default">
				  	<header class="panel-heading">Kategori</header>
				    <section class="list-group">
					  <a href="#" class="list-group-item active">Cras justo odio</a>
					  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">Morbi leo risus</a>
					  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item">Vestibulum at eros</a>
					</section>
				</article>
	    	</aside>
    	</main>
    </div>

    <footer class="main-footer">
        <div class="container">
          
        </div>   
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css" media="screen" />
    <script defer src="flexslider/jquery.flexslider.js"></script>


    <script type="text/javascript">

       $.fn.resizelimg = function(wrpliw){
         var thiswidth = wrpliw.width();    
         $(this).find('.fleximg').css({width: thiswidth+"px"});  
      };

      $(window).resize(function(){
          $("#slider .lgimg").resizelimg($("#slider"));
      });



      $(window).load(function(){
        $("#slider .lgimg").resizelimg($("#slider"));
        $('#slider').flexslider({
            animation: "slide",
            animationLoop: true,
            controlNav: false,
            init: function (slider) {
                // lazy load
                $("img.lazy").slice(0,5).each(function () {
                    var src = $(this).attr("data-src");
                    //$(this).attr("src", src).removeAttr("data-src").removeClass("lazy");
                    $(this).attr("src", src).removeAttr("data-src");
                });
            },
            before: function (slider) {
                // lazy load
                $("img.lazy").slice(0,3).each(function () {
                    var src = $(this).attr("data-src");
                    $(this).attr("src", src).removeAttr("data-src");
                });
            }
        });

      });
    </script>
  </body>
</html>