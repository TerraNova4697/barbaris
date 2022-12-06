const orderBtns = document.getElementsByClassName("order-btn");
const orderPopup = document.getElementById('order_popup');

const orderInProgressContent = document.querySelector('.order_in_progress');
const orderConfirmedContent = document.querySelector('.order_confirmed');

const orderCancelBtn = document.getElementById('orderCancelBtn');
const orderConfirmBtn = document.getElementById('orderConfirmBtn');
const orderConfirmedCloseBtn = document.getElementById('orderConfirmedClose')

const orderCompanyName = document.getElementById('order__company-name');
const orderPhoneNumber = document.getElementById('order__phone-number');

const orderTypes = {
    orderBtnMinimal: "Минимальный",
    orderBtnStandard: "Стандартный",
    orderBtnMaximal: "Максимальный"
}

for(let i = 0; i < orderBtns.length; i++) {
    orderBtns[i].addEventListener('click', showOrderWindow);
}

orderCancelBtn.addEventListener('click', closeOrderWindow);
orderConfirmBtn.addEventListener('click', orderConfirm);
orderConfirmedCloseBtn.addEventListener('click', closeOrderWindow)

function showOrderWindow(event) {
    event.preventDefault();

    const order = {
        type: orderTypes[event.target.id],
        orderProgress: 'inProcess'
    }
    orderToJSON = JSON.stringify(order);
    sessionStorage.setItem('order', orderToJSON);

    orderPopup.classList.add('popup-shown');
}

function closeOrderWindow(event) {
    event.preventDefault();

    orderPopup.classList.remove('popup-shown');
}

function orderConfirm(event) {
    event.preventDefault();
    if (validateStringValue(orderCompanyName.value) && validatePhoneNumber(orderPhoneNumber.value)) {

        orderInProgressContent.classList.add('order-hidden');
        orderConfirmedContent.classList.remove('order-hidden');
        
        const validatedName = orderCompanyName.value;
        const validatedPhoneNumber = orderPhoneNumber.value;

        const JSONOrder = sessionStorage.getItem('order');
        const order = JSON.parse(JSONOrder)
        order['companyName'] = validatedName;
        order['companyPhoneNumber'] = validatedPhoneNumber;
        order['orderProgress'] = 'confirmed'
        orderToJSON = JSON.stringify(order);
        sessionStorage.setItem('order', orderToJSON);

        console.log(order)
    }
    else {
        alert("Введены недействительные данные");
    }
}
