// const [red, green, blue, opac] = [255, 255, 255, 0.00]
opac = 0.0;
const section1 = document.querySelector(".menu-section");
const MAX_OFFSET = 700;

window.addEventListener("scroll", () => {
  currPosY = window.scrollY < MAX_OFFSET ? window.scrollY : MAX_OFFSET;
  opacity = currPosY / MAX_OFFSET + 0.3;
  section1.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
});
