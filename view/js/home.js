const image =
  'https://images.pexels.com/photos/2174715/pexels-photo-2174715.jpeg?auto=compress&cs=tinysrgb&w=600';

const cardBack = Array.from(document.querySelectorAll('.card__side--back'));
const cardHeading = document.querySelectorAll('.card__heading-span');
const mybusCardBackSide = Array.from(
  document.querySelectorAll('.mytickets .card__side--back')
);

const myTicket = document.querySelectorAll('.mybus');
const ticketTitle = document.querySelector('.ticket__title');
const ticketFrame = document.querySelectorAll('.ticket_frame--1');
const startTicket = document.querySelector('.start');
const finishTicket = document.querySelector('.finish');
const cancleTicket = document.querySelectorAll('.cancleBtn');
const closeBtn = document.querySelector('.ticket__close');

const modal = document.querySelector('.model');
const popup = document.querySelector('.ticket');

const modalCheckout = document.querySelector('.checkout__modal');
const checkPayment = document.querySelector('.checkout');
const checkoutTitle = document.querySelector('.checkout__title');
const checkoutClose = document.querySelector('.checkout__close');

const profileBtn = document.querySelector('.profileBtn');
const bookingBtn = Array.from(document.querySelectorAll('.bookingBtn'));
const buyNow = document.querySelector('.buy__now');

const dashboardMenu = document.querySelectorAll('.dashboard__menu li');
const adminSumary = document.querySelectorAll('.dashboard__summary__box');
const addNewBtn = document.querySelector('.addNewBtn');
const addNewClose = document.querySelector('.addNew__close');
const editeBtn = document.querySelectorAll('.editeBtn');
const editeClose = document.querySelector('.edite .edite__close');
const deleteBtn = document.querySelectorAll('.deleteBtn');
const deleteClose = document.querySelector('.delete .delete__close');

/////////////////////////////////////////////////////////////
// FUNCTIONS
const getRandomColor = () => {
  var letters = [
    'linear-gradient( to right bottom,  rgba(255, 185, 0, 0.85),  rgba(255, 119, 48, 0.85))',
    'linear-gradient(to right bottom,rgba(126, 213, 111, 0.85), rgba(40, 180, 133, 0.85))',
    'linear-gradient(to right bottom,rgba(41, 152, 255, 0.85),rgba(86, 67, 250, 0.85))',
    'linear-gradient(to right bottom,#c084fc,#581c87)',
    'linear-gradient(to right bottom,#f472b6,#701a75)',
    'linear-gradient(to right bottom, #fdba74,#c2410c)',
    'linear-gradient(to right bottom, #74ebd5,#acb6e5 )',
    'linear-gradient(to right bottom, #1cb5e0,#000046)',
    'linear-gradient(to right bottom, #cbb4d4,#20002c)',
  ];

  return letters[Math.floor(Math.random() * letters.length)];
};

// GET COLOR INTO DOM
const getColorElementIntoDom = (element, psedueo = null) => {
  return window
    .getComputedStyle(element, psedueo)
    .getPropertyValue('background-image');
};

// OPEN AND CLOSE MODAL
const openModel = (element) => {
  element.style.display = 'block';
};

const closeModel = (element) => {
  element.style.display = 'none';
};

// ADD ELEMENT INTO SPECIFIC COLOR
const addElementColor = (element, color, url) => {
  element.style.backgroundImage = ''; // remove background frist
  return url
    ? (element.style.backgroundImage = `${color} , url(${url})`)
    : (element.style.backgroundImage = `${color}`);
};

// APPLY COLOR OF THE BUS INTO THE TICKET
const addColorsTicket = (color, i) => {
  const el = myTicket[i];
  const title = el.querySelectorAll('.ticket__title');
  const ticketFrame = el.querySelectorAll('.ticket_frame--2');
  console.log(ticketFrame);
  title.forEach((el) => addElementColor(el, `${color}`));
  ticketFrame.forEach((el) => addElementColor(el, `${color}`));
};

///////////////////////////////////////////////////////////////
/// APPLY

// GIVE A RANDOM COLORS IN PICTURE , HEADING & BACK-SIDE-CARD
cardBack.map((back, i) => {
  const color = getRandomColor();
  const heading = back.previousElementSibling.querySelector(
    '.card__heading-span'
  );
  const picture = back.previousElementSibling.querySelector('.card__picture');

  [back, heading].forEach((el) => addElementColor(el, `${color}`));
  addElementColor(picture, `${color}`, `${image}`);
});

mybusCardBackSide.map((mybus, i) => {
  const color = getColorElementIntoDom(mybus);
  addColorsTicket(color, i);
});

// DASHBOARD SUMARY ADD COLORS BACKGROUND
adminSumary &&
  adminSumary.forEach((el) => addElementColor(el, getRandomColor()));
