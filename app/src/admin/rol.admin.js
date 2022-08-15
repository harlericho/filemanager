const app = new (function () {
  this.tbody = document.getElementById("tbody");

  this.listData = () => {
    fetch("../../controllers/admin/rol.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.length > 0) {
          html =
            "<table class='table align-items-center table-flush table-hover' id='dataTableHover'>";
          html +=
            "<div class='container'><div class='row justify-content-center'><div class='col-xl-6 col-md-6 mb-4 alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><i class='fas fa-check'></i> List of roles</div></div></div>";
          html += "<thead class='thead-light'>";
          html += "<tr>";
          html += "<th>Description</th><th>Status</th>";
          html += "</tr>";
          html += "</thead>";
          html += "<tfoot>";
          html += "<tr>";
          html += "<th>Description</th><th>Status</th>";
          html += "</tr>";
          html += "</tfoot>";
          html += "<tbody>";
          data.forEach((item) => {
            html += "<tr>";
            html += "<td>" + item.rol_description + "</td>";
            if (item.rol_status === 1) {
              html +=
                "<td><span class='badge badge-success'>Active</span></td>";
            } else {
              html +=
                "<td><span class='badge badge-danger'>Inactive</span></td>";
            }
          });
          html += "</tr></tbody></table>";
          this.tbody.innerHTML = html;
        } else {
          this.tbody.innerHTML =
            "<div class='container'><div class='row justify-content-center'><div class='col-xl-6 col-md-6 mb-4 alert alert-warning' role='alert'><i class='fas fa-exclamation-triangle'></i> No data found</div></div></div>";
        }
        $(document).ready(function () {
          $("#dataTable").DataTable(); // ID From dataTable
          $("#dataTableHover").DataTable(); // ID From dataTable with Hover
        });
      });
  };
})();
app.listData();
