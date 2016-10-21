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
    <link href="style.css" rel="stylesheet">
    <link href="nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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

    <div class="container">
      <div class="row">
          <?php for($i = 0;$i<9;$i++) { ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="carousel-lado<?php echo $i;?>" class="carousel slide carousel-slide" data-interval="false" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <div class="small">
                                <img class="lazy" src="img/1.jpg" alt="First slide" >
                                <div class="carousel-caption">
                                    <p>First slide</p>
                                </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="small">
                              <img class="lazy" src="" data-src="img/2.jpg" alt="Second slide">
                              <div class="carousel-caption">
                                    <p>Second slide</p>
                                </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="small">
                              <img class="lazy" src="" data-src="img/3.jpg" alt="Third slide">
                              <div class="carousel-caption">
                                    <p>Third slide</p>
                                </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="small">
                              <img class="lazy" src="" data-src="img/4.jpg" alt="Third slide">
                              <div class="carousel-caption">
                                    <p>Third slide</p>
                                </div>
                            </div>
                          </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-lado<?php echo $i;?>" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-lado<?php echo $i;?>" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="panel-footer">
                      <button class="btn btn-default btn-sm">default</button>
                      <button class="btn btn-primary btn-sm">primary</button>
                      <button class="btn btn-warning btn-sm">warning</button>
                      <button class="btn btn-danger btn-sm">danger</button>
                      <button class="btn btn-info btn-sm">info</button>
                </div>
              </div>
          </div>

          <?php } ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        var cHeight = 0;
        $('.carousel-slide').on('slide.bs.carousel', function (e) {
             var $nextImage = null;

              $activeItem = $('.item.active', this);


              if (e.direction == 'left'){
                  $nextImage = $activeItem.next('.item').find('img');
              } else {
                  if ($activeItem.index() == 0){
                      $nextImage = $('img:last', $activeItem.parent());
                  } else {
                      $nextImage = $activeItem.prev('.item').find('img');
                  }
              }

              // prevents the slide decrease in height
              if (cHeight == 0) {
                 cHeight = $(this).height();
                 $activeItem.next('.item').height(cHeight);
              }

              // prevents the loaded image if it is already loaded
              var src = $nextImage.data('src');

              if (typeof src !== "undefined" && src != "") {
                 $nextImage.attr('src', src)
                 $nextImage.data('src', '');
              }
        }) 
    </script>
  </body>
</html>