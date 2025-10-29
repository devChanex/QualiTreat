loadToothExtraction();
function loadToothExtraction() {
    var clientId = document.getElementById("clientId").value;
    var consentType = "Tooth Extraction Consent";
    var fd = new FormData();
    fd.append('clientId', clientId);
     fd.append('consentType', consentType);

    $.ajax({
        url: "services/toothExtractionConsentViewerService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            result = result.trim();
            if (result != "") {

                document.getElementById("waiverDetails").innerHTML = result;
            } else {

            }
        }
    });
}

