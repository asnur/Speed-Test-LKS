//Variable
let color1 = 100;
let color2 = 150;
let color3 = 200;

let color_detail1 = document.getElementById("color1");
let color_detail2 = document.getElementById("color2");
let color_detail3 = document.getElementById("color3");

//Element
let colorpick1 = document.getElementById("colorpick1");
let colorpick2 = document.getElementById("colorpick2");
let colorpick3 = document.getElementById("colorpick3");

//Event
colorpick1.addEventListener("change", function () {
  color1 = colorpick1.value;
  color_detail1.innerHTML = color1;
  changeColor(color1, color2, color3);
});

colorpick2.addEventListener("change", function () {
  color2 = colorpick2.value;
  color_detail2.innerHTML = color2;
  changeColor(color1, color2, color3);
});

colorpick3.addEventListener("change", function () {
  color3 = colorpick3.value;
  color_detail3.innerHTML = color3;
  changeColor(color1, color2, color3);
});

//function
const changeColor = (color1, color2, color3) => {
  document.getElementById(
    "rgb-slider"
  ).style.background = `rgb(${color1},${color2},${color3})`;
};
