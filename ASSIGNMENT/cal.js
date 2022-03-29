function show()
{
    showAgain();
}

function showAgain()
{
    const args = [1,2,3,4,5];
    args.push(100);

    window.alert(args)

    var output="";

    for(let i=0;i<args.length;i++)
    {
        output = output + args[i] + "<br>"
    }

    document.getElementById("demo").innerHTML = output;
}