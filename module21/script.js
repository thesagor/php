/*
function name(name) {
    console.log(name);
}
name('module21');*/

/*const name = function (x) {
    console.log(`this is the ${x} square of ${x * x} `);
}
name(5);*/

/*
let name = (a, b) => {
    console.log(`this is the sum of ${a + b}`);
}
name(5, 6);*/

const students = [
  { name: "sajjad", age: 25 },
  { name: "hasan", age: 22 },
  { name: "sojib", age: 21 },
  { name: "shuvo", age: 23 },
  { name: "sajib", age: 24 },
  { name: "hassan ali", age: 26 },
  { name: "sajjad ali", age: 27 },
];

const filterstudent = students.filter((student) => student.age <= 25);

console.log(filterstudent);
