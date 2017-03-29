/**
 * Created by Elya on 3/29/2017.
 */

function myFunctionFirstname() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("firstName");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionLastname() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("lastName");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function myFunctionAge() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("age");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionCity() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("city");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionEmail() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("email");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[5];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionCountry() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("country");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionAccount() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("bankAccountNumber");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[7];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function myFunctionCard() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("creditCardNumber");
    filter = input.value.toUpperCase();
    table = document.getElementById("employee-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[8];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
