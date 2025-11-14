# E-Portfolio Mathias

## Description
Ce projet est un portfolio électronique développé avec Symfony 7.3, permettant de présenter et gérer mes projets, compétences et réalisations professionnelles.

## Prérequis
Avant de commencer, assurez-vous d'avoir installé sur votre machine :
- PHP 8.2 ou supérieur
- Composer
- Symfony CLI
- PostgreSQL 16
- Docker et Docker Compose (optionnel, pour la base de données)

## Installation

### 1. Installation des dépendances
Installez toutes les dépendances du projet avec Composer :
```bash
composer install 
```

### 2. Configuration de l'environnement
Copiez le fichier `.env` et configurez vos variables d'environnement :
```bash
cp .env .env.local
```

Modifiez le fichier `.env.local` selon vos besoins, notamment la connexion à la base de données.

### 3. Base de données

#### Option A : Utilisation de Docker (recommandé)
Démarrez la base de données PostgreSQL avec Docker Compose :
```bash
docker compose up -d
```

#### Option B : PostgreSQL local
Si vous utilisez une installation locale de PostgreSQL, assurez-vous que le service est démarré et mettez à jour la variable `DATABASE_URL` dans votre fichier `.env.local`.

### 4. Création de la base de données
Créez la base de données :
```bash
php bin/console doctrine:database:create
```

Exécutez les migrations pour créer le schéma :
```bash
php bin/console doctrine:migrations:migrate
```

## Démarrage du serveur

Démarrez le serveur de développement Symfony :
```bash
symfony server:start 
```

## Pour se connecter : 
Accédez à l'application dans votre navigateur :
```bash
http://127.0.0.1:8000
```

## Commandes utiles

### Développement
- Vider le cache : `php bin/console cache:clear`
- Créer une migration : `php bin/console make:migration`
- Créer un contrôleur : `php bin/console make:controller`
- Créer une entité : `php bin/console make:entity`

### Base de données
- Voir le statut des migrations : `php bin/console doctrine:migrations:status`
- Réinitialiser la base de données : `php bin/console doctrine:database:drop --force && php bin/console doctrine:database:create && php bin/console doctrine:migrations:migrate`

### Docker
- Arrêter les services : `docker compose down`
- Voir les logs : `docker compose logs -f`
- Redémarrer les services : `docker compose restart`

## Tests
Exécutez les tests avec PHPUnit :
```bash
php bin/phpunit
```

## Structure du projet
```
├── bin/                # Scripts exécutables
├── config/             # Configuration de l'application
├── migrations/         # Migrations de base de données
├── public/             # Point d'entrée web
├── src/                # Code source de l'application
│   ├── Controller/     # Contrôleurs
│   ├── Entity/         # Entités Doctrine
│   └── Repository/     # Repositories
├── templates/          # Templates Twig
│   └── Home/           # Base of templates
│       ├── en/         # Loc of en files
│       └── fr/         # Loc of fr files
├── tests/              # Tests unitaires et fonctionnels
└── var/                # Fichiers générés (cache, logs)
```

## Contribution
Ce projet est un portfolio personnel. Pour toute question ou suggestion, n'hésitez pas à ouvrir une issue.

## Licence
Projet propriétaire - Tous droits réservés
