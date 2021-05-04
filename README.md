# Curso Alura de PDD + PHPUnit

## Descrição

Neste curso foi visto como criar um teste automatizado de unidade, onde foram criadas diversas classes e desenvolvidas diversas funcionalidades.

Alguns dos principais assuntos vistos nesse curso foram:

- Criação de testes de unidade
- Implementação do TDD *(**T**est **D**riven **D**evelopment)*
- Arquivo XML de configurações do PHPUnit
- Teste de comparação de valores utilizando `assertEquals()`
- Teste de erros utilizando `expectException()`
- Teste de contagem de listas utilizando `assertCount()`
- Utilização de `setUp()` para preparar os senários dos testes
- Utilização de `@dataProviders`

## Tema do projeto

Foi criado um pequeno código que simula um leilão com as seguintes regras:

- Cada leilão deve ter um tema e pode ter um número indeterminado de participantes
- Cada participante tem direito apenas a no máximo 5 lances por leilão
- Um participante não poderá dar dois lances seguidos para o mesmo leilão
- Uma vez que o leilão estiver fechado não é mais possível participantes darem lances no leilão
- Todo leilão deve ser avaliado por um avaliador
- Um leilão não poderá ser avaliado se não houverem lances nele

## Preparando o ambiente

Para executar o projeto, basta abrir o diretório raiz e executar primeiramente o comando:

```
$ composer install
```

## Executando os testes

Para executar os testes criados, basta abrir o diretório raiz e executar o comando:

```
$ vendor\bin\phpunit
```

Normalmente seria necessário passar também o nome do arquivo de testes, porém com a criação do arquivo `phpunit.xml` isso não é mais necessário.

## phpunit.xml

Junto do diretório de testes no arquivo `phpunit.xml` também foi adicionado o parametro `colors="true"` para melhor identificação no console e também o seguinte código:

```xml
<logging>
    <log type="testdox-text" target="testes-executados.txt"/>
</logging>
```

O código XML mostrado acima determina que será criado um arquivo de log dos testes executados pelo PHPUnit.

## Aulas concluídas

### Aula 1 - Por que testar?

- [x] Introdução
- [x] Projeto inicial do treinamento
- [x] Preparando o ambiente
- [x] Avaliando um leilão
- [x] Testes automatizados
- [x] Feedback imediato
- [x] Consolidando o seu conhecimento
- [x] O que aprendemos?

### Aula 2 - Conhecendo o PHPUnit

- [x] Projeto da aula anterior
- [x] Instalando o PHPUnit
- [x] Principal teste com PHPUnit
- [x] Usando TestCase
- [x] Escrevendo um teste
- [x] Escrevendo mais testes
- [x] Para saber mais: Asserções
- [x] Consolidando o seu conhecimento
- [x] O que aprendemos?

### Aula 3 - Classes de equivalência

- [x] Projeto da aula anterior
- [x] Entendendo classes de equivalência
- [x] Testes infinitos
- [x] Maiores lances
- [x] Testando o novo código
- [x] Testando listas
- [x] Consolidando o seu conhecimento
- [x] O que aprendemos?

### Aula 4 - Organizando os testes

- [x] Projeto da aula anterior
- [x] Usando Data Providers
- [x] Testes repetidos
- [x] Métodos setUp e tearDown
- [x] Para saber mais: Fixtures
- [x] Ordem de dataProvider e setUp
- [x] Configurações no XML do PHPUnit
- [x] Para saber mais: Documentação
- [x] Consolidando o seu conhecimento
- [x] O que aprendemos?

### Aula 5 - Test Driven Development

- [x] Projeto da aula anterior
- [x] Projeto da aula anterior
- [x] Testando o leilão
- [x] Escrevendo o teste antes
- [x] Refatoração
- [x] Entendendo o TDD
- [x] Para saber mais: TDD
- [x] Mais de cinco lances por usuário
- [x] Consolidando o seu conhecimento
- [x] O que aprendemos?

### Aula 6 - Testando exceções

- [x] Projeto da aula anterior
- [x] Como testar exceções
- [x] Métódo expectException
- [x] Try catch
- [x] Esperando exceções
- [x] Testando regras em leilão
- [x] Praticando mais testes
- [x] Bônus: PHPStorm e PHPUnit
- [x] Consolidando o seu conhecimento
- [x] Projeto do curso
- [x] O que aprendemos?
- [x] Conclusão

## Link para o curso
https://cursos.alura.com.br/course/phpunit-tdd