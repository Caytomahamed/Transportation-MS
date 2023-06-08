//// User Update Admin Value
let firstName = document.querySelector('.firstname');
let lastName = document.querySelector('.lastname');
let email = document.querySelector('.email');
let phone = document.querySelector('.phone');
let password = document.querySelector('.password');

const updateBtns = Array.from(document.querySelectorAll('.editeBtn'));

console.log(phone);

updateBtns.forEach((el) => {
  el.addEventListener('click', (e) => {
    const data = el.parentElement.parentElement.querySelectorAll('td');
    firstName.value = data[1].textContent;
    lastName.value = data[2].textContent;
    email.value = `${data[4].textContent}`;
    phone.value = data[5].textContent;
    password.value = data[6].textContent;
  });
});
