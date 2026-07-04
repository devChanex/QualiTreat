loadDBoiConsent();
function loadDBoiConsent() {
    var clientId = document.getElementById("clientId").value;
    var consentType = "Dental Crowns / Bridges / Onlays / Inlays";
    var fd = new FormData();
    fd.append('clientId', clientId);
     fd.append('consentType', consentType);

    $.ajax({
        url: "services/dboiConsentViewService.php",
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

