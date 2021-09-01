<!DOCTYPE html>
<head>
    <title>Add to Cart</title>
</head>
<body>
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="https://phonesdata.com/files/models/Samsung-I9100-Galaxy-S-II-745.jpg" alt="Samsung Galaxy S2" width="1000" height="500"></div>
                            <div class="col-sm-9">
                                <h1>Samsung Galaxy S2</h1>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price"><strong>Price (MYR): </strong>1599</td>
                    <td data-th="Quantity">
                        <input type="number" name="Quantity">
                    </td>
                    <td data-th="Subtotal" class="text-center"><strong>Subtotal (MYR): </strong>1599</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total (MYR): </strong>1599</h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="checkout.blade.php">Proceed To Checkout</a>
            </td>
        </tr>
    </tfoot>
</table>
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
</body>
</html>