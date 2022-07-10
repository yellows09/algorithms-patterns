const array = [1, 4, 3, 6, 2, 12, 9]
let count = 0
function linearSearch(array, item) {
    for (let i = 0; i < array.length; i++) {
        count ++
        if(array[i] === item){
            return i;
        }
    }
    return null;
}

console.log(linearSearch(array,12), "Count: "+ count)