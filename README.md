# First-project-symfony

Site de test de création avec Symfony 5. Site présentant des peintures

## Environnement de développement

### Pré-requis 

* PHP 7.4
* Composer
* Symfony CLI
* Docker
* Docker-compose
* NodeJS et Yarn (ou npm)

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
composer install
yarn
yarn run build
docker-compose up -d
symfony serve -d
```

## Lancer des tests

```bash
php bin/phpunit --testbox
```