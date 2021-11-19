<?php  include("header.php");?>
<head>
  <script>
  function validation()
  {
      var n=document.getElementById("n").value;
      var p=document.getElementById("p").value;
      var e=document.getElementById("e").value;
      var patt=/^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
       if( n=="" && e=="" && p=="")
       {
          alert("First Fill the Username, Email and Password");
          return false;
       }
       else if(!patt.test(e))
      {
          alert("Emaill pattern doesn't match");
          return false;
       }
          
          else
             {
                return true;
              }
      }
      </script>
  </head>
  <?php
$con=mysqli_connect("localhost","root","","questionera");
$sel="select * from  user where email='$_SESSION[email]'";
$run=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($run))
{
  $n=$row['name'];
  $e=$row['email'];
  $p=$row['password'];
  $m=$row['mobile'];
  $c=$row['country'];
  $pic=$row['pic'];
  $g=$row['gender'];
  $q=$row['qualification'];
}
?>
    <body>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <h1><u><br>Your Profile</u></h3><br><i>Edit your profile.</i><a href="usignin.php"> Sign In</a>
        <form action="eusubmit.php" method="post" enctype="multipart/form-data">
        	<table class="table table-responsive">
        		<tr>
        			<td>User Name</td>
        		    <td><input type="text" name="name" id="n" class="form-control" value="<?php echo $n; ?>"></td>
        		</tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" name="email" id="e"class="form-control"  value="<?php echo $e; ?>"></td>
                </tr>
        		 <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required="" id="p"class="form-control" value="<?php echo $p; ?>"></td>
                </tr>
                 <tr>
                    <td>Mobile No</td>
                    <td><input type="tel" name="mobile" class="form-control" maxlength="10" value="<?php echo $m; ?>"></td>
                </tr>
               <tr>
               	<td>Select Country</td><td>
               		<select name="country"class="form-control" >
<option selected="selected"><?php echo $c; ?></option>
<option>Afghanistan</option>
<option >Albania</option>
<option >Algeria</option>
<option >American Samoa</option>
<option>Andorra</option>	
<option >Angola</option>
<option >Anguilla</option>
<option >Antigua &amp; Barbuda</option>
<option >Argentina</option>
<option >Armenia</option>
<option >Aruba</option>
<option >Australia</option>
<option >Austria</option>
<option >Azerbaijan</option>
<option >Bahamas</option>
<option >Bahrain</option>
<option >Bangladesh</option>
<option >Barbados</option>
<option >Belarus</option>
<option >Belgium</option>
<option >Belize</option>
<option >Benin</option>
<option >Bermuda</option>
<option >Bhutan</option>
<option >Bolivia</option>
<option >Bonaire</option>
<option >Bosnia &amp; Herzegovina</option>
<option >Botswana</option>
<option >Brazil</option>
<option >British Indian Ocean Ter</option>
<option >Brunei</option>
<option >Bulgaria</option>
<option >Burkina Faso</option>
<option>Burundi</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Canary Islands</option>
<option>Cape Verde</option>
<option>Cayman Islands</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Channel Islands</option>
<option>Chile</option>
<option>China</option>
<option>Christmas Island</option>
<option>Cocos Island</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo</option>
<option>Cook Islands</option>
<option>Costa Rica</option>
<option>Cote D'Ivoire</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Curacao</option>
<option>Cyprus</option>
<option>Czech Republic</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>East Timor</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Falkland Islands</option>
<option>Faroe Islands</option>
<option>Fiji</option>
<option>Finland</option>
<option>France</option>
<option>French Guiana</option>
<option>French Polynesia</option>
<option>French Southern Ter</option>
<option>Gabon</option>
<option>Gambia</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Gibraltar</option>
<option>Great Britain</option>
<option>Greece</option>
<option>Greenland</option>
<option>Grenada</option>
<option>Guadeloupe</option>
<option>Guam</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Hawaii</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Isle of Man</option>
<option>Israel</option>
<option>Italy</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Korea North</option>
<option>Korea South</option>
<option>Kuwait</option>
<option>Kyrgyzstan</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macau</option>
<option>Macedonia</option>
<option>Madagascar</option>
<option>Malaysia</option>
<option>Malawi</option>
<option>Maldives</option>
<option>Mali</option>
<option>Malta</option>
<option>Marshall Islands</option>
<option>Martinique</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mayotte</option>
<option>Mexico</option>
<option>Midway Islands</option>
<option>Moldova</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montserrat</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Myanmar</option>
<option>Nambia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherland Antilles</option>
<option>Netherlands (Holland, Europe)</option>
<option>Nevis</option>
<option>New Caledonia</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>Niue</option>
<option>Norfolk Island</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau Island</option>
<option>Palestine</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Pitcairn Island</option>
<option>Poland</option>
<option>Portugal</option>
<option>Puerto Rico</option>
<option>Qatar</option>
<option>Republic of Montenegro</option>
<option>Republic of Serbia</option>
<option>Reunion</option>
<option>Romania</option>
<option>Russia</option>
<option>Rwanda</option>
<option>St Barthelemy</option>
<option>St Eustatius</option>
<option>St Helena</option>
<option>St Kitts-Nevis</option>
<option>St Lucia</option>
<option>St Maarten</option>
<option>St Pierre &amp; Miquelon</option>
<option>St Vincent &amp; Grenadines</option>
<option>Saipan</option>
<option>Samoa</option>
<option>Samoa American</option>
<option>San Marino</option>
<option>Sao Tome &amp; Principe</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Serbia</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Slovakia</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syria</option>
<option>Tahiti</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>Togo</option>
<option>Tokelau</option>
<option>Tonga</option>
<option>Trinidad &amp; Tobago</option>
<option>Tunisia</option>
<option>Turkey</option>
<option>Turkmenistan</option>
<option>Turks &amp; Caicos Is</option>
<option>Tuvalu</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>United States of America</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Vatican City State</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Virgin Islands (Brit)</option>
<option>Virgin Islands (USA)</option>
<option>Wake Island</option>
<option>Wallis &copy; Futana Is</option>
<option>Yemen</option>
<option>Zaire</option>
<option>Zambia</option>
<option>Zimbabwe</option>
</select>
               	</td>
               </tr>
                <tr>
                  <td><label>Gender</label></td>
                  <td><input type="radio" name="gender" checked="checked" <?php echo $g; ?>" />Male
                    &nbsp;&nbsp;<input type="radio" name="gender" <?php echo $g; ?>"/>Female
                  </td>
                </tr>
               <td>Choose Profile Pic</td>
               <td><input type="file" name="picture" /><br><b>Old Profile Pic</b><img src="<?php echo $pic; ?>" width="200px" height="150px"></img></td>     
                </tr> 
               <tr>
                    <td><label>Qualication</label></td>
                    <td>
                    <select name="qual" class="form-control">
                    <option selected="selected" ><?php echo $q; ?></option>
                    <option name>Matriculation</option>
                    <option>12th</option>
                    <option>Diploma</option>
                    <option>Degree</option>
                    </select>
                      </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary" name="login" onclick="return validation();"></td>
                </tr>
        </table>
        </form>
    </div>
</div>
</body>
<?php  include("footer.php");?>