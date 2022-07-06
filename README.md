# Congresso IBGC

LP do Congresso IBGC

## Autor

- [@fernandosoares](https://www.github.com/fernandosoares)

## Rodando localmente

Com Docker rodando + Lando.dev instalado, crie a pasta do projeto e nela, crie o arquivo .lando.yml

```
name: ibgc-congresso
recipe: wordpress
config:
  webroot: .
  via: apache
  xdebug: false
events:
  post-start:
    - appserver: wp core download --locale=pt_BR
    - appserver: wp config create --dbname=wordpress --dbuser=wordpress --dbpass=wordpress --dbhost=database
    - appserver: wp core install --url=https://ibgc-congresso.lndo.site --title="Congresso | IBGC" --admin_user=admin --admin_password=admin --admin_email=admin@lndol.site
    - appserver: wp plugin install simply-static --activate
```

Então, execute:

```bash
lando rebuild -y
```

Na sequencia, instale a última versão do Wordpress executando o seguinte comando:

```bash
lando wp core download --locale=pt_BR
```

Agora o plugin para gerar o conteúdo estático a partir do Wordpress

```bash
lando wp plugin install simply-static --activate
```

Navegue ao diretório de temas (/wp-content/themes) e clone o projeto:

```bash
  git clone https://github.com/fernandosoares/congresso-ibgc
```

Logo em seguida, acesse o endereço do projeto no navegador e configure:

```
base: wordpress
user: wordpress
pass: wordpress
host: database
```

## Deploy Estático

Para fazer o deploy desse projeto é necessário configurar o output dos arquivos via Admin
(Simply Static Plugin), gerar o pacote e subir o conteúdo da pasta **BUILD** na raiz do servidor
