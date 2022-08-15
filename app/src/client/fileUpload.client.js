const app = new (function () {
  this.file = document.getElementById("file");
  this.name = document.getElementById("name");
  this.id = document.getElementById("id");
  this.registerFile = () => {
    const formData = new FormData();
    formData.append("file", this.file.files[0]);
    formData.append("name", this.name.value);
    formData.append("user_id", this.id.value);
    fetch("../../controllers/client/fileUpload.controller.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data === true) {
          alert("File uploaded successfully");
          window.location.href = "../../views/client/fileView.client.php";
        }
      });
  };
})();
