<?php include 'niru_collection.php'; ?>
<?php include 'header.php'; ?>

<?php
if ($_SESSION['guesst_login_KEY'] == "") {
    $_SESSION['guesst_login_KEY'] = '' . generateRandomString(30);
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



    .home-detail h1,
    .home-detail h4,
    .home-detail h6 {
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
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $filepath = str_replace("", "", "" . $row['filepath'])
                                            ?>
                                        <div class="slide">
                                            <img src="ADMIN//<?= $filepath ?>" class="img-fluid bg-img blur-up lazyload"
                                                alt="">
                                            <div
                                                class="home-detail home-big-space p-center-left home-overlay position-relative">
                                                <div class="container-fluid-lg">
                                                    <div>
                                                        <h6 class="ls-expanded theme-color text-uppercase">
                                                            <?= $row['discount_title'] ?></h6>
                                                        <h1 class="heding-2"><?= $row['title'] ?></h1>
                                                        <h6 class="text-content"><?= $row['details'] ?></h6>
                                                        <button
                                                            class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
                                                            onclick="location.href = 'Product-List/';">
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
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div>
                            <div class="shop-category-box border-0 wow fadeIn">
                                <a href="Product-List/?id=<?= $row['key_'] ?>" class="circle-1">
                                    <img src="ADMIN//<?= $row['filepath'] ?>" class="img-fluid blur-up lazyload" alt=""
                                        style="width: 150px; height: 150px; object-fit: fill;">
                                </a>
                                <div class="category-name">
                                    <h6><?= $row['category_title'] ?></h6>
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


<section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain">
                        <div class="banner-contain hover-effect">
                            <img src="assets/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details p-center p-sm-4 p-3 text-white text-center">
                                <div>
                                    <h3 class="lh-base fw-bold text-light">Get $3 Cashback! Min Order of $30</h3>
                                    <h6 class="coupon-code">Use Code : GROCERY1920</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount Section End -->

        <!-- Product Section Start -->
        <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>TRENDING ITEMS</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>A virtual assistant collects the products from your list</p>
            </div>
            <div class="product-border border-row">
                <div class="slider-6_2 no-arrow">
                <div
                            style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; text-align: center;margin-top:-20%">
                            <img src="assets/images/brand/productlist.jpg" class="img-fluid blur-up lazyload"
                                style="max-width: 200px; width: 100%; height: auto; margin-bottom: 15px;" />
                            <p style="font-size: 16px; color: #555; margin-bottom: 5px;">Your Product-List is empty!</p>
                            <p style="font-size: 10px; color: #555; margin-bottom: 5px;">Add Product to it now.</p>
                            <button onclick="window.location.href='#'"
                                style="padding: 10px 20px; border-radius: 5px; background-color: #062d6a; color: white; border: 1px solid #062d6a; cursor: pointer;">
                                Shop now
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

      <!-- Offer Section Start -->
      <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="offer-box hover-effect">
                        <img src="assets/images/veg-2/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="offer-contain p-4">
                            <div class="offer-detail">
                                <h2 class="text-dark">Special Offers <span class="text-danger fw-bold">of the
                                        week!</span></h2>
                                <p class="text-content">Special offer on this discount, Hurry Up!</p>
                            </div>
                            <div class="offer-timing">
                                <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div class="days">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="hours">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="minutes">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="seconds">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->

      <!-- Product Section Start -->
   
    <!-- Product Section End -->

    


    <!-- Top Selling Section Start -->
    <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="slider-4-1">
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Top Selling</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="#" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/1.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="#">
                                            <h5>Tuffets Whole Wheat Bread</h5>
                                        </a>
                                        <div class="product-rating">
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
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="#" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/2.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="#">
                                            <h5>Potato</h5>
                                        </a>
                                        <div class="product-rating">
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
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="#" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/3.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="#">
                                            <h5>Green Chilli</h5>
                                        </a>
                                        <div class="product-rating">
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
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="#" class="top-selling-image">
                                        <img src="assets/images/veg-2/top-selling/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="#">
                                            <h5>Muffets Burger Bun</h5>
                                        </a>
                                        <div class="product-rating">
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
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 70.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Trending Products</h3>
                                </div>



                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/review/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        
                                    <a href="#" class="text-title">
                                                    <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">£ 70.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/review/2.jpg" class=" img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                      <a href="#" class="text-title">
                                                    <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                </a>
                                                <span>450 G</span>
                                                <h6 class="price theme-color">£ 40.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/review/3.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                    <h6 class="name">Good Life Walnut Kernels</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">£ 52.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/review/3.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                    <h6 class="name">Good Life Walnut Kernels</h6>
                                                </a>
                                                <span>200 G</span>
                                                <h6 class="price theme-color">£ 52.00</h6>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Recently added</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/16.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                <h6 class="name">Tuffets Whole Wheat Bread</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/12.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                <h6 class="name">Potato</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/13.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        
                                    <a href="#" class="text-title">
                                                <h6 class="name">Green Chilli</h6>
                                            </a>
                                            <span>200 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/14.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                <h6 class="name">Muffets Burger Bun</h6>
                                            </a>
                                            <span>150 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>Top Rated</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/15.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                <h6 class="name">Tuffets Britannia Cheezza</h6>
                                            </a>
                                            <span>500 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/16.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                    <a href="#" class="text-title">
                                                <h6 class="name">Long Life Toned Milk</h6>
                                            </a>
                                            <span>1 L</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/17.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                       
                                    <a href="#" class="text-title">
                                                <h6 class="name">Organic Tomato</h6>
                                            </a>
                                            <span>1 KG</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                    <a href="#" class="top-selling-image">
                                    <img src="assets/images/vegetable/product/18.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                       
                                    <a href="#" class="text-title">
                                                <h6 class="name">Organic Jam</h6>
                                            </a>
                                            <span>150 G</span>
                                            <h6 class="price theme-color">£ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->

<?php include 'footer.php'; ?>

<script>
  function addWishlist(product_key){
    alert(product_key);
    $.ajax({
      type: "POST",
      url: "get_wishlist.php", 
      data: { product_key: product_key }, 
      success: function (response)
      {
       
        try {
          const data = JSON.parse(response); 

          if (data.success) {
            alert(data.message); 
           
            $(element).find("i")
              .removeClass("fa-regular fa-heart") 
              .addClass("fa-solid fa-heart") 
              .css("color", "red"); 
          } else {
            alert(data.message); 
          }
        } catch (error) {
         alert("Unexpected response from the server."); 
        }
      },
      error: function () {
        alert("An error occurred while adding the product to the wishlist."); 
      },
    });
  }

  
</script>


</body>

</html>