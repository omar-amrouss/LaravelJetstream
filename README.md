<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Jetstream Application

Bienvenue dans l'application Laravel Jetstream !

## Introduction

Cette application est un exemple d'utilisation de Laravel Jetstream pour la mise en place d'un système d'authentification robuste et de gestion des équipes. Laravel Jetstream fournit un ensemble de fonctionnalités puissantes pour l'authentification, la vérification par e-mail, la réinitialisation du mot de passe, l'authentification à deux facteurs, la gestion des sessions et bien plus encore.

## Configuration

Avant de commencer à utiliser l'application, assurez-vous d'avoir configuré votre environnement de développement correctement :

1. **Prérequis :** Assurez-vous d'avoir PHP (version 7.3 ou supérieure) et Composer installés sur votre machine.

2. **Configuration de la base de données :** Copiez le fichier `.env.example` en tant que `.env` et configurez votre base de données en spécifiant les détails de connexion appropriés.

3. **Installation des dépendances :** Exécutez la commande `composer install` pour installer les dépendances PHP nécessaires.

4. **Migration de la base de données :** Exécutez `php artisan migrate` pour migrer la base de données.

5. **Génération de clé :** Générez une clé d'application en exécutant `php artisan key:generate`.

6. **Exécution du serveur :** Démarrez le serveur de développement en exécutant `php artisan serve`.

7. **Accès à l'application :** Accédez à l'application dans votre navigateur à l'adresse [http://localhost:8000](http://localhost:8000).

## Fonctionnalités

Cette application comprend les fonctionnalités suivantes :

- **Inscription et connexion des utilisateurs :** Les utilisateurs peuvent s'inscrire et se connecter en utilisant leur adresse e-mail.

- **Vérification par e-mail :** L'application envoie des e-mails de vérification aux utilisateurs lors de leur inscription pour vérifier leur adresse e-mail.

- **Réinitialisation du mot de passe :** Les utilisateurs peuvent demander la réinitialisation de leur mot de passe en cas d'oubli.

- **Authentification à deux facteurs :** Les utilisateurs peuvent activer l'authentification à deux facteurs pour renforcer la sécurité de leur compte.

- **Gestion des sessions :** Les utilisateurs peuvent voir et gérer leurs sessions actives.

- **Gestion des équipes :** Les utilisateurs peuvent créer des équipes, inviter d'autres utilisateurs à rejoindre ces équipes et gérer les membres de leur équipe.

## Documentation

Pour en savoir plus sur l'utilisation de Laravel Jetstream, consultez la [documentation officielle de Laravel Jetstream](https://jetstream.laravel.com/1.x/introduction.html).

## Contribution

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez soumettre une demande de tirage (pull request) avec vos modifications.

## Auteur

Ce projet a été développé par [amrouss omar](https://github.com/omar-amrouss).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
