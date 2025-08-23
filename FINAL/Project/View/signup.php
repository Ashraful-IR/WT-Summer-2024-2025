<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../CSS/signupstyle.css" type="text/css">
</head>

<body>
    <form name="form" method="post" onsubmit="return validateForm()">
    
        
      <table>
        <tr>
          <td>
            <label for="fnamme">First Name</label><br>
            <input type="text" name="fname" id="fname" class="password" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="lname">Last Name</label><br>
            <input type="text"name="lname"id="lname"class="password"/>
          </td>
        </tr>

        <tr>
          <td>
            <label for="lname">Address</label><br>
            <input type="text"name="address"id="address"class="password"/>
          </td>
        </tr>

        <tr>
          <td>
            <label for="lname">City</label><br>
            <input type="text"name="city"id="city"class="password"/>
          </td>
        </tr>
        <tr>
            <div>
                <tr>
                <td>
                    <label for="state">State</label><br>
                        <select name="state" id="state" calss="state" placeholder="Select State" style="width:100%" style="opacity: 0.5;" style="color: rgb(137, 136, 136);">
                            <option value="" disabled selected hidden>State</option>
                            <option value="">Dhaka</option>
                            <option value="">Chittagong</option>
                            <option value="">Khulna</option>
                            <option value="">Rajshahi</option>
                            <option value="">Sylhet</option>
                        </select>
                </td>
            </tr>
            </div>
          <td>
            <label for="lname">Phone</label><br>
            <input type="text" name="phone"id="phone"class="password"/>
          </td>
        </tr>
        <tr>
          <td>
            <label for="lname">Email</label><br>
            <input type="text"name="email"id="email"class="password"/>
          </td>
        </tr>
        <tr>
          <td>
            <label for="lname">Creat Password(min 8 word)</label><br>
            <input type="text"name="password"id="password"class="password"/>
          </td>
        </tr>
        <tr>
          <td>
            <label for="lname">Confirm Password</label><br>
            <input type="text"name="Cpassword"id="Cpassword"class="password"/>
          </td>
        </tr>
      </table>
      <br />
      <br />
      <div class="buttons">
        <button type="submit" value="submit">submit</button>
        <button type="cancel" value="cancel">Cancel</button>
      </div>
    </form>
    </div>

</html>