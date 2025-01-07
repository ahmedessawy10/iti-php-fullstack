let x = 5;
let y = 6;
console.log("before x", x);
console.log("before y", y);
[x, y] = [y, x];
console.log("after x", x);
console.log("after y", y);

// task 2

function max_min(...nums) {
  let max = nums[0];
  let min = nums[0];
  nums.forEach((num) => {
    if (num > max) {
      max = num;
    }
    if (num < min) {
      min = num;
    }
  });
  return [max, min];
  // return [Max.max(...nums),Math.min(...nums)];
}

let [max, min] = max_min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
console.log("max:" + max + " & min" + min);

//   task3

var fruits = ["apple", "strawberry", "banana", "orange", "mango"];

// check if all string in array    //3-1
let is_all_string = fruits.every((fruit) => typeof fruit == "string");
console.log(is_all_string);

//some_start_with_a    //3-2
let is_some_start_with_a = fruits.some(
  (fruit) => typeof fruit == "string" && /^a.*/.test(fruit)
);
console.log(is_some_start_with_a);

//3-3

let new_array_start_with_s_b = fruits.filter(
  (fruit) =>
    typeof fruit == "string" && (/^s.*/.test(fruit) || /^b.*/.test(fruit))
);
console.log(new_array_start_with_s_b);

//3-4

let new_array_message=fruits.map(fruit=>`i like ${fruit}`);

new_array_message.forEach(message=>console.log(message));
