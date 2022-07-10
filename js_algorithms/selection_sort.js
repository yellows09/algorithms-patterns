const array = [3, 5, 7, 9, 2, 4, 6, 8, 0,-5];
let count = 0

function sort(array) {
    for (let i = 0; i < array.length; i++) {
        let indexMin = i;
        for (let j = i + 1; j < array.length; j++) {
            if(array[j] < array[indexMin]){
                indexMin = j
            }
            count++;
        }
        let tmp = array[i]
        array[i] = array[indexMin]
        array[indexMin] = tmp
    }
    return array;
}

console.log(sort(array))
console.log(count)