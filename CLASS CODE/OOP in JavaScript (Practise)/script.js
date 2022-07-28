
class User{
    constructor(firstName,lastName,mobileNumber,email) {
        this.first = firstName;
        this.last = lastName;
        this.mobile = mobileNumber;
        this.ema = email;
    }

    showData() {
        console.log(this.first);
        console.log(this.last);
        console.log(this.mobile);
        console.log(this.ema);
    }
}

function getData() {
   firstName = document.getElementById("firstName").value;
   lastName = document.getElementById("lastName").value;
   mobileNumber = document.getElementById("mobileNumber").value;
   email = document.getElementById("email").value;
}

function performOperation() {
    getData();
    var user = new User(firstName,lastName,mobileNumber,email);
    user.showData();
}


