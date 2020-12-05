const gnomeSortBase = function (){
     this.sort = function(inArr){
         store = [...inArr];
         length = inArr.length;
         for (let a =0 ; length/1.5 > a ; a++)
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
        while (i < length) {
             if (store[i-1] > store[i]){
                 swap(i, i-1);
             } else
                 i++;
        }
    }
}

