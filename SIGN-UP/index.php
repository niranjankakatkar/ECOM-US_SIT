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
                                <div class="col-xxl-12 col-lg-12 col-sm-6" >
                                    <div class="custom-form">
                                    <label for="full_name">Full Name</label>
                                    <div class="custom-input">
                                        <input type="text" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                                     </div>  
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-lg-12 col-sm-6" >
                                    <div class="custom-form">
                                    <label for="email">Email Address</label>
                                    <div class="custom-input">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        </div>      
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-lg-12 col-sm-6">
                                    <div class="custom-form">
                                    <label for="mobile_no">Mobile Number</label>
                                    <div class="custom-input">
                                        <input type="number" class="form-control" max="10" id="mobile_no" name="mobile_no" placeholder="Mobile Number">
                                    </div>  
                                    
                                    </div>
                                </div>

                                
                                <div class="col-xxl-12 col-lg-12 col-sm-6">
                                <div class="custom-form">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="custom-input position-relative">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" required>
                                        <span
                                            class="password-toggle position-absolute top-50 end-0 translate-middle-y me-3"
                                            onclick="togglePassword()">
                                            <i class="fa fa-eye" id="toggleIcon"></i>
                                        </span>
                                    </div>
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


                             
                                <div class="col-xxl-12 col-lg-12 col-sm-6">
                                    <div class="custom-form pt-3 pb-1">
                                    <label for="vat_number">Vat Number</label>
                                    <div class="custom-input pt-2">
                                        <input type="text" class="form-control" id="vat_number" name="vat_number" placeholder="Vat Number">
                                    </div>  
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                            id="terms_condi" name="terms_condi">
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
                            <form  id="formId_OTP" >
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

                            <button id="submitButton_OTP" class="btn btn-animation w-100 mt-3"
                                type="submit">Validate</button>

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <input type="hidden" name="sinup_key" id="sinup_key" value="">
    <!-- log in section end -->

    <!-- Footer Section Start -->
    <?php include '../inner_footer.php';?> 

    <script>

function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            if (passwordField.type === "password") {
                passwordField.type = "text"; // Show the password
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password"; // Hide the password
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }

        
 function validation(){

            if(document.getElementById("terms_condi").checked==false)
            {

            alert("Please accepts Terms & Conditions..");
            }else{

            var full_name=$("#full_name").val();
            var email=$("#email").val();
            var mobile_no=$("#mobile_no").val();
            var password=$("#password").val();
            var vat_number=$("vat_number").val();

            $("#full_name").removeClass('bordererror');
            $("#email").removeClass('bordererror');
            $("#mobile_no").removeClass('bordererror');
            $("#password").removeClass('bordererror');
            $("#vat_number").removeClass('bordererror');
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
        if(vat_number ==""){
            $("#vat_number").focus();
            error ="Please enter Vat Number";
            $("#vat_number").val('');
            $("#vat_number").addClass('bordererror');
            $("#vat_number").attr("placeholder", error);
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
                            document.getElementById("sinup_key").value=mydata[2];
                            document.getElementById("reg_div").style.display = "none";
                            document.getElementById("otp_div").style.display = "block";
                          

                        }else{
                            alert("User Already Exist.. ")
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

    $(document).ready(function () {
            $("#submitButton_OTP").click(function (event) {
                event.preventDefault(); // Prevent default form submission
             
               let form = $("#formId_OTP");
              
                let url = "signup_form_OTP.php";
            
                var key=document.getElementById("sinup_key").value;
                var otp=document.getElementById("first").value+""+document.getElementById("second").value+""+document.getElementById("third").value+""+document.getElementById("fourth").value+""+document.getElementById("fifth").value+""+document.getElementById("sixth").value;
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {signupkey:key,user_otp:otp}, // Serialize form data
                    success: function (data) {
                        console.log('my message' + data);
                        let mydata =  data.split("__AJAX-");
                        var word = ""+mydata[1];
                       let ans = ""+word.localeCompare("Done ");
                       
                        if (ans == 0) {

                            window.location.href = '../';
                          

                        }else{
                            alert("Error occurred while submitting the form")
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