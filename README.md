# Aula 04
- Operadores lógicos
- Estrutura de decisão
    - if
    - switch
    - ternário
- Estrutura de repetição
    - while
    - for
- Desafios
 
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


    - switch
    - ternário