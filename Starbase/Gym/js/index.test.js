const { divideBy100, divide, multiply } = require('./index');
test('Returns result of number divided by 100', () => {
	expect(
		/* The `divideBy100` function is dividing a given number by 100. */
		divideBy100(500)
	).toBe(5);
});

test('Returns result of a division', () => {
	expect(divide(500, 5)).toBe(100);
});

test('Returns result of a multiplication', () => {
	expect(multiply(100, 5)).toBe(500);
});
