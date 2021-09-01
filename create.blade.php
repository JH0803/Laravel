<!DOCTYPE html>
<html>
  <head>
    <title> Sign Up Form</title>
  </head>
  <body>
    <div class="container mt-5">
        <form action="{{url('user/create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 m-auto">
                    <div class="card shadow">
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('success')}}
                            </div>
                        @elseif(Session::has('failed'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('failed')}}
                            </div>
                        @endif

                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Sign Up Form </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name"> Name <span class="text-danger"> * </span> </label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                                    {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="email"> Email <span class="text-danger"> * </span> </label>
                                    <input type="text" name="email" class="form-control" value="{{old('email')}}" />
                                    {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="phone"> Phone <span class="text-danger"> * </span></label>
                                    <input type="text" max="10" name="phone" class="form-control" value="{{old('phone')}}" />
                                    {!!$errors->first("phone", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="password"> Password <span class="text-danger"> * </span></label>
                                    <input type="password" name="password" class="form-control" value="{{old('password')}}" />
                                    {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password <span class="text-danger"> * </span></label>
                                    <input type="password" name="confirmpassword" class="form-control" value="{{old('confirmpassword')}}" />
                                    {!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="address"> Address <span class="text-danger"> * </span></label>
                                    <input type="text" name="address" class="form-control" value="{{old('address')}}" />
                                    {!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>