# Aula 04
- Operadores lógicos
- Estrutura de decisão
    - if
    - switch
    - ternário
# Aula 05
- Estrutura de repetição
    - while
        - operador de incremento
        - arry
    - for
- Desafios
- Arquivos texto
    - Criar
    - Ler
 
## Operadores lógicos
- Os operadores lógicos são:
    - && (AND ou E): se apenas uma expressão for falsa o resultado será falso. Para ser verdadeiro, todas as expressões precisam ser verdadeiras.
    - || (OR ou OU): uma expressão precisa ser verdade para o resultado ser verdadeiro. O resultado só sera falso se todas expressões forem falso.
    - ! (NOT ou NÃO): inverte o resultado, se for verdade e você usar NOT o resultado mudará para falso, se for falso mudará para verdade.

## Estrutura de decisão
### if
- Quando você precisa que seu código tome alguma decisçao baseado em uma ou mais condições.
#### Sintaxe
```php
if(condição){
    resposta vedadeira
}else{
    resposta falsa
}
```

#### IF Simples
```php
if ($idade >= 18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}
```
#### IF com ELSE
```php
if ($idade >= 18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}else{
    echo "Você não pode entrar";
}
```
#### IF com ELSE IF
```php
if($nota >= 8){
    echo "<p>Aprovado</p>";
}else if($nota >= 5){
    echo "<p>Recuperação</p>";
}else{
    echo "<p>Reprovado</p>";
}
```
### Ternário
#### Sintaxe
```php
condição ? resposta verdadeira : resposta falsa
```
#### Exemplo
```php
$idade = 20;
echo ($idade>=18) ? "Pode entrar" : "Rejeitado";
```    
### Switch
#### Sintaze
```php
switch(variável){
    case valor:
        código
        braek;
    case valor:
        código
        braek;
    default:
        código
        braek;
}
```
#### Exemplo
```php
$cor = "amarelo";
switch ($cor){
    case 'azul':
        echo "<p>Sua cor favorita é <b>AZUL</b></p>";
        break;
    case 'verde':
        echo "<p>Sua cor favorita é <b>VERDE</b></p>";
        break;
    case 'vermelho':
        echo "<p>Sua cor favorita é <b>VERMELHO</b></p>";
        break;
    default:
        echo "<p>Sua cor favorita não é <b>verde, nem azul e nem vermelho</b></p>";
        break;
}
```

## Estruta de repetição
### while - enquanto
#### Sintaxe
- Será executado o laço enquanto a condição for  verdadeira
```php
while(condição){
    código
}
```
#### Exemplo
```php
$contador = 1;
while($contador <=10){
    echo "contador com while, loop número $contador<br>";
    $contador = $contador + 1;
    //$contador++;
}
```
# Aula 05

### Operador de incremento
- `$i++` é igaul à `$i = $i + 1`
- o operador `++` faz com que seja atribuído +1 à variável incrementada
- o operador `--` faz com que seja removido -1 da variável decrementada

### Array
- arry é um variável com multidimensões, isso significa que eu posso armazenar diversos valores (inclusive) de tipos diferentes no array
- um arry possui posição igual à quantidade de elementos. Exemplo: `$clientes = ['Eduardo', 'Emerson', 'Kadu']`
- o arry clientes possui 3 posições o cliente começando em 0. Para eu exibir o cliente Eduardo eu debo usar `clientes[0]`, para exibir o cliente Kadu deve usar `$clientes[2]`.
- o comando `count()` exibe a quantidade de posições de um arry. Exemplo: `count($clientes)`

### for - para
#### Sintaxe
```php
for(inicialização da variável ; condição ; incremento){
    bloco de código
}
```
#### Exemplo
```php
for($i=1; $i <=10; $i++){
    echo $i;
}
```
## Continuação aula 05
Criação de arquivo
    - Criar
    - Ler

### Criando um arquivo
- `fopen`: indicar o nome do arquivo e a meneira como esse arquivo será aberto. Exemplo: ``fopen("cliente.txt","w");` o nome do arquivo é "clientes.txt" e a maneira como arquivo será aberto é "w", que siginifica escrita.
- `fwrite`: indica o nome do arquivo e cp conteúdo que será inserido nesse arquivo. Exemplo: `fwrite("$arquivo","Renata");` o nome do arquivo é "clientes.txt" e o conteúdo que será inserido no arquivos ´e "Renata".
- `fclose`: indica qual arquivo será fechado. Exemplo: `fclose("$arquivo");`.

```php
$arquivo = fopen("clientes.txt","w");
fwrite($arquivo, "Renata");
fclese($arquivo);
```
> Tabela com os modos de abertura de arquivos: https://eufacoprogramas.com/como-manipular-arquivos-em-php/

#### Lendo um arquivo
- `fopen`: o modo de abertura é o "r" que indica leiutra do arquivo. Exemplo: `fopen("clientes.txt","r");
- `fread`: indicar o arquivivo que será lidoe o tamanho das informações que seram lidas, nesse caso, como normalmente queremos o arquivo inteiro utilizmaos o comando `filesize` que retorna o tamanho de um arquivo.
Exemplo: `fread($arquivo, filesize("clientes.txt"));

```php
$arquivo = fopen("clientes.txt","r");//dúvida no " "
echo fread($arquivo, filesize("clientes.txt"));
fclose($arquivo);



### Criação Tabela

<table border=2>
    <thead>
        <tr> //Coluna
            <th>Nome</th> //Linha
            <th>Idade</th>
        </tr>   
    </thead>
    <tbody>
        <tr>
            <td>Emerson Carvalho</td>
            <td>33</td>
        </tr>
        <tr>
            <td>Kadu Fernandes</td>
            <td>5</td>
        </tr>
    </tbody>
</table>

#Aula 07

- Arquivos