dashboardMenu &&
  dashboardMenu.forEach((el) => addElementColor(el, getRandomColor()));
addNewBtn && addElementColor(addNewBtn, getRandomColor());

///////////////////////////////////////////////////////////////
// EVENTS

// CLose Icon checkout modal
checkoutClose &&
  checkoutClose.addEventListener('click', () => closeModel(modalCheckout));

window.onclick = function (event) {
  if (event.target == modalCheckout) {
    closeModel(modalCheckout);
  }
};

//CANCLE TICKET
cancleTicket &&
  cancleTicket.forEach((el) => {
    el.addEventListener('click', () => {
      console.log('canlce');
      window.alert(' Are your to cancle this tickect? or wait 5s to cancle it');
      const tikect =
        el.parentElement.parentElement.parentElement.parentElement.parentElement
          .parentElement;

      closeModel(tikect);
    });
  });

addNewBtn &&
  addNewBtn.addEventListener('click', () => {
    openModel(document.querySelector('.addNew'));
  });

addNewClose &&
  addNewClose.addEventListener('click', () => {
    closeModel(document.querySelector('.addNew'));
  });

window.onclick = function (event) {
  if (event.target == document.querySelector('.addNew')) {
    closeModel(document.querySelector('.addNew'));
  }
};

/// CLOSE OVERLAY
window.onclick = function (event) {
  if (event.target == document.querySelector('.addNew')) {
    closeModel(document.querySelector('.addNew'));
  }
  if (event.target == document.querySelector('.edite')) {
    closeModel(document.querySelector('.edite'));
  }
  if (event.target == document.querySelector('.delete')) {
    closeModel(document.querySelector('.delete'));
  }
  if (event.target == modalCheckout) {
    closeModel(modalCheckout);
  }
};

////////////////////////////////////////////////////////////
// CLIENT
// BOOKING BUTTOM AND GIVE COLORS OF CARD INTO CHECKOUT MODAL

bookingBtn &&
  bookingBtn.map((btn, i) => {
    btn.addEventListener('click', () => {
      const color = getColorElementIntoDom(cardBack[i]);
      [checkoutTitle, buyNow].forEach((el) => addElementColor(el, `${color}`));
      buyNow.style.setProperty('---color-after', `${color}`);
      const parent =
        btn.parentElement.parentElement.parentElement.parentElement;
      const scheduleId = parent.dataset.id;
      // const booked = +parent.dataset.booked;

      openModel(modalCheckout);

      // if (booked) {
      //   btn.innerHTML = "Booked";
      // }

      const priceValue = parent.querySelector('.card__price-value').innerHTML;
      const price = priceValue.slice(1, priceValue.length);

      console.log(`$${price}`, scheduleId);
      document.querySelector('.scheduleId').value = scheduleId;
      document.querySelector('.price__card').value = `$${price}`;
    });
  });

//// DISPLAY TICKET
buyNow &&
  buyNow.addEventListener('click', () => {
    const color = getColorElementIntoDom(buyNow);

    closeModel(modalCheckout); // close checkout modal
    ticketTitle.style.backgroundImage = `${color}`;
    ticketFrame.forEach((frame) => addElementColor(frame, `${color}`));

    // openModel(modal); // Open Ticket modal
    // setTimeout(() => {
    //   closeModel(modal); // Open Ticket modal
    // }, 5000);
  });

////////////////////////////////////////////////////////////
// ADMIN
// UPDATE
///PASS UPDATE ID INTO THE FORM
editeBtn &&
  editeBtn.forEach((btn) =>
    btn.addEventListener('click', () => {
      let cardId =
        btn.parentElement.parentElement.parentElement.parentElement.dataset.id;
      if (!cardId) {
        cardId = btn.parentElement.parentElement.dataset.id;
      }
      console.log(cardId);
      document.querySelector('.updateId').value = cardId;

      openModel(document.querySelector('.edite'));
    })
  );

editeClose &&
  editeClose.addEventListener('click', () => {
    closeModel(document.querySelector('.edite'));
  });

/// DELETE
// PASS DELETE FORM DELETE ID
deleteBtn &&
  deleteBtn.forEach((btn) =>
    btn.addEventListener('click', () => {
      console.log('click');
      let cardId =
        btn.parentElement.parentElement.parentElement.parentElement.dataset.id;
      if (!cardId) {
        cardId = btn.parentElement.parentElement.dataset.id;
      }
      console.log(cardId);
      document.querySelector('.deleteId').value = cardId;
      openModel(document.querySelector('.delete'));
    })
  );
deleteClose &&
  deleteClose.addEventListener('click', () => {
    closeModel(document.querySelector('.delete'));
  });
