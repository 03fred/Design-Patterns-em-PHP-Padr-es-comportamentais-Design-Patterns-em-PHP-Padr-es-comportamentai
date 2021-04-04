# design patterns me php

1. strategy (https://refactoring.guru/design-patterns/strategy)
Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes.Esta técnica é chamada de Strategy, que é um dos padrões de projeto

2. Chain of Responsibility. (https://refactoring.guru/design-patterns/chain-of-responsibility)
A utilizar o padrão para aplicar um desconto dentro de uma cadeia de possíveis descontos

3. template method (https://refactoring.guru/design-patterns/template-method.)
Reforçamos a ideia de que repetição de código é problemática

4. state (https://refactoring.guru/design-patterns/state)
Que, se o resultado de uma chamada de método depende do estado, podemos delegar esta ação para uma classe específica do estado atual
Esta técnica se chama padrão State
Entendemos como o Princípio de Substituição de Liskov pode acabar sendo quebrado em alguns casos na aplicação do State

5. Command (https://refactoring.guru/design-patterns/command)
Que um caso de uso em nossa aplicação pode ter várias ações (salvar no banco, enviar e-mail, etc)
Que um caso de uso deve ser extraído para uma classe específica, ao invés de estar no arquivo da CLI, controller ou algo do tipo
Que a técnica de extração do caso de uso para uma classe específica pode ser chamada de padrão Command
A diferença do padrão Command da GoF para o padrão que utiliza Command Handler (muito utilizado com DDD)

6. Observer  (https://refactoring.guru/design-patterns/observer)
Que deixar a implementação de todas as tarefas de um caso de uso da aplicação na mesma classe pode trazer problemas
Dificuldade de manutenção
Classes muito grandes e difíceis de ler
Problemas quando precisar alterar a implementação de uma das tarefas
Que é mais interessante separar cada ação em uma classe separada
Como ligar um evento ocorrido com suas ações, através do padrão Observer

7. Iterator (https://refactoring.guru/design-patterns/iterator)
Que os arrays do PHP, embora muito versáteis, podem trazer alguns problemas
Que uma das regras de Object Calisthenics é sobre encapsular coleções em classes específicas
Como acessar um objeto, como se fosse uma lista percorrível
Que, a esta técnica, se dá o nome de Iterator
Funcionalidades que o PHP nos fornece para implementar de forma muito simples o padrão Iterator
