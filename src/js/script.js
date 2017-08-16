import Validate from './lib/validate';

const $link = document.getElementById(`link`);

const onClick = event => {
  event.preventDefault;
  const link = document.getElementById(`click`).href;
// The data we are going to send in our request

// The parameters we are gonna pass to the fetch function
  const fetchData = {
    method: `GET`,
    body: link,
    headers: new Headers()
  };
  fetch(fetchData)
.then(function() {
    // Handle response you get from the server
});
};

const init = () => {
  Validate();
  console.log(`Hello, spekken`);

  $link.addEventListener(`click`, onClick);

};

init();
