"use strict"

const chevronEl = document.getElementById("chevron")
const answerEl = document.getElementById("answer")
const toggleAnswer = () => {
  answerEl.classList.toggle("displayNone")
}

chevronEl.addEventListener("click", toggleAnswer)
