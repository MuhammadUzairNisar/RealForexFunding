
<style>
@import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

/* Variables */
:root {
  --bg: #fff;
  --text: #7288a2;
  --gray: #4d5974;
  --lightgray: #e5e5e5;
  --blue: #8a03d2;
}

* {
  box-sizing: border-box;
}
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: 'Hind', sans-serif;
  background: var(--bg);
  color: var(--gray);
  display: flex;
  min-height: 100vh;
}

.container {
  margin: 0 auto;
  padding: 4rem;
  width: 48rem;
}

.accordion .accordion-item {
  border-bottom: 1px solid var(--lightgray);
}

.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: var(--text);
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}

.accordion button:hover,
.accordion button:focus {
  cursor: pointer;
  color: var(--blue);
}

.accordion button:hover::after,
.accordion button:focus::after {
  cursor: pointer;
  color: var(--blue);
  border: 1px solid var(--blue);
}

.accordion .accordion-title {
  padding: 1em 1.5em 1em 0;
}

.accordion .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}

.accordion .icon::before {
  display: block;
  position: absolute;
  content: '';
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}

.accordion .icon::after {
  display: block;
  position: absolute;
  content: '';
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}

.accordion button[aria-expanded='true'] {
  color: var(--blue);
}

.accordion button[aria-expanded='true'] .icon::after {
  width: 0;
}

.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}

.accordion button[aria-expanded='true'] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}

.accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}

</style>


<div class="container">

  <h2>Frequently Asked Questions</h2>
  <div class="accordion">
  @foreach ($data as $item)
    <div class="accordion-item">
      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">{{ $item->question }}</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p> {{ $item->answer }}</p>
      </div>
    </div>
	@endforeach
  </div>
</div>


<script>
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script> 





