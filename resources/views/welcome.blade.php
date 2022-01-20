<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color: #33FFC9;">
    <div class="container text-center">
              <div class="row">
                  <div class="col-md-4 m-auto">
                    <form action="calculation" method="POST">
                        @csrf
                        <div class="card" style="background-color: #2E8B57;">
                          <div class="card-body m-auto">
                              <h1 class="text-center text-light">Arithmetic Calculator</h1>

                              <div class="form-group row">
                                  <div class="col-md-9">
                                      <input type="number" name="firstnumber" class="form-control" placeholder="Enter first number" required="">
                                  </div>
                              </div></br>

                               <div class="form-group row">
                                  <div class="col-md-9">
                                      <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number" required="">
                                  </div>
                               </div>
                          </div></br>
                          <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
                      </div>
                    </form>
                  </div>
              </div>
          </div> <br>

          <div class="row">
              <div class="col-md-4 m-auto">
                  @if(session('msg'))
                  <div class="alert alert-success">
                      <h1 class="text-center">{{ session('msg') }}</h1>
                  </div>
                  @endif
              </div>
          </div>
    </body>
</html>
