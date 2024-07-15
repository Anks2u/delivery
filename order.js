let openshopping = document.querySelector('.shopping');
let closeshopping = document.querySelector('.closeshopping');
let list = document.querySelector('.list');
let listcard = document.querySelector('.listcard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openshopping.addEventListener('click', ()=> {
    body.classList.add('active');
})

closeshopping.addEventListener('click', ()=> {
    body.classList.remove('active');
});

let products = [
    {
        id: 1,
        name: 'PRODUCT NAME 1',
        image: 'fridemeat.PNG',
        price: 1200
    },

    {
        id: 2,
        name: 'PRODUCT NAME 2',
        image: 'pizza.PNG',
        price: 3400
    },

    {
        id: 3,
        name: 'PRODUCT NAME 3',
        image: 'burger.PNG',
        price: 4000
    },

    {
        id: 4,
        name: 'PRODUCT NAME 4',
        image: 'bread.PNG',
        price: 1100
    },

    {
        id: 5,
        name: 'Rice and Meat',
        image: 'rice.png',
        price: 1200
    },

    {
        id: 6,
        name: 'Bread',
        image: 'slicebread.png',
        price: 950
    },
    
];

let listcards = [];
function initApp(){
    products.forEach((value, key)=>{
       let newDiv = document.createElement('div');
       newDiv.classList.add('item');
       newDiv.innerHTML = `
       <img src="image/${value.image}"/>
       <div class="title">${value.name}</div>
       <div class="price">${value.price.toLocaleString()}</div>
       <button onclick="addtocard(${key})">Add To card</button>
       `;
       list.appendChild(newDiv);
    })
    
}
initApp();
function addtocard(key){
    if(listcards[key]== null){
        listcards[key] = products[key];
        listcards[key].quantity = 1;

    }
    reloadCard();
}
function reloadCard(){
    listcard.innerHTML = '';
    let count = 0;
    let totalprice = 0;
    listcards.forEach((value, key) => {
        totalprice = totalprice + value.price;
        count = count + value.quantity;

        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changequantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changequantity(${key}, ${value.quantity + 1})">+</button>
                </div>
            `;
            listcard.appendChild(newDiv);
        }
    })
    total.innerText = totalprice.toLocaleString();
    quantity.innerText = count;
}

function changequantity(key, quantity){
    if(quantity == 0){
        delete listcards[key];
    }else{
        listcards[key].quantity = quantity;
        listcards[key].price = quantity * products[key].price;

    }
    reloadCard();
}