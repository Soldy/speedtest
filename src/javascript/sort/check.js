const checkSorted = function(inArr){
    let length = inArr.length;
    for(let i = 1 ; length > i ; i++)
        if (inArr[i-1] > inArr[i])
            return false;
    return true;
};
