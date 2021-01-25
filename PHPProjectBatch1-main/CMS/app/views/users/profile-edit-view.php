<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="app/views/users/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/images/brand/bootstrap-logo.svg" alt="" width="72"
                 height="57">
            <h2>My Edit Profile</h2>
            <p class="lead"></p>
        </div>

        <div class="row g-3">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Student Details</h4>
                <form class="needs-validation" novalidate action="?module=users&action=profile" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="user_name" class="form-label">Username</label>
                        <div class="input-group">
                            <?php echo $profile_details['user_name']; ?>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder=""
                                   value="<?php echo $profile_details['first_name']; ?>" required maxlength="10">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                            <input type="hidden" name="token" value="<?php echo $token;?>">
                        </div>

                        <div class="col-sm-6">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder=""
                                   value="<?php echo $profile_details['last_name']; ?>" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="you@example.com" value="<?php echo $profile_details['email']; ?>">
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="1234 Main St" value="<?php echo $profile_details['address']; ?>">
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="Mobile" class="form-label">Mobile <span class="text-muted"></span></label>
                            <input type="number" class="form-control" name="mobile" id="mobile"
                                   placeholder="mobile number" value="<?php echo $profile_details['mobile']; ?>">
                        </div>

                        <div class="col-12">
                            <label for="profile_photo" class="form-label">Profile Photo</label>
                            <input type="file" class="form-control" name="profile_photo" id="profile_photo" placeholder="Profile Photo">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" name="country" id="country">
                                <option value="">Choose</option>
                                <option value="india">india</option>
                                <option value="japan">japan</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" name="state" id="state">
                                <option value="">Choose...</option>
                                <option value="up">up</option>
                                <option value="mp">mp</option>

                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="">
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="course[]" value="btech" id="course">
                        <label class="form-check-label" for="same_address">btech
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="course[]" value="bca" id="course">
                        <label class="form-check-label" for="save-info">bca</label>
                    </div>


                    <hr class="my-4">

                    <h4 class="mb-3">gender</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="gender" name="gender" type="radio" value="male" class="form-check-input">
                            <label class="form-check-label" for="credit">male</label>
                        </div>
                        <div class="form-check">
                            <input id="gender" name="gender" type="radio" value="female" class="form-check-input">
                            <label class="form-check-label" for="debit">female</label>
                        </div>
                        <!-- <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div> -->
                    </div>

                    <!--   <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Name on card</label>
                            <input type="text" class="form-control" name="cc-name" id="cc-name" placeholder="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>

                         <div class="col-md-6">
                            <label for="cc-number" class="form-label">Credit card number</label>
                            <input type="text" class="form-control" name="cc-number" id="cc-number" placeholder="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div> -->

                    <!-- <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Expiration</label>
                            <input type="text" class="form-control" name="cc-expiration" id="cc-expiration"
                                placeholder="">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div> -->

                    <!-- <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>-->

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit"
                            value="register">Update Profile</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2020 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="app/views/users/form-validation.js"></script>
</body>

</html>