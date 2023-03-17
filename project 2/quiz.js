const form = document.getElementById("quiz-form");
const resultsDiv = document.getElementById("results");

form.addEventListener("submit", (event) => {
    event.preventDefault();
    const q1 = form.elements["q1"].value;
    const q2 = form.elements["q2"].value;
    let score = 0;
    if (q1 === "c") {
        score++;
    }
    if (q2 === "a") {
        score++;
    }
    resultsDiv.textContent = `Your score is ${score}/2`;
});
