const newText = "Test String";
let iteration = 0;
const decryptChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*";
let output = "";
for(let i=0; i<10; i++) {
    output = newText.split("").map((letter, index) => {
        if(index < iteration) return newText[index];
        if(newText[index] === " " || newText[index] === "\n") return newText[index];
        return decryptChars[Math.floor(Math.random() * decryptChars.length)];
    }).join("");
    console.log(iteration, output);
    iteration += 1/2;
}
