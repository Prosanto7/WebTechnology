function Student(name, email, likes, interest, comment) {
    this.name = name;
    this.email = email;
    this.likes = likes;
    this.interest = interest;
    this.comment = comment;

    this.show = function() {
        console.log(name);
        console.log(email);
        console.log(likes);
        console.log(interest);
        console.log(comment);
    }
}

function showDetails() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    var likes = new Array();
    
    if (document.getElementById("campusCheckBox").checked) {
        likes.push("Campus");
    }
    
    if (document.getElementById("studentsCheckBox").checked) {
        likes.push("Students");
    }

    if (document.getElementById("locationsCheckBox").checked) {
        likes.push("Locations");
    }

    if (document.getElementById("atmosphereCheckBox").checked) {
        likes.push("Atmosphere");
    }

    if (document.getElementById("dormRoomsCheckBox").checked) {
        likes.push("Dorm Rooms");
    }

    if (document.getElementById("sportsCheckBox").checked) {
        likes.push("Sports");
    }

    if (document.getElementById("friendsRadio").checked) {
        var interest = "Friends";
    } else if (document.getElementById("telivisionRadio").checked) {
        var interest = "Telivision";
    } else if (document.getElementById("internetRadio").checked) {
        var interest = "Internet";
    } else if (document.getElementById("OthersRadio").checked) {
        var interest = "Others";
    }

    var comment =  document.getElementById("commentsTextArea").value;

    var student = new Student(name, email, likes, interest, comment);
    student.show();
}



function reset() {
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("campusCheckBox").checked = false;
    document.getElementById("studentsCheckBox").checked = false;
    document.getElementById("locationsCheckBox").checked = false;
    document.getElementById("atmosphereCheckBox").checked = false;
    document.getElementById("dormRoomsCheckBox").checked = false;
    document.getElementById("sportsCheckBox").checked = false;
    document.getElementById("friendsRadio").checked = false;
    document.getElementById("telivisionRadio").checked = false;
    document.getElementById("internetRadio").checked = false;
    document.getElementById("othersRadio").checked = false;
    document.getElementById("commentsTextArea").value = "";
}