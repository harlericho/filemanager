const app = new (function () {
  this.email = document.getElementById("email");
  this.password = document.getElementById("password");
  this.login = () => {
    const email = this.email.value;
    const password = this.password.value;
    var form = new FormData();
    form.append("email", email);
    form.append("password", password);
    const url = "../../controllers/client/login.controller.php";
    const options = {
      method: "POST",
      body: form,
    };
    fetch(url, options)
      .then((res) => res.json())
      .then((data) => {
        if (data === true) {
          alert("Login successful");
          window.location.href = "../../views/client/index.client.php";
        } else {
          alert("Login failed");
        }
      })
      .catch((err) => {
        console.log(err);
      });
  };
})();
