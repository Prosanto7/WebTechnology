class User
{
    constructor(name,email)
    {
        this.name = name;
        this.email = email;
    }
}

var userOne = new User("Ahmed","aud@gmail.com");
console.log(userOne);



let index=0;

function Student(email,name,dept,mobileNumber)
{
    this.email = email;
    this.name = name;
    this.dept =  dept;
    this.cgpa = 3.92;
    this.address = "Noakhali";
    this.subject = ["Bangla","English","Math","Physics"];
    this.mobile = mobileNumber;

    this.info = function()
    {
        console.log(this.name);
        console.log(this.email);
        console.log(this.dept);
        console.log(this.cgpa);
        console.log(this.address);
        console.log(this.mobile);

        console.log(this.subject[index]);
        index++;
        
    }

}


var person = new Student("prosantodeb7@gmail.com","Prosanto Deb","Software Engineering",1793222825);
var simanto = new Student("simanto@gmail.com","Simanto Deb","EEE",1767);
var joy = new Student("joy@gmail.com","Joy Deb","Micro",189);

person.info();
simanto.info();
joy.info();
