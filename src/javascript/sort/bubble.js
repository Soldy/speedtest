const bubbleSortBase = function(){
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
        for (let i = 0 ; length > i ; i++)
            for (let j = 0 ; length - i > j ; j++ )
                if (store[j] > store[j+1])
                    swap(j, j+1);
    };

};

