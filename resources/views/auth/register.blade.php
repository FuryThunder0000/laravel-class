<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registre</title>
      <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}" />
</head>

<body>

      <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                    <div class="card-body p-5">

                                          <h3 class="mb-5 text-center">Register</h3>
                                          <form action="{{route('auth.register')}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <div class="form-outline mb-4">
                                                      <label class="form-label" for="">Nom</label>
                                                      <input type="text" placeholder="Nom" name="name" value="{{old('name')}}" class="form-control form-control-lg" />
                                                      @error('name')
                                                      <span class="text-danger d-block">{{ $message }}</span>
                                                      @enderror
                                                </div>
                                                <div class="form-outline mb-4">
                                                      <label class="form-label" for="">Email</label>
                                                      <input type="email" placeholder="Email" name="email" value="{{old('email')}}" class="form-control form-control-lg" />
                                                      @error('email')
                                                      <span class="text-danger d-block">{{ $message }}</span>
                                                      @enderror
                                                </div>
                                                <div class="form-outline mb-4">
                                                      <label class="form-label" for="">Password</label>
                                                      <input type="password" placeholder="Password" name="password" class="form-control form-control-lg" />
                                                      @error('password')
                                                      <span class="text-danger d-block">{{ $message }}</span>
                                                      @enderror
                                                </div>
                                                <!-- Checkbox -->
                                                <button class="col-12 btn btn-primary btn-lg" type="submit">Register</button>
                                                <div class="d-flex align-items-center justify-content-center">
                                                      <p class="fs-7 mb-0 fw-bold">Already registred?</p>
                                                      <a class="text-primary fw-bold ms-2" href="{{route('auth.loginView')}}">Login</a>
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