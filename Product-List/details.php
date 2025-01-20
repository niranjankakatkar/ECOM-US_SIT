<?php include '../niru_collection.php';?>
<?php include '../inner_header.php';?> 

<?php
$key=$_GET['i'];
$cat=givedata($conn,"products","key_",$key,"category_id");
$subcat=givedata($conn,"products","key_",$key,"sub_category_id");

?>
 

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2><?=givedata($conn,"products","key_",$key,"product_title")?></h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active"><?=givedata($conn,"products","key_",$key,"product_title")?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">
                                            <div>
                                                <?php
                                                $img=givedata($conn,"products","key_",$key,"filepath");
                                                if($img==""){
                                                    $img="../assets/images/no_image.jpg";
                                                }else{
                                                    $img="../ADMIN//".$img;
                                                }
                                                ?>
                                                <div class="slider-image">
                                                    <img src="<?=$img?>" id="img-1"
                                                        data-zoom-image="<?=$img?>"
                                                        class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="<?=$img?>"
                                                        data-zoom-image="<?=$img?>"
                                                        class="img-fluid image_zoom_cls-4 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="<?=$img?>"
                                                        data-zoom-image="<?=$img?>"
                                                        class="img-fluid image_zoom_cls-5 blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="<?=$img?>"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="<?=$img?>"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="<?=$img?>"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                <h2 class="name"><?=givedata($conn,"products","key_",$key,"product_title")?></h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price">£<?=givedata($conn,"products","key_",$key,"retail_rate")?> <del class="text-content">$58.46</del> <span
                                            class="offer theme-color">(8% off)</span></h3>
                                    <div class="product-rating custom-rate">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span class="review">23 Customer Review</span>
                                    </div>
                                </div>

                                <div class="product-contain">
                                    <p><?=givedata($conn,"products","key_",$key,"description")?>
                                    </p>
                                </div>

                              

                                <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1"
                                    data-hours="1" data-minutes="2" data-seconds="3">
                                    <div class="product-title">
                                        <h4>Hurry up! Sales Ends In</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="days d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Days</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="hours d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Hours</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="minutes d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Min</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="seconds d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Sec</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="note-box product-package">
                                    <div class="cart_qty qty-box product-qty">
                                        <div class="input-group">
                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <button type="button" class="qty-left-minus" data-type="minus"
                                                data-field="">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</button>
                                </div>

                                <div class="progress-sec">
                                    <div class="left-progressbar">
                                        <h6>Please hurry! Only 5 left in stock</h6>
                                        <div role="progressbar" class="progress warning-progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="buy-box">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                        <span>Add To Wishlist</span>
                                    </a>

                                   
                                </div>

                              
                                <div class="payment-option">
                                    <div class="product-title">
                                        <h4>Guaranteed Safe Checkout</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab">Description</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#info" type="button" role="tab">Additional info</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="care-tab" data-bs-toggle="tab"
                                            data-bs-target="#care" type="button" role="tab">Shipping
                                            Instructions</button>
                                    </li>

                                  
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        <div class="product-description">
                                            <div class="nav-desh">
                                            <p><?=givedata($conn,"products","key_",$key,"description")?>
                                            </p>
                                            </div>

                                           

                                         

                                           
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="info" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table info-table">
                                                <tbody>
                                                    <tr>
                                                        <td>Colour</td>
                                                        <td><?=givedata($conn,"products","key_",$key,"color")?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dimensions</td>
                                                        <td><?=givedata($conn,"products","key_",$key,"dimensions")?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Category</td>
                                                        <td><?=givedata($conn,"category","id",$cat,"category_title")?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Sub Category</td>
                                                        <td><?=givedata($conn,"sub_category","id",$cat,"sub_category_title")?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Package Information</td>
                                                        <td>Box</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Manufacturer</td>
                                                        <td>Waves Packging</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Net Quantity</td>
                                                        <td>40.00 count</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="care" role="tabpanel">
                                        <div class="information-box">
                                            <ul>
                                                <li>Customers are responsible for return shipping costs.</li>

                                                <li>Shipping costs are non-refundable. If a refund is issued, the return shipping cost will be deducted.</li>

                                                <li> For high-value items, we recommend using a trackable shipping service or purchasing shipping insurance. We cannot guarantee receipt of your returned item.</li>

                                                <li>The time required for your exchanged product to reach you may vary depending on your location.
For any questions or further assistance, feel free to contact us at wavespackaging@gmail.com..
We appreciate your understanding and thank you for choosing Waves Packaging!</li>

                                               
                                            </ul>
                                        </div>
                                    </div>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <!-- Related Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Related Products</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">

                    <?php
                                            $sql_ = "SELECT * FROM products where sub_category_id='$cat' AND flag='1' ";
                                            $result = mysqli_query($conn, $sql_);
                                            $i=0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                             $i++;
                                             if($i>=15){}else{
                                                ?>
                        <div>
                            <div class="product-box-3 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-2.html">
                                            <img src="../ADMIN//<?= $row['filepath'] ?>"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name"><?=givedata($conn,"category","id",$cat,"category_title")?>
                                        </span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name"><?=$row['product_title']?></h5>
                                        </a>
                                        
                                        <h6 class="unit"><?=$row['dimensions']?></h6>
                                        <h5 class="price"><span class="theme-color">£ <?=$row['retail_rate']?></span> 
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                            }}
                                            ?>

                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

  <!-- Shop Section End -->

  <?php include '../inner_footer.php';?> 
  


</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/product-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 06:36:36 GMT -->
</html>