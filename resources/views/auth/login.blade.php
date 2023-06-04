
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Login</title>
<link rel="stylesheet" href="{{ asset('css/login real.css') }}">
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row text-center">                   
                <div class="col-md-6 login-form-1">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                    <center><img src="{{ ('background/logo-berani-bicara-1.png') }}" width="280px" height="280px"></center> 
                    <h3><b>Masuk<b></h3>

                    
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>Email atau Password Anda Salah!.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group text-right">
                            <a class="ForgetPwd" href="{{ route('password.request') }}">Lupa kata sandi</a>
                        </div>
                        <center>
                            <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Masuk" />
                        </div>
                        </center>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ route('register') }}"
                                class="link-danger">Daftar</a></p>
                          </div>
                        
                    </form>
                </div>
            </div>
        </div>


