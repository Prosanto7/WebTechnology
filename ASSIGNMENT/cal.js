/**
 * This Problem is solved by Prosanto Deb(ASH1925005M) 
 */

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
    let flag = 0;

    for(let i=0;i<sequenceArray.length;i++)
    {
        for(let j=0;j<differenceArray.length;j++)
        {
            if(sequenceArray[i]==differenceArray[j])
            {
                flag++;
                break;
            }
        }
    }

    if(flag==differenceArray.length)
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
    var inputString = document.getElementById("inputString").value;

    var args = inputString.split(",").map((num)=>{
        return Number(num)
      })

    alert(checkSequenceVsDifferenceArray(getSequenceArray(args.length),getDifferenceArray(args)));
    
}

function appendInput(c)
{
    var inputString = document.getElementById("inputString").value;
    document.getElementById("inputString").value = inputString + c;
}

function clearInput()
{
    document.getElementById("inputString").value = "";
}
