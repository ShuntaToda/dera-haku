const headerMenuButton = document.querySelector(".l-header__menu-button");
let headerOpenFlag = false;
headerMenuButton.addEventListener("click", () => {
  headerOpenFlag = !headerOpenFlag;
  const headerMenu = document.querySelector(".l-header__menu");
  headerMenu.classList.toggle("open");
  headerMenuButton.classList.toggle("open");
});

const noscroll = (e) => {
  if (headerOpenFlag) {
    e.preventDefault();
  }
};
document.addEventListener("touchmove", noscroll, { passive: false });
document.addEventListener("wheel", noscroll, { passive: false });
