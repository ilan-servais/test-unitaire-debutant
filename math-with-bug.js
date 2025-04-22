/**
 * Version buggée de la fonction d'addition
 * @param {number} a - Premier nombre
 * @param {number} b - Second nombre
 * @returns {number} Devrait être la somme mais contient un bug
 */
function addition(a, b) {
  // Bug: soustraction au lieu d'addition
  return a - b;
}

// Exporter la fonction pour pouvoir l'utiliser dans d'autres fichiers
module.exports = {
  addition
};
