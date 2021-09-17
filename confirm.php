<?php 
session_start();
include ('dbconnection.php');
if(isset($_POST['submit']))
  {
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $postcode=$_POST['postcode'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $payment=$_POST['payment'];
    $donation=$_POST['donation'];
    $currency=$_POST['currency'];
    $comment=$_POST['comment'];
    

    // if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }

    // echo "<script>alert('Start a new form');</script>";


    // $ret="select * from tbldonor where PhoneNumber=:mobno";
    // $query= $dbh -> prepare($ret);
    // $query-> bindParam(':mobno', $mobno, PDO::PARAM_STR);
    // $query-> execute();
    
    // $results = $query -> fetchAll(PDO::FETCH_OBJ);
    // if($query -> rowCount() == 0)
    // {
        $sql="Insert Into tbldonor(LastName,FirstName,Address,City,State,Country,PostalCode,PhoneNumber,Email,FormOfContact,FormOfPayment,FrequencyOfDonation,AmountOfDonation,Comment)
        Values(:lname,:fname,:address,:city,:state,:country,:postcode,:mobno,:email,:contact,:payment,:donation,:currency,:comment)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':lname',$lname,PDO::PARAM_STR);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':address',$address,PDO::PARAM_STR);
        $query->bindParam(':city',$city,PDO::PARAM_STR);
        $query->bindParam(':state',$state,PDO::PARAM_STR);
        $query->bindParam(':country',$country,PDO::PARAM_STR);
        $query->bindParam(':postcode',$postcode,PDO::PARAM_STR);
        $query->bindParam(':mobno',$mobno,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':contact',$contact,PDO::PARAM_STR);
        $query->bindParam(':payment',$payment,PDO::PARAM_STR);
        $query->bindParam(':donation',$donation,PDO::PARAM_STR);
        $query->bindParam(':currency',$currency,PDO::PARAM_STR);
        $query->bindParam(':comment',$comment,PDO::PARAM_STR);

        $query->execute();

        header("location: index.php"); 
}

// if(isset($_POST['cancel']))
//   {
    


//         header("location: index.php"); 
//          echo "<script>alert('Start a new form');</script>";

