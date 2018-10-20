<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col text-center">
                <h3>@lang('secret-santa.title')</h3>
                <br>
                <img src="http://www.freejupiter.com/wp-content/uploads/2014/10/Mesmerizing-Santa-Claus-Wallpapers-8.jpg" width="150px">
            </div>
            <div class="col"></div>
        </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                    <form method="POST" action="/api/signup">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input class="form-control" name="email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>            
                </div>
            <div class="col-sm-4">
            </div>
        </div>
    </body>
</html>
