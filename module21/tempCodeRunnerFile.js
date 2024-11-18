const students = [
  { name: "sajjad", age: 25 },
  { name: "hasan", age: 22 },
  { name: "sojib", age: 21 },
  { name: "shuvo", age: 23 },
  { name: "sajib", age: 24 },
  { name: "hassan ali", age: 26 },
  { name: "sajjad ali", age: 27 },
];

const filterstudent = students.filter((student) => students.age < 25);
console.log(filterstudent);