@extends('base')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-sm-4 offset-sm-4">
        
        <div class="card shadow mb-5 border border-light rounded bg-dark" style="position:relative; top: 150px;">
        
            <div class="card-body" id="card-bodyy">
                <h2 class="text-center mb-4" style="">Cheaptalk.com</h2>
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <h3 style="font-weight: 400; margin-left: 50px; color:white; font-size:20px;">Sign Up</h3>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic"><i class="fa fa-user"  style="color:#ea2560"></i></span>
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control" required="">
                        </div>
                            @error('name')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic"><i class="fa fa-envelope" style="color:#ea2560"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                            @error('email')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic"><i class="fa fa-lock"  style="color:#ea2560"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                           
                        </div>
                        @error('password')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic"><i class="fa fa-lock"  style="color:#ea2560"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control" required="">
                           
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 text-center">
                        <div class="form-group text-white">
                            <div class="maxl">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="Male" checked>
                                    <span> Male </span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="Female">
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                        @error('gender')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex mt-4">
                        <div class="flex-grow-1">
                            <a href="{{ '/' }}" class="" style="text-decoration:none; color:#ea2560; margin-left: 40px;">Already have an account</a>
                        </div>
                        <button class="btn px-5" style="background-color:#ea2560; color:white;"><span class="fas fa-sign-out"></span> Register</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>


@endsection

<style>
    #basic {
    width: 40px;
    text-align: center;

}
#card-bodyy {
   
}



</style>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunctionConfirm() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
