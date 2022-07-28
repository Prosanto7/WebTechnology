function evenoddProblem() {
    let value = parseFloat(prompt("Please Enter A Number "));

    if (value % 2 == 0) {
        document.write("Even Number");
    } else {
        document.write("Odd Number");
    }
}