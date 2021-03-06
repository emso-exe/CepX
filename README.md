<img src="cepx.png" alt="" width="200" height="89" style="position: relative; left: 10px;"> 

# CepX

Biblioteca para busca (_on-line_) de endereços via CEP, efetua a consulta via API, [ViaCEP](https://viacep.com.br/) e [apiCEP](https://apicep.com/), podendo ser incluídas outras ou removidas, no mínimo uma é necessária.

## Install

**Método 1**. Adicione ao arquivo **composer.json** o trecho abaixo, após isso execute o **install** ou **update** do composer.
```bash
"require": {
        "emso-exe/cepx": "dev-master"
    }
```

**Método 2**. No diretório do seu projeto execute o comando abaixo, será atualizado o arquivo **composer.json**.
```bash 
composer require emso-exe/cepx 
```

**Método 3**. No diretório do seu projeto execute o comando abaixo, será necessário que faça modificações no seu projeto.
```bash
git clone https://github.com/emso-exe/CepX.git
```

## Tecnologias

- PHP

## Teste

**Método 1**. No diretório CepX via terminal.
```bash
php Example.php
```
**Método 2**. Com o servidor web, por exemplo do PHP, ativado.
```php
http://localhost:8000/Example.php
```

## Example.php em execução

<img src="imagem_cepx.png" alt=""> 

## Créditos

- [Estênio Mariano](https://github.com/emso-exe)

## Licença

Licença MIT (MIT). Por favor leia o [arquivo da licença](LICENSE.md) para mais informações.
