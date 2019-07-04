@extends('layouts.main')
@section('content')
  <!--Main Area-->
  <main>
    <section class="login">
      <div class="row">
        <div class="col-sm-10 col-md-6 mx-auto">
          <div class="card shadow">
            <div class="card-body px-5">
              <h5 class="card-title text-center text-capitalize">Login</h5>
              <form class="form-signin">
                <div class="form-label-group my-2">
                  <label for="inputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"
                      required>
                  </div>
                </div>

                <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" id="inlineFormInputGroupUsername" placeholder="password"
                      required>
                  </div>
                </div>

                <div class="form-check my-2">
                  <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                  <label class="form-check-label" for="autoSizingCheck2">
                    Remember me
                  </label>
                </div>
                <div class="form-check my-2">
                  <label class="form-check-label" for="autoSizingCheck2">
                    Not yet a member? <a href="sign_up.html" class="text-capitalize">Sign Up</a>
                  </label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <a href="#"> Forget password</a>
                </div>
                <button class="btn btn-info btn-block text-uppercase" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--Main Area End-->
@endsection
  