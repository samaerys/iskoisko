<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		img {
		    vertical-align: middle;
		    border-style: none;
		    width: 150px;
		}
	</style>
	<?php $this->load->view('head/load')?>
	<title>Isko Projfect</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="
    background: brown;
">
  <a class="navbar-brand"><img class="logolang" src="assets/images/homepage/logoname.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item">
        <!-- dropdown for courses -->
          <div class="dropdown">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
              Coursesa
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Development</a>
              <a class="dropdown-item" href="#">Business</a>
              <a class="dropdown-item" href="#">It & Software</a>
            </div>
          </div>
          <!-- end of dropdown   -->
      </li>
      <li class="nav-item">
        <!-- search bar -->
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <!-- end of search bar -->
      </li>
    </ul>

    <!-- instructor button -->
    <button type="button" class="btn btn-danger instructor" data-toggle="modal" data-target="#signupmodal">Become an Instructor</button>
    <!-- end of instructor button -->

    <!-- shopping cart -->
    <button type="button" class="btn btn-light cart" onclick="location.href='/library'"><i class="fa fa-shopping-cart"></i></button>
    <!-- end of shopping cart -->

    <button type="button" class="btn btn-success login" data-toggle="modal" data-target="#loginmodal" >Login</button>
    <button type="button" class="btn btn-secondary signup" data-toggle="modal" data-target="#signupmodal">Signup</button>

  </div>
</nav>
<!-- end of navbar -->


<!-- jumbotron -->
<div class="jumbotron">
  <h1>EDUCATION ON THE GO</h1>
  <h4>Learning anytime, anywhere</h4>
</div>
<!-- end of jumbotron -->
<!-- Nav tabs -->
<div class="tabs">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Software</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Hardware</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Programming</a>
    </li>
  </ul>
</div>
<!-- Tab panes -->
<div class="container">
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="card-deck">
          <div class="card bg-light">
            <img class="card-img-top" size="height:50%"src="assets/images/homepage/software1.png" alt="Card image">
            <div class="card-body text-center">
              <p class="card-text">Software Learning Object #1</p>
            </div>
          </div>
          <div class="card bg-light">
            <img class="card-img-top" size="height:50%"src="assets/images/homepage/software2.png" alt="Card image">
            <div class="card-body text-center">
              <p class="card-text">Software Learning Object #2</p>
            </div>
          </div>
          <div class="card bg-light">
            <img class="card-img-top" size="height:50%"src="assets/images/homepage/software3.png" alt="Card image">
            <div class="card-body text-center">
              <p class="card-text">Software Learning Object #3</p>
            </div>
          </div>
          <div class="card bg-light">
            <img class="card-img-top" size="height:50%"src="assets/images/homepage/software4.png" alt="Card image">
            <div class="card-body text-center">
              <p class="card-text">Software Learning Object #4</p>
            </div>
          </div>
        </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <div class="card-deck">
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/hardware1.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Hardware Learning Object #1</p>
          </div>
        </div>
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/hardware2.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Hardware Learning Object #2</p>
          </div>
        </div>
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/hardware3.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Hardware Learning Object #3</p>
          </div>
        </div>
        <div class="card bg-light">
            <img class="card-img-top" size="height:50%"src="assets/images/homepage/hardware4.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Hardware Learning Object #4</p>
          </div>
        </div>
      </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="card-deck">
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%" src="assets/images/homepage/prog1.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Programming Learning Object #1</p>
          </div>
        </div>
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/prog2.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Programming Learning Object #2</p>
          </div>
        </div>
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/prog3.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Programming Learning Object #3</p>
          </div>
        </div>
        <div class="card bg-light">
          <img class="card-img-top" size="height:50%"src="assets/images/homepage/prog4.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Programming Learning Object #4</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of tabs -->
<br>
<br>
<br>
<br>
<div class="categories">
      <h4>Top Categories</h4>
</div>
<br>
<br>
<!-- category list -->
 <div class="category-list">
    <div class="card-deck">
      <div type="button" class="card bg-light shadow">
        <div class="card-body text-center">
          <p class="card-text">Development</p>
        </div>
      </div>
      <div type="button" class="card bg-light shadow">
        <div class="card-body text-center">
          <p class="card-text">Business</p>
        </div>
      </div>
      <div type="button" class="card bg-light shadow">
        <div class="card-body text-center">
          <p class="card-text">IT and Software</p>
        </div>
      </div>
      <div type="button" class="card bg-light shadow">
        <div class="card-body text-center">
          <p class="card-text">Design </p>
        </div>
      </div>
    </div>
    <br>
    <div class="card-deck">
        <div type="button" class="card bg-light shadow">
          <div class="card-body text-center">
            <p class="card-text">Marketing</p>
          </div>
        </div>
        <div type="button" class="card bg-light shadow">
          <div class="card-body text-center">
            <p class="card-text">Personal Development</p>
          </div>
        </div>
        <div type="button" class="card bg-light shadow">
          <div class="card-body text-center">
            <p class="card-text">Photography</p>
          </div>
        </div>
        <div type="button" class="card bg-light shadow">
          <div class="card-body text-center">
            <p class="card-text">Music </p>
          </div>
        </div>

 </div>
<!-- end of category list -->

<!-- signup modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="InputFullname1"  placeholder="Full Name">
                  </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                </div>
                <a type="button" class="btn btn-danger" href="/mainpage">Sign Up</a>
              </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer justify-content-center">
          <div class="signup-footer">
            <h6>Already have an account?</h6><button type="button" class="btn btn-link" data-toggle="modal" data-target="#loginmodal" >Log In</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end of signup modal -->

  <!-- login modal -->
  <div class="modal fade " id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
              <form>
                  <div class="form-group">
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Remember me</label>
                  </div>
                  <a type="button" class="btn btn-danger" href="/mainpage">Login</a>
                </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer justify-content-center">
            <div class="signup-footer">
              <h6>Don't have an account? </h6><button type="button" class="btn btn-link" data-toggle="modal" data-target="#signupmodal">Sign up</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- end of login modal -->

<!-- footer -->
<footer class="page-footer pt-5">
  <div class="footer-copyright text-center py-3">
    2018 copyright
  </div>
</footer>
<!-- end of footer -->s

</body>
</html>