// }
// else {
//    
//     // exit();
//     } 
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>

        </title>
        <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div style="margin-top: 30px">
            <?php
                // if (isset($_SESSION["lname"])) {
                    echo "<h3>Confirm or edit your donation, " . $_SESSION['lname'] . "</h3>";
                // }
            ?> 
            
                <form method="post" onSubmit='onSubmit()'>
                <!-- <form > -->
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="lname">Last Name</label>
                            <input class="form-control" type="text" placeholder="Enter your Last Name" name="lname" id="lname" value="<?php echo $_SESSION['lname'];?>" required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="fname">First Name</label>
                            <input class="form-control" type="text" placeholder="Enter your First Name" name="fname" id="fname" value="<?php echo $_SESSION['fname'];?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-4">
                            <label for="address">Street Address</label>
                            <input class="form-control" type="text" placeholder="Address" name="address" id="address" value="<?php echo $_SESSION['address'];?>" required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-4">
                            <label for="city">City</label>
                            <input class="form-control" type="text" placeholder="City" name="city" id="city" value="<?php echo $_SESSION['city'];?>" required>
                        </div>
                        <div class="form-group col-sm-12 col-lg-4">
                            <label for="state">State/Region</label>
                            <input class="form-control" type="text" placeholder="State" name="state" id="state" value="<?php echo $_SESSION['state'];?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="country">Country</label>
                                <select id="country" name="country" class="form-control" value="<?php echo $_SESSION['country'];?>" required>
                                    <option value="<?php echo $_SESSION['country'];?>"><?php echo $_SESSION['country'];?></option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="postcode">Postal Code</label>
                            <input class="form-control" type="text" placeholder="Postal Code" name="postcode" id="postcode" value="<?php echo $_SESSION['postcode'];?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="mobno">Phone Number</label>
                            <input class="form-control" type="text" name="mobno" placeholder="Phone Number" maxlength="11" pattern="[0-9]+" id="mobno" value="<?php echo $_SESSION['mobno'];?>" required/>                
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="<?php echo $_SESSION['email'];?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="contact">Preferred form of contact</label>
                            <select class="form-control" name="contact" id="contact" required>
                                <option value="<?php echo $_SESSION['contact'];?>">
                                    <?php echo $_SESSION['contact'];?>
                                </option>
                                <option>
                                    Phone
                                </option>
                                <option>
                                    Email
                                </option>
                            </select>                
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="payment">Preferred form of payment</label>
                            <select class="form-control" id="payment" name="payment" required>
                                <option value="<?php echo $_SESSION['payment'];?>">
                                    <?php echo $_SESSION['payment'];?>
                                </option>
                                <option>
                                    USD
                                </option>
                                <option>
                                    Euro
                                </option>
                                <option>
                                    Bitcoin
                                </option>
                            </select>
                            <!-- <p id="payment_text"></p>                -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="donation">Frequency of donation</label>
                            <select id="donation" name="donation" class="form-control" required>
                                <option value="<?php echo $_SESSION['donation'];?>">
                                    <?php echo $_SESSION['donation'];?></option>

                                <option>
                                    Monthly
                                </option>
                                <option>
                                    Yearly
                                </option>
                                <option>
                                    One-time
                                </option>
                            </select>                 
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <label for="currency">Amount of Donation</label>
                            <input type="number" class="form-control" placeholder="99.9" pattern="[0-9]+" name="currency" id="currency" value="<?php echo $_SESSION['currency'];?>" required>  
                        </div>
                    </div>
                    <!-- <div class="form-group col-4">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" rows="5" placeholder="Comments" name="comment" id="comment">
                    </div> -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="row">
                                <div class="form-group col-sm-12 col-lg-12">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" id="comment" rows="5" name="comment" required><?php echo $_SESSION['comment'];?></textarea>

                                </div>
                                <div class="form-group col-sm-12 col-lg-12">
                                    <!-- <input class="btn btn-success" onClick="confirmsub()" type="button" value="Review"> -->
                                    <!-- <input class="btn btn-success" name="submit" type="submit" value="Review"> -->
                                    <button type="submit" class="btn btn-success" name="submit">Confirm</button>
                                    <button type="button" class="btn btn-danger" onClick=cancel()>Cancel</button>

                                </div>

                            </div>
                        </div>
                        <div class="form-group col-sm-12 col-lg-6">
                            <p>Bitcoin amount in dollars: <strong><span id="payment_text"></span></strong></p>            
                            <p>Bitcoin Amount in dollars for a year: <strong><span id="conversion_in_dollars"></span></strong></p>            
                            <p>Bitcoin Amount for a year: <strong><span id="yearly_amount"></span></strong></p>              
                            <br>
                            <p>Euro Amount in dollars: <strong><span id="payment_text_euro"></span></strong></p>            
                            <p>Euro Amount in dollars for a year: <strong><span id="conversion_in_dollars_euro"></span></strong></p>            
                            <p>Euro Amount for a year: <strong><span id="yearly_amount_euro"></span></strong></p>              
                            <br>
                            <p>USD Amount in dollars: <strong><span id="payment_text_usd"></span></strong></p>            
                            <p>USD Amount in dollars for a year: <strong><span id="conversion_in_usd"></span></strong></p>            
                            <p>USD Amount for a year: <strong><span id="yearly_amount_usd"></span></strong></p>              



                        
                        
                        
                        </div>

                        
                    </div>

                    <div class="row">

                        

                        
                    </div>
                    
                    <?php
                    
// if (isset($_GET["submit"])) {
                
                        // echo $lname=$_POST['lname'];
                        // echo "<h3>Confirm your donation, " . $_SESSION['lname'] . "</h3>";

                        // echo "<p> " . $_SESSION['lname'] . " :: lastname </br></p>";
                        // echo "<p> " . $_SESSION['country'] . " :: country </br></p>";
                        // echo "<p> " . $_SESSION['payment'] . " :: payment </br></p>";
                        // echo "<p> " . $_SESSION['contact'] . " :: contact </br></p>";
                        // echo "<p> " . $_SESSION['donation'] . " :: donation </br></p>";
