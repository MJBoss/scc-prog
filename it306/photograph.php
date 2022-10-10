<?php
  include_once '../templates/header.php'

?>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 0px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Photography </h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <!-- <div class="drfly" style="height:200px;">Image</div> -->
    <img src="images/dragonfly.jpg" alt="dragonfly" style="width: 50%;">
      <p>Photography isn’t the only way to capture the world, but it certainly is one of the most effective. Look no further than the nearest social media feed, news station, magazine article, or book cover to see it – <b>photographs have power</b>. If you want to harness that power and learn how to take the best possible photos, welcome to “Photography Basics: The Beginner’s Guide.” This comprehensive tutorial explains the fundamental concepts you should know about photography from start to finish.</p>

      <h2>Why “Photography Basics”</h2><p>Where would you go if you wanted to learn <i>the most important basics of photography</i>, starting from scratch?</p><p>Today, many people today like learning about photography online, which is a great way to search through large amounts of information (and carry a reference in your pocket). But as good as the internet is for answering questions, it’s not always geared toward studying a large topic from start to finish.</p>
      <img src="images/river.jpg" alt="dragonfly" style="width: 50%;">

      <h2>Photography Basics Organization</h2>

      <div class="textbox">
        <ol> 
            <li>Photography Basics Introduction (You are here)</li> 
            <li><a href="photography.php">What is Photography?</a></li> 
            <li><a href="https://photographylife.com/what-is-shutter-speed-in-photography">Shutter Speed</a></li> 
            <li><a href="https://photographylife.com/what-is-aperture-in-photography">Aperture</a></li> 
            <li><a href="https://photographylife.com/what-is-iso-in-photography">ISO</a></li> 
            <li><a href="https://photographylife.com/composition-tips-for-beginners">Composition</a></li> 
            <li><a href="https://photographylife.com/understanding-metering-modes">Metering</a></li> 
            <li><a href="https://photographylife.com/understanding-digital-camera-modes">Camera Modes</a></li> 
            <li><a href="https://photographylife.com/understanding-focus-in-photography">Focusing</a></li> 
            <li><a href="https://photographylife.com/when-to-use-flash">Flash</a></li> 
            <li><a href="https://photographylife.com/common-camera-settings">Camera Settings</a></li> 
            <li><a href="https://photographylife.com/how-to-take-sharp-photos">How to Take Sharp Pictures</a></li> 
            <li><a href="https://photographylife.com/photography-tips-for-beginners">Photography Tips for Beginners</a></li> 
            <li><a href="https://photographylife.com/photography-ideas">Photography Ideas</a></li>
        </ol>
    </div>
      
    </div>
    <!-- <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Contents</h2>
      
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <!-- <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div> -->
  </div>
</div>

<?php
            include_once '../templates/footer.php'
        ?>

</body>
</html>


