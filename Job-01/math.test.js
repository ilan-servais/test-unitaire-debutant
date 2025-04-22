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
