<?php include 'niru_collection.php';?> 
<?php include 'header.php';?> 

<?php
if($_SESSION['guesst_login_KEY']==""){
    $_SESSION['guesst_login_KEY']=''.generateRandomString(30);
}

?>

<!-- CSS for Styling -->
<style>
    .slider-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 1s ease-in-out;
    }

    .slide {
        min-width: 100%;
        position: relative;
    }

    .slide img {
        width: 100%;
        height: auto;
    }

   

    .home-detail h1, .home-detail h4, .home-detail h6 {
        margin: 5px 0;
    }

   
</style>

    <!-- Home Section Start -->
    <section class="home-section-2 home-section-bg pt-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="slider-animate">
                        <div>
                          
                            
                        <div class="home-contain rounded-0 p-0">
    <!-- Slider Wrapper -->
    <div class="slider-container">
        <!-- Slider Images -->
        <div class="slider">
        <?php
							$sql = "SELECT * FROM banner_master where flag='1'";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) {

                                $filepath=str_replace("../","","".$row['filepath'])
						?>
            <div class="slide">
                <img src="ADMIN/<?=$filepath?>" class="img-fluid bg-img blur-up lazyload" alt="">
                <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                    <div class="container-fluid-lg">
                        <div>
                            <h6 class="ls-expanded theme-color text-uppercase"><?=$row['discount_title']?></h6>
                            <h1 class="heding-2"><?=$row['title']?></h1>
                            <h6 class="text-content"><?=$row['details']?></h6>
                            <button class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
                                    onclick="location.href = 'shop-left-sidebar.html';">
                                Shop Now <i class="fa-solid fa-arrow-right icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

          

            
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    
    function showSlide(index) {
        const slider = document.querySelector('.slider');
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides; 
        showSlide(currentSlide);
    }

    
    setInterval(nextSlide, 3000);

    
    showSlide(currentSlide);
</script>

    

      <!-- Category Section Start -->
      <section class="category-section-2">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider arrow-slider">

                        <?php
							$sql = "SELECT * FROM category where flag='1'";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) {
						?>
                        <div>
                            <div class="shop-category-box border-0 wow fadeIn">
                                <a href="Product-List/?id=<?=$row['key_']?>" class="circle-1">
                                    <img src="ADMIN//<?=$row['filepath']?>" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6><?=$row['category_title']?></h6>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            ?>

                    
                       




                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section ratio_60 wow fadeInUp">
        <div class="container-fluid-lg">
            <div class="banner-slider">
                
                <div>
                    <div class="banner-contain hover-effect">
                        <img src="assets/images/vegetable/banner/4.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">Up to 10% Off</h6>
                                <h5>Food Packaging</h5>
                                <h6 class="text-content">Daily Essentials Eggs & Dairy</h6>
                            </div>
                            <a href="shop-left-sidebar.html" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="assets/images/vegetable/banner/5.png" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">Up to 10% Off</h6>
                                <h5>Food Packaging</h5>
                                <h6 class="text-content">Buy More Save More</h6>
                            </div>
                            <a href="shop-left-sidebar.html" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="assets/images/vegetable/banner/6.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">Up to 10% Off</h6>
                                <h5>Packaging Bags</h5>
                                <h6 class="text-content">Buy More & Save More</h6>
                            </div>
                            <a href="shop-left-sidebar.html" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="assets/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h6 class="text-danger">Up to 10% Off</h6>
                                <h5>Hot Drink Cups</h5>
                                <h6 class="text-content">Buy More & Save More</h6>
                            </div>
                            <a href="shop-left-sidebar.html" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3 pb-2">
                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        

                        <div class="ratio_156 section-t-space pt-0">
                            <div class="home-contain hover-effect">
                                <img src="assets/images/vegetable/banner/8.jpg" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h6 class="text-yellow home-banner"></h6>
                                        <h3 class="text-uppercase fw-normal"><span
                                                class="theme-color fw-bold"></h3>
                                        <h3 class="fw-light"></h3>
                                        <!-- <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-md mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ratio_medium section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="assets/images/vegetable/banner/11.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h4 class="text-yellow text-exo home-banner"></h4>
                                        <h2 class="text-uppercase fw-normal mb-0 text-russo theme-color"></h2>
                                        <h2 class="text-uppercase fw-normal text-title"></h2>
                                        <!-- <p class="mb-3">Super Offer to 50% Off</p> -->
                                        <!-- <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-md mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/vegetable/review/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">£ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/vegetable/review/2.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">£ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/vegetable/review/3.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Good Life Walnut Kernels</h6>
                                                    </a>
                                                    <span>200 G</span>
                                                    <h6 class="price theme-color">£ 52.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/vegetable/review/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Apple Red Premium Imported</h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">£ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="section-t-space" >
                            <div class="category-menu" style="background-color: #061d42">
                                <h3 class="text-white">Customer Comment</h3>

                                <div class="review-box">
                                    <div class="review-contain">
                                        <h5 class="w-75 text-white">We Care About Our Customer Experience</h5>
                                        <p class="text-white">In publishing and graphic design, Lorem ipsum is a placeholder text commonly
                                            used to demonstrate the visual form of a document or a typeface without
                                            relying on meaningful content.</p>
                                    </div>

                                    <div class="review-profile">
                                        <div class="review-image">
                                            <img src="assets/images/vegetable/review/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div class="review-detail">
                                            <h5 class="text-white">Tina Mcdonnale</h5>
                                            <h6 class="text-white">Sale Manager</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-8">
                    <div class="title title-flex">
                        <div>
                            <h2>Our Top Products</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                            <p>"Packaged with Precision, Delivered with Pride."</p>
                        </div>
                       
                    </div>

                    <div class="section-b-space">
                        <div class="product-border border-row overflow-hidden">
                            <div class="product-box-slider no-arrow">

                            <?php
							$sql = "SELECT * FROM products where flag='1' LIMIT 10 ";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) {

                                
						?>
                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="assets/images/vegetable/product/1.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#<?php if($_SESSION['tokenID']==""){echo "LOGIN_view";}else{echo "view";}?>">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">12'' PIZZA BOX</h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">£26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
                                                        <h6 class="theme-color">In Stock</h6>
                                                    </div>

                                                    <div class="add-to-cart-box">
                                                        <button class="btn btn-add-cart addcart-button">Add
                                                            <span class="add-icon">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </span>
                                                        </button>
                                                        <div class="cart_qty qty-box">
                                                            <div class="input-group">
                                                                <button type="button" class="qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input"
                                                                    type="text" name="quantity" value="0">
                                                                <button type="button" class="qty-right-plus"
                                                                    data-type="plus" data-field="">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="assets/images/vegetable/product/2.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#<?php if($_SESSION['tokenID']==""){echo "LOGIN_view";}else{echo "view";}?>">
                                                              
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Foil Container No.2</h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">£26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
                                                        <!-- <ul class="rating">
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
                                                        </ul> -->

                                                        <h6 class="theme-color">In Stock</h6>
                                                    </div>

                                                    <div class="add-to-cart-box">
                                                        <button class="btn btn-add-cart addcart-button">Add
                                                            <span class="add-icon">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </span>
                                                        </button>
                                                        <div class="cart_qty qty-box">
                                                            <div class="input-group">
                                                                <button type="button" class="qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input"
                                                                    type="text" name="quantity" value="0">
                                                                <button type="button" class="qty-right-plus"
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
                                </div>
                                <?php }?>

                              

                               


                               

                                <div>
                                    <div class="row m-0">
                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="assets/images/vegetable/product/3.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Peanut Butter Bite Premium Butter Cookies 600 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">£26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
                                                        <!-- <ul class="rating">
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
                                                        </ul> -->

                                                        <h6 class="theme-color">In Stock</h6>
                                                    </div>

                                                    <div class="add-to-cart-box">
                                                        <button class="btn btn-add-cart addcart-button">Add
                                                            <span class="add-icon">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </span>
                                                        </button>
                                                        <div class="cart_qty qty-box">
                                                            <div class="input-group">
                                                                <button type="button" class="qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input"
                                                                    type="text" name="quantity" value="0">
                                                                <button type="button" class="qty-right-plus"
                                                                    data-type="plus" data-field="">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 px-0">
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a href="product-left-thumbnail.html">
                                                        <img src="assets/images/vegetable/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <ul class="product-option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i data-feather="refresh-cw"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html" class="notifi-wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-detail">
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g
                                                        </h6>
                                                    </a>

                                                    <h5 class="sold text-content">
                                                        <span class="theme-color price">£26.69</span>
                                                        <del>28.56</del>
                                                    </h5>

                                                    <div class="product-rating mt-sm-2 mt-1">
                                                        <!-- <ul class="rating">
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
                                                        </ul> -->

                                                        <h6 class="theme-color">In Stock</h6>
                                                    </div>

                                                    <div class="add-to-cart-box">
                                                        <button class="btn btn-add-cart addcart-button">Add
                                                            <span class="add-icon">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </span>
                                                        </button>
                                                        <div class="cart_qty qty-box">
                                                            <div class="input-group">
                                                                <button type="button" class="qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input"
                                                                    type="text" name="quantity" value="0">
                                                                <button type="button" class="qty-right-plus"
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
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    

                    <!-- <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="assets/images/vegetable/banner/9.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal theme-color mb-2">Packaging Bags</h4>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="assets/images/vegetable/banner/10.png" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal theme-color mb-2">Food Bags</h4>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                   

                  

                  

                    <div class="section-t-space section-b-space pt-0">
                        <div class="row g-md-4 g-3">
                            <div class="col-xxl-8 col-xl-12 col-md-7">
                                <div class="banner-contain hover-effect">
                                    <img src="assets/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h2 class="text-kaushan fw-normal theme-color">Get Ready To</h2>
                                            <h3 class="mt-2 mb-3"></h3>
                                            <p class="text-content banner-text"></p>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-12 col-md-5">
                                <a href="shop-left-sidebar.html" class="banner-contain hover-effect h-100">
                                    <img src="assets/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4 h-100">
                                        <div>
                                            <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                            <h3 class="mt-2 mb-2 theme-color">SUMMRY</h3>
                                            <h3 class="fw-normal product-name text-title">Product</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <div>
                            <h2>Our best Seller</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                            <p>A virtual assistant collects the products from your list</p>
                        </div>
                    </div>

                    <div class="best-selling-slider product-wrapper wow fadeInUp">
                        <div>
                            <ul class="product-list">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/16.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Tuffets Whole Wheat Bread</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/12.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Potato</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/13.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Green Chilli</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/14.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Muffets Burger Bun</h6>
                                                </a>
                                                <span>150 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/15.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Tuffets Britannia Cheezza</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/16.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Long Life Toned Milk</h6>
                                                </a>
                                                <span>1 L</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/17.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Organic Tomato</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/18.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Organic Jam</h6>
                                                </a>
                                                <span>150 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/19.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Good Life Refined Sunflower Oil</h6>
                                                </a>
                                                <span>1 L</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/20.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Good Life Raw Peanuts</h6>
                                                </a>
                                                <span>500 G</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/21.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">TufBest Farms Mong Dal</h6>
                                                </a>
                                                <span>1 KG</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-left-thumbnail.html" class="offer-image">
                                            <img src="assets/images/vegetable/product/22.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-left-thumbnail.html" class="text-title">
                                                    <h6 class="name">Frooti Mango Drink</h6>
                                                </a>
                                                <span>160 ML</span>
                                                <h6 class="price theme-color">£ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain hover-effect">
                            <img src="assets/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details p-center banner-b-space w-100 text-center">
                                <div>
                                    <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                                    <h2 class="banner-title text-white " style="font-size: 35px;">Vegetable Bags</h2>
                                    <h5 class="lh-sm mx-auto mt-1 text-content">Save up to 5% OFF</h5>
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Shop Now <i
                                            class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="title section-t-space">
                        <h2>Featured Blog</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="slider-3-blog ratio_65 no-arrow product-wrapper">
                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>20 March, 2022</h6>
                                    <h5>Vegitables Bags</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="assets/images/vegetable/blog/4.jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>10 April, 2022</h6>
                                    <h5>Combo Bags available</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="assets/images/vegetable/blog/3.jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>10 April, 2022</h6>
                                    <h5>Nuts to Eat for Better Health</h5>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <a href="blog-detail.html" class="blog-image">
                                        <img src="assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <a href="blog-detail.html" class="blog-detail">
                                    <h6>20 March, 2022</h6>
                                    <h5>Fresh Vegetable Online</h5>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Newsletter Section Start -->
    <!-- <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get...</h2>
                                    <h5>£20 discount for your first order</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Your Email">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Newsletter Section End -->

   
    <?php include 'footer.php';?> 
    
    
</body>
</html>