<?php
$servidor='127.0.0.1'; //Ou, localhost
$usuario='root';
$senha="sebrae123";
$banco= 'etec';

//Ligação com o BD
$conexao = new mysqli($servidor, $usuario, $senha, $banco); //mysqli = classe. conexao = objeto
//Tratamento.
if(isset($_GET['nome'])){               //Novo 24/08/22: Issent: Para usar o get. O get só vai existir quando o usuario clicar no botão salvar(por exemplo).

if($conexao->connect_error){    //se tiver erro: "connect_error"
    echo "Não foi possivel conectar";
}else{
    echo "conectado com sucesso!";
    $sqlGravar = "INSERT INTO tb_convidados (nome, acompanhantes) VALUES ('$_GET[nome]',$_GET[acompanhantes])";    // Boa Partica: Nome dos Comandos em CAIXA ALTA
    $conexao->query ($sqlGravar);
        /*comando insert é alocado dentro da variavel "$sqlGravar", 
            esse conteudo na variavel "$sqlGravar" é jogado dentro da variavel "$conexao->query"
            OBS: "$conexao->query" tanto conexao quanto query são coisas inseparaveis, pois query é metodo do objeto*/ 

    $resultado = $conexao->query("SELECT * FROM tb_convidados");
    //1º Maneira
    //print_r($resultado->num_rows);
    
    /*2º Maneira
    while($row = $resultado->fetch_assoc()){
        printf("<br/><tr><td>%s</td></tr>",$row["nome"],"</table>");
    }*/

    /*3º Maneira
    foreach($resultado as $convidado){
                    echo "<br/>" . $convidado["nome"];
    }*/

}
}else{                              //Novo 24/08/22: Referente ao ISSET. 
    $resultado= $conexao->query("SELECT * FROM tb_convidados"); //substitui o array(); por:"$conexão ->query("SELECT * FROM tb_convidados");"
}
?>