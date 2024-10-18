/* banner interativo */

let prevButton = document.getElementById("prev");
let nextButton = document.getElementById("next");
let container = document.querySelector(".container");
let items = container.querySelectorAll(".list .item");
let indicator = document.querySelector(".indicators");
let dots = indicator.querySelectorAll("ul li");
let list = container.querySelector(".list");

let active = 0;
let firstPosition = 0;
let lastPosition = items.length - 1;

/* se preferir diminuir repetição: criar uma function setSlider(){} */

nextButton.onclick = () => {
  list.style.setProperty("--calculation", 1);

  let itemOld = container.querySelector(".list .item.active");
  itemOld.classList.remove("active");

  active = active + 1 > lastPosition ? 0 : active + 1;
  items[active].classList.add("active");

  let dotsOld = indicator.querySelector("ul li.active");
  dotsOld.classList.remove("active");
  dots[active].classList.add("active");

  indicator.querySelector(".number").innerText = "0" + (active + 1);
};

prevButton.onclick = () => {
  list.style.setProperty("--calculation", -1);

  let itemOld = container.querySelector(".list .item.active");
  itemOld.classList.remove("active");

  active = active - 1 < firstPosition ? lastPosition : active - 1;
  items[active].classList.add("active");

  let dotsOld = indicator.querySelector("ul li.active");
  dotsOld.classList.remove("active");
  dots[active].classList.add("active");

  indicator.querySelector(".number").innerText = "0" + (active + 1);
};

/* banner interativo */

/* jquery | botão mobile para abrir a lista do menu*/

$(document).ready(function () {
  $("#mobile_btn").on("click", function () {
    $("#mobile_menu").toggleClass("active");
    $("#mobile_btn").find('i').toggleClass("fa-x");
  });
});



/* banco de dados */
function validar_dados(){
  // obtém os valores dos campos (id) e armazenam nas variáveis
  // nome variável e 'nome' é valor
  var nome = document.getElementById('nome').value
  var nome = document.getElementById('nome').value
  var email = document.getElementById('email').value
  var email = document.getElementById('whatsapp').value
  var email = document.getElementById('mensagem').value
  
  
  //limpa as mensagens de erro antes de fazer novas validações (id do paragráfo)
 
  document.getElementById('erroNome').textContent = ""
  document.getElementById('erroCPF').textContent = ""
  document.getElementById('erroFone').textContent = ""
  document.getElementById('erroEmail').textContent = ""
  document.getElementById('erroMensagem').textContent = ""


 
 //textContent limpa os campos quando as informações forem aceitas
 //= (iniciar vazio - atribuição)
 
 //variável que indica que o formulário é válido (dentro do bloco)
 var valido = true
 
 //validação do campo nome (verifica se está vazio)
 //else if ou if estrutura condicional para executar blocos
 
 if (nome == ""){
     document.getElementById('erroNome').textContent = '*O campo nome é obrigatório'
     valido = false //não deixa a validação passar, marca como inválido
 } 

 if (email == ""){
     document.getElementById('erroEmail').textContent = '*O campo e-mail é obrigatório'
     valido = false 
 } 


 if (whatsapp == ""){
  document.getElementById('erroFone').textContent = '*O campo de número é obrigatório'
  valido = false 
} 

if (mensagem == ""){
  document.getElementById('erroMensagem').textContent = '*O campo de número é obrigatório'
  valido = false 
} 
 //verifica se contem um '@' e um '.'
 //includes significa existe / ! sinal de negação / || sinal de ou / 
 if (!email.includes('@') || !email.includes('.')){
     document.getElementById("erroEmail").textContent = "*Insira um e-mail válido"
 }
 

 if(valido){
     window.alert('Dados cadastrados com sucesso')
 }
 
 //se as validações forem válidas
 return valido
 
 }
 
 //função para alterar o tema da página (claro escuro)
 //altera a classe dark no corpo da página
 //o método classList.toggle() verifica se a classe definida no css existe. Se a classe existir. ela é removida (voltando para o tema claro)
 
 
 function alterar(){
 
 document.body.classList.toggle('dark')
     
 }
 