const array = [3, 5, 7, 9, 2, 4, 6, 8, 0, -5];
let count = 0

function bubble_sort(array) {
    for (let i = 0; i < array.length; i++) {
        for (let j = i + 1; j < array.length; j++) {
            if(array[j] <  array[i]){
                let tmp = array[j]
                array[j] = array[i];
                array[i] = tmp
            }
            count++;
        }
    }
    return array
}

console.log(bubble_sort(array))
console.log(count)