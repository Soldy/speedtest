

const heapSortBase = function(){
    this.sort = function(inArr){
        store = [...inArr];
        length = inArr.length;
        sort();
        return store;
    };
    let length;
    let store;
    const root = function(i){
        let left = 2 * i + 1;
        let right = 2 * i + 2;
        let max = i;
        if (left < length && store[left] > store[max])
            max = left;
        if (right < length && store[right] > store[max]) 
            max = right;
        if (max != i) {
            swap(i, max);
            root(max);
        }
    };
    const swap = function (A, B) {
        let temp = store[A];
        store[A] = store[B];
        store[B] = temp;
    };
    const sort = function () {
        for (let i = Math.floor(length / 2); i >= 0; i--)
            root(i);
        for (let i = length - 1; i > 0; i--) {
            swap(0, i);
            length--;
            root(0);
        }
    };
}

