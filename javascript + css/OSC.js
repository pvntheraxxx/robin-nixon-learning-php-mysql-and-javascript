/* Пример 20.4. Файл OSC.js */
function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
function S(i) { return O(i).style }
function C(i) { return document.getElementsByClassName(i) }
