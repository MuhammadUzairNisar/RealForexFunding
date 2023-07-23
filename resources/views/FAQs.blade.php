@include('bootStrap')
<style>
  @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;900&display=swap");

:root {
	--primary: #191919;
	--secondary: #f26db6;
	--ternary: #310273;
	--background: #f1f1f1;
	--gray: #e1eeff7f;
	--white: #fff;
}

body {
	color: var(--font-color);
	font-family: "Inter", sans-serif;
	font-size: 1.2em;
	line-height: 1.6;
	background: var(--background);
	overflow-x: hidden;
	min-height: 100vh;
	min-width: 100vw;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.caption {
	font-size: 10px;
	font-style: normal;
	font-weight: 700;
	line-height: 13px;
	letter-spacing: 0.04em;
	text-align: left;
	text-transform: uppercase;
	color: var(--secondary);
}
.title {
	font-size: 24px;
	font-style: normal;
	font-weight: bold;
	line-height: 31px;
	letter-spacing: 0em;
	text-align: center;
	margin-bottom: 8px;
	color: var(--secondary);
}

.faq {
	max-width: 800px;
	margin: auto;
}
.box-content-colapse {
	width: 70%;
	height: auto;
	position: relative;
}

.intro-colapse {
	width: 100%;
	height: auto;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.details-comp {
	cursor: pointer;
	width: calc(100% - 32px);
	padding: 16px;
	border-radius: 8px;
	margin-bottom: 32px;
	position: relative;
	left: 0px;
	background: white;
	filter: drop-shadow(7px 9px 5px rgba(0, 0, 0, 0.04));
	-webkit-filter: drop-shadow(7px 9px 5px rgba(0, 0, 0, 0.04));
	-moz-filter: drop-shadow(7px 9px 5px rgba(0, 0, 0, 0.04));
}

.details-comp > p {
	padding: 0 16px;
}

.summary-colapse {
	list-style: none;
	border-radius: 8px;
	padding-left: 16px;
	color: var(--ternary);
	font-weight: bold;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	width: 100%;
}
.summary-colapse::-webkit-details-marker {
	display: none;
}

.details-comp[open] > .summary-colapse::after {
	display: flex;
	justify-content: space-between;
	content: url("https://cdn-icons-png.flaticon.com/24/7153/7153564.png");
	font-size: 16px;
	align-items: center;
	padding-right: 24px;
}

.details-comp > .summary-colapse::after {
	display: flex;
	justify-content: space-between;
	align-items: center;
	content: url("https://cdn-icons-png.flaticon.com/24/7153/7153566.png");
	font-size: 16px;
	padding-right: 24px;
}

.details-comp[open] p {
	animation: details-show 350ms linear;
}

.details-comp:not([open]) p {
	opacity: 0;
}

@keyframes details-show {
	0% {
		opacity: 0;
		transform: translatey(-25px);
	}
	100% {
		opacity: 1;
		transform: translatey(0);
	}
}

</style>
<h2>Frequently Asked Questions</h2>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
</div>


  
@foreach ($data as $item)
<details>
  <summary>
    {{ $item->question }}
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
    </svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
    </svg>
  </summary>
  <p>{{ $item->answer }}</p>
</details>
@endforeach

</div>