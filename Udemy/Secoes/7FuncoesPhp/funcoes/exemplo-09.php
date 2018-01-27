<?php

//Funcoes Recursivas

$hierarquia = array(
  array(
    'nome_cargo'=>'CEO',
    'subordinados'=>array(
      //Inicio: Diretor Comercial
      array(
        'nome_cargo'=>'Diretor Comercial',
        'subordinados'=>array(
          //Inicio: Gerente de Vendas
          array(
            'nome_cargo'=>'Gerente de Vendas'
          )
          //Termino: Gerente De Vendas
        )
      ),
      //Termino: Diretor Comercial
      //Inicio: Direetor Financeiro
      array(
        'nome_cargo'=>'Diretor Financeiro',
        'subordinados'=>array(
          //Inicio: Gerentes de Contas a Pagar
          array(
            'nome_cargo'=>'Gerente de Contas a Pagar',
            'subordinados'=>array(
              //Inicio: Supervisor de Pagamentos
              array(
                'nome_cargo'=>'Supervisor de Pagamentos'
              )
              //Termino: Supervisor de Pagamentos
            )
          ),
          //Termino: Gerente de Contas a Pagar
          //Inicio: Gerente de Compras
          array(
            'nome_cargo'=>'Gerente de Compras',
            'subordinados'=>array(
              //Inicio: Supervisor de Suprimentos
              array(
                'nome_cargo'=>'Supervisor de Suprimentos',
                'subordinados'=>array(//add apos tudo pq ele espandi mais e mais

                  array(
                    'nome_cargo'=>'Funcionario'
                  )


                )
              )
              //Termino: Supervisor de Suprimentos
            )
          )
          //Termino: Gerente de Compras
        )
      )
      //Termino: Diretor Financeiro
    )
  )
);

function exibe($cargos){

  $html = "<ul>";

  foreach ($cargos as $cargo) {

    $html .= "<li>";

    $html .= $cargo['nome_cargo'];
    //isset verifica se a variavel esta vazia
    //count conta quantos elementos tem dentro de uma chave de array
    if (isset($cargo['subordinados']) && count($cargo['subordinados'])) {
      //ele ira rodar enquanto tiver subordinados dentro do array
      $html .= exibe($cargo['subordinados']);

    }

    $html .= "</li>";

  }

  $html .= "</ul>";

  return $html;
}

echo exibe($hierarquia);

 ?>
