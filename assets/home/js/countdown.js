const year = new Date().getFullYear();
const fourthOfJuly = new Date(year, 9, 9).getTime();
const fourthOfJulyNextYear = new Date(year + 1, 9, 9).getTime();
const month = new Date().getMonth();

// countdown
let timer = setInterval(function () {
	// get today's date
	const today = new Date().getTime();

	// get the difference
	let diff;
	if (month > 9) {
		diff = fourthOfJulyNextYear - today;
	} else {
		diff = fourthOfJuly - today;
	}

	// math
	let hari = Math.floor(diff / (1000 * 60 * 60 * 24));
	let jam = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	let menit = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
	let detik = Math.floor((diff % (1000 * 60)) / 1000);

	// display
	document.getElementById("timer").innerHTML =
		'<div class="hari"> \
  <div class="numbers">' +
		hari +
		'</div>hari</div> \
<div class="jam"> \
  <div class="numbers">' +
		jam +
		'</div>jam</div> \
<div class="menit"> \
  <div class="numbers">' +
		menit +
		'</div>menit</div> \
<div class="detik"> \
  <div class="numbers">' +
		detik +
		"</div>detik</div> \
</div>";
}, 1000);
