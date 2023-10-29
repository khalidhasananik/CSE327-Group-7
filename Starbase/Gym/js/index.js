/**
 * divideBy100
 * @param {*} number - number to divide
 * @description divide number by 100
 * @example divideBy100(100) // 1
 * @returns {number}
 */
function divideBy100(number) {
	return number / 100;
}

/**
 * divide
 * @param {*} numberOne any number
 * @param {*} numberTwo any number
 * @description divide numberOne by numberTwo
 * @example divide(100, 10) // 10
 * @returns {number}
 */
function divide(numberOne, numberTwo) {
	return numberOne / numberTwo;
}

/**
 * multiply
 * @param {*} numberOne any number
 * @param {*} numberTwo any number
 * @description multiply numberOne by numberTwo
 * @example multiply(100, 10) // 1000
 * @returns {number}
 */

function multiply(numberOne, numberTwo) {
	return numberOne * numberTwo;
}

module.exports = {
	divideBy100,
	divide,
	multiply,
};
