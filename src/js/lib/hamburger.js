const Hamburger = () => {

  const mobileNav = document.querySelector(`.mobileWrapper`);
  const hamburger = document.querySelector(`.hamburger`);
  const nav = document.querySelector(`.nav`);


  const onClickHandler = () => {
    if (mobileNav.classList.contains(`none`)) {
      mobileNav.classList.remove(`none`);
      nav.style.position = `fixed`;
      nav.style.width = `100vw`;
      nav.style.top = `0`;
      hamburger.style.backgroundImage = `url(../../assets/svg/cross.svg)`;
    } else {
      mobileNav.classList.add(`none`);
      nav.style.position = `relative`;
      nav.style.width = `auto`;
      hamburger.style.backgroundImage = `url(../../assets/svg/hamburger.svg)`;
    }
  };

  hamburger.addEventListener(`click`, onClickHandler);
};

export default Hamburger;
