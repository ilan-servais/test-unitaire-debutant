# Test Unitaire Débutant

Ce projet est un tutoriel pour apprendre les bases des tests unitaires avec Jest en JavaScript.

## Table des matières
- [Installation et configuration](#installation-et-configuration)
- [Création de fonctions et tests](#création-de-fonctions-et-tests)
- [Exécution des tests](#exécution-des-tests)
- [Exploration des échecs de tests](#exploration-des-échecs-de-tests)
- [Concepts de tests unitaires](#concepts-de-tests-unitaires)
- [Bonnes pratiques](#bonnes-pratiques)
- [Ressources utiles](#ressources-utiles)

## Installation et configuration

### 1. Initialisation du projet

```bash
# Création du dossier pour le projet
mkdir test-unitaire-debutant
cd test-unitaire-debutant

# Initialisation du projet Node.js
npm init -y

# Installation de Jest
npm install --save-dev jest
```

J'ai ensuite modifié le package.json pour configurer le script de test :

```json
"scripts": {
  "test": "jest"
}
```

## Création de fonctions et tests

### 2. Création de la fonction à tester

J'ai créé un fichier math.js contenant une fonction simple d'addition :

```javascript
/**
 * Additionne deux nombres
 * @param {number} a - Premier nombre
 * @param {number} b - Second nombre
 * @returns {number} Somme des deux nombres
 */
function addition(a, b) {
  return a + b;
}

module.exports = {
  addition
};
```

### 3. Création des tests unitaires

J'ai créé un fichier math.test.js pour tester ma fonction :

```javascript
const { addition } = require('./math');

describe('Fonction addition', () => {
  test('additionne correctement deux nombres positifs', () => {
    // Arrange
    const a = 2;
    const b = 3;
    const resultatAttendu = 5;
    
    // Act
    const resultat = addition(a, b);
    
    // Assert
    expect(resultat).toBe(resultatAttendu);
  });

  test('additionne correctement un nombre positif et un nombre négatif', () => {
    expect(addition(2, -3)).toBe(-1);
  });

  test('additionne correctement deux nombres négatifs', () => {
    expect(addition(-2, -3)).toBe(-5);
  });
  
  test('additionne correctement avec zéro', () => {
    expect(addition(0, 5)).toBe(5);
  });
});
```

## Exécution des tests

### 4. Lancer les tests

Commande pour lancer les tests :

```bash
npm test
```

Résultat attendu :
![Capture d'écran des tests réussis](./images/test-passes.png)

## Exploration des échecs de tests

### 5. Introduction volontaire d'un bug

J'ai volontairement modifié la fonction pour qu'elle échoue :

```javascript
function addition(a, b) {
  return a - b; // Bug volontaire
}
```

Les tests ont échoué comme prévu :

![Capture d'écran des tests échoués](./images/test-fails.png)

J'ai ensuite corrigé la fonction et les tests sont passés à nouveau.

## Concepts de tests unitaires

### Structure d'un test (AAA Pattern)

1. **Arrange** : Préparation des données et conditions initiales
2. **Act** : Exécution de l'action à tester
3. **Assert** : Vérification que le résultat correspond à ce qui est attendu

### Fonctions Jest importantes

- `describe()` : Regroupe plusieurs tests liés
- `test()` (ou `it()`) : Définit un cas de test individuel
- `expect()` : Crée une assertion
- Matchers (`.toBe()`, `.toEqual()`, `.toBeTruthy()`, etc.) : Vérifient des conditions spécifiques

## Bonnes pratiques

- Écrire des tests simples et focalisés
- Nommer les tests de façon claire et descriptive
- Tester les cas limites et les cas d'erreur
- Maintenir les tests indépendants entre eux
- Faire des commits réguliers avec des messages significatifs

## Ressources utiles

- [Documentation Jest](https://jestjs.io/docs/en/getting-started)
- [Guide JavaScript MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide)
- [Guide des tests unitaires par Martin Fowler](https://martinfowler.com/bliki/UnitTest.html)
