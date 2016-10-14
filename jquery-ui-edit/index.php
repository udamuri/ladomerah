<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jquery Ui</title>

    <!-- Bootstrap -->
    <link href="../gallery_carousel/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- JUI -->
    <link href="jquery-ui-1-12-1/jquery-ui.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
         <div class="row">
              <div class="col-md-12">
                <h4>Datepicker</h4>
              </div>
         </div>
         <div class="row">
            <div class="col-md-2">
                <input id="datepicker" type="text" name="date" class="form-control">
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                </button>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
              <div class="week-picker"></div>
          </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../gallery_carousel/bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui-1-12-1/jquery-ui.min.js"></script>

      <script>
        $( function() {
          var array = ['2016-10-25','2016-10-28'];
          var i = 0;
          $( "#datepicker, #datepicker_modal" ).datepicker({
              dateFormat: "d M, y",
              changeMonth: true,
              changeYear: true,
              beforeShowDay: function(date) {
                  console.log(array[i]);
                  i++;
                  if($.inArray($.datepicker.formatDate('yy-mm-dd', date ), array) > -1)
                  {
                    return [false,'booked-red', 'Booked out'];
                  }
                  else
                  {
                      return [true,'available', 'Available'];
                  }
              }
          });
        } );

        // Since confModal is essentially a nested modal it's enforceFocus method
        // must be no-op'd or the following error results 
        // "Uncaught RangeError: Maximum call stack size exceeded"
        // But then when the nested modal is hidden we reset modal.enforceFocus
        var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;

        $.fn.modal.Constructor.prototype.enforceFocus = function() {};

        //$confModal.on('hidden', function() {
            //$.fn.modal.Constructor.prototype.enforceFocus = enforceModalFocusFn;
        //});

        //$confModal.modal({ backdrop : false });

        $(function () {
            $('.week-picker').datepicker({
                    showOtherMonths: true,
                    selectOtherMonths: true,
                    onSelect: function (dateText, inst) {
                        
                    },
                    beforeShowDay: function (date) {
                        var cssClass = '';
                        return [true, cssClass];
                    },
                    onChangeMonthYear: function (year, month, inst) {
                        
                    },
                    numberOfMonths: [4,3],
                    showWeek: true,
                    //showCurrentAtPos: new Date().getMonth()
                });
            });

      </script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
           <input id="datepicker_modal" type="text" name="date" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </body>
</html>

