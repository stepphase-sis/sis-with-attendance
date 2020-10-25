// responsive topbar
let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function () {
  mainNav.classList.toggle("active");
});

//Validation
function validate() {
  var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
  var letters = /^[A-Za-z ]+$/;
  var fname = document.register.fn.value,
    lname = document.register.ln.value,
    email = document.register.email.value,
    password = document.register.pwd.value,
    confirmpwd = document.register.repwd.value,
    number = document.register.number.value,
    add = document.register.address.value,
    country = document.register.country.value;

  if (fname == "") {
    alert("Name cannot be blank");
    document.register.fn.focus();
    return false;
  }
  if (lname == "") {
    alert("Last name cannot be blank");
    document.register.ln.focus();
    return false;
  }
  if (!letters.test(fname)) {
    alert("Name has to be alphabets");
    document.register.fn.focus();
    return false;
  }
  if (!letters.test(lname)) {
    alert("Last name has to be alphabets");
    document.register.ln.focus();
    return false;
  }
  if (password == "") {
    alert("Password cannot be blank");
    document.register.pwd.focus();

    return false;
  }

  if (password.length <= 6) {
    alert("Password cannot be less than 6 characters");
    document.register.pwd.focus();
    return false;
  }
  if (password != confirmpwd) {
    alert("Both password need to be same");
    document.register.repwd.focus();
    return false;
  }

  if (add == "") {
    alert("Address cannot be blank");
    document.register.address.focus();
    return false;
  }

  if (isNaN(number)) {
    alert("Enter numbers");
    document.register.number.focus();

    return false;
  }

  if (number.length != 10) {
    alert("Enter contact number lenght 10");
    document.register.number.focus();
    return false;
  }

  if (email == "") {
    alert("Enter email");
    document.register.email.focus();
    return false;
  } else if (!emailRegex.test(email)) {
    alert("email format is not valid");
    document.register.email.focus();
    return false;
  }

  if (
    document.register.gender[0].checked == false &&
    document.register.gender[1].checked == false
  ) {
    alert("Select gender");
    document.register.gender[0].focus();
    return false;
  }
  if (country == "-") {
    alert("Select one country");
    document.register.country.focus();
    return false;
  }
  return true;
}
