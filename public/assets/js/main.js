(function ($) {
	("use strict");

	$(document).ready(function () {
		//>> Mobile Menu Js Start <<//
		$("#mobile-menu").meanmenu({
			meanMenuContainer: ".mobile-menu",
			meanScreenWidth: "1199",
			meanExpand: ['<i class="far fa-plus"></i>'],
		});

		//>> Sidebar Toggle Js Start <<//
		$(".offcanvas__close,.offcanvas__overlay").on("click", function () {
			$(".offcanvas__info").removeClass("info-open");
			$(".offcanvas__overlay").removeClass("overlay-open");
		});
		$(".sidebar__toggle").on("click", function () {
			$(".offcanvas__info").addClass("info-open");
			$(".offcanvas__overlay").addClass("overlay-open");
		});

		//>> Body Overlay Js Start <<//
		$(".body-overlay").on("click", function () {
			$(".offcanvas__area").removeClass("offcanvas-opened");
			$(".df-search-area").removeClass("opened");
			$(".body-overlay").removeClass("opened");
		});

		//>> Sticky Header Js Start <<//

		$(window).scroll(function () {
			if ($(this).scrollTop() > 250) {
				$("#header-sticky").addClass("sticky");
			} else {
				$("#header-sticky").removeClass("sticky");
			}
		});

		// video popup js
		$('.video-popup').magnificPopup({
			type: 'iframe',
			iframe: {
				markup: '<div class="mfp-iframe-scaler">' +
					'<div class="mfp-close"></div>' +
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
					'</div>',
				patterns: {
					youtube: {
						index: 'youtube.com/',
						id: 'v=',
						src: 'https://www.youtube.com/embed/%id%?autoplay=1'
					},
				},
				srcAction: 'iframe_src',
			}
		});

		// Odometer Active js
		$('.odometer').appear(function (e) {
			var odo = $(".odometer");
			odo.each(function () {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Back to top js
		let btn = $(".scroll-to-top");

		$(window).on('scroll', function () {
			btn.toggleClass("show", $(window).scrollTop() > 300);
		});

		btn.click(function (e) {
			e.preventDefault();
			if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
				$("html").animate({
						scrollTop: 0,
					},
					1000
				);
			} else {
				$("html, body").animate({
						scrollTop: 0,
					},
					1000
				);
			}
		});

		//>> Nice Select Start <<//
		$("select").niceSelect();

		//>> Testimonial Slider Start <<//
		const testimonialSlider = new Swiper(".testimonial-slider", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			navigation: {
				nextEl: ".array-prev",
				prevEl: ".array-next",
			},
			breakpoints: {
				1199: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView: 1,
				},
				575: {
					slidesPerView: 1,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});

		//>> Gateway Slider Start <<//
		const gatewayWrapper = new Swiper(".gateway-wrapper", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			navigation: {
				nextEl: ".array-prev",
				prevEl: ".array-next",
			},
			breakpoints: {
				1199: {
					slidesPerView: 3,
				},
				767: {
					slidesPerView: 2,
				},
				575: {
					slidesPerView: 1,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});

		//>> Sponsor Start <<//
		const sponsorWrapper = new Swiper(".sponsor-wrapper", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			breakpoints: {
				1199: {
					slidesPerView: 5,
				},
				767: {
					slidesPerView: 4,
				},
				575: {
					slidesPerView: 3,
				},
				0: {
					slidesPerView: 2,
				},
			},
		});

		//>> Search Popup Start <<//
		const $searchWrap = $(".search-wrap");
		const $navSearch = $(".nav-search");
		const $searchClose = $("#search-close");

		$(".search-trigger").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({
				opacity: "toggle"
			}, 500);
			$navSearch.add($searchClose).addClass("open");
		});

		$(".search-close").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({
				opacity: "toggle"
			}, 500);
			$navSearch.add($searchClose).removeClass("open");
		});

		function closeSearch() {
			$searchWrap.fadeOut(200);
			$navSearch.add($searchClose).removeClass("open");
		}

		$(document.body).on("click", function (e) {
			closeSearch();
		});

		$(".search-trigger, .main-search-input").on("click", function (e) {
			e.stopPropagation();
		});

		//--- Custom Tilt Js Start ---//
		const tilt = document.querySelectorAll(".tilt");
		VanillaTilt.init(tilt, {
			reverse: true,
			max: 15,
			speed: 400,
			scale: 1.01,
			glare: true,
			reset: true,
			perspective: 800,
			transition: true,
			"max-glare": 0.45,
			"glare-prerender": false,
			gyroscope: true,
			gyroscopeMinAngleX: -45,
			gyroscopeMaxAngleX: 45,
			gyroscopeMinAngleY: -45,
			gyroscopeMaxAngleY: 45,
		});
		//--- Custom Tilt Js End ---//

		//-- Use Gsap Animation --//
		// Visible From Right Slowly Animation
		let visibleSlowlyRight = document.querySelectorAll(".visible-slowly-right");
		if ($(visibleSlowlyRight).length > 0) {
			let char_come = gsap.utils.toArray(visibleSlowlyRight);
			char_come.forEach((char_come) => {
				let split_char = new SplitText(char_come, {
					type: "chars, words",
					lineThreshold: 0.5,
				});
				const tl2 = gsap.timeline({
					scrollTrigger: {
						trigger: char_come,
						start: "top 90%",
						end: "bottom 60%",
						scrub: false,
						markers: false,
						toggleActions: "play none none none",
					},
				});
				tl2.from(split_char.chars, {
					duration: 0.8,
					x: 70,
					autoAlpha: 0,
					stagger: 0.03,
				});
			});
		}

		// Btn Custom Animation
		// button Vivacity
		let btnVivacity = document.querySelectorAll(".btn-vivacity");
		if (btnVivacity) {
			VanillaTilt.init(btnVivacity, {
				max: 5,
				speed: 2800,
				perspective: 500,
			});
		}

		// Image reveal animation
		function revealAnimation(selector, axis, percent, scale) {
			gsap.utils.toArray(selector).forEach(function (revealItem) {
				// Check if the revealItem contains an image
				var image = revealItem.querySelector("img");
				if (!image) {
					console.warn("No image found in", revealItem);
					return;
				}

				var tl = gsap.timeline({
					scrollTrigger: {
						trigger: revealItem,
						toggleActions: "play none none reverse",
					},
				});

				// Set initial state
				tl.set(revealItem, {
						autoAlpha: 1
					})
					.from(revealItem, {
						duration: 1.5, // Specify duration directly
						[axis + "Percent"]: -percent, // Use axis + "Percent" for dynamic property names
						ease: "power2.out", // Use string for ease function
					})
					.from(image, {
						duration: 1.5, // Specify duration directly
						[axis + "Percent"]: percent, // Use axis + "Percent" for dynamic property names
						scale: scale,
						delay: -1.5, // Delay for image animation
						ease: "power2.out", // Use string for ease function
					});
			});
		}

		// Box Style
		const targetBtn = document.querySelectorAll(".box-style");
		if (targetBtn) {
			targetBtn.forEach((element) => {
				element.addEventListener("mousemove", (e) => {
					const x = e.offsetX + "px";
					const y = e.offsetY + "px";
					element.style.setProperty("--x", x);
					element.style.setProperty("--y", y);
				});
			});
		}

		// Call the function with your selectors
		revealAnimation(".reveal-left", "x", 100, 1.3);
		revealAnimation(".reveal-bottom", "y", 100, 1.3);

		// End Document Ready Function
	});

	function loader() {
		$(window).on("load", function () {
			// Animate loader off screen
			$(".preloader").addClass("loaded");
			$(".preloader").delay(600).fadeOut();
		});
	}

	loader();
})(jQuery); // End jQuery