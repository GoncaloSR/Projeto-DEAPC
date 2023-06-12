<?php
// Simulação da lista de rendimento e manutenção da linha
$listaRendimento = [
  ['setor' => 'Setor 1', 'rendimento' => 100],
  ['setor' => 'Setor 2', 'rendimento' => 90],
  ['setor' => 'Setor 3', 'rendimento' => 95],
  ['setor' => 'Setor 4', 'rendimento' => 80]
];

// Retornar os dados como JSON
echo json_encode($listaRendimento);
?>
