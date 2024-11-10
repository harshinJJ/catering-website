
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end mb-2">
                <button class="btn btn-outline-danger btn-rounded" type="button" id="empty_cart">Empty Cart</button>
            </div>
        </div>
        <div class="card rounded shadow-sm border-0">
            <div class="card-body">
                <h3 class="mb-3 text-center"><b>Your Cart</b></h3>
                <hr class="border-dark">
                <?php 
                    $qry = $conn->query("SELECT c.*,p.title,i.price,p.id as pid,i.description as idesc from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id where c.client_id = ".$_settings->userdata('id'));
                    while($row= $qry->fetch_assoc()):
                        $upload_path = base_app.'/uploads/product_'.$row['pid'];
                        $img = "";
                        foreach($row as $k=> $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                        if(is_dir($upload_path)){
                            $fileO = scandir($upload_path);
                            if(isset($fileO[2]))
                                $img = "uploads/product_".$row['pid']."/".$fileO[2];
                        }
                ?>
                    <div class="d-flex w-100 justify-content-between mb-3 py-3 border-bottom cart-item">
    <div class="d-flex align-items-center col-8">
        <div class="cart-prod-img mr-3">
            <img src="<?php echo validate_image($img) ?>" class="rounded img-fluid" alt="Product Image">
        </div>
        <div>
            <h5 class="mb-1"><?php echo $row['title'] ?></h5>
            <p><b>Price:</b> <span class="price"><?php echo number_format($row['price']) ?></span></p>
            <p><small><?php echo $row['idesc'] ?></small></p>
            <div class="input-group qty-input-group mt-2">
                <button class="btn btn-sm btn-secondary min-qty"><i class="fa fa-minus"></i></button>
                <input type="number" class="form-control qty text-center cart-qty" value="<?php echo $row['quantity'] ?>" readonly data-id="<?php echo $row['id'] ?>">
                <button class="btn btn-sm btn-secondary plus-qty"><i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
    <div class="col d-flex align-items-center justify-content-end">
        <button class="btn btn-sm btn-outline-danger rem_item" data-id="<?php echo $row['id']; ?>" type="button">
            <i class="fa fa-trash"></i> Remove
        </button>
        <h5 class="ml-2"><b class="total-amount"><?php echo number_format($row['price'] * $row['quantity']) ?></b></h5>
    </div>
</div>


                <?php endwhile; ?>
                <div class="d-flex justify-content-between py-3 border-top">
                    <h4 class="col-8 text-right">Grand Total:</h4>
                    <h4 id="grand-total">-</h4>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <a href="./?p=checkout" class="btn btn-dark btn-rounded px-4">Proceed to Checkout</a>
        </div>
    </div>
</section>

<style>
    /* Overall Card and Text Styling */
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h3, h4, .total-amount, #grand-total {
        color: #333;
    }

    /* Cart Item Styling */
    .cart-item {
    display: flex; 
    justify-content: space-between; /* Space between left and right content */
    align-items: center; /* Center align the items vertically */
}

/* Button styling for better visibility */
.rem_item {
    margin-left: 10px; /* Space between the button and total amount */
}

    .cart-item img {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    /* Quantity Input Group */
    .qty-input-group {
        max-width: 140px;
        display: flex;
        align-items: center;
    }
 
    .qty-input-group input {
        width: 60px;
        font-weight: bold;
    }

    /* Button Styling */
    .btn-rounded {
        border-radius: 30px;
    }
    .btn-outline-danger, .btn-danger {
        color: #dc3545;
    }
    .btn-outline-danger:hover, .btn-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }

    /* Grand Total */
    #grand-total {
        font-weight: bold;
        color: #28a745;
    }
</style>

<script>
    function calc_total(){
        var total  = 0

        $('.total-amount').each(function(){
            amount = $(this).text()
            amount = amount.replace(/\,/g,'')
            amount = parseFloat(amount)
            total += amount
        })
        $('#grand-total').text(parseFloat(total).toLocaleString('en-US'))
    }
    function qty_change($type, _this) {
    var qty = parseInt(_this.closest('.cart-item').find('.cart-qty').val());
    var price = parseFloat(_this.closest('.cart-item').find('.price').text().replace(/,/g, ''));
    var cart_id = _this.closest('.cart-item').find('.cart-qty').attr('data-id');

    if ($type === 'minus' && qty === 1) {
        alert('Quantity cannot be less than 1.');
        return;
    }

    qty = $type === 'minus' ? qty - 1 : qty + 1;
    var new_total = (qty * price).toLocaleString('en-US');
    _this.closest('.cart-item').find('.cart-qty').val(qty);
    _this.closest('.cart-item').find('.total-amount').text(new_total);
    calc_total();

    $.ajax({
        url: 'classes/Master.php?f=update_cart_qty',
        method: 'POST',
        data: { id: cart_id, quantity: qty },
        dataType: 'json',
        error: err => {
            console.error(err);
            alert('An error occurred while updating quantity.');
            end_loader();
        },
        success: function(resp) {
            if (resp.status === 'success') {
                end_loader();
            } else {
                alert('An error occurred.');
                end_loader();
            }
        }
    });
}

    function rem_item(id){
        $('.modal').modal('hide')
        var _this = $('.rem_item[data-id="'+id+'"]')
        var id = _this.attr('data-id')
        var item = _this.closest('.cart-item')
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=delete_cart',
            method:'POST',
            data:{id:id},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    item.hide('slow',function(){ item.remove() })
                    calc_total()
                    end_loader()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    function deleteCartItem(itemId) {
        $.ajax({
            url: 'classes/Master.php?f=delete_cart',  // Adjust this endpoint if necessary
            method: 'POST',
            data: { id: itemId },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Remove item from DOM
                    $('.rem_item[data-id="' + itemId + '"]').closest('.cart-item').fadeOut('slow', function() {
                        $(this).remove();
                        calc_total();  // Recalculate total after deletion
                    });
                } else {
                    alert('Error removing item.');
                }
            },
            error: function(err) {
                console.error(err);
                alert('An error occurred.');
            }
        });
    }

    $(function() {
        calc_total();  // Initial calculation of the total
        $('.rem_item').click(function() {
            const itemId = $(this).data('id');
            if (confirm('Are you sure you want to remove this item from the cart?')) {
                deleteCartItem(itemId);
            }
        });
        $('#empty_cart').click(function() {
            if (confirm('Are you sure you want to empty the cart?')) {
                empty_cart();
            }
        });
    });

    function empty_cart() {
    start_loader();
    $.ajax({
        url: 'classes/Master.php?f=empty_cart',
        method: 'POST',
        dataType: 'json',
        error: err => {
            console.error(err);
            alert('An error occurred while emptying the cart.');
            end_loader();
        },
        success: function(resp) {
            if (resp.status === 'success') {
                $('.cart-item').fadeOut('slow', function() { $(this).remove(); });
                $('#grand-total').text('0');
                end_loader();
            } else {
                alert('An error occurred.');
                end_loader();
            }
        }
    });
}
$(function() {
    calc_total();

    $('.min-qty').click(function() {
        qty_change('minus', $(this));
    });
    
    $('.plus-qty').click(function() {
        qty_change('plus', $(this));
    });

    $('#empty_cart').click(function() {
        if (confirm("Are you sure you want to empty your cart?")) {
            empty_cart();
        }
    });

    $('.rem_item').click(function() {
        if (confirm("Are you sure you want to remove this item from the cart?")) {
            rem_item($(this).data('id'));
        }
    });
});
</script>