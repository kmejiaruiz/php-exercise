var one = document.querySelector("#one");
var two = document.querySelector("#two");
var three = document.querySelector("#three");
var four = document.querySelector("#four");
var five = document.querySelector("#five");
var six = document.querySelector("#six");

one.addEventListener("click", () => {
  window.location = "./php/suma-numeros.php";
});
two.addEventListener("click", () => {
  window.location = "./php/uno-diez.php";
});
three.addEventListener("click", () => {
  window.location = "./php/mayor-menor.php";
});
four.addEventListener("click", () => {
  window.location = "./php/salario.php";
});
five.addEventListener("click", () => {
  window.location = "./php/palindromos.php";
});
six.addEventListener("click", () => {
  window.location = "./php/persona.php";
});
