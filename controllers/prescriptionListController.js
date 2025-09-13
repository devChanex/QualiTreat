getclientdata();
populateMedicineList();
populateProfileList();
function getclientdata() {

    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;
    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    $.ajax({
        url: "services/prescriptionListService.php",
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

function loadPrescriptionSub() {
    var rxid = document.getElementById("modal-rxid").value;

    var fd = new FormData();
    fd.append("rxid", rxid);

    $.ajax({
        url: "services/prescriptionsublistService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {

            document.getElementById("prescriptionsubList").innerHTML = result;

        }

    });
    document.getElementById("content-table").style.zoom = "60%";

}
function deleteRow(button) {
    const row = button.closest("tr");
    if (row) {
        row.remove();
    }
}
function AddMed() {
    const rxid = document.getElementById("modal-rxid").value;
    const medicineSelect = document.getElementById("modal-medicine");
    const medicineId = medicineSelect.value;

    if (!medicineId) {
        toastError("Please select Medicine to add");
        return;
    }

    const selectedOption = medicineSelect.options[medicineSelect.selectedIndex];
    const medicineid = selectedOption.value;
    const description = selectedOption.getAttribute("data-desc");


    const combinedText = description;

    const tableBody = document.getElementById("medicine-table").getElementsByTagName("tbody")[0];
    const row = tableBody.insertRow();

    // Hidden rxid
    const cellRxid = row.insertCell(0);
    // cellRxid.style.display = "none";
    cellRxid.innerText = medicineId;

    // Medicine name + description
    const cellMed = row.insertCell(1);
    cellMed.innerText = combinedText;

    // Action cell with Delete button
    const cellAction = row.insertCell(2);
    const deleteBtn = document.createElement("button");
    deleteBtn.className = "btn btn-danger btn-sm";
    deleteBtn.innerText = "Delete";
    deleteBtn.onclick = function () {
        row.remove();
    };
    cellAction.appendChild(deleteBtn);

    medicineSelect.selectedIndex = 0; // reset select
}

function populateMedicineList() {


    var fd = new FormData();
    $.ajax({
        url: "services/medicineListOptionService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {

            document.getElementById("modal-medicine").innerHTML = result;
        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}
//get profile from database
function populateProfileList() {


    var fd = new FormData();
    $.ajax({
        url: "services/ProfileListOptionService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {

            document.getElementById("modal-name").innerHTML = result;
        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}
//get profile details from database after mag select
function getProfileDetails(fullname) {
    if (fullname === "") {
        document.getElementById("modal-age").value = "";
        document.getElementById("modal-gender").value = "";
        document.getElementById("modal-address").value = "";
        return;
    }

    var fd = new FormData();
    fd.append("fullname", fullname);

    $.ajax({
        url: "services/GetProfileDetailsService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            try {
                var data = JSON.parse(result);
                document.getElementById("modal-age").value = data.age;
                document.getElementById("modal-gender").value = data.gender;
                document.getElementById("modal-address").value = data.address;
            } catch (e) {
                console.error("Invalid JSON:", result);
            }
        }
    });
}



function setPage(page) {
    document.getElementById("currentPage").value = page;
    getclientdata();

}

function search() {
    document.getElementById("currentPage").value = 1;
    getclientdata();
}

$('#editExpenseModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal

    $('#modal-rxid').val(button.data('rxid'));
    $('#modal-date').val(button.data('date'));
    $('#modal-name').val(button.data('name'));
    $('#modal-age').val(button.data('age'));
    $('#modal-gender').val(button.data('gender'));
    $('#modal-address').val(button.data('address'));
    $('#modal-dentist').val(button.data('dentist'));
    $('#modal-license').val(button.data('license'));
    loadPrescriptionSub();


});

$('#printPrescriptionModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal

    // Fill all matching elements (both left & right copies)
    $('.print-date').text(button.data('date'));
    $('.print-name').text(button.data('name'));
    $('.print-age').text(button.data('age'));
    $('.print-gender').text(button.data('gender'));
    $('.print-address').text(button.data('address'));
    $('.print-dentist').text(button.data('dentist'));
    $('.print-license').text(button.data('license'));

    var rxid = button.data('rxid');

    // Load medicines dynamically via AJAX and inject into both copies
    var fd = new FormData();
    fd.append("rxid", rxid);

    $.ajax({
        url: "services/getPrintablePrescriptionList.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            $(".presmedicine").html(result); // update all prescription lists
        }
    });
});



function getclientdataPagination() {

    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;

    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    $.ajax({
        url: "services/prescriptionListPaginationService.php",
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


function submitCart() {

    // Get form values
    const rxid = document.getElementById("modal-rxid").value;
    const date = document.getElementById("modal-date").value;
    const name = document.getElementById("modal-name").value;
    const age = document.getElementById("modal-age").value;
    const gender = document.getElementById("modal-gender").value;
    const address = document.getElementById("modal-address").value;
    const dentist = document.getElementById("#modal-dentist").value;
    const license = document.getElementById("#modal-license").value;

    // Get list of rxid from the table (first column in each row)
    const tableRows = document.querySelectorAll("#prescriptionsubList tr");
    const rxidList = [];

    tableRows.forEach(row => {

        const rxidCell = row.cells[0]; // Hidden rxid cell
        if (rxidCell) {
            rxidList.push(rxidCell.innerText.trim());
        }
    });

    const joinedRxids = rxidList.join(",");


    var fd = new FormData();
    fd.append('rxid', rxid);
    fd.append('date', date);
    fd.append('name', name);
    fd.append('age', age);
    fd.append('gender', gender);
    fd.append('address', address);
    fd.append('dentist', dentist);
    fd.append('license', license);
    fd.append('rxids', joinedRxids);


    $.ajax({
        url: "services/upsertprescriptionService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            if (result == "success") {
                if (rxid != "") {
                    logThis("Prescription - Update", fd, result);
                    toastSuccess("Prescription Updated Successfully");
                } else {
                    logThis("Prescription - Add", fd, result);
                    toastSuccess("Prescription Added Successfully");
                }
                $('#editExpenseModal').modal('hide');
                getclientdata();
            } else {
                logThis("Prescription - Add/Update", fd, result);
                console.log(result);
                toastError(result);
            }


        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}


function deleteCart() {


    var fd = new FormData();
    const id = document.getElementById("modal-prescriptionid").value;
    fd.append('id', id);


    $.ajax({
        url: "services/deleteprescriptionService.php",
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            logThis("Prescription - delete", fd, result);
            if (result == "success") {

                toastSuccess("Prescription Deleted Successfully");


            } else {

                toastError(result);

            }

            $('#deleteExpenseModal').modal('hide');
            getclientdata();
        }

    });
    document.getElementById("content-table").style.zoom = "60%";
}

$('#deleteExpenseModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal

    $('#modal-prescriptionid').val(button.data('id'));

});


function printPrescription() {
    const printContents = document.getElementById("printable-area").cloneNode(true);

    // Remove modal footer (buttons)
    const footer = printContents.querySelector('.modal-footer');
    if (footer) footer.remove();

    const printWindow = window.open("", "", "width=1100,height=800");
    printWindow.document.write(`
    <html>
        <head>
            <title>Prescription</title>
            <style>
                body {
                    font-family: serif;
                    font-size: 11pt;
                    margin: 0;
                    padding: 0.5in;
                    color: black;
                }
                .print-container {
                    display: flex;
                    justify-content: space-between;
                    gap: 20px;
                }
                .print-container > div {
                    width: 48%;
                    box-sizing: border-box;
                }
                h1, h2, h5, p {
                    margin: 0;
                    padding: 0;
                }
                hr {
                    border: 0;
                    border-top: 1px solid black;
                    margin: 10px 0;
                }
            </style>
        </head>
        <body>
            ${printContents.innerHTML}
        </body>
    </html>
    `);

    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
    printWindow.close();
}

