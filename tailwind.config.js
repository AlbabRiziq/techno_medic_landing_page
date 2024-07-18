/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./application/views/**/*.{html,js,php}"],
	theme: {
		extend: {},
	},
	plugins: [require("daisyui")],
	daisyui: {
		themes: ["light"],
	},
};
