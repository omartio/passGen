<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Генератор паролей</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <form class="form-inline" role="form" onSubmit="reloadPass(); return false;">
                      <div class="form-group has-feedback input-group">
                        <span class="input-group-addon">Длина пароля: </span>
                        <input type="text" class="form-control" id="lenInputLabel" value="10">
                        <span class="input-group-btn">
                            <button class="btn btn-default"  type="submit"> <span class="glyphicon glyphicon-repeat"></span> </button>
                        </span>
                      </div>
                    </form>
                </div>
                <div class="col-md-7" style="height: 50px;">
                    <div class="alert alert-success" role="alert" style="display: none; padding-bottom: 10px;">
                        <strong>Пароль скопирован</strong> в буфер
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-bordered passwords-tabel">
                        <thead>
                            <tr><th>Простые</th> <th>Средние</th> <th>Сложные</th></tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            
            <p class="text-center text-muted">Кликните на пароль, чтобы скопировать</p>
            
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ZeroClipboard.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>