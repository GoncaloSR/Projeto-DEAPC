// Adicionar manipuladores de eventos para os botões de intervenção
var btIntervencao1 = document.getElementById("btIntervencao1");
var btIntervencao2 = document.getElementById("btIntervencao2");
var btIntervencao3 = document.getElementById("btIntervencao3");
var btIntervencao4 = document.getElementById("btIntervencao4");

// Contadores de intervenções nos setores
var intervencoesSetor1 = 0;
var intervencoesSetor2 = 0;
var intervencoesSetor3 = 0;
var intervencoesSetor4 = 0;

btIntervencao1.addEventListener("click", function() {
  adicionarIntervencao(1);
});

btIntervencao2.addEventListener("click", function() {
  adicionarIntervencao(2);
});

btIntervencao3.addEventListener("click", function() {
  adicionarIntervencao(3);
});

btIntervencao4.addEventListener("click", function() {
  adicionarIntervencao(4);
});

// Botões de rendimento
var btRendimento1 = document.getElementById("btRendimento1");
var btRendimento2 = document.getElementById("btRendimento2");
var btRendimento3 = document.getElementById("btRendimento3");
var btRendimento4 = document.getElementById("btRendimento4");

btRendimento1.addEventListener("click", function() {
  mostrarRendimento(1);
});

btRendimento2.addEventListener("click", function() {
  mostrarRendimento(2);
});

btRendimento3.addEventListener("click", function() {
  mostrarRendimento(3);
});

btRendimento4.addEventListener("click", function() {
  mostrarRendimento(4);
});

function adicionarIntervencao(setor) {
  // Atualizar o contador de intervenções no setor correspondente
  if (setor === 1) {
    intervencoesSetor1++;
  } else if (setor === 2) {
    intervencoesSetor2++;
  } else if (setor === 3) {
    intervencoesSetor3++;
  } else if (setor === 4) {
    intervencoesSetor4++;
  }

  // Chamar a função para atualizar o rendimento
  atualizarRendimento();
}

function atualizarRendimento() {
  // Simulação da lista de rendimento e manutenção da linha
  var listaRendimento = [
    { setor: "Setor 1", rendimento: 100 },
    { setor: "Setor 2", rendimento: 90 },
    { setor: "Setor 3", rendimento: 95 },
    { setor: "Setor 4", rendimento: 80 }
  ];

  // Calcular o rendimento para cada setor com base no número de intervenções
  var rendimentoSetor1 = listaRendimento[0].rendimento - (10 * intervencoesSetor1);
  var rendimentoSetor2 = listaRendimento[1].rendimento - (10 * intervencoesSetor2);
  var rendimentoSetor3 = listaRendimento[2].rendimento - (10 * intervencoesSetor3);
  var rendimentoSetor4 = listaRendimento[3].rendimento - (10 * intervencoesSetor4);

  // Exemplo de exibição do rendimento em um elemento HTML
  document.getElementById("rendimentoSetor1").textContent = "Setor 1: " + rendimentoSetor1 + "%";
  document.getElementById("rendimentoSetor2").textContent = "Setor 2: " + rendimentoSetor2 + "%";
  document.getElementById("rendimentoSetor3").textContent = "Setor 3: " + rendimentoSetor3 + "%";
  document.getElementById("rendimentoSetor4").textContent = "Setor 4: " + rendimentoSetor4 + "%";
}

function mostrarRendimento(setor) {
  var listaRendimento = [
    { setor: "Setor 1", rendimento: 100 },
    { setor: "Setor 2", rendimento: 90 },
    { setor: "Setor 3", rendimento: 95 },
    { setor: "Setor 4", rendimento: 80 }
  ];

  var rendimento;

  // Obter o rendimento do setor selecionado
  if (setor === 1) {
    rendimento = listaRendimento[0].rendimento - (10 * intervencoesSetor1);
  } else if (setor === 2) {
    rendimento = listaRendimento[1].rendimento - (10 * intervencoesSetor2);
  } else if (setor === 3) {
    rendimento = listaRendimento[2].rendimento - (10 * intervencoesSetor3);
  } else if (setor === 4) {
    rendimento = listaRendimento[3].rendimento - (10 * intervencoesSetor4);
  }

  // Exibir o rendimento do setor selecionado
  document.getElementById("resultado").textContent = "Rendimento do Setor " + setor + ": " + rendimento + "%";
}
