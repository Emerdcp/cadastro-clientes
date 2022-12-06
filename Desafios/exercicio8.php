<table border=2>
    <thead>
        <tr>
            <th>Dados Fornecedores</th>
        </tr>   
    </thead>
    <tbody>
        <?php
        $nomearquivo = "fornecedores.txt";
        $arquivo = fopen($nomearquivo, "r");
        while(!feof($arquivo)){
            $linha = fgets($arquivo, 100);
            echo "<tr>";
            echo "<td>$linha</td>";
            echo "</tr>";
        }
        fclose($arquivo);
        ?>
    </tbody>
</table>
