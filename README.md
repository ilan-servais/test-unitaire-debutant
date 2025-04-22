# Test Unitaire Débutant

Ce projet est un tutoriel pour apprendre les bases des tests unitaires avec Jest en JavaScript.

## Étapes réalisées

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

### 2. Création de la fonction de test

J'ai créé un fichier math.js contenant une fonction simple d'addition :

```javascript
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
    expect(addition(2, 3)).toBe(5);
  });

  // Autres tests...
});
```

### 4. Exécution des tests

Commande pour lancer les tests :

```bash
npm test
```

### 5. Exploration des échecs de tests

J'ai volontairement modifié la fonction pour qu'elle échoue :

```javascript
function addition(a, b) {
  return a - b; // Bug volontaire
}
```

Les tests ont échoué comme prévu :

![Capture d'écran des tests échoués](./images/test-fails.png)

J'ai ensuite corrigé la fonction et les tests sont passés :

![Capture d'écran des tests réussis](./images/test-passes.png)

## Concepts appris

- Configuration de Jest dans un projet Node.js
- Structure d'un test unitaire (Arrange, Act, Assert)
- Utilisation de `describe` et `test`
- Assertions avec `expect().toBe()`
- Debug de fonctions en utilisant des tests unitaires

## Ressources utiles

- [Documentation Jest](https://jestjs.io/docs/en/getting-started)
- [Guide JavaScript MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide)
