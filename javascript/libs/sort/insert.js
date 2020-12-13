const insertSortBase = function(){
    this.sort = function(inArr){
        store = [...inArr];
        length = inArr.length;
        sort();
        return store;
    };
    let length;
    let store;
    const swap = function (A, B) {
        let temp = store[A];
        store[A] = store[B];
        store[B] = temp;
    };
    const sort = function(){
        for (let i = 1 ; length > i ; i++){
            let x = store[i];
            let j = i -1;
            while ( (j >= 0) && (store[j]>x)){
                swap(j-1, j);
                j=j-1;
            }
        }
    };
};

