
const quickSortBase=function(){
    this.sort = function(inArr){
        store = sort([...inArr]);
        return store;
    };
    let store;
    const sort = function(inArr){
        if (2 > inArr.length)
            return inArr;
        let left = [];
        let right = [];
        let next = [];
        let pivot = inArr.pop();
        for (let i = 0; inArr.length > i ; i++) {
            if (pivot >= inArr[i]) {
                left.push(inArr[i]);
            } else {
                right.push(inArr[i]);
            }
        }
        return next.concat(
            sort(left), 
            pivot, 
            sort(right)
        );
    };
};

