function validateForm() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  let emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

  if (name === "") {
    alert("Name is required");
    return false;
  }

  if (!emailPattern.test(email)) {
    alert("Enter valid email");
    return false;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters");
    return false;
  }

  alert("Validation successful");
  return true;
}
