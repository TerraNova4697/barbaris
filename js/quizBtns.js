const buttons = document.getElementsByClassName('quiz-btn');
const popup = document.getElementById('popup');
const phoneFirstBlock = document.getElementById('phone-first-block');
const phoneMiddleBlock = document.getElementById('phone-middle-block');
const phoneLastBlock = document.getElementById('phone-last-block');
const companyFirstBlock = document.getElementById('company-first-block')
const companyMiddleBlock = document.getElementById('company-middle-block')
const companyLastBlock = document.getElementById('company-last-block')

const quizElm = document.querySelector(".popup__content .question-container");
const numberQuestionBoxs = quizElm.children.length;
let idxCurrentQuestion = 0;

const quizCancelBtn = document.getElementsByClassName('quizCancelBtn')
const quizNextQuestionBtn = document.getElementsByClassName('nextQuestionBtn')

const userPosition = document.getElementById('user-position-block')
const companyEmployees = document.getElementById('company-employees-block')

const progressBar = document.querySelector('.progress-bar')
const discount = document.querySelector('.discount')


function moveQuestion() {
    let leftMargin = (quizElm.clientWidth / numberQuestionBoxs) * idxCurrentQuestion;
    quizElm.style.marginLeft = -leftMargin + "px";
    console.log(quizElm.clientWidth, leftMargin);
}

function moveQuestionRight() {
    if (idxCurrentQuestion === numberQuestionBoxs - 1) idxCurrentQuestion = 0;
    else idxCurrentQuestion++;
  
    moveQuestion();
}

for(let i = 0; i < buttons.length; i++) {
    console.log(buttons[i])
    buttons[i].addEventListener('click', (event) => {
        event.preventDefault();

        const currentQuizProgress = sessionStorage.getItem('quizProgress')
        const JSONToQuizProgress = JSON.parse(currentQuizProgress)
        if (JSONToQuizProgress !== null && JSONToQuizProgress.questionNum == 3) {
            return 
        }

        if (buttons[i].id == 'mainBlock') {
            if (validatePhoneNumber(phoneFirstBlock.value) && validateStringValue(companyFirstBlock.value)){
                // Задаем этап квиза и показываем соответствующий вопрос
                const quizProgress = {
                    questionNum: '1',
                }
                const quizProgressToJSON = JSON.stringify(quizProgress)
                sessionStorage.setItem('quizProgress', quizProgressToJSON)
                popup.classList.add("popup-shown");
                const user = {
                    block: "Первый блок",
                    phoneNumber: clearPhoneNumber(phoneFirstBlock.value)
                }
                const userToJSON = JSON.stringify(user)
                sessionStorage.setItem("user", userToJSON)
            } else {
                alert("Введены недействительные данные")
            }
        }
        else if (buttons[i].id == 'middleBlock') {
            if (validatePhoneNumber(phoneMiddleBlock.value) && validateStringValue(companyMiddleBlock.value)){

                // Задаем этап квиза и показываем соответствующий вопрос
                const quizProgress = {
                    questionNum: '1',
                }
                const quizProgressToJSON = JSON.stringify(quizProgress)
                sessionStorage.setItem('quizProgress', quizProgressToJSON)
                popup.classList.add("popup-shown");

                // Сохраняем полученные ответы
                const user = {
                    block: "Второй блок",
                    phoneNumber: clearPhoneNumber(phoneMiddleBlock.value),
                    companyName: companyMiddleBlock.value
                }
                const userToJSON = JSON.stringify(user)
                sessionStorage.setItem("user", userToJSON)
            } else {
                alert("Введены недействительные данные")
            }
        }
        else if (buttons[i].id == 'lastBlock') {
            if (validatePhoneNumber(phoneLastBlock.value) && validateStringValue(companyLastBlock.value)){

                // Задаем этап квиза и показываем соответствующий вопрос
                const quizProgress = {
                    questionNum: '1',
                }
                const quizProgressToJSON = JSON.stringify(quizProgress)
                sessionStorage.setItem('quizProgress', quizProgressToJSON)
                popup.classList.add("popup-shown");

                // Сохраняем полученные ответы
                const user = {
                    block: "Третий блок",
                    phoneNumber: clearPhoneNumber(phoneLastBlock.value),
                    companyName: companyLastBlock.value
                }
                const userToJSON = JSON.stringify(user)
                sessionStorage.setItem("user", userToJSON)
            } else {
                alert("Введены недействительные данные")    
            }
        }
    })
}

for (let i = 0; i < quizCancelBtn.length; i++) {
    quizCancelBtn[i].addEventListener('click', (event) => {
        event.preventDefault()
        popup.classList.remove("popup-shown");
    
        progressBar.classList.remove('hundreed-percent')
        progressBar.classList.remove('fifty-percent')
    
        // discount.innerHTML = 'Скидка 0%'
    
        idxCurrentQuestion = 0
        moveQuestion()
    })
}

for (let i = 0; i < quizNextQuestionBtn.length; i++) {
    quizNextQuestionBtn[i].addEventListener('click', onNextQuestionClicked)
}

function onNextQuestionClicked(event) {
    event.preventDefault();
    const quizProgress = sessionStorage.getItem('quizProgress')
    const JSONToQuizProgress = JSON.parse(quizProgress)
    if (JSONToQuizProgress.questionNum == '1'){
        if (validateStringValue(userPosition.value)) {

            // обновляем данные о пользователе
            const user = sessionStorage.getItem('user');
            const JSONToUser = JSON.parse(user)
            JSONToUser.position = userPosition.value
            const userToJSON = JSON.stringify(JSONToUser)
            sessionStorage.setItem('user', userToJSON)

            // обновляем состояние
            const quizProgress = {
                questionNum: '2',
            }
            const quizProgressToJSON = JSON.stringify(quizProgress)
            sessionStorage.setItem('quizProgress', quizProgressToJSON)

            progressBar.classList.add('fifty-percent')
            moveQuestionRight();
        } else {alert('Необходимо ввести данные')}
    } 
    else if(JSONToQuizProgress.questionNum == '2') {
        if (validateStringValue(companyEmployees.value)) {

            // обновляем данные о пользователе
            const user = sessionStorage.getItem('user');
            const JSONToUser = JSON.parse(user)
            JSONToUser.employees = companyEmployees.value
            const userToJSON = JSON.stringify(JSONToUser)

            // TODO: SEND TO TELEGRAM BOT
            sessionStorage.clear();
            progressBar.classList.add('hundreed-percent')

            const quizProgress = {
                questionNum: '3',
            }
            const quizProgressToJSON = JSON.stringify(quizProgress)
            sessionStorage.setItem('quizProgress', quizProgressToJSON)
            moveQuestionRight();
        } else {alert('Необходимо ввести данные')}
    }
    else if(JSONToQuizProgress.questionNum == '3') {
        popup.classList.remove("popup-shown");
    }
}

function validatePhoneNumber(phoneNumber) {
    isValid = /^[7-8]\d{10}$/.test(clearPhoneNumber(phoneNumber));
    return isValid;
}

function validateStringValue(companyName) {
    companyName = companyName.trim();
    return companyName.length > 0;
}

function clearPhoneNumber(phoneNumber) {
    phoneNumber = phoneNumber.replace('+', '');
    phoneNumber = phoneNumber.replace('(', '');
    phoneNumber = phoneNumber.replace(')', '');
    phoneNumber = phoneNumber.replace('-', '');
    phoneNumber = phoneNumber.trim();
    return phoneNumber
}