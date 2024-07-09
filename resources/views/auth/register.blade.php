<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('auth/assets/css/style.css')}}">
    <title>Register</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="form-section">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('auth/assets/images/logo-2.png')}}" alt="logo">
                        </a>
                    </div>
                    <h3>Sign Into Your Account</h3>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group form-box">
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Full name" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            <div class="form-group form-box">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            {{-- <div class="form-group form-box">
                                <input name="mbl_no" type="text" class="form-control" placeholder="Mobile Number" aria-label="Mobile Number">

                            </div> --}}
                            <div class="form-group form-box">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            <div class="form-group form-box">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type Password">

                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme">Register</button>
                            </div>
                        </form>
                    </div>
                    <p>Already have an account? <a href="{{url('/login')}}" class="thembo"> login here</a></p>
                </div>

            </div>
            <div class="col-xl-8 col-lg-7 col-md-12 bg-img">
                <div class="info">
                    <div class="heading-text">
                        <h1>Welcome to our app</h1>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  make a type specimen book.  make a type specimen book.</p>
                </div>
            </div>
        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
