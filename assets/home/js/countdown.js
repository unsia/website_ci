let tanggal = "Oct 13, 2020 00:00:00",
	fourthOfJuly = new Date(tanggal).getTime();
const month = new Date().getMonth();
const second = 1000;
const minute = second * 60;
const hour = minute * 60;
const day = hour * 24;

// countdown
let timer = setInterval(function () {
	// get today's date
	const today = new Date().getTime();

	// get the difference
	let diff = fourthOfJuly - today;

	// math
	let hari = Math.floor(diff / (day));
	let jam = Math.floor((diff % (day)) / (hour));
	let menit = Math.floor((diff % (hour)) / (minute));
	let detik = Math.floor((diff % (minute)) / second);

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
