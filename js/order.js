const orderBtns = document.getElementsByClassName("order-btn");
const orderPopup = document.getElementById('order_popup');

const orderInProgressContent = document.querySelector('.order_in_progress');
const orderConfirmedContent = document.querySelector('.order_confirmed');

const orderCancelBtn = document.getElementById('orderCancelBtn');
const orderConfirmBtn = document.getElementById('orderConfirmBtn');
const orderConfirmedCloseBtn = document.getElementById('orderConfirmedClose')

const orderCompanyName = document.getElementById('order__company-name');
const orderPhoneNumber = document.getElementById('order__phone-number');

const ORDER_URL = 'http://barbaris.local/wp-json/barbaris/v1/order';

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
        
        sendData('POST', ORDER_URL, order)

        order['orderProgress'] = 'confirmed'
        orderToJSON = JSON.stringify(order);
        sessionStorage.setItem('order', orderToJSON);

        console.log(order)
    }
    else {
        alert("Введены недействительные данные");
    }
}

function sendData(method, url, body=null) {
    return new Promise((resolve, reject) => {
        const orderHxr = new XMLHttpRequest()

        orderHxr.open(method, url)

        orderHxr.responseType = 'json'
        orderHxr.setRequestHeader('Content-Type', 'application/json')

        orderHxr.onload = () => {
            if (orderHxr.status >= 400) {
                reject(orderHxr.response)
            } else {
                console.log(orderHxr.response)
                resolve(orderHxr.response)
            }
        }

        orderHxr.onerror = () => {
            reject(orderHxr.response)
        }

        orderHxr.send(JSON.stringify(body))
    })
}
