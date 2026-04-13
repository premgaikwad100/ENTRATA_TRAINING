let text = "My email is prem123@gmail.com and phone is 9876543210";

// 1. test() -> check pattern exists
let emailPattern = /gmail\.com/;
console.log("Email found:", emailPattern.test(text));

// 2. match() -> find all digits
let digits = text.match(/\d/g);
console.log("All digits:", digits);

// 3. replace() -> replace numbers
let replacedText = text.replace(/\d+/g, "XXXX");
console.log("After replace:", replacedText);

// 4. split() -> split by spaces
let words = text.split(/\s+/);
console.log("Split words:", words);

// 5. validate email format
let email = "prem123@gmail.com";
let validEmail = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
console.log("Valid email:", validEmail.test(email));

// 6. starts with
let startsWithMy = /^My/.test(text);
console.log("Starts with My:", startsWithMy);

// 7. ends with number
let endsWithDigit = /\d$/.test("Phone9");
console.log("Ends with digit:", endsWithDigit);