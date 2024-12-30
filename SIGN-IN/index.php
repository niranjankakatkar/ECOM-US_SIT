<?php include '../niru_collection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	
}

?> 
<?php include '../inner_header.php';?> 

   

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2 class="mb-2">Log In</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Log In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="../assets/images/inner-page/log-in.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Waves Packaging</h3>
                            <h4>Log In Your Account</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" id="formId">
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" id="email" name="username" placeholder="Email Address">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="col-12" id="login_responce">
                                   
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                        </div>
                                        <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100 justify-content-center" id="submitButton" type="submit">Log
                                        In</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src="../assets/images/inner-page/google.png" class="blur-up lazyload"
                                            alt=""> Log In with Google
                                    </a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Don't have an account?</h4>
                            <a href="../SIGN-UP">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

    <!-- Footer Section Start -->
    <?php include '../inner_footer.php';?> 

    <script>
         $(document).ready(function () {
            $("#submitButton").click(function (event) {
                event.preventDefault(); // Prevent default form submission

                let form = $("#formId");
                let url = "signin_form.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // Serialize form data
                    success: function (data) {
                        console.log('my message' + data);
                        let mydata =  data.split("__AJAX-");
                        var word = ""+mydata[1];
                       let ans = ""+word.localeCompare("Done ");
                       let ans_ = ""+word.localeCompare("Done-1 ");
                        if (ans == 0) {

                            document.getElementById("login_responce").innerHTML = "<span style='color:green'>Login Done</span>";
                            window.location.href = '../';

                          

                        }else if(ans_ == 0){
                            document.getElementById("login_responce").innerHTML = "<span style='color:orange'>Account is not activated</span>";

                        }else{
                            document.getElementById("login_responce").innerHTML = "<span style='color:red'>Entered credentials are invalid</span>";

                        }
                    },
                    error: function (data) {
                        alert("Error occurred while submitting the form");
                    }
                });
            });
        });

    </script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 06:36:37 GMT -->
</html>