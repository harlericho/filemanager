const app = new (function () {
  this.countClient = document.getElementById("count-client");
  $("#exampleModalScrollable").modal("toggle");
  this.users = () => {
    fetch("../../controllers/admin/card.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        this.countClient.innerHTML = data.total;
      });
  };
})();
app.users();
