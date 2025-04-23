const { calculate } = require('../calculator.js');

describe('evaluateExpression', () => {
    test('testAddition', () => {
        expect(calculate('2+3')).toBe(5);
        expect(calculate('-2+2')).toBe(0);
    });

    test('testSoustraction', () => {
        expect(calculate('2-3')).toBe(-1);
        expect(calculate('7-3')).toBe(4);
    });

    test('testMultiplication', () => {
        expect(calculate('2*3')).toBe(6);
        expect(calculate('0*5')).toBe(0);
    });

    test('testDivision', () => {
        expect(calculate('6/3')).toBe(2);
        expect(calculate('1/2')).toBe(0.5);
    });

    test('testPriorites', () => {
        expect(calculate('2+3*4')).toBe(14);
    });

    test('testParentheses', () => {
        expect(calculate('(2+3)*4')).toBe(20);
    });

    test('testExpressionInvalide', () => {
        expect(() => calculate('2+bad')).toThrow();
        expect(() => calculate('abc')).toThrow();
    });

    test('testVide', () => {
        expect(() => calculate('')).toThrow();
    });
});
