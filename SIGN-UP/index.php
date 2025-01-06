<?php include '../niru_collection.php';?> 
<?php include '../inner_header.php';?> 

 

       <!-- Breadcrumb Section Start -->
       <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Sign In</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section section-b-space" id="changable_section">
        <div id="reg_div" name="reg_div" class="container-fluid-lg w-100"   >
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="../assets/images/inner-page/sign-up.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Waves Packaging</h3>
                            <h4>Create New Account</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" id="formId" onsubmit="return validation();">
                                <div class="col-12" >
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                                        <label for="full_name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" class="form-control" id="mobile_no" name="mobile_no" placeholder="Email Address">
                                        <label for="mobile_no">Mobile Number</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                <label class="form-label fw-semibold">I am a:</label>
                                <div class="d-flex flex-wrap gap-3">
                                    <label class="radio-card">
                                        <input type="radio" name="user_type" id="retailer" value="Retailer">
                                        <span>Retailer</span>
                                    </label>
                                    <label class="radio-card">
                                        <input type="radio" name="user_type" id="wholesaler" value="Wholesaler">
                                        <span>Wholesaler</span>
                                    </label>
                                    <label class="radio-card">
                                        <input type="radio" name="user_type" id="mega_restaurant"
                                            value="Mega Restaurant">
                                        <span>Mega Restaurant</span>
                                    </label>
                                    <label class="radio-card">
                                        <input type="radio" name="user_type" id="shopkeeper" value="Shopkeeper">
                                        <span>Shopkeeper</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">I agree with
                                            <span style="color: #062d6a;">Terms</span> and <span style="color: #062d6a;">Privacy</span></label>
                                    </div>
                                </div>
                            </div>

                                

                                <div class="col-12">
                                    <button  id="submitButton" class="btn btn-animation w-100" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                        class="btn google-button w-100">
                                        <img src="../assets/images/inner-page/google.png" class="blur-up lazyload"
                                            alt="">
                                        Sign up with Google
                                    </a>
                                </li>
                             
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Already have an account?</h4>
                            <a href="../SIGN-IN">Log In</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>

        <div class="container-fluid-lg w-100" id="otp_div" style="display:NONE">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="../assets/images/inner-page/otp.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3 class="text-title">Please enter the one time password to verify your account</h3>
                                <h5 class="text-content">A code has been sent to mail </h5>
                            </div>

                            <div id="otp" class="inputs d-flex flex-row justify-content-center">
                                <input class="text-center form-control rounded" type="text" id="first" maxlength="1"
                                    placeholder="0">
                                <input class="text-center form-control rounded" type="text" id="second" maxlength="1"
                                    placeholder="0">
                                <input class="text-center form-control rounded" type="text" id="third" maxlength="1"
                                    placeholder="0">
                                <input class="text-center form-control rounded" type="text" id="fourth" maxlength="1"
                                    placeholder="0">
                                <input class="text-center form-control rounded" type="text" id="fifth" maxlength="1"
                                    placeholder="0">
                                <input class="text-center form-control rounded" type="text" id="sixth" maxlength="1"
                                    placeholder="0">
                            </div>

                            <div class="send-box pt-4">
                                <h5>Didn't get the code? <a href="javascript:void(0)" class="theme-color fw-bold">Resend
                                        It</a></h5>
                            </div>

                            <button onclick="location.href = 'index.html';" class="btn btn-animation w-100 mt-3"
                                type="submit">Validate</button>
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
 function validation(){
            var full_name=$("#full_name").val();
            var email=$("#email").val();
            var mobile_no=$("#mobile_no").val();
            var password=$("#password").val();

            $("#full_name").removeClass('bordererror');
            $("#email").removeClass('bordererror');
            $("#mobile_no").removeClass('bordererror');
            $("#password").removeClass('bordererror');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(full_name ==""){
            $("#full_name").focus();
            error ="Please enter full name";
            $("#full_name").val('');
            $("#full_name").addClass('bordererror');
            $("#full_name").attr("placeholder", error);
            return false;
            }
            if (email === "" || !filter.test(email)) {
            $("#email").val('');
            error = "Please enter the email";
            $("#email").focus();
            $("#email").addClass('bordererror');
            $("#email").attr("placeholder",error);
            return false;
        }
        if (mobile_no == "" || mobile_no.length != 10 || isNaN(mobile_no)) {
            $("#mobile_no").val('');
            error = "Please enter the Phone";
            $("#mobile_no").focus();
            $("#mobile_no").addClass('bordererror');
            $("#mobile_no").attr("placeholder",error);
            return false;
        }
        else if(password ===""){
            $("#password").focus();
            error ="Please enter password";
            $("#password").val('');
            $("#password").addClass('bordererror');
            $("#password").attr("placeholder", error);
            return false;
            }
            return true;
        }
        
        $(document).ready(function () {
            $("#submitButton").click(function (event) {
                event.preventDefault(); // Prevent default form submission

                if (!validation()) {
                return; // Stop submission if validation fails
            }

                let form = $("#formId");
                let url = "signup_form.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // Serialize form data
                    success: function (data) {
                        console.log('my message' + data);
                        let mydata =  data.split("__AJAX-");
                        var word = ""+mydata[1];
                       let ans = ""+word.localeCompare("Done ");
                        if (ans == 0) {

                            document.getElementById("reg_div").style.display = "none";
                            document.getElementById("otp_div").style.display = "block";
                          

                        }else{
                            alert("0")
                        }
                    },
                    error: function (data) {
                        alert("Error occurred while submitting the form");
                    }
                });
            });
        });

        // OTP Auto-Focus Functionality
  
    document.addEventListener("DOMContentLoaded", function () {
        const inputs = document.querySelectorAll("#otp input");

        inputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
                const value = e.target.value;

                // Move to next input if value is entered
                if (value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener("keydown", (e) => {
                if (e.key === "Backspace" && !e.target.value && index > 0) {
                    // Move to the previous input if Backspace is pressed
                    inputs[index - 1].focus();
                }
            });
        });
    });

    </script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 06:36:37 GMT -->
</html>