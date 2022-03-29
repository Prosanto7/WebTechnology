function printArray(args)
{
    var output = "";

    for(let i=0;i<args.length;i++)
    {
        output = output + args[i] + " ";
    }

    return output;
}

function solveProblem()
{
    const args = [1,2,3,4,5];
    args.push(100);
    
    window.alert(args);
    document.getElementById("demo").innerHTML = printArray(args);
}