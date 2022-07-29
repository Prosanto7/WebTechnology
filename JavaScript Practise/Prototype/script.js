
function Student(userName, password, devices, paymentMethod, comment) {
    this.userName = userName;
    this.password = password;
    this.devices = devices;
    this.paymentMethod = paymentMethod;
    this.comment = comment;

    this.show = function() {
        console.log(this.userName);
        console.log(this.password);
        console.log(this.devices);
        console.log(this.paymentMethod);
        console.log(this.comment);
    }
}


function showDetails() {
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("password").value;

    var devices = new Array();

    if (document.getElementById("laptop").checked) {
        devices.push("Laptop");
    }

    if (document.getElementById("mobile").checked) {
        devices.push("Mobile");
    }

    if (document.getElementById("camera").checked) {
        devices.push("Camera");
    }

    if (document.getElementById("bike").checked) {
        devices.push("Bike");
    }

    if (document.getElementById("visa").checked) {
        var paymentMethod = "Visa";
    } else if (document.getElementById("masterCard").checked) {
        var paymentMethod = "Master Card";
    } else if (document.getElementById("bkash").checked) {
        var paymentMethod = "Bkash";
    }

    var comment = document.getElementById("comment").value;

    var std = new Student(userName, password, devices, paymentMethod, comment);
    std.show();
}

function clear() {
    document.getElementById("userForm").value = null;
}