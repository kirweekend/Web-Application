<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple reseller</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/main.css">
   <?php
  session_start();
  if (!array_key_exists("cart", $_SESSION)) {
      $_SESSION["cart"] = array();
  }
  require_once "../config/connection.php";
  $db = connection::get_instance();
  $mysqli = $db->get_connection();
  $mysqli->query("set names utf8");
   ?>
</head>
  <body>
    <div class="page-wrap">
      <?php include "../layout/nav.php" ?>
      <div class="container">
    <div class="signin-form">
      <div class="container">
        <form class="form-signin" method="post" action="regsubmit.php" id="signup-form">
          <h2 class="form-signin-heading">Sign Up on Apple</h2><hr />
          <div class="form-group">
        <label for="mail">E-mail *</label>
        <input type="email" class="form-control" id="mail" name="email" placeholder="email@example.com" required autofocus/>
        <span id="check-e"></span>
          </div>
          <div class="form-group">
        <label for="password">Password *</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password" required/>
          </div>
          <div class="form-group">
        <label for="first_name">First name *</label>
        <input type="text" class="form-control" name="first_name" required/>
          </div>
          <div class="form-group">
        <label for="last_name">Last name *</label>
        <input type="text" class="form-control" name="last_name" required/>
          </div>
          <div class="form-group">
        <label for="salutation">Gender</label><br>
        <input type="radio" name="salutation" value="male" checked> Male<br>
        <input type="radio" name="salutation" value="female"> Female<br>
        <input type="radio" name="salutation" value="other"> Other
          </div>
          <div class="form-group">
        <label for="country">Country</label><br>
        <select name="country">
          <OPTION value="">(select one)</OPTION>
          <OPTION value="AF">Afghanistan</OPTION>
          <OPTION value="AL">Albania</OPTION>
          <OPTION value="DZ">Algeria</OPTION>
          <OPTION value="AS">American Samoa</OPTION>
          <OPTION value="AD">Andorra</OPTION>
          <OPTION value="AO">Angola</OPTION>
          <OPTION value="AI">Anguilla</OPTION>
          <OPTION value="AQ">Antarctica</OPTION>
          <OPTION value="AG">Antigua and Barbuda</OPTION>
          <OPTION value="AR">Argentina</OPTION>
          <OPTION value="AM">Armenia</OPTION>
          <OPTION value="AW">Aruba</OPTION>
          <OPTION value="AU">Australia</OPTION>
          <OPTION value="AT">Austria</OPTION>
          <OPTION value="AZ">Azerbaijan</OPTION>
          <OPTION value="BS">Bahamas</OPTION>
          <OPTION value="BH">Bahrain</OPTION>
          <OPTION value="BD">Bangladesh</OPTION>
          <OPTION value="BB">Barbados</OPTION>
          <OPTION value="BY">Belarus</OPTION>
          <OPTION value="BE">Belgium</OPTION>
          <OPTION value="BZ">Belize</OPTION>
          <OPTION value="BJ">Benin</OPTION>
          <OPTION value="BM">Bermuda</OPTION>
          <OPTION value="BT">Bhutan</OPTION>
          <OPTION value="BO">Bolivia</OPTION>
          <OPTION value="BA">Bosnia-Herzegovina</OPTION>
          <OPTION value="BW">Botswana</OPTION>
          <OPTION value="BR">Brazil</OPTION>
          <OPTION value="IO">British Indian Ocean Territory</OPTION>
          <OPTION value="BN">Brunei Darussalam</OPTION>
          <OPTION value="BG">Bulgaria</OPTION>
          <OPTION value="BF">Burkina Faso</OPTION>
          <OPTION value="BU">Burma (See MM MYANMAR)</OPTION>
          <OPTION value="BI">Burundi</OPTION>
          <OPTION value="KH">Cambodia</OPTION>
          <OPTION value="CM">Cameroon</OPTION>
          <OPTION value="CA">Canada</OPTION>
          <OPTION value="CV">Cape Verde</OPTION>
          <OPTION value="KY">Cayman Islands</OPTION>
          <OPTION value="CF">Central African Republic</OPTION>
          <OPTION value="TD">Chad</OPTION>
          <OPTION value="CL">Chile</OPTION>
          <OPTION value="CN">China </OPTION>
          <OPTION value="CX">Christmas Islands</OPTION>
          <OPTION value="CC">Cocos (Keeling) Islands</OPTION>
          <OPTION value="CO">Colombia</OPTION>
          <OPTION value="KM">Comoros</OPTION>
          <OPTION value="CG">Congo</OPTION>
          <OPTION value="CK">Cook Islands</OPTION>
          <OPTION value="CR">Costa Rica</OPTION>
          <OPTION value="CI">Cote d'Ivoire</OPTION>
          <OPTION value="HR">Croatia</OPTION>
          <OPTION value="CU">Cuba</OPTION>
          <OPTION value="CY">Cyprus</OPTION>
          <OPTION value="CZ">Czech Republic</OPTION>
          <OPTION value="CS">Czechoslovakia (Former)</OPTION>
          <OPTION value="CD">Democratic Republic of Congo</OPTION>
          <OPTION value="DK">Denmark</OPTION>
          <OPTION value="DJ">Djibouti</OPTION>
          <OPTION value="DM">Dominica</OPTION>
          <OPTION value="DO">Dominican Republic</OPTION>
          <OPTION value="TL">East Timor</OPTION>
          <OPTION value="EC">Ecuador</OPTION>
          <OPTION value="EG">Egypt</OPTION>
          <OPTION value="SV">El Salvador</OPTION>
          <OPTION value="GQ">Equatorial Guinea</OPTION>
          <OPTION value="ER">Eritrea</OPTION>
          <OPTION value="EE">Estonia</OPTION>
          <OPTION value="ET">Ethiopia</OPTION>
          <OPTION value="FO">Faeroe Islands</OPTION>
          <OPTION value="FK">Falkland Islands (Malvinas)</OPTION>
          <OPTION value="FM">Federated States of Micronesia</OPTION>
          <OPTION value="FJ">Fiji</OPTION>
          <OPTION value="FI">Finland</OPTION>
          <OPTION value="FR">France</OPTION>
          <OPTION value="GF">French Guyana</OPTION>
          <OPTION value="PF">French Polynesia</OPTION>
          <OPTION value="GA">Gabon</OPTION>
          <OPTION value="GM">Gambia</OPTION>
          <OPTION value="GE">Georgia</OPTION>
          <OPTION value="DE">Germany</OPTION>
          <OPTION value="GH">Ghana</OPTION>
          <OPTION value="GI">Gibraltar</OPTION>
          <OPTION value="GB">Great Britain (UK)</OPTION>
          <OPTION value="GR">Greece</OPTION>
          <OPTION value="GL">Greenland</OPTION>
          <OPTION value="GD">Grenada</OPTION>
          <OPTION value="GP">Guadeloupe</OPTION>
          <OPTION value="GU">Guam</OPTION>
          <OPTION value="GT">Guatemala</OPTION>
          <OPTION value="GN">Guinea (Revolutionary Peoples)</OPTION>
          <OPTION value="GW">Guinea-Bissau</OPTION>
          <OPTION value="GY">Guyana</OPTION>
          <OPTION value="HT">Haiti</OPTION>
          <OPTION value="HN">Honduras</OPTION>
          <OPTION value="HK">Hong Kong</OPTION>
          <OPTION value="HU">Hungary</OPTION>
          <OPTION value="IS">Iceland</OPTION>
          <OPTION value="IN">India</OPTION>
          <OPTION value="ID">Indonesia</OPTION>
          <OPTION value="IR">Iran, Islamic Republic of</OPTION>
          <OPTION value="IQ">Iraq</OPTION>
          <OPTION value="IE">Ireland</OPTION>
          <OPTION value="IL">Israel</OPTION>
          <OPTION value="IT">Italy</OPTION>
          <OPTION value="JM">Jamaica</OPTION>
          <OPTION value="JP">Japan</OPTION>
          <OPTION value="JO">Jordan</OPTION>
          <OPTION value="KZ">Kazakhstan</OPTION>
          <OPTION value="KE">Kenya</OPTION>
          <OPTION value="KI">Kiribati</OPTION>
          <OPTION value="KP">Korea, Democratic People's Republic</OPTION>
          <OPTION value="KR">Korea, Republic of</OPTION>
          <OPTION value="KW">Kuwait</OPTION>
          <OPTION value="KG">Kyrgyzstan</OPTION>
          <OPTION value="LA">Lao People's Democratic Republic</OPTION>
          <OPTION value="LV">Latvia</OPTION>
          <OPTION value="LB">Lebanon</OPTION>
          <OPTION value="LS">Lesotho</OPTION>
          <OPTION value="LR">Liberia</OPTION>
          <OPTION value="LI">Liechtenstein</OPTION>
          <OPTION value="LT">Lithuania</OPTION>
          <OPTION value="LU">Luxembourg</OPTION>
          <OPTION value="LY">Lybian Arab Jamahiriya</OPTION>
          <OPTION value="MO">Macau</OPTION>
          <OPTION value="MK">Macedonia</OPTION>
          <OPTION value="MG">Madagascar</OPTION>
          <OPTION value="MW">Malawi</OPTION>
          <OPTION value="MY">Malaysia</OPTION>
          <OPTION value="MV">Maldives</OPTION>
          <OPTION value="ML">Mali</OPTION>
          <OPTION value="MT">Malta</OPTION>
          <OPTION value="MH">Marshall Islands</OPTION>
          <OPTION value="MQ">Martinique</OPTION>
          <OPTION value="MR">Mauritania</OPTION>
          <OPTION value="MU">Mauritius</OPTION>
          <OPTION value="YT">Mayotte</OPTION>
          <OPTION value="MX">Mexico</OPTION>
          <OPTION value="MD">Moldova</OPTION>
          <OPTION value="MC">Monaco</OPTION>
          <OPTION value="MN">Mongolia</OPTION>
          <OPTION value="MS">Montserrat</OPTION>
          <OPTION value="MA">Morocco</OPTION>
          <OPTION value="MZ">Mozambique</OPTION>
          <OPTION value="MM">Myanmar (former Burma)</OPTION>
          <OPTION value="NA">Namibia</OPTION>
          <OPTION value="NR">Nauru</OPTION>
          <OPTION value="NP">Nepal</OPTION>
          <OPTION value="AN">Netherlands Antilles</OPTION>
          <OPTION value="NL">Netherlands</OPTION>
          <OPTION value="NC">New Caledonia</OPTION>
          <OPTION value="NZ">New Zealand</OPTION>
          <OPTION value="NI">Nicaragua</OPTION>
          <OPTION value="NE">Niger</OPTION>
          <OPTION value="NG">Nigeria</OPTION>
          <OPTION value="NU">Niue</OPTION>
          <OPTION value="NF">Norfolk Island</OPTION>
          <OPTION value="MP">Northern Marianas</OPTION>
          <OPTION value="NO">Norway</OPTION>
          <OPTION value="OM">Oman</OPTION>
          <OPTION value="PC">Pacific Island Trust Territory</OPTION>
          <OPTION value="PK">Pakistan</OPTION>
          <OPTION value="PW">Palau</OPTION>
          <OPTION value="PA">Panama</OPTION>
          <OPTION value="PG">Papua New Guinea</OPTION>
          <OPTION value="PY">Paraguay</OPTION>
          <OPTION value="PE">Peru</OPTION>
          <OPTION value="PH">Philippines</OPTION>
          <OPTION value="PN">Pitcairn</OPTION>
          <OPTION value="PL">Poland</OPTION>
          <OPTION value="PT">Portugal</OPTION>
          <OPTION value="PR">Puerto Rico</OPTION>
          <OPTION value="QA">Qatar</OPTION>
          <OPTION value="RE">Reunion</OPTION>
          <OPTION value="RO">Romania</OPTION>
          <OPTION value="RU">Russian Federation</OPTION>
          <OPTION value="RW">Rwanda</OPTION>
          <OPTION value="GS">S.Georgia & S.Sandwich Islands</OPTION>
          <OPTION value="LC">Saint Lucia</OPTION>
          <OPTION value="SM">San Marino</OPTION>
          <OPTION value="ST">Sao Tome and Principe</OPTION>
          <OPTION value="SA">Saudi Arabia</OPTION>
          <OPTION value="SN">Senegal</OPTION>
          <OPTION value="SC">Seychelles</OPTION>
          <OPTION value="SL">Sierra Leone</OPTION>
          <OPTION value="SG">Singapore</OPTION>
          <OPTION value="SK">Slovak Republic</OPTION>
          <OPTION value="SI">Slovenia</OPTION>
          <OPTION value="SB">Solomon Islands</OPTION>
          <OPTION value="SO">Somalia</OPTION>
          <OPTION value="ZA">South Africa</OPTION>
          <OPTION value="ES">Spain</OPTION>
          <OPTION value="LK">Sri Lanka</OPTION>
          <OPTION value="KN">St Kitts-Nevis</OPTION>
          <OPTION value="VC">St Vincent and Grenadines</OPTION>
          <OPTION value="SH">St. Helena</OPTION>
          <OPTION value="PM">St. Pierre and Miquelon</OPTION>
          <OPTION value="SD">Sudan</OPTION>
          <OPTION value="SR">Suriname</OPTION>
          <OPTION value="SJ">Svalbard and Jan Mayen</OPTION>
          <OPTION value="SZ">Swaziland</OPTION>
          <OPTION value="SE">Sweden</OPTION>
          <OPTION value="CH">Switzerland</OPTION>
          <OPTION value="SY">Syrian Arab Republic</OPTION>
          <OPTION value="TW">Taiwan, Province of China</OPTION>
          <OPTION value="TJ">Tajikistan</OPTION>
          <OPTION value="TZ">Tanzania, United Republic of</OPTION>
          <OPTION value="TH">Thailand</OPTION>
          <OPTION value="TG">Togo</OPTION>
          <OPTION value="TK">Tokelau</OPTION>
          <OPTION value="TO">Tonga</OPTION>
          <OPTION value="TT">Trinidad and Tobago</OPTION>
          <OPTION value="TN">Tunisia</OPTION>
          <OPTION value="TR">Turkey</OPTION>
          <OPTION value="TM">Turkmenistan</OPTION>
          <OPTION value="TC">Turks and Caicos Islands</OPTION>
          <OPTION value="TV">Tuvalu</OPTION>
          <OPTION value="UM">US Minor Outlying Islands</OPTION>
          <OPTION value="UG">Uganda</OPTION>
          <OPTION value="UA">Ukraine</OPTION>
          <OPTION value="AE">United Arab Emirates</OPTION>
          <OPTION value="VI">United States Virgin Islands</OPTION>
          <OPTION value="US">United States of America</OPTION>
          <OPTION value="UY">Uruguay</OPTION>
          <OPTION value="UZ">Uzbekistan</OPTION>
          <OPTION value="VU">Vanuatu</OPTION>
          <OPTION value="VA">Vatican City State (Holy See)</OPTION>
          <OPTION value="VE">Venezuela</OPTION>
          <OPTION value="VN">Vietnam</OPTION>
          <OPTION value="VG">Virgin Islands, British</OPTION>
          <OPTION value="WF">Wallis and Futuna Islands</OPTION>
          <OPTION value="EH">Western Sahara</OPTION>
          <OPTION value="WS">Western Samoa</OPTION>
          <OPTION value="YE">Yemen</OPTION>
          <OPTION value="ZM">Zambia</OPTION>
          <OPTION value="ZW">Zimbabwe</OPTION>
        </select>
          </div>
          <div class="form-group">
        <label for="phone">Telephone number</label>
        <input type="phone" name="phone" class="form-control"/>
          </div>
          <div class="form-group">
        <label for="dob">Date of birth</label>
        <input type="date" class="form-control" name="dob" placeholder="dd/mm/yyyy"/>
          </div>
          
          <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" required/>
          </div>
          <hr />
          <div class="form-group">
        <button type="reset" class="btn btn-default" name="btn-reset" id="btn-reset">
          <span class="glyphicon glyphicon-remove"></span> &nbsp; Reset
        </button>
        <button type="submit" class="btn btn-default" name="btn-signup" id="btn-signup">
          <span class="glyphicon glyphicon-send"></span> &nbsp; Sign up
        </button>
              </div>  
        </form>
        <br>
      </div>
    </div>
    </div>
    </div>
    <?php include "../layout/footer.php" ?>
  </body>
</html>