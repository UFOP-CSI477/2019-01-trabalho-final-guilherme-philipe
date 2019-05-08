# **CSI477-2019-01 - Proposta de Trabalho Final**
## *Grupo: Guilherme Afonso & Philipe Pereira*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é apresentar uma proposta para o trabalho a ser desenvolvido na disciplina CSI477 -- Sistemas WEB I.

A constante mudança nos preços de combustíveis faz com que clientes de postos de combustíveis fiquem, muitas vezes, desorientados no que diz respeito ao custo-benefício de abastecer em determinado posto.

Sendo assim, a ideia principal do projeto é prover uma ferramenta que consiga comparar custos de abastecimento e as demais variantes inerentes ao processo de análise sobre qual estabelecimento oferece maior custo benefício.

As variantes, termo supracitado, podem se referir, por exemplo, à distância entre indivíduo e estabelecimento, consumo veicular, vantagens como duchas, clube de prêmios, entre outros. O intuito é dispor todas essas variantes em uma "balança", pesando o benefício de utilizar determinado posto.

<!-- Apresentar o tema. -->
### 1. Tema

O trabalho final tem como tema o desenvolvimento de uma ferramenta para prover a análise de custo-benefício e com base em no conceito de elasticidade.
A elasticidade segundo Pindyck e Rubinfeld é a medida da sensibilidade de uma variável em relação a outra.
Sendo assim, essa ferramenta busca otimizar a quantidade de combustível comprado com uma mesma quantia de dinheiro, reduzir a elasticidade dinheiro da quantidade de combustível, ou seja, reduzir a variação da quantidade de combustível que pode ser comprado com determinada quantia.

Para tal, o algoritmo utiliza como insumo de processamento uma lista com os valores de combustíveis de diferentes postos e a quantidade em R$ que será utilizada para o abastecimento e a distância que o usuário se encontra do posto. Assim, alguns cálculos são feitos juntamente com algumas comparações para validar qual será a melhor opção de posto.

Com isso, esse trabalho busca viabilizar um melhor uso dos recursos disponíveis e fomentar a livre concorrência dos postos, já que com a utilização dessa ferramenta o usuário obtém mais poder de escolha e proporciona melhores escolhas.


<!-- Descrever e limitar o escopo da aplicação. -->
### 2. Escopo

Este projeto terá as seguintes funcionalidades:

* Cadastro de Clientes;
* Cadastro de Parceiros;
* Análise custo-benefício de preços de combustíveis;
* Cálculo de distância em Km entre cliente e estabelecimento;
* Cadastro de modelo veicular (deve ser possível cadastrar mais que um modelo);
* Oferecer como forma de cadastro de cliente acesso com Facebook, Google e dentre outras plataformas de rede social;
* Manter histórico em persistência de dados;
* Cálculo do total gasto em períodos de tempo calculando médias, maior preço em um abastecimento, entre outros;


<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

Não faz parte do escopo do trabalho uma automatização da obtenção de alguns insumos de processamento, com os preços dos combustíveis.

<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo
Protótipos para as páginas que foram elaboradas, e podem ser encontrados em https://github.com/UFOP-CSI477/2019-01-trabalho-final-guilherme-philipe/tree/master/Prototipos.

* Página principal
* Página de cadastro de clientes
* Página de cadastro de parceiros
* Tela para cálculo da distância e custo benefício
* Tela para análise custo benefício<!-- Esse Protótipo é necessário ??? -->
* Página para cadastro veicular



### 5. Referências
Pindyck,R. S.; Rubinfeld, D. L. Microeconomia. 7 ed. São Paulo: Pearson Education do Brasil, 2010.
