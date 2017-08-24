const Validate = () => {
  const $newsletter = document.querySelector(`.newsletter__form`);

  const validateForm = e => {
    if ($newsletter.checkValidity()) {
      console.log(`valid`);
    } else {
      console.log(`niet valid`);
      e.preventDefault();
    }
  };

  const onBlur = e => {
    e.currentTarget.classList.add(`newsletter__form__name--animation`);
    console.log(`onblur`);
    if (e.currentTarget.validity.typeMismatch) {
      e.currentTarget.parentNode.querySelector(`.error`).innerHTML = `E-mailadres bestaat niet`;
      console.log(`FOUT`);
    }
    if (e.currentTarget.validity.valueMissing) {
      e.currentTarget.parentNode.querySelector(`.error`).innerHTML = `Gelieve dit veld in te vullen`;
      console.log(e.currentTarget);
    }
    e.currentTarget.classList.add(`validated`);
			// haal bovenstaande lijn uit commentaar + ze de andere css selectors actief
  };

  const onInput = e => {
    console.log(`oninput`);
    if (e.currentTarget.validity.valid) {
      e.currentTarget.parentNode.querySelector(`.error`).innerHTML = ``;
    }
  };

  const onClick = e => {
    e.currentTarget.classList.remove(`newsletter__form__name--animation`);
    console.log(`click`);
  };

  const init = () => {
    if ($newsletter) {
      $newsletter.noValidate = true;
      $newsletter.addEventListener(`submit`, validateForm);

      const $email = document.querySelector(`.newsletter__form__email`);
      $email.addEventListener(`blur`, onBlur);
      $email.addEventListener(`input`, onInput);
      $email.addEventListener(`click`, onClick);

      const $name = document.querySelector(`.newsletter__form__name`);
      $name.addEventListener(`blur`, onBlur);
      $name.addEventListener(`input`, onInput);
      $name.addEventListener(`click`, onClick);
    }
  };

  init();
};

export default Validate;
