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

## Atividades concluídas

### Aula 1

- [x] Teste
- [ ] teste

## Link para o curso
https://cursos.alura.com.br/course/phpunit-tdd