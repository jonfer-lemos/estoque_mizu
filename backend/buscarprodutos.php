<?php 

 include '../conexao/conexao.php';

function retorna($codigo, $conexao){
   $resCodigo = "SELECT * FROM tb_produtos_rev2 WHERE codigo = '$codigo' LIMIT 1";
   $resultado_codigo = mysqli_query($conexao, $resCodigo);

    if($resultado_codigo->num_rows){
        $row_descricao = mysqli_fetch_assoc($resultado_codigo);
        $valores['descricao'] = $row_descricao['descricao'];

    }else{
        $valores['descricao'] = 'PRODUTO NÃO CADASTRADO ';

    }

    return json_encode($valores);
};

if(isset($_GET['codigo'])){
    echo retorna($_GET['codigo'], $conexao);
}
    
?>