// }

                    ?>

                </form>
                <p>
            </div>
            
        </div>
        <script>
            function onSubmit(){
                alert("Thanks and God bless, we'll be in contact")
            }

            function cancel(){
                // alert('Start a new form');
                if (window.confirm('Thanks for your consideration')){
                    window.location.href='index.php';
                }
            }
        </script>


        <script src="assets/jquery-3.5.1.min.js" ></script>
        <script src="assets/bootstrap.min.js" ></script>
        <script src="assets/money.min.js" ></script>
        <script>

            
            
            fx.rates = {
                "EUR" : 0.849814,
                "GBP" : 1.38,
                // "HKD" : 7.781919,
                "BTC" : 0.0000211032,
                "USD" : 1.17673
            }
            fx.base = 'USD';

            
            
            
            
            
            if((<?php echo $_SESSION['payment'];?>) = "Bitcoin"){
                // console.log('<?php echo $_SESSION['payment'];?> is in Bitcoin' );
                // console.log (fx.convert(<?php echo $_SESSION['currency'];?>, {from: "BTC", to: "USD"}));


                console.log('<?php echo $_SESSION['payment'];?>');
                console.log('<?php echo $_SESSION['currency'];?> is in Bitcoin' );
                var text = (fx.convert(<?php echo $_SESSION['currency'];?>, {from: "BTC", to: "USD"}));
                // console.log(text, "text");
                let conversion_in_dollars = text * 12
                console.log(conversion_in_dollars, "conversion_in_dollars")

                let a = <?php echo $_SESSION['currency'];?>;
                let yearly_amount  =  a * 12;
                console.log(yearly_amount, "yearly_amount")


                document.getElementById('payment_text').innerHTML = text
                document.getElementById('yearly_amount').innerHTML = yearly_amount
                document.getElementById('conversion_in_dollars').innerHTML = conversion_in_dollars

            }
            
            if ((<?php echo $_SESSION['payment'];?>) = "Euro"){
                console.log('<?php echo $_SESSION['payment'];?>');
                console.log('<?php echo $_SESSION['currency'];?> is in EURO' );
                var text = (fx.convert((<?php echo $_SESSION['currency'];?>), {from: "EUR", to: "USD"}));
                // console.log(text, "text");
                let conversion_in_dollars_euro = text * 12
                console.log(conversion_in_dollars_euro, "conversion_in_dollars_euro")

                let a = <?php echo $_SESSION['currency'];?>;
                let yearly_amount_euro  =  a * 12;
                console.log(yearly_amount_euro, "yearly_amount")


                document.getElementById('payment_text_euro').innerHTML = text
                document.getElementById('yearly_amount_euro').innerHTML = yearly_amount_euro
                document.getElementById('conversion_in_dollars_euro').innerHTML = conversion_in_dollars_euro

            }
            
            if((<?php echo $_SESSION['payment'];?>) = "USD"){
                console.log('<?php echo $_SESSION['payment'];?>');
                console.log('<?php echo $_SESSION['currency'];?> is in USD' );
                var text = (fx.convert((<?php echo $_SESSION['currency'];?>), {from: "USD", to: "USD"}));
                // console.log(text, "text");
                let conversion_in_usd = text * 12
                console.log(conversion_in_usd, "conversion_in_usd")

                let a = <?php echo $_SESSION['currency'];?>;
                let yearly_amount_usd  =  a * 12;
                console.log(yearly_amount_usd, "yearly_amount_usd")


                document.getElementById('payment_text_usd').innerHTML = text
                document.getElementById('yearly_amount_usd').innerHTML = yearly_amount_usd
                document.getElementById('conversion_in_usd').innerHTML = conversion_in_usd

            }
            // else{
            //     alert('hello')
            // }




        </script>
    </body>
</html>