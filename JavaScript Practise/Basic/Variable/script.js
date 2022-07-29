function usingLet() {
    let a = 5;
    let b = 6;
    let c = a + b;

    {
        // Can not be Accessed from Outside
        let d = 7;
    }
    
    document.getElementById("let").innerHTML = "The Answer is " + c + " Block Variable " + d;
}


function usingVar() {
    var a = 5;
    var a = 10;
    var b = 6;
    var c = a + b;
    
    document.getElementById("var").innerHTML = "The Answer is " + c;
}

function usingconst() {
    const a = 5;
    a = 10;
    document.getElementById("const").innerHTML = "The Answer is " + a; 
}