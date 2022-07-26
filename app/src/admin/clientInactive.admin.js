const app = new (function () {
  this.tbody = document.getElementById("tbody");
  this.listDataClientInactive = () => {
    fetch("../../controllers/admin/clientInactive.controller.php", {
      method: "GET",
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.length > 0) {
          html =
            "<table class='table align-items-center table-flush table-hover' id='dataTableHover'>";
          html +=
            "<div class='container'><div class='row justify-content-center'><div class='col-xl-6 col-md-6 mb-4 alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><i class='fas fa-check'></i> List of inactive clients</div></div></div>";
          html += "<thead class='thead-light'>";
          html += "<tr>";
          html +=
            "<th>Photo</th><th>Names</th><th>Information</th><th>Accounts</th><th>Dates</th><th>Options</th>";
          html += "</tr>";
          html += "</thead>";
          html += "<tfoot>";
          html += "<tr>";
          html +=
            "<th>Photo</th><th>Names</th><th>Information</th><th>Accounts</th><th>Dates</th><th>Options</th>";
          html += "</tr>";
          html += "</tfoot>";
          html += "<tbody>";
          data.forEach((item) => {
            html += "<tr>";
            if (item.user_photo == null) {
              html +=
                "<td><img src='../../uploads/img/sin-foto.png' width='50' height='50'></td>";
            } else {
              html +=
                "<td><img src='" +
                item.user_photo +
                "' alt='" +
                item.user_names +
                "' class='img-fluid rounded-circle' width='50' height='50'></td>";
            }
            html += "<td><strong>" + item.user_names + "</strong></td>";
            html +=
              "<td><p>" +
              item.user_phone +
              "</p> <u>" +
              item.user_url_networking +
              "</u></td>";
            html +=
              "<td><b small style='color:violet' >" +
              item.user_email +
              "</b><br/> <sub small style='color:gray' >" +
              item.user_password +
              "</sub> </td>";
            html +=
              "<td><small style='color:blue' >" +
              item.user_created_at +
              "</small><br/> <small style='color:green' >" +
              item.user_updated_at +
              "</small></td>";
            html +=
              "<td><button class='btn btn-success btn-sm' title='Active' onclick='app.active(" +
              item.user_id +
              ")'><i class='fas fa-toggle-on'></i></button></td>";
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
  this.active = (id) => {
    var form = new FormData();
    form.append("id", id);
    if (confirm("Are you sure you want to active this client?")) {
      fetch("../../controllers/admin/clientStatusActive.controller.php", {
        method: "POST",
        body: form,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data === true) {
            this.listDataClientInactive();
          }
        });
    }
  };
})();
app.listDataClientInactive();
