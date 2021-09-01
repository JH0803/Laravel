<!DOCTYPE html>
<html>
  <head>
    <title> Sign Up Form</title>
  </head>
  <body>
    <div class="container mt-5">
        <form action="{{url('user/create')}}" method="POST">
            <div class="row">

                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Sign Up Form </h4>
                        </div>
                        <br><br>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name"> Name <span class="text-danger"> * </span> </label>
                                    <input type="text" name="name" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email"> Email <span class="text-danger"> * </span> </label>
                                    <input type="text" name="email" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone"> Phone <span class="text-danger"> * </span></label>
                                    <input type="text" max="10" name="phone" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password"> Password <span class="text-danger"> * </span></label>
                                    <input type="password" name="password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password <span class="text-danger"> * </span></label>
                                    <input type="password" name="confirmpassword" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address"> Address <span class="text-danger"> * </span></label>
                                    <input type="text" name="address" class="form-control">
                            </div>
                            <br>
                        </div>
                        <br><br>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><a href="product.blade.php"> Register </a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>