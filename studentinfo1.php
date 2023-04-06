<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">IITP Training and Placement Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

  </div>
</nav>
<div class="container mt-4">
  <form action="" method="post">
    <div class="row g-3">
      <div class="col">
        <label>UserName</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" aria-label="First name">
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email">
      </div>
    </div>
    <br>
    <div class="row g-3">
      <div class="col">
        <label>RollNo</label>
        <input type="text" class="form-control" placeholder="Enter Your IITP RollNo" aria-label="First name">
      </div>
      <div class="col">
        <label>Phone Number</label>
        <input type="text" class="form-control" placeholder="Enter Your Phone Number" aria-label="First name">
      </div>
      <div class="col">
        <label>Year of Passing</label>
        <input type="text" class="form-control" placeholder="Enter Your Year of Passing" aria-label="First name">
      </div>
    </div>
    <br>
    <div class="row g-3">
      <div class="col">
        <label>Degree</label>
        <input type="text" class="form-control" placeholder="Enter Your Degree" aria-label="First name">
      </div>
      <div class="col">
        <label>Branch</label>
        <input type="text" class="form-control" placeholder="Enter Your Branch" aria-label="First name">
      </div>
      <div class="col">
        <label for="birthdate">Birthdate:</label>
        <div class="input-group">
          <input type="date" id="birthdate" name="birthdate" class="form-control">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-calendar"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row g-3 justify-content-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
    <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline" placeholder="Enter Password">
  </div>

  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Confirm Password</label>
    <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline" placeholder="Confirm Password">
  </div>
</div>
<br>
<br>
<hr>
<div class="row g-3 justify-content-center">
  <div class="col-auto">
    <button type="submit" class="btn btn-primary btn-lg">Continue</button>
  </div>
</div>

  </form>
</div>
