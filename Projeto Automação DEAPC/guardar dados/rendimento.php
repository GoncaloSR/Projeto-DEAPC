<?php
// Simulação da lista de rendimento e manutenção da linha
$listaRendimento = [
  ['setor' => 'Setor 1', 'rendimento' => 100],
  ['setor' => 'Setor 2', 'rendimento' => 90],
  ['setor' => 'Setor 3', 'rendimento' => 95],
  ['setor' => 'Setor 4', 'rendimento' => 80],
];

$listaErros = [
  ['setor' => 'setor 1', 'erros' => 21],
  ['setor' => 'setor 2', 'erros' => 16],
  ['setor' => 'setor 3', 'erros' => 18],
  ['setor' => 'setor 4', 'erros' => 12],
]

// Retornar os dados como JSON

echo json_encode($listaRendimento);
echo json_encode($listaErros);
?>
