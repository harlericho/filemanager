const app = new (function () {
  this.names = document.getElementById("names");
  this.email = document.getElementById("email");
  this.password = document.getElementById("password");
  this.passwordConfirm = document.getElementById("password-confirm");
  this.register = () => {
    const names = this.names.value;
    const email = this.email.value;
    const password = this.password.value;
    const passwordConfirm = this.passwordConfirm.value;
    if (password !== passwordConfirm) {
      alert("Passwords do not match");
      this.passwordConfirm.focus();
      return;
    }
    var form = new FormData();
    form.append("names", names);
    form.append("email", email);
    form.append("passwordConfirm", passwordConfirm);
    const url = "../../controllers/client/register.controller.php";
    const options = {
      method: "POST",
      body: form,
    };
    fetch(url, options)
      .then((res) => res.json())
      .then((data) => {
        if (data === true) {
          alert("Registration successful");
        } else {
          alert("Registration failed, email already exists");
          this.email.focus();
          return;
        }
        this.clean();
      })
      .catch((error) => {
        console.log(error);
      });
  };
  this.clean = () => {
    this.names.value = "";
    this.email.value = "";
    this.password.value = "";
    this.passwordConfirm.value = "";
    this.names.focus();
  };
})();
