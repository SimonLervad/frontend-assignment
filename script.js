"use strict";

const $ = function(foo) {
	return document.getElementById(foo);
}

const next = function() {
	let slider = $("product-slider");
	let arr = [];
	let products = document.getElementsByClassName("product");
	arr.push(products[0]);
	document.querySelector("#product-slider div:nth-child(1)").remove();
	slider.appendChild(arr[0]);
}

const prev = function() {
	let slider = $("product-slider");
	let arr = [];
	let products = document.getElementsByClassName("product");
	let length = products.length;
	arr.push(products[length - 1]);
	document.querySelector("#product-slider div:nth-child(" + length + ")").remove();
	slider.insertBefore(arr[0], products[0]);
}


const init = function() {
	$("menu").addEventListener("click", function() {
		let width = window.innerWidth;
		let wrapper = $("wrapper");
		let menu = $("hidden-menu");
		wrapper.style.position = "fixed";
		if (width > 800) {
			wrapper.style.left = "50%";
		} else {
			wrapper.style.left = "80%";
		}
		menu.style.left = "0";
	});
	$("exit-menu").addEventListener("click", function() {
		let width = window.innerWidth;
		let wrapper = $("wrapper");
		let menu = $("hidden-menu");
		wrapper.style.position = "absolute";
		if (width > 800) {
			menu.style.left = "-50%"
		} else {
			menu.style.left = "-80%";
		}
		wrapper.style.left = "0";
	});
	let cartShow = 1;
	$("cart").addEventListener("click", function() {
		let cart = $("shopping-cart");
		if (cartShow === 2) {
			cart.style.height = "0";
			cartShow = 1;
			return
		}
		if (cartShow === 1) {
			cart.style.height = "auto";
			cartShow++;
		}
	});
	$("cart-dropdown").addEventListener("click", function() {
		let cart = $("shopping-cart");
		if (cartShow === 2) {
			cart.style.height = "0";
			cartShow = 1;
			return
		}
		if (cartShow === 1) {
			cart.style.height = "auto";
			cartShow++;
		}
	});
	$("next").addEventListener("click", next);
	$("prev").addEventListener("click", prev);
}

window.addEventListener("load", init);