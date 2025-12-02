# E-Portfolio Mathias

## Description
Ce projet est un portfolio électronique développé avec Symfony 7.3, permettant de présenter et gérer mes projets, compétences et réalisations professionnelles.

## Prérequis
Avant de commencer, assurez-vous d'avoir installé sur votre machine :
- PHP 8.2 ou supérieur
- Composer
- Symfony CLI

## Installation

### 1. Installation des dépendances
Installez toutes les dépendances du projet avec Composer :
```bash
composer install 
```

### 2. Configuration de l'environnement

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
- Créer un contrôleur : `php bin/console make:controller`
- Créer une entité : `php bin/console make:entity`


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
└── var/                # Fichiers générés (cache, logs) (ignored when pushed)
```

## Contribution
Ce projet est un portfolio personnel. Pour toute question ou suggestion, n'hésitez pas à ouvrir une issue.

## Licence
Projet propriétaire - Tous droits réservés
