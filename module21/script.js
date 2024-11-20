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

/*const students = [
  { name: "sajjad", age: 25 },
  { name: "hasan", age: 22 },
  { name: "sojib", age: 21 },
  { name: "shuvo", age: 23 },
  { name: "sajib", age: 24 },
  { name: "hassan ali", age: 26 },
  { name: "sajjad ali", age: 27 },
];

const filterstudent = students.filter((student) => student.age <= 25);

console.log(filterstudent);*/


//deposit and withdraw
const account = {
    balance: 0,
    deposit: function (amount) {
        this.balance += amount;
        console.log(`the balance is now ${this.balance}`)
    },
    witdraw: function (amount) {
        if (this.balance >= amount) {
            this.balance -= amount;
        } else {
            console.log("sorry you have insufficient balance")
        }
    }
}
account.deposit(200);
account.witdraw(100);
console.log(account.balance);

