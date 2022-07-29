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
            "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><i class='fas fa-check'></i> List of roles</div>";
          html += "<thead class='thead-light'>";
          html += "<tr>";
          html +=
            "<th>#</th><th>Description</th><th>Status</th><th>Options</th>";
          html += "</tr>";
          html += "</thead>";
          html += "<tfoot>";
          html += "<tr>";
          html +=
            "<th>#</th><th>Description</th><th>Status</th><th>Options</th>";
          html += "</tr>";
          html += "</tfoot>";
          html += "<tbody>";
          data.forEach((item) => {
            html += "<tr>";
            html += "<td>" + item.rol_id + "</td>";
            html += "<td>" + item.rol_description + "</td>";
            if (item.rol_status === 1) {
              html +=
                "<td><span class='badge badge-success'>Active</span></td>";
            } else {
              html +=
                "<td><span class='badge badge-danger'>Inactive</span></td>";
            }
            html +=
              "<td><button class='btn btn-primary btn-sm m-1' title='Edit' onclick='app.edit(" +
              item.rol_id +
              ")'><i class='fas fa-pen'></i></button><button class='btn btn-danger btn-sm' title='Remove' onclick='app.delete(" +
              item.rol_id +
              ")'><i class='fas fa-trash'></i></button></td>";
          });
          html += "</tr></tbody></table>";
          this.tbody.innerHTML = html;
        } else {
          this.tbody.innerHTML =
            "<div class='alert alert-warning' role='alert'><i class='fas fa-exclamation-triangle'></i> No data found</div>";
        }
        $(document).ready(function () {
          $("#dataTable").DataTable(); // ID From dataTable
          $("#dataTableHover").DataTable(); // ID From dataTable with Hover
        });
      });
  };
})();
app.listData();