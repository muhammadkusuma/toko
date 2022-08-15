
function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email != "" && password != "") {
        return true;
    } else {
        alert('Email dan Password harus di isi !');
        return false;
    }
}

function daftar() {
    var name = document.getElementById("daftarName").value;
    var email = document.getElementById("daftarEmail").value;
    var password = document.getElementById("daftarPassword").value;
    if (email != "" && password != "" && name != "") {
        return true;
    } else {
        alert('Name, Email dan Password harus di isi !');
        return false;
    }
}