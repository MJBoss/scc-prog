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

figcaption {
    font-size: 13px;
    /* font-size: 0.3rem; */
    margin-bottom: 15px;
    margin-top: 5px;
    /* text-align: center; */
    line-height: 1.5;
    font-style: italic;
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
      <h2>Introduction to Shutter Speed in Photography</h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <!-- <div class="drfly" style="height:200px;">Image</div> -->
    <img src="images/bird.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>An image of a bird captured using fast shutter speed</figcaption>
    <div id="ez-toc-container" class="counter-hierarchy counter-decimal ez-toc-light-blue">
      <div class="ez-toc-title-container">
        
      </div>
     
        </div>
      

      <h2>Shutter Speed</h2>
      <p>Shutter speed exists because of the camera shutter – which is a curtain in front of the camera sensor that stays closed until the camera fires. When the camera fires, the shutter opens and fully exposes the camera sensor to the light that has passed through your lens. After the sensor is done collecting the light, the shutter closes immediately, stopping the light from hitting the sensor. The button that fires the camera is also called “shutter” or “shutter button,” because it triggers the shutter to open and close.</p>


      <h2>What is Shutter Speed?</h2>

      <p>Shutter speed is the <i>length of time</i> the camera shutter is open, exposing light onto the camera sensor. Essentially, it’s how long your camera spends taking a photo. This has a few important effects on how your images will appear.</p> 

      <p>When you use a long shutter speed (also known as a “slow” shutter speed), you end up exposing your sensor for a significant period of time. The first big effect of it is <b>motion blur</b>. If your shutter speed is long, moving subjects in your photo will appear blurred along the direction of motion. This effect is used quite often in advertisements of cars and motorbikes, where a sense of speed and motion is communicated to the viewer by intentionally blurring the moving wheels.</p>

      <img src="images/fan.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>Motion blur.</figcaption>

      <p>Slow shutter speeds are also used to <a href="https://photographylife.com/landscapes/how-to-photograph-the-milky-way" target="_blank" rel="noreferrer noopener">photograph the Milky Way</a> or other objects at night, or in dim environments with a tripod. Landscape photographers may intentionally use long shutter speeds to create a sense of motion on rivers and waterfalls while keeping everything else completely sharp.</p>

      <img src="images/sapa.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>Shutter speed: 5 seconds (a long shutter speed).</figcaption>

      <p>On the other hand, shutter speed can also be used to do just the opposite –&nbsp;freeze motion. If you use an especially fast shutter speed, you can eliminate motion even from fast-moving objects, like birds in flight, or cars driving past. If you use a fast shutter speed while taking pictures of water, each droplet will hang in the air completely sharp, which might not even be visible to our own eyes.</p>

      <img src="images/dolpin.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>Shutter speed: 1/1600th second (a fast shutter speed)</figcaption>

      <p>All of the above is achieved by simply controlling the shutter speed. In summary, quick shutter speeds freeze action, while long ones create an effect of motion when you photograph moving objects.</p>

      <h2>Shutter Speed and Exposure</h2>

      <p>The other important effect of shutter speed is on exposure, which relates to the brightness of an image. If you use a long shutter speed, your camera sensor gathers a lot of light, and the resulting photo will be quite bright. By using a quick shutter speed, your camera sensor is only exposed to a small fraction of light, resulting in a darker photo.</p>

      <img src="images/exp.jpg" alt="dragonfly" style="width: 50%;">

      <p>However, shutter speed is not the only variable that affects the brightness of an image. There are also <a href="https://photographylife.com/what-is-aperture-in-photography">aperture</a> and <a href="https://photographylife.com/what-is-iso-in-photography">ISO</a>, along with the actual brightness of the scene in front of you. So, you have some flexibility when you’re deciding on a shutter speed, but you need to pick your other settings carefully.</p>

        <img src="images/bata.jpg" alt="dragonfly" style="width: 50%;">
        <figcaption>This photo is blurry because I used a relatively slow shutter speed of 1/30 second.</figcaption>

      <p>Shutter speed can be a vital tool to capture a photo of the proper brightness. On a sunny day, you may need to use a fast shutter speed so that your photo isn’t overexposed. Or, if it is dark out, a long shutter speed may be necessary to avoid a photo that is too dark (which, in turn, could require a tripod, due to motion blur from handholding the camera). For many people, this is the <strong>main reason to adjust shutter speed</strong>: to make sure your photos are the proper brightness. Still, motion blur concerns are also very important, and should not be overlooked.</p>


      <img src="images/exps.png" alt="dragonfly" style="width: 50%;">

      <div class="textbox">
        <ul> 
            <li><a href="iso.php"> NEXT >> Shutter Speed</a></li> 
        </ul>
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


