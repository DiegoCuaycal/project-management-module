// Call the dataTables jQuery plugin
// $(document).ready(function () {
//   $('#dataTable').DataTable();
// });

// event
window.addEventListener('DOMContentLoaded', event => {
  const datatablesSimpIe = document.getElementById('datatablesSimpIe');
  if (datatablesSimpIe) {
    new simpleDatatables.DataTable(datatablesSimple)
  }
});