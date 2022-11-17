<?php 

global $conexao;

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);
$qtd = $result->num_rows;

if($qtd > 0){
    while($row = $result->fetch_object())
    {
        print "<tr>"; 
        print "<td colspan='2'>" . $row->user_id . "</td>";
        print "<td colspan='2'>" . $row->nome . "</td>";
        print "<td colspan='2'>" . $row->email . "</td>";
        print "<td colspan='2'>" . $row->telefone . "</td>";
        print "<td colspan='2'>" . $row->cpf . "</td>";
        print "<td colspan='2'> <button class='btn btn-secondary btn-sm' onclick=\"userJs.fEditar(" . "'" . $row->user_id . "', '" . $row->nome . "', '" . $row->email . "', '" . $row->telefone  . "', '" . $row->cpf . "'" . ")\">Editar</button>
         <button class='btn btn-danger btn-sm' onclick=\"userJs.fExcluir(" . "'" . $row->user_id . "'" . ")\">Excluir</button> </td>";
        print "</tr>";
    }
}else{
    print "<br><p class='alert alert-danger'>Não há cadastros para vizualizar.</p>";
}
?>