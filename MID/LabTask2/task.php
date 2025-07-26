<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="tittle"><b>Bank Management System</b></p>
    <p class="Stittle"><b>Your trusted Financial Partner</b></p>
    <table>
        <td>
            <tr>
        <p class="Stittle1"><b>Customer registration Form</b></p>
    </tr>
</td>
</table>
<div class="div">
   <table>
     <tr>
            <td>
                <b>Full Name:</b>
            <td><input type="text"></td>
            </td>
        </tr>

        <tr>
            <td> <b>Date of Birth:</b></td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td>
                <b>Gender:</b>
            <td> <input type="radio" name="des">Male<input type="radio" name="des">Other</td>
            </td>
        </tr>

        <tr>
            <td> <b>Marital Status:</b></td>
            <td>

                <select name="Counry" id="country">
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>

                </select>
            </td>
        </tr>
        <tr>
            <td> <b>Account Type:</b></td>
            <td>

                <select name="Counry" id="country">
                    <option value="Saving">Saving</option>
                    <option value="Student">Student</option>

                </select>
            </td>
        </tr>

        <tr>
            <td>
                <b>Initial Deposite Ammount:</b>
            <td><input type="text"></td>
            </td>
        </tr>

        <tr>
            <td>
                <b>Mobile Number:</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td>
                <b>Email Address:</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td>
                <b>Address:</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td>
                <b>Occuoation:</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td>
                <b>National Id(NID):</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td>
                <b>Set Password:</b>
            <td><input type="text"></td>
            </td>
        </tr>
        <tr>
            <td><b>Upload Id Proof:</b></td>
            <td><input type="file"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="des">I agree to the terms and conditions</td>
        </tr>

        <tr>
            <td>
                <button class="Rbutton">Register</button>
            </td>
</tr>
        <tr>
            <td>
                <button class="Cbutton">Clear</button>
            </td>
</tr>


        
</table>
</div>
    <div class="overflow">
        this is a demo text to show how over flow workd in a small container with a certain space.

    </div>
    
</body>

<style>
    body{
        background-color:#dddddd;
    }
    .div{
        background-color:white;
        height:500px;
        width:500px;
        padding:10px;
        border:1px solid #aa0e0eff;
    }
    .overflow{
        margin-top:1000 px;
        height:70px;
        width:150px;
        padding:10px;
        border:3px solid #aa0e0eff;
        overflow:scroll;
        background-color:white;
    }
    .tittle{
        color:Blue;
        font-size:30px;
        text-align:center;
    }
    .Stittle{
        color:Blue;
        font-size:20px;
        text-align:center;
    }
    .Stittle1{
        color:Green;
        font-size:25px;
    }
    .Rbutton{display:default;
        margin-left:180px;
        height:30px;
        width:70px;
        background-color:blue;
        border:0px solid;
        font-family:Tahoma, Verdana, sans-serif;
        color:white;

        
    }
    .Cbutton{
        display:default;
        margin-left:180px;
        height:30px;
        width:70px;
        background-color:blue;
        border:0px solid;
        font-family:Tahoma, Verdana, sans-serif;
        color:white;
        
        
    }
</style>
</html>