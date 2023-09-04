function formValidate() {

//create variable and assigned value from index.html file

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const phone = document.getElementById("phone").value;
  const name = document.getElementById("name").value;
  const sid = document.getElementById("sid").value;
  const zip = document.getElementById("zip").value;
  const gender = document.querySelector('input[name="gender"]:checked');
  const language = document.getElementById("myselect").value;

//check the value using console
  console.log("Gender:", gender ? gender.value : "");
  console.log("Language:", language);


//check the field must be filled.
  if (name === "") {
    alert("Please enter Name");
    return false;
  }

  if (email === "") {
    alert("Please enter email");
    return false;
  }
      
  //check correct email or not
  let emailRegex =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!emailRegex.test(email)) {
    alert("Invalid email address");
    return false;
  }

  if (password === "") {
    alert("Please enter password");
    return false;
  }
  
  //check password using uppercase and 8 charaters
  let passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
  if (!passwordRegex.test(password)) {
    alert(
      "Incorrect password. Please using minimum 8 characters and Uppercase."
    );
    return false;
  }

  if (phone === "") {
    alert("Please enter Phone Number");
    return false;
  }

  if (sid === "") {
    alert("Please enter Student_ID");
    return false;
  }

  if (zip === "") {
    alert("Please enter Zip");
    return false;
  }

  if (!gender) {
    alert("Please select a gender");
    return false;
  }

  if (language === "selectlan") {
    alert("Please select a language");
    return false;
  }

//finaly get a successfull alert 
  alert("Succesfull");
  return true; 
}
