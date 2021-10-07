<?php
//conexão com o banco de dados 
include ("../conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php
            //bloco que realiza o papel de READ - recupera os ddos e apresenta na tela
            try{
	            //#1 - preparar a instrução
	            $stmt = $conexao->prepare("SELECT * FROM WHERE");
		            //select todas as colunas from tabela where linha -- se tirar o where são todas as linhas  -- pode tirar o * e expecificar a coluna
	            //#2 - executar o comando 
	            if($stmt->execute()){
		            //#3 - tratar o resultado
		            while($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
					    //$rs é um objeto - o nome é variavel - o FETCH_OBJ busca a linha do banco e transforma em um objeto
			            echo "<tr>";
			            echo "<td>".rs->coluna."</td> <td>".rs->coluna."</td> <td>".rs->coluna.
							"</td>
							<td>
							<center>
								<a href=\"?act=upd$id=".$rs->id."\">
									Alterar
								</a>"
								."&nbsp;&nbsp;&nbsp;&nbsp;"
								//recuo/espaço pode ser feito no css tbm 
								."<a href=\"?act=del$id=".$rs->id."\">
									Exluir
								</a>
							</cente>
							</td>";
					        //escrito dessa maneira para mais facil entendimento pode ser colocado tudo mais proximo
			            echo "</tr>";
		            }
	            }else{
                    echo "Erro: Não foi possivel recuperar os dados do banco de dados";
                }
            } catch (PDOException $erro){
                echo "Erro: " .$erro->getMensage();
            }
        ?>
    </table>
</body>
</html>