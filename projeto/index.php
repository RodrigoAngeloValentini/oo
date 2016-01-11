
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Projeto Orientação a Objetos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                padding-top: 70px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Projeto OO</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <select class="form-control" id="list-order">
                                <option>Ordenar por:</option>
                                <option value="sort">Ordem crescente</option>
                                <option value="rsort">ordem descrecente</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="div-content">

                </div>
            </div>
        </div><!-- /.container -->

        <script src="js/jquery.2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            $( document ).ready(function() {
                $("#list-order").change();
            });
            $("#list-order").change(function() {
                var value = $(this).val();
                if(value != null){
                    $.ajax({
                        method: "POST",
                        url: "cliente_ajax.php",
                        data: { order:value }
                    })
                    .done(function( response ) {
                        $("#div-content").empty();
                        $("#div-content").html(response);
                    });
                }
            });
        </script>
  </body>
</html>