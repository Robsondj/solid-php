# solid-php
Projeto criado para fixar e manter um histórico para consulta do SOLID principles estudado no curso Alura contendo os seguintes tópicos

## 1. Preparando o terreno

### Coesão
- Uma Classe precisa ser coesa (single responsibility) 
- Uma classe coesa faz bem uma única coisa
- Classes coesas não devem ter várias responsabilidades

### Encapsulamento
- Encapsulamento não é só get e set, mas permitir que seja visto fora da classe, somente o necessário para seu uso
- Getters e setters não são formas eficientes de aplicar encapsulamento
- É interessante fornecer acesso apenas ao que é necessário em nossas classes
- O encapsulamento torna o uso das nossas classes mais fácil e intuitivo

### Acoplamento
- Acoplamento é a dependência entre classes
- Acoplamento nem sempre é ruim, e que é impossível criar um sistema sem nenhum acoplamento
- Devemos controlar o nível de acoplamento na nossa aplicação
- Usar implementações diretas de uma classe concreta deve ser evitado sempre que possível

## 02. Melhorando a coesão
### Conteudo do Módulo
- classes/métodos/funções/módulos devem ter uma única responsabilidade bem definida
- Segundo o Princípio de Responsabilidade Única (SRP), uma classe deve ter um e apenas um motivo para ser alterada
- Como realizar uma refatoração no nosso sistema
- Como extrair uma classe

## 03. Trabalhando no acoplamento
### Conteudo do Módulo

- Cada classe deve conhecer e ser responsável por suas próprias regras de negócio
- O princípio Aberto/Fechado (OCP) diz que um sistema deve ser aberto para a extensão, mas fechado para a modificação
- Isso significa que devemos poder criar novas funcionalidades e estender o sistema sem precisar modificar muitas classes já existentes
- Uma classe que tende a crescer "para sempre" é uma forte candidata a sofrer alguma espécie de refatoração

## 04. Quebra de confiança
### Conteudo do Módulo

- Embora a assinatura de um método esteja sendo respeitada em uma herança, ainda assim podemos estar quebrando algum contrato
- O Princípio de Substituição de Liskov (LSP) diz que devemos poder substituir classes base por suas classes derivadas em qualquer lugar, sem problema
- Não devemos alterar um comportamento de um método estendido, mesmo que a assinatura seja mantida

## 05. Encapsulando melhor
### Conteudo do Módulo

- É mais interessante e mais seguro para o nosso código depender de interfaces (classes abstratas, assinaturas de métodos e interfaces em si) do que das implementações de uma classe
- As interfaces são menos propensas a sofrer mudanças enquanto implementações podem mudar a qualquer momento
- O Princípio de Inversão de Dependência (DIP) diz que implementações devem depender de abstrações e abstrações não devem depender de implementações
- As interfaces devem definir apenas os métodos que fazem sentido para seu contexto
- Uma classe pode implementar diversas interfaces
- O Princípio de Segregação de Interfaces (ISP) diz que uma classe não deve ser obrigada a implementar um método que ela não precisa;
- **Os conceitos aprendidos neste treinamento formam o acrônimo SOLID**
>- Single Responsibility Principle
>- Open Closed Principle
>- Liskov Substituition Principle
>- Interface Segregation Principle
>- Dependency Inversion Principle
