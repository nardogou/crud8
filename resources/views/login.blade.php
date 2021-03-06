<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/" />

    <!-- Bootstrap core CSS -->
    <link href="../..dist/css/bootstrap.min.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet" />
    <style>
        body {
            background-color: rgb(240, 207, 207);
        }

    </style>
</head>

<body class="text-center">
    <div class="global-container"
        style="height: -100px; display: flex; align-items: center; justify-content: center; padding-top: 7rem;"></div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/" method="post">
                  @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Login <i class="bi bi-arrow-right-square"></i> </h1>
                    <div class="form-floating">
                        <input type="email" name="email"class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"
                            required autofocus value="{{old ('email')}}" />
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"class="form-control" id="password" placeholder="Password"
                            required />
                        <label for="password">Password</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit"><a href="/home"></a>
                            <i class="bi bi-box-arrow-in-right"></i>
                            Login
                        </button>
                    </div>
                </form>
                <small class="d-block text-center mt-2"> Not Have Account <a href="/register">Register Now! </a></small>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
