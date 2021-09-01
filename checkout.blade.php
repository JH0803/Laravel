<!DOCTYPE html>
<head>
    <title>Payment</title>
</head>
<body>
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name: </label>
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                    <br>
                                    <div class="col form-group">
                                        <label>Last name: </label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label>Address: </label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>State: </label>
                                        <input type="text" class="form-control" name="state">
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label>District: </label>
                                        <input type="text" class="form-control" name="district">
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Postcode: </label>
                                        <input type="text" class="form-control" name="postcode">
                                        <br>
                                        <br>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Phone Number: </label>
                                        <input type="text" class="form-control" name="phonenumber">
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Email Address: </label>
                                    <input type="email" class="form-control" name="email">
                                    <br>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Order Notes: </label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                    <br>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt><strong>Total cost (MYR): </strong>1599</dt>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit"><a href="welcome.blade.php">Place Order</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>