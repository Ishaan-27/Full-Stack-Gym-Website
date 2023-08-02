<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerZone Club</title>
    <link href="./style/style.css" rel="stylesheet">
    <link href="./style/mediaqueries.css" rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <script src="./script/scriptt.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
    <script type="text/javascript" src="js/vali.js"></script>


<body>

        <header>
            <div class="headerLogo">
                <a href="#">
                    <div><span>Power</span>Zone</div>
                    <img src="images/Power1.png" height="20px">
                </a>
            </div>
        </header>
        <section id="registerSection" style="height:auto;background-color: black; color:gold">
            <form action="func.php" onsubmit="return ValidateForm()" name="regform" method="POST" class="memberForm">
                <div class="col-sm-9 mx-auto">
                    <h1 id="registertitle">Join <span> PowerZone </span> by filling the registeration form</h1>
                    <div class="form-group">
                        <label for="firstName" class="col-form-label-sm">First Name: </label>
                        <input type="text" class="form-control form-control-sm" id="fname" name="first_name"
                            placeholder="Enter First Name"  required>
                    <div class="form-group">  
                        <label for="lastName" class="col-form-label-sm">Last Name: </label>
                        <input type="text" class="form-control form-control-sm" id="lname"
                            placeholder="Enter Last Name" name="last_name" required>
                    </div>
                    <div class="form-group"> 
                        <label class="col-form-label-sm">Gender: </label>
                        <select name="gender" class="form-control form-control-sm" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label-sm">Select Trainer: </label>
                        <select name="trainer" class="form-control form-control-sm" required>
                            <option value="none">No trainer</option>
                            <option value="t1">Ashish Mali</option>
                            <option value="t2">Ayush Anand</option>
                            <option value="t3">Shivraj Bhasme</option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label-sm">Select Slot </label>
                        <select name="slot" class="form-control form-control-sm" required>
                            <option value="">Select your preferred time slot</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label-sm">Select the type of training:</label>
                        <select name="training_type" class="form-control form-control-sm" required>
                            <option value="ltrain">Light Training (1 hr/day)(default)</option>
                            <option value="htrain">Heavy Training (1.5 hr/day)</option>  
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="currentWeight" class="col-form-label-sm">Your current weight(kg): </label>
                        <input type="number" class="form-control form-control-sm" id="weight"
                            placeholder="Your current weight" name="current_weight" required>
                        <small id="emailHelp" style="color:goldenrod">Enter the nearest integer</small>
                        </div>
                    <div class="form-group">
                        <label for="height" class="col-form-label-sm">Height(in cm): </label>
                        <input type="text" class="form-control form-control-sm" id="height"
                            placeholder="Height" name="height" required>
                        <small id="emailHelp" style="color:goldenrod">Enter the nearest integer</small>

                    </div>
                    <div class="form-group">
                        <label for="homeAddress" class="col-form-label-sm">Home Address: </label>
                        <input type="text" class="form-control form-control-sm" id="homeAddress"
                            placeholder="Street Address" name="home_address" required>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-form-label-sm">City: </label>
                        <input type="text" class="form-control form-control-sm" id="city"
                            placeholder="City" name="city" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label-sm">State: </label>
                        <select name="state" class="form-control form-control-sm" required>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Chatisgarh">Chatisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnatak">Karnatak</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajastan">Rajastan</option>
                            <option value="Tamil NaduY">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Mizoram">Mizoram</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="code" class="col-form-label-sm">Zip Code/Postal: </label>
                        <input type="text" class="form-control form-control-sm" id="pcode"
                            placeholder="Zip Code/Postal" name="code" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="col-form-label-sm">Email address: </label>
                        <input type="email" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" style="color:goldenrod">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label-sm">Phone: </label>
                        <input type="text" class="form-control form-control-sm" id="phone" placeholder="Phone no" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label-sm">Please select your plan: </label>
                        <select name="plan" class="form-control form-control-sm" required>
                            <option value="BP">Basic Plan</option>
                            <option value="SP">Standard Plan</option>
                            <option value="PP">Premium Plan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="agree" value="agree" required>
                        <label class="form-check-label check-lbl" for="exampleCheck1">I agree all terms & conditions</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="regform1" style="align-self: center;
                        margin-top: auto;
                        margin-bottom: 20px;
                        padding: 10px;
                        cursor: pointer;
                        background-color: #FFD60A;
                        box-shadow: 1px 1px 5px #c4c4c4;
                        color: #000814;
                        border: none;
                        letter-spacing: 1px;
                        font-weight: 600;
                        transition: 0.4s;">Register Now</button>
                </div>
                <p>Note:If heavy lifting is choosen,extra 800INR will be added monthly for your selected package    
            </form>
        </section>


        <footer id="contact">
            <div class="contacts">
                <p>Our social media</p>
                <div class="imgs">
                    <img src="./images/facebook1.png" height="35px">
                    <img src="./images/instagram1.png" height="35px">
                    <img src="./images/twitter1.png" height="35px">
                    <img src="./images/whatsapp1.png" height="35px">
                    <img src="./images/email.png" height="35px">
                </div>
            </div>
            <div class="newsletter">
                <p>You are always welcome to subscribe to our newsletter : </p>
                <input type="email" placeholder="mail@example.com">
                <button>Submit</button>
            </div>
        </footer>
    <i class="fa-solid fa-up"></i>
</body>
<script src="/js/scriptt.js"></script>
</html>