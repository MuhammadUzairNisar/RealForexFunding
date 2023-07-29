@include('bootStrap')

<style>

header {
  padding: 20px 0;
  background: white;
  border-radius: 30px;
  box-shadow: 0 4px 6px rgba(0,0,0,.2);  
}
.container2 {
  padding: 0 20px;
  max-width: 960px;
  margin: 0 auto;
}
.logo-box {
  float: left;
  margin-right: 10px;
}
.logo-box a {
  outline: none;
  display: block;
}
.logo-box img {display: block;}
nav {
  overflow: hidden;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
  float: right;
}
nav li {
  display: inline-block;
  margin-left: 25px;
  height: 70px;
  line-height: 70px;
  transition: .5s linear;
}
nav a {
  text-decoration: none;
  display: block;
  position: relative;
  color: #868686;
  text-transform: uppercase;
}
nav a:after {
  content: "";
  width: 0;
  height: 2px;
  position: absolute;
  left: 0;
  bottom: 15px;
  background: #B67FFA;
  transition: width .5s linear;  
}
nav a:hover:after {width: 100%;}

@media screen and (max-width: 660px) {
  header {text-align: center;}
  .logo-box {
    float: none;
    display: inline-block;
    margin: 0 0 16px 0;
  }
  ul {float: none;}
  nav li:first-of-type {margin-left: 0;}
}
@media screen and (max-width: 550px) {
nav {overflow: visible;}
nav li {
  display: block;
  margin: 0;
  height: 40px;
  line-height: 40px;
}
nav li:hover {background: rgba(250,182,127);}
nav a:after {content: none;}
}
</style>
<header>
  <div class="container2">
    <div class="logo-box">
      <a href="">
        <img src="https://cdn.thetradingpit.com/global/logo-dark-4.svg">
      </a>
    </div>
    <nav>
    <ul>
      <li><a href="">home</a></li>
      <li><a href="">why rff</a></li>
      <li><a href="">affiliated programs</a></li>
      <li><a href="">trading rules</a></li>
      <li><a href="">faqs</a></li>
   </ul>
  </nav>
  </div>
</header>