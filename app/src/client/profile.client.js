const app = new (function () {
  this.names = document.getElementById("names");
  this.phone = document.getElementById("phone");
  this.phono = document.getElementById("phono");
  this.networking = document.getElementById("networking");
  this.email = document.getElementById("email");
  this.password = document.getElementById("password");
  this.updateData = () => {};
  this.listDataClient = () => {
    fetch("../../controllers/client/dataClient.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        this.names.value = data[0]["user_names"];
        this.phone.value = data[0]["user_phone"];
        this.networking.value = data[0]["user_url_networking"];
        this.email.value = data[0]["user_email"];
        this.password.value = data[0]["user_password"];
      });
  };
})();
app.listDataClient();
