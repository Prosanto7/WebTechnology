console.log("HII");

function Student(email,name,dept,cgpa)
{
    this.email = email;
    this.name = name;
    this.dept =  dept;
    this.cgpa = cgpa;

    this.info = function()
    {
        console.log(this.name);
        console.log(this.email);
        console.log(this.dept);
        console.log(this.cgpa);
    }

}


var person = new Student("prosantodeb7@gmail.com","Prosanto Deb","Software Engineering",3.92);

var personLine = {
    email : "simantodeb7@gmail.com",
    name : "Simanto Deb",
    dept : "Software Engineering",
    cgpa : 3.92
}

console.log(person);
person.info();
console.log(personLine);