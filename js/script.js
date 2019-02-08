const sidenavas = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenavas);


const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	indicators: false,
	height: 500,
	transition: 600,
	interval: 3000
});

const parallax = document.querySelectorAll('.parallax');
M.Parallax.init(parallax);

const parallax2 = document.querySelectorAll('.parallax2');
M.Parallax.init(parallax2);

const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

const skroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(skroll, {
	scrollOffset: 50
});

const dropdown = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(dropdown, {
	hover: true,
	constrainWidth: false
});

const dropdownpencet = document.querySelectorAll('.dropdown-pencet');
M.Dropdown.init(dropdownpencet, {
	hover: false,
	constrainWidth: true
});

const select = document.querySelectorAll('.select');
M.FormSelect.init(select);

const datepicker = document.querySelectorAll('.datepicker');
M.Datepicker.init(datepicker, {
	format: 'mmmm dd, yyyy',
	setDefaultDate: true
});