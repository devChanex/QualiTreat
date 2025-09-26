getclientdata();
function getclientdata() {
    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;
    var searchBy = document.getElementById("searchBy").value; // 👈 get dropdown value

    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    fd.append("searchBy", searchBy);

    $.ajax({
        url: "services/clientProfileListService.php",
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
    getclientdata();
}

function search() {
    document.getElementById("currentPage").value = 1;
    getclientdata(); // 👈 refresh every time search input OR dropdown changes
}


function getclientdataPagination() {

    var search = document.getElementById("tableSearch").value;
    var page = document.getElementById("currentPage").value;

    var fd = new FormData();
    fd.append("search", search);
    fd.append("page", page);
    $.ajax({
        url: "services/clientProfileListPaginationService.php",
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

function showProfilePhoto(element) {
    const imageSrc = element.getAttribute('data-img');
    const imageTag = document.getElementById('modalProfileImage');
    imageTag.src = imageSrc;
}