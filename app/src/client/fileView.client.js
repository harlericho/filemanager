const app = new (function () {
  this.tbody = document.getElementById("tbody");
  this.listDataFileClient = () => {
    fetch("../../controllers/client/fileView.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.length > 0) {
          html =
            "<table class='table align-items-center table-flush table-hover' id='dataTableHover'>";
          html +=
            "<div class='container'><div class='row justify-content-center'><div class='col-xl-6 col-md-6 mb-4 alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><i class='fas fa-check'></i> List of files</div></div></div>";
          html += "<thead class='thead-light'>";
          html += "<tr>";
          html +=
            "<th>Path</th><th>Names</th><th>Characters</th><th>Date created</th><th>Options</th>";
          html += "</tr>";
          html += "</thead>";
          html += "<tfoot>";
          html += "<tr>";
          html +=
            "<th>Path</th><th>Names</th><th>Characters</th><th>Date created</th><th>Options</th>";
          html += "</tr>";
          html += "</tfoot>";
          html += "<tbody>";
          data.forEach((item) => {
            html += "<tr>";
            html += "<td>" + item.file_path + "</td>";
            html += "<td><strong>" + item.file_name + "</strong></td>";
            html +=
              "<td><p>" +
              item.file_type +
              "</p> <u>" +
              item.file_size +
              " kb</u></td>";
            html +=
              "<td><small style='color:blue' >" +
              item.file_created_at +
              "</small>";
            html +=
              "<td><button class='btn btn-primary btn-sm' title='Download' onclick='app.downloadFile(" +
              item.file_id +
              ")'><i class='fas fa-download'></i></button><button class='btn btn-danger btn-sm' title='Remove' onclick='app.inactiveFile(" +
              item.file_id +
              ")'><i class='fas fa-trash'></i></button></td>";
          });
          html += "</tr></tbody></table>";
          this.tbody.innerHTML = html;
        } else {
          this.tbody.innerHTML =
            "<div class='container'><div class='row justify-content-center'><div class='col-xl-6 col-md-6 mb-4 alert alert-warning' role='alert'><i class='fas fa-exclamation-triangle'></i> No data found</div></div></div>";
        }
        $(document).ready(function () {
          $("#dataTableHover").DataTable(); // ID From dataTable with Hover
        });
      });
  };
  this.downloadFile = (id) => {
    if (confirm("Download this file?")) {
      window.location.href =
        "../../controllers/client/fileDownload.controller.php?id=" + id;
    }
  };
  this.inactiveFile = (id) => {
    const formData = new FormData();
    formData.append("id", id);
    if (confirm("Remove this file?")) {
      fetch("../../controllers/client/fileInactive.controller.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data === true) {
            this.listDataFileClient();
            alert("File removed successfully");
          } else {
            alert("Error removing file");
          }
        });
    }
  };
})();
app.listDataFileClient();
