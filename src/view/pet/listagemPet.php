<?php 

global $conexao;

$sql = "SELECT * FROM pets";
$result = $conexao->query($sql);
$qtd = $result->num_rows;

if($qtd > 0){
    while($row = $result->fetch_object())
    {
        print "<tr>"; 
        print "<td colspan='2'>" . $row->pet_id . "</td>";
        print "<td colspan='2'>" . $row->nome . "</td>";
        print "<td colspan='2'>" . $row->cpf_dono . "</td>";
        switch($row->especie){
            case 'c':
                print "<td colspan='2'>" . 'Cachorro' . "</td>";
                break;
            case 'g':
                print "<td colspan='2'>" . 'Gato' . "</td>";
                break;
            case 'a':
                print "<td colspan='2'>" . 'Ave' . "</td>";
                break;
            case 'e':
                print "<td colspan='2'>" . 'Exótico' . "</td>";
                break;
            default:
                print "<td colspan='2'>" . 'Espécie não identificada' . "</td>";
                break;
        }
        print "<td colspan='2'>" . $row->raca . "</td>";
        print "<td colspan='2'> <button class='btn btn-secondary btn-sm' onclick=\"petJs.fEditar(" . "'" . $row->pet_id . "', '" . $row->nome . "', '" . $row->cpf_dono . "', '" . $row->especie . "', '" . $row->raca . "'" . ")\">Editar</button>
         <button class='btn btn-danger btn-sm' onclick=\"petJs.fExcluir(" . "'" . $row->pet_id . "'" . ")\">Excluir</button> </td>";
        print "</tr>";
    }
}else{
    print "<br><p class='alert alert-danger'>Não há cadastros para vizualizar.</p>";
}
