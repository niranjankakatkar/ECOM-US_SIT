
<?php
 include '../niru_collection.php'; 
 include '../inner_header.php';


$coupon_discount = 0;
$subtotal = 0; 
$shipping_fee = 0; 


?>





<!-- Breadcrumb Section Start -->
<section class="breadcrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-contain">
                    <h2>Cart</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-5 g-3">
        <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                        <table class="table">
                                <tbody>
                                <?php
                                $guest_key=$_SESSION['guesst_login_KEY'];
										   $sql = "SELECT * FROM cart_master where login_key='$guest_key'";
										   $result = mysqli_query($conn, $sql);
										   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
                                                    $product_key=$row['product_key'];
                                                    $subtotal=$subtotal+$row['total'];
			                                        ?>
                                      <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="product-left-thumbnail.html" class="product-image">
                                                    <img src="../assets/images/vegetable/product/2.png"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        <li class="name">
                                                            <a href="product-left-thumbnail.html"><?=givedata($conn,"products","key_",$product_key,"product_title")?></a>
                                                        </li>

                                                       
                                                      

                                                     

                                                       

                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <h4 class="table-title text-content">Price</h4>
                                            <h5>£ <?=$row['rate']?> <del class="text-content">£ <?=$row['rate']?></del></h5>
                                            
                                        </td>

                                        <td class="quantity">
                                            <h4 class="table-title text-content">Qty</h4>
                                            <div class="quantity-price">
                                                <div class="cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus ms-0"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="<?=$row['qty']?>">
                                                        <button type="button" class="btn qty-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fa fa-plus ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="subtotal">
                                            <h4 class="table-title text-content">Total</h4>
                                            <h5>£ <?=$row['total']?></h5>
                                        </td>

                                        <td class="save-remove">
                                            <h4 class="table-title text-content">Action</h4>
                                           
                                            <a class="remove close_button" href="javascript:void(0)">Remove</a>
                                        </td>
                                    </tr>

                                       <?php
                                           }

                                       ?>
                                
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <div class="col-xxl-3">
                <div class="summery-box p-sticky">
                    <div class="summery-header">
                        <h3>Cart Total</h3>
                    </div>

                    <div class="summery-contain">
                        <div class="coupon-cart">
                            <h6 class="text-content mb-2">Coupon Apply</h6>
                            <form method="POST"  id="#formId_">
                                <div class="mb-3 coupon-box input-group">
                                    <input type="text" class="form-control" name="coupon_code"id="coupon_code"
                                        placeholder="Enter Coupon Code Here..." required>
                                    <button type="submit" name="submitButton_" class="btn-apply" id="submitButton_">Apply</button>
                                </div>
                            </form>

                            <div class="col-12" id="login_responce"></div>

                            <?php if (isset($message)): ?>
                                <p class="text-success"><?= $message; ?></p>
                            <?php endif; ?>
                        </div>
                        <ul>
                            <li>
                                <h4>Subtotal</h4>
                                <input type="hidden" name="subtotal" id="subtotal" value="<?=$subtotal?>">
                                <h4 class="price">£<?= number_format($subtotal, 2); ?></h4>
                            </li>

                            <li>
                                <h4 >Coupon Discount</h4>
                                <h4 id="coupon_discount" class="price">£<?= number_format($coupon_discount, 2); ?></h4>
                            </li>

                            <li>
                                <h4>Shipping</h4>
                                <h4 class="price" id="shipping_fee">£<?= number_format($shipping_fee, 2); ?></h4>
                            </li>
                        </ul>
                    </div>

                    <ul class="summery-total">
                        <li class="list-total border-top-0">
                            <h4>Total (USD)</h4>
                            <h4 class="price theme-color" id="grandTotal">
                                £<?= number_format($subtotal + $shipping_fee - $coupon_discount, 2); ?></h4>
                        </li>
                    </ul>

                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button onclick="location.href = 'checkout.html';"
                                    class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                            </li>
                            <li>
                                <button onclick="location.href = 'index.html';"
                                    class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Cart Section End -->

<?php include '../inner_footer.php'; ?>

<script>
     $(document).ready(function () {
        $("#submitButton_").click(function (event) {
            event.preventDefault(); // Prevent default form submission

            var a=document.getElementById("coupon_code").value;
            var total=document.getElementById("subtotal").value;

            if (isNaN(total)) {
            alert("Subtotal is not valid. Please check the value.");
            return; // Stop further execution
        }

        alert("Coupon Code: " + a + ", Subtotal: " + total);

            alert (a);
            let form = $("#formId_");
            let url = "getCouponCode.php";

            $.ajax({
                type: "POST",
                url: url,
                data:{coupon_code:a,subtotal:total}, // Serialize form data
                success: function (data) {
                    console.log('my message' + data);
                    let mydata = data.split("__AJAX-");
                    var word = "" + mydata[1];
                    alert(word);

                    let couponDiscount = mydata[2];
                    let shippingFee = mydata[3]; 

                    // document.getElementById("coupon_discount").innerHTML = "" +coupon_discount;
                    document.getElementById("grandTotal").innerHTML = "£ "+word;
                    document.getElementById("coupon_discount").innerHTML = "£ "+mydata[2];
                    document.getElementById("shipping_fee").innerHTML = "£ "+mydata[3];
                    


                    if (word == "error") {
                        document.getElementById("login_responce").innerHTML = "<span style='color:red'>Invalide or expired coupon code!</span>";
                        document.getElementById("grandTotal").innerHTML = "£"+total;
                        document.getElementById("coupon_discount").innerHTML = "£0.00";
                        document.getElementById("shipping_fee").innerHTML = "£6.99";
                   
                    } else {
                        document.getElementById("login_responce").innerHTML = "<span style='color:green'>Coupon Apply successfully</span>";
                        
                    }
                    
                },
                error: function (data) {
                    alert("Error occurred while Entering the Coupon");
                }
            });
        });
    });
</script>