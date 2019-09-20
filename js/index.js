/*
 * Carousel with Buttons (Used in Home Page)
 */

let carousel_items = document.querySelector(".carousel-items").children;
let carousel_btns = document.querySelector(".carousel-menu").children;
let carousel_dots = document.querySelector(".carousel-dots").children;
let carousel_left = document.querySelector(".carousel-left");
let carousel_right = document.querySelector(".carousel-right");
let last_index = carousel_items.length - 1;
let index = 1; // Start with "For EMS"

carousel_left.addEventListener("click", () => {
	index = index > 0 ? index - 1 : last_index;
	activateItem(index);
});

carousel_right.addEventListener("click", () => {
	index = index < last_index ? index + 1 : 0;
	activateItem(index);
});

[].slice.call(carousel_btns).map((btn, i) => {
	btn.addEventListener("click", e => {
		activateItem((index = i));
	});
});

const activateItem = index => {
	// Remove Active
	[].slice.call(carousel_items).map((item, i) => {
		carousel_items[i].classList.remove("active");
		carousel_btns[i].classList.remove("active");
		carousel_dots[i].classList.remove("active");
	});
	// Apply active class to selected
	carousel_items[index].classList.add("active");
	carousel_btns[index].classList.add("active");
	carousel_dots[index].classList.add("active");
};
