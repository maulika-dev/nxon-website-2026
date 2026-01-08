

//////////////////smoothness/////////////////
const lenis = new Lenis({
	duration: 1.2,
	easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
	smoothWheel: true,
	smoothTouch: false,
});

function raf(time) {
	lenis.raf(time);
	requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// ScrollTrigger + Lenis sync
lenis.on('scroll', () => {
	ScrollTrigger.update();
});

/////////////////////-------------////////////////////


// Mobile menu toggle

const mobileBtn = document.querySelector('.mobile-menu-btn');
const sidebar = document.getElementById('sidebarMenu');

function toggleMenu() {
	sidebar.classList.toggle('active');
	document.body.classList.toggle('menu-dimmed');
}

mobileBtn.addEventListener('click', toggleMenu);


// // Main Services dropdown
// document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
// 	toggle.addEventListener('click', function (e) {
// 		e.preventDefault();
// 		const menu = this.nextElementSibling;
// 		menu.classList.toggle('open');
// 		this.querySelector('i').classList.toggle('rotated');
// 	});
// });

// // Inner submenu (Design House Services)
// document.querySelectorAll('.submenu-toggle').forEach(toggle => {
// 	toggle.addEventListener('click', function (e) {
// 		e.preventDefault();
// 		const submenu = this.nextElementSibling;
// 		submenu.classList.toggle('open');
// 		this.querySelector('i').classList.toggle('rotated');
// 	});
// });

function toggleMenu() {
    const sidebar = document.getElementById("sidebarMenu");
    sidebar.classList.toggle("open");
}

function openPage(pageId) {
    document.getElementById("mainMenu").style.display = "none";

    document.querySelectorAll(".subpage").forEach(p => p.classList.remove("active"));

    document.getElementById(pageId).classList.add("active");
}

function backToMain() {
    document.getElementById("mainMenu").style.display = "block";

    document.querySelectorAll(".subpage").forEach(p => p.classList.remove("active"));
}


function toggleServicesDropdown() {
  const dropdown = document.getElementById("servicesDropdown");
  dropdown.style.display = dropdown.style.display === "flex" ? "none" : "flex";
}




//when hover navbar services blur effect


const header = document.querySelector("header");
const megaItems = document.querySelectorAll(".has-mega-menu");

megaItems.forEach(item => {
	item.addEventListener("mouseenter", () => {
		header.classList.add("submenu-open");
		document.body.classList.add('menu-blur');
	});

	item.addEventListener("mouseleave", () => {
		header.classList.remove("submenu-open");
		document.body.classList.remove('menu-blur');
	});
});


document.querySelectorAll('.nav-menu a').forEach(a =>
	a.onclick = () => location.href = a.dataset.link
);


let hideTimer;

document.querySelectorAll(".has-mega-menu").forEach(menu => {

    menu.addEventListener("mouseenter", () => {
        clearTimeout(hideTimer);
        menu.classList.add("show-menu");
    });

    menu.addEventListener("mouseleave", () => {
        hideTimer = setTimeout(() => {
            menu.classList.remove("show-menu");
        }, 250);
    });

});



const preview = document.getElementById("previewImg");
const items = document.querySelectorAll(".mega-list a");

// DEFAULT IMAGE SET (on open)
const defaultItem = document.querySelector(".default-item");
if (defaultItem) {
    preview.src = defaultItem.getAttribute("data-img");
    preview.classList.add("show");
}

// HOVER → CHANGE IMAGE
items.forEach(item => {
    item.addEventListener("mouseenter", function () {

        const imgPath = this.getAttribute("data-img");

        preview.classList.remove("show");

        setTimeout(() => {
            preview.src = imgPath;
            preview.classList.add("show");
        }, 100);
    });
});

// Loading screen
    const loader = document.getElementById('loader');
    const mainContent = document.getElementById('main-contant');
    if (loader && mainContent) {
        setTimeout(() => {
            loader.classList.add('hidden');
        
            // SHOW WEBSITE CONTENT
            mainContent.style.opacity = "1";
            mainContent.style.pointerEvents = "auto";
        }, 1000);
    }






