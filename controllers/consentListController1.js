loadConsentList();


function loadConsentList() {

    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;
    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    $.ajax({
        url: "services/consentListService1.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {

            document.getElementById("resultResponseBody").innerHTML = result;
            getclientdataPagination();
        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}


function setPage(page) {
    document.getElementById("currentPage").value = page;
    loadConsentList();

}

function search() {
    document.getElementById("currentPage").value = 1;
    loadConsentList();
}
function getclientdataPagination() {

    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;

    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    $.ajax({
        url: "services/consentListPaginationService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            // $('#sortableTable').DataTable().destroy();
            // $('#sortableTable').find('tbody').append(result);
            // $('#sortableTable').DataTable().draw();
            document.getElementById("pagination").innerHTML = result;

        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}



function submitConsent() {
  const selected = document.querySelector('input[name="consent"]:checked');
  if (selected) {

    alert("You selected: " + selected.value + " Consent");
    if (selected.value === "Pediatric") {
      window.location.href = "pediatricConsent.php";
    } else if (selected.value === "Tooth Extraction") {
      window.location.href = "toothExtractionConsent.php";
    }
     else if (selected.value === "Orthodontic Waiver") {
      window.location.href = "waiver.php";
    }

    $('#pickConsentType').modal('hide');
  } else {
    alert("Please select a consent option first.");
  }
}
