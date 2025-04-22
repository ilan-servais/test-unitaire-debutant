# Plan des captures d'écran pour le README

## 1. Configuration du projet
- Terminal montrant `composer init`
- Terminal montrant `composer require --dev phpunit/phpunit`

## 2. Structure du projet
- Terminal montrant la création des dossiers src/ et tests/
- Éditeur avec le fichier composer.json modifié pour l'autoloading

## 3. Création des fichiers
- Éditeur avec le fichier src/Math.php
- Éditeur avec le fichier tests/MathTest.php

## 4. Exécution des tests
- Terminal montrant `composer dump-autoload`
- Terminal montrant `vendor/bin/phpunit tests` avec tests réussis

## 5. Simulation d'erreur
- Éditeur montrant la modification de Math.php pour introduire l'erreur
- Terminal montrant les tests échoués

## 6. Correction
- Éditeur montrant la correction de Math.php
- Terminal montrant les tests réussis à nouveau

## Instructions pour les captures
1. Utilisez un outil de capture d'écran (comme Snipping Tool, Greenshot, etc.)
2. Enregistrez les images dans le dossier `images/` du projet
3. Nommez-les de façon explicite (ex: `01-composer-init.png`, `02-phpunit-install.png`, etc.)
4. Intégrez-les dans le README.md avec la syntaxe: `![Description](./images/nom-fichier.png)`
