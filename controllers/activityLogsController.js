function logThis(task, payload, status) {

    let payloadObject = {};

    if (payload instanceof FormData) {
        payload.forEach((val, key) => {
            payloadObject[key] = val;
        });
    } else if (typeof payload === "object") {
        payloadObject = payload;
    } else {
        payloadObject = { value: payload };
    }

    // Then convert to JSON string
    let jsonPayload = JSON.stringify(payloadObject);
    var fd = new FormData();
    fd.append('task', task);
    fd.append('payload', jsonPayload);
    fd.append('status', status);
    $.ajax({
        url: "services/activityLogService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            result = result.trim();
            if (result == "success") {
                console.log("Activity logged successfully.");

            } else {
                console.log("Activity logged failed." + result);
            }
        }
    });
}