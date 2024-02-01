//date.js
"use strict";

const $ = selector => document.querySelector(selector);

const d = new Date();
document.getElementById("currentDate").innerHTML = d;