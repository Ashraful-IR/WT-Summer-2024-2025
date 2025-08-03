function validateForm() {
  let x = document.forms["form"]["fname"].value.trim();
  let y = document.forms["form"]["lname"].value;
  let a = document.forms["form"]["address"].value;
  let city = document.forms["form"]["city"].value;
  let phone = document.forms["form"]["phone"].value;
  let email = document.forms["form"]["email"].value;
  let password = document.forms["form"]["password"].value;
  let OAmmount = document.forms["form"]["OAmmount"].value;
  let cmnt = document.forms["form"]["cmnt"].value;
  let Cpassword = document.forms["form"]["Cpassword"].value;



  let nametype = /^[A-Za-z]+$/;
  let phonetype=/^\d{11}$/;
  let passwordtype = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#-&]).+$/;

  if (x == "") {
    alert("Full name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Last name must be filled out");
    return false;
  }
  if (a == "") {
    alert("Address must be filled out");
    return false;
  }
  if (city == "") {
    alert("City must be filled out");
    return false;
  }
  if (phone == "") {
    alert("Phone must be filled out");
    return false;
  }
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }
  if (OAmmount == "") {
    alert("Other Ammount must be filled out");
    return false;
  }
  if (cmnt == "") {
    alert("Comment must be filled out");
    return false;
  }
   if (Cpassword == "") {
     alert("Confirm Password must be filled out");
     return false;
   }




  if (!nametype.test(x)) {
    alert("Full name can contain only letters.");
    return false;
  }

  if (!phonetype.test(phone)) {
    alert("Phone number must be exactly 11 digits.");
    return false;
  }
  if (!passwordtype.test(phone)) {
    alert("Password must one uppercase and one lowercase and a special charecter.");
    return false;
  }

}
