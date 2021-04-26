<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO cliente ( id, nome, email, telefone ) VALUES ";

    $values = array();
    for ($i = 0; $i < count($_POST['nome']); $i++) {
        $values[] = "(NULL, '" . filter($_POST['nome'][$i]) . "',
					'" . filter($_POST['email'][$i]) . "',
					'" . filter($_POST['telefone'][$i]) . "')";
    }
    echo $sql . implode(',', $values);
}
function filter($str)
{
    return addslashes($str); //deixo demais filtros e validações por sua conta
}
?>