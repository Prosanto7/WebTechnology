function printFibonacci() {
    let a = parseInt(document.getElementById("a").value);
    let b = parseInt(document.getElementById("b").value);

    let f1 = 0;
    let f2 = 1;
    let f3 = 1;

    let count = 0;

    while(f1 <= b) {
        if (f1 >= a) {
            count++;
        }

        f1 = f2;
        f2 = f3;
        f3 = f1 + f2;

        console.log(f1);
    }

    document.getElementById("output").innerHTML = count;
}