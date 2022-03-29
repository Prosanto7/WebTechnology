function printArray(args)
{
    var output = "";

    for(let i=0;i<args.length;i++)
    {
        output = output + args[i] + " ";
    }

    return output;
}

function getDifferenceArray(args)
{
    const differenceArray = [];

    for(let i=0;i<args.length-1;i++)
    {
        differenceArray.push(Math.abs(args[i]-args[i+1]));
    }

    return differenceArray;
}

function getSequenceArray(n)
{
    const sequenceArray = [];

    for(let i=1;i<=n-1;i++)
    {
        sequenceArray.push(i);
    }

    return sequenceArray;
}

function checkSequenceVsDifferenceArray(sequenceArray,differenceArray)
{
    let found=false;

    for(let i=0;i<sequenceArray.length;i++)
    {
        for(let j=0;j<differenceArray.length;j++)
        {
            if(sequenceArray[i]==differenceArray[j])
            {
                found = true;
            }
        }
        if(!found)
        {
            found = false;
            break;
        }
    }

    if(found)
    {
        return "Jolly";
    }
    else
    {
        return "Not Jolly";
    }
}

function solveProblem()
{
    const args = [1,4,2,-1,6];

    document.getElementById("inputString").innerHTML = printArray(args);

    document.getElementById("differenceString").innerHTML = printArray(getDifferenceArray(args));

    document.getElementById("sequneceString").innerHTML = printArray(getSequenceArray(args.length));


    document.getElementById("outputString").innerHTML = checkSequenceVsDifferenceArray(getSequenceArray(args.length),getDifferenceArray(args));
    
}