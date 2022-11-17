<?php 

global $conexao;

$sql = "SELECT * FROM pets";
$result = $conexao->query($sql);
$qtd = $result->num_rows;

if($qtd > 0){
    while($row = $result->fetch_object())
    {
        $sqlDono = "SELECT cpf
                    FROM usuarios 
                    INNER JOIN pets ON pets.dono_id = usuarios.user_id
                    WHERE user_id = '$row->dono_id'";
        $resultDono = $conexao->query($sqlDono);
        $qtdDono = $resultDono->num_rows;

        print "<tr>"; 
        print "<td colspan='2'>" . $row->pet_id . "</td>";
        print "<td colspan='2'>" . $row->nome . "</td>";
        print "<td colspan='2'>" . $resultDono->fetch_field() . "</td>";
        switch($row->especie){
            case 'C':
                print "<td colspan='2'>" . 'Cachorro' . "</td>";
                break;
            case 'G':
                print "<td colspan='2'>" . 'Gato' . "</td>";
                break;
            case 'A':
                print "<td colspan='2'>" . 'Ave' . "</td>";
                break;
            case 'E':
                print "<td colspan='2'>" . 'Exótico' . "</td>";
                break;
            default:
                print "<td colspan='2'>" . 'Espécie não identificada' . "</td>";
                break;
        }
        print "<td colspan='2'>" . $row->raca . "</td>";
        print "<td colspan='2'> <button class='btn btn-secondary btn-sm' onclick=\"petJs.fEditar(" . "'" . $row->pet_id . "', '" . $row->nome . "', '" . $row->$resultDono->fetch_field() . "'" . ")\">Editar</button>
         <button class='btn btn-danger btn-sm' onclick=\"petJs.fExcluir(" . "'" . $row->user_id . "'" . ")\">Excluir</button> </td>";
        print "</tr>";
    }
}else{
    print "<br><p class='alert alert-danger'>Não há cadastros para vizualizar.</p>";
}
