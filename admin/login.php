<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/admin/admin.css">
</head>
<body class="bg-success">

  <div class="container">
    <!-- login form start -->
    <div class="row justify-content-center h-100vh" id="login-form-box">
        <div class="col-lg-10 my-auto">
          <div class="card-group">


              <div class="card p-4 ">
                <div class="card-header bg-info">
                    <h2 class="text-center font-weight-bold">Login to your account</h2>
                </div>
                      <div class="card-body bg-light">
                        <form action="#" method="post" class="px-3" id="login-form" >
                            <div class="input-group input-group-lg form-group">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-envelope"></i>
                                </span>
                              </div>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter you email">

                            </div>

                            <div class="input-group input-group-lg form-group mt-3">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-key"></i>
                                </span>
                              </div>
                              <input type="text" name="password" class="form-control" id="password" placeholder="Enter you password">

                            </div>

                            <div class="form-group mt-3">

                              <div class="float-left custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="" value="" id="rememberMe">
                                <label class="custom-control-input" for="rememberMe">Remember me</label>
                              </div>

                              <!-- <div class="float-right  margin-left-4 padding-left-4">
                                <a class="text-decoration-none" href="javascript:">Forgot Password?</a>
                              </div> -->

                            </div>
                            <div class="form-group mt-4 float-right">
                              <div class="float-right">

                              </div>
                              <div class="form-group">
                                  <a class="text-decoration-none floats" id="forGot" href="#">Forgot Password?</a>
                              </div>

                            </div>


                      </div>
                      <div class="card-footer bg-secendory">
                        <div class="form-group">
                              <input type="submit" value="Sign In" class="btn btn-primary text-dark text-bold floats mt-3" id="btn">
                        </div>

                      </div>
                  </form>

              </div>


              <div class="card p-4 bg-black">
                    <img class="img-fluid" src="../assets/images/679140.png" alt="" />
                    <input type="submit" value="Sign Up" class="btn btn-dark text-primary align-self-center mt-5" id="signUp">
              </div>



          </div>
        </div>
    </div>
    <!-- login form end -->
    <!-- login register start -->
    <div style="display:none" class="row justify-content-center h-100vh mb-3" id="register-form-box">
        <div class="col-lg-10 my-auto">
          <div class="card-group">


              <div class="card p-4 ">
                <div class="card-header bg-info">
                    <h2 class="text-center font-weight-bold">Regester to your account</h2>
                </div>
                      <div class="card-body bg-light">
                        <form action="#" method="post" class="px-3" id="login-form" >
                            <div class="input-group input-group-lg form-group">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-user"></i>
                                </span>
                              </div>
                              <input type="name" name="name" class="form-control" id="name" placeholder="Enter you name">

                            </div>
                            <div class="input-group input-group-lg form-group mt-3">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-envelope"></i>
                                </span>
                              </div>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter you email">

                            </div>

                            <div class="input-group input-group-lg form-group mt-3">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-key"></i>
                                </span>
                              </div>
                              <input type="text" name="password" class="form-control" id="password" placeholder="Enter you password">

                            </div>
                            <div class="input-group input-group-lg form-group mt-3">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-key"></i>
                                </span>
                              </div>
                              <input type="text" name="re-password" class="form-control" id="re-password" placeholder="Re-type password">

                            </div>

                            <div class="form-group mt-3">

                              <div class="float-left custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="" value="" id="rememberMe">
                                <label class="custom-control-input" for="rememberMe">Remember me</label>
                              </div>

                              <!-- <div class="float-right  margin-left-4 padding-left-4">
                                <a class="text-decoration-none" href="javascript:">Forgot Password?</a>
                              </div> -->

                            </div>
                            <div class="form-group mt-4 float-right">
                              <div class="float-right">

                              </div>
                              <!-- <div class="form-group">
                                  <a class="text-decoration-none floats" href="javascript:">Forgot Password?</a>
                              </div> -->

                            </div>


                      </div>
                      <div class="card-footer bg-secendory">
                        <div class="form-group">
                              <input type="submit" value="Regester" class="btn btn-primary text-dark text-bold floats mt-3" id="">
                        </div>

                      </div>
                  </form>

              </div>


              <div class="card p-4 bg-black">
                    <img class="img-fluid mb-5 pb-4" src="../assets/images/679140.png" alt="" />
                    <input type="submit" value="Sign In" class="btn btn-dark text-primary align-self-center mt-5 mgs" id="signIn">
              </div>



          </div>
        </div>
    </div>
    <!-- login register end -->
    <!-- login forgotten start -->
    <div style="display:none;" class="row justify-content-center h-100vh mt-5" id="forgotPass-form-box">
        <div class="col-lg-10 my-auto">
          <div class="card-group">


              <div class="card p-4 ">
                <div class="card-header bg-info">
                    <h2 class="text-center font-weight-bold">Forgotten Password</h2>
                </div>
                      <div class="card-body bg-light">
                        <form action="#" method="post" class="px-3" id="login-form" >
                            <div class="input-group input-group-lg form-group">
                              <div class="input-group-prepend ">
                                <span class="input-group-text p-3">
                                  <i class="fas fa-envelope"></i>
                                </span>
                              </div>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter you email">

                            </div>

                      </div>
                      <div class="card-footer bg-secendory">
                        <div class="form-group">
                              <input type="submit" value="Submit" class="btn btn-primary text-dark text-bold floats mt-3" id="btn">

                        </div>

                      </div>
                  </form>

              </div>


              <div class="card p-4 bg-black">
                    <img class="img-fluid" src="../assets/images/679140.png" alt="" />
                    <input type="submit" value="Back" class="btn btn-dark text-primary align-self-center mt-4" id="back">
              </div>



          </div>
        </div>
    </div>
    <!-- login forgotte  end -->
  </div>

  <script src="../assets/js/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/admin/admin.js"></script>
</html>
