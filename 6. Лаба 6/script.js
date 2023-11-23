'use strict';

function power() {
    const number = document.getElementById('number_to_factor').value;
    const factor = document.getElementById('factor').value;
    document.getElementById('result_factor_number').textContent = Math.pow(number, factor).toString();
}

function find_gcd() {
    const first_number = document.getElementById('first_number_gcd').value;
    const second_number = document.getElementById('second_number_gcd').value;
    document.getElementById('result_find_gcd').textContent = ((function gcd(a, b) {
        return !b ? a : gcd(b, a % b)
    })(first_number, second_number)).toString();
}


function min_number() {
    const number = document.getElementById('number_find_min').value;
    document.getElementById('result_find_min').textContent = number.toString().split("").map(str => {return Number(str)}).sort().at(0);
}

function pluralize(n, forms) {
    return (n % 10 === 1 && n % 100 !== 11)
        ? forms[0]
        : (((n % 10 >= 2 && n % 10 <= 4)
        && (n % 100 < 10
            || n % 100 >= 20)) ? forms[1] : forms[2]);
}

function plur() {
    const number = document.getElementById('number_for_plur').value;
    document.getElementById('result_find_plur').textContent = "Из " + number + pluralize(number, [' книги', ' книг', ' книг']) + " за " + number + pluralize(number, [' день', ' дня', ' дней']);
}

function fibonacci() {
    const position = document.getElementById('number_for_fib').value;
    document.getElementById('result_find_fib').textContent = (function fib(position) {
        let cur = 1;
        let prev = 1;
        for (let i = 1; i <= position; i++) {
            [cur, prev] = [cur + prev, cur];
        }
        return cur;
    })(position - 2);
}