function calculate()
{
    var num1,num2;
    num1 = parseInt(document.getElementById("first").value);
    num2 = parseInt(document.getElementById("second").value);

    var sum = num1 + num2;
    var sub = num1 - num2;
    var mul = num1 * num2;
    var div = num1 / num2;

    document.getElementById("sum").value = sum;
    document.getElementById("sub").value = sub;
    document.getElementById("mul").value = mul;
    document.getElementById("div").value = div;
}

function getGreater()
{
    var num1,num2;

    num1 = parseInt(document.getElementById("first").value);
    num2 = parseInt(document.getElementById("second").value);

    if(num1>num2)
    {
        document.getElementById("greater").value = num1;
    }
    else
    {
        document.getElementById("greater").value = num2;
    }
}