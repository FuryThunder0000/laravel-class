<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}" />
</head>

<body>

      <!-- old form -->

      <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                    <div class="card-body p-5">
                                          <h3 class="mb-5 text-center">Log in</h3>
                                          @if (session('error'))
                                          <div class="alert alert-danger" role="alert">
                                                {{session('error')}}
                                          </div>
                                          @endif
                                          <form action="{{route('auth.login')}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <div class="form-outline mb-4">
                                                      <label class="form-label" for="">Email</label>
                                                      <input type="email" placeholder="Email" name="email" class="form-control form-control-lg" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                      <label class="form-label" for="">Password</label>
                                                      <input type="password" placeholder="Password" name="password" class="form-control form-control-lg" />
                                                </div>

                                                <!-- Checkbox -->
                                                <button class="col-12 btn btn-primary btn-lg" type="submit">Login</button>
                                                <div class="d-flex align-items-center justify-content-center">
                                                      <p class="fs-7 mb-0 fw-bold">New?</p>
                                                      <a class="text-primary fw-bold ms-2" href="{{route('auth.registerView')}}">Create an account</a>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>


      <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
</body>

</html>