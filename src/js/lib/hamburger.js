const Hamburger = () => {

  const mobileNav = document.querySelector(`.mobileWrapper`);
  const hamburger = document.querySelector(`.hamburger`);
  const nav = document.querySelector(`.nav`);


  const onClickHandler = () => {
    if (mobileNav.classList.contains(`none`)) {
      mobileNav.classList.remove(`none`);
      nav.style.position = `fixed`;
      nav.style.width = `100vw`;
    } else {
      mobileNav.classList.add(`none`);
      nav.style.position = `relative`;
      nav.style.width = `auto`;
    }
  };

  hamburger.addEventListener(`click`, onClickHandler);


};

export default Hamburger;
