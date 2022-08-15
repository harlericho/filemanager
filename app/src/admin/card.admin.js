const appCount = new (function () {
  this.countClient = document.getElementById("count-client");
  this.countRol = document.getElementById("count-rol");
  this.countFile = document.getElementById("count-file");
  this.countClientData = () => {
    fetch("../../controllers/client/cardClient.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        this.countClient.innerHTML = data;
      });
  };
  this.countRolData = () => {
    fetch("../../controllers/admin/cardRol.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        this.countRol.innerHTML = data;
      });
  };
  this.countFileData = () => {
    fetch("../../controllers/admin/cardFile.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        this.countFile.innerHTML = data;
      });
  };
})();
appCount.countClientData();
appCount.countRolData();
appCount.countFileData();
