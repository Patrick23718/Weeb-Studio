class Slider {
	constructor(selector, ops) {
		this.selector = selector;
		this.ops = ops;

		//Helpers Variables
		let { slideVisible, slideMove, InfinityScroll } = this.ops;
		let container = document.querySelector(`.${this.selector}`);
		let slideContainer = container.querySelector(".slider__move");
		let childs = Array.from(slideContainer.children);
		let index = 0;

		//Function Call To Action
		this.resizeSlider(slideContainer, this.ops);
		this.createControl(container);

		//Buttons
		let prev = document.querySelector(".prevBtn");
		prev.addEventListener("click", (e) => {
			index++;
			console.log(index);
			if (index >= childs.length) index = 0;

			let sizeCalc = -(childs[0].getBoundingClientRect().width * slideMove);
			slideContainer.style.transform = `translateX(${sizeCalc * index}px)`;
			console.log();
		});

		let next = document.querySelector(".nextBtn");
		next.addEventListener("click", (e) => {
			index--;
			if (index < 0) index = 0;
			let sizeCalc = childs[0].getBoundingClientRect().width * slideMove;
			slideContainer.style.transform = `translateX(${sizeCalc * -index}px)`;
		});
	}

	resizeSlider(elem, ops) {
		let elements = Array.from(elem.children);
		let childWidth = elements.forEach((el) => {
			let size = elem.getBoundingClientRect().width / ops.slideVisible;
			el.style.width = size + "px";
			return size;
		});

		return childWidth;
	}

	createControl(el) {
		let controlContainer = document.createElement("div");
		controlContainer.className = "controls";

		let prevBtn = document.createElement("button");
		prevBtn.innerHTML = "<i class='bx bx-left-arrow-alt'></i>";
		prevBtn.setAttribute("type", "button");
		prevBtn.className = "prevBtn btn-controls";

		let nextBtn = document.createElement("button");
		nextBtn.innerHTML = "<i class='bx bx-right-arrow-alt'></i>";
		nextBtn.setAttribute("type", "button");
		nextBtn.className = "nextBtn btn-controls";

		controlContainer.appendChild(prevBtn);
		controlContainer.appendChild(nextBtn);
		el.appendChild(controlContainer);
	}
}

let move = new Slider("slider__container", {
	slideVisible: 3,
	slideMove: 1,
	InfinityScroll: false,
	autoPlay: false,
});
