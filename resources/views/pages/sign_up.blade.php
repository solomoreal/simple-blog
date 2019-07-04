@extends('layouts.main')
@section('content')
<!--Main Area-->
  <main>
    <section class="login">
      <div class="row">
        <div class="col-sm-9 col-md-6 mx-auto my-2">
          <div class="card shadow">
            <div class="card-body px-5 py-2">
              <h5 class="card-title text-center text-capitalize">Sign Up</h5>
              <form class="form-signin">
                <div class="form-label-group my-2">
                  <label for="inputName">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"
                      required>
                  </div>
                </div>
                <div class="form-label-group my-2">
                  <label for="inputEmail">Email Address</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-envelope"></i></div>
                    </div>
                    <input type="email" class="form-control" placeholder="Email Address" required>
                  </div>
                </div>

                <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" placeholder="password" required>
                  </div>
                </div>
                <div class="form-label-group">
                  <label for="inputPassword">Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" placeholder="Confirm password" required>
                  </div>
                </div>

                <div class="form-check my-2">
                  <label class="form-check-label" for="autoSizingCheck2">
                    Already a member? <a href="login.html" class="text-capitalize">login</a>
                  </label>
                </div>
                <button class="btn btn-info btn-block text-uppercase" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--Main Area End-->
  @endsection

  