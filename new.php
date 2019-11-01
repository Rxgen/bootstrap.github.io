

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Sign Up form </title>
  </head>
  <body>
    <div class="container  mt-5">
        <div class="row">
            <div class="col-sm-7">
                <form class="form-group" action="form.php" target="_blank" method="POST">
                    <div>
                     <i class="fas fa-user"></i><label for="name">Name </label>
                        <input type="text" class="form-control" name="name"placeholder="User Name">
                    </div>
                    <div>
                            <i class="fas fa-user"></i><label for="name">Email </label>
                               <input type="email" class="form-control" name="email"placeholder="Email">
                           </div>
                           <div>
                                <i class="fas fa-user"></i><label for="name">Password </label>
                                   <input type="password" class="form-control" name="Password" placeholder="Password">
                               </div>
                               <input type="submit" value="Submit" class="btn btn-success mt-4"  name="submit">
                               <input type="submit" value ="Signup" class="btn btn-danger mr-4 mt-4">
                </form>
            </div>
        </div>
    </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




