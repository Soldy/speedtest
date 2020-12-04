const gnomSortBase = function (){
     this.sort = function(inArr){
         store = [...inArr];
         length = inArr.length;
         sort();
         return store;
     }
     let length;
     let store;
     const swap = function (A, B) {
        let temp = store[A];
        store[A] = store[B];
        store[B] = temp;
     }
     const sort = function (){
        let i = 1;
        while (i < n) {
             if (store[i-1] > store[i]){
                 swap(i, i-1);
             } else
                 i++;
        }
    }
}
