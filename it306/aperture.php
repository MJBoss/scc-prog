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
      <h2>Understanding Aperture</h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <!-- <div class="drfly" style="height:200px;">Image</div> -->
    <img src="images/aper.png" alt="dragonfly" style="width: 50%;">
    <figcaption>Illustration that shows types of photography at different aperture settings</figcaption>
    <div id="ez-toc-container" class="counter-hierarchy counter-decimal ez-toc-light-blue">
      <div class="ez-toc-title-container">
        
      </div>
     
        </div>
      

    <h2>What is Aperture?</h2>
    <p><em>Aperture</em>&nbsp;can be defined as the opening in a lens through which light passes to enter the camera. It is an easy concept to understand if you just think about how your eyes work. As you move between bright and dark environments, the iris in your eyes either expands or shrinks, controlling the size of your pupil.</p>

    <p>In photography, the “pupil” of your lens is called aperture. You can shrink or enlarge the size of the aperture to allow more or less light to reach your camera sensor. The image below shows an aperture in a lens:</p>

    <img src="images/cam.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>Aperture is like the “pupil” for your camera system, which can open and close to change the amount of light that passes through. Note the nine blades in this lens, which form a diaphragm to block any light that tries to pass, except through the center.</figcaption>

    <p>Aperture can add dimension to your photos by controlling depth of field. At one extreme, aperture gives you a blurred background with a beautiful shallow focus effect. This is very popular for portrait photography.</p>

    <p>At the other extreme, it will give you sharp photos from the nearby foreground to the distant horizon. Landscape photographers use this effect a lot.</p>

    <p>On top of that, the aperture you choose also alters the exposure of your images by making them brighter or darker.</p>

    <h2>How Aperture Affects Exposure</h2>

    <p>Aperture has several effects on your photographs. Perhaps the most obvious is the brightness, or exposure, of your images. As aperture changes in size, it alters the overall amount of light that reaches your camera sensor – and therefore the brightness of your image.</p>

    <p>A large aperture (a wide opening) will pass a lot of light, resulting in a brighter photograph. A small aperture does just the opposite, making a photo darker. Take a look at the illustration below to see how it affects exposure:</p>

    <img src="images/apert.png" alt="dragonfly" style="width: 50%;">
    
    <p>In a dark environment – such as indoors or at night – you will probably want to select a large aperture to capture as much light as possible. This is the same reason why people’s pupils dilate when it starts to get dark; pupils are the aperture of our eyes.</p>

    <h2>How Aperture Affects Depth of Field</h2>

    <p>The other critical effect of aperture is depth of field. Depth of field is the amount of your photograph that appears sharp from front to back. Some images have a “thin” or “shallow” depth of field, where the background is completely out of focus. Other images have a “large” or “high” depth of field, where both the foreground and background are sharp.</p>

    <p>For example, here is an image with a shallow depth of field:</p>

    <img src="images/tawo.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>This photograph has a thin depth of field – a “shallow focus” effect.</figcaption>
    
    <p>One trick to remember this relationship: a large aperture results in a large amount of both foreground and background blur. This is often desirable for portraits, or general photos of objects where you want to isolate the subject. Sometimes you can frame your subject with foreground objects, which will also look blurred relative to the subject, as shown in the example below:</p>

    <img src="images/tawo1.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>Taken with a portrait lens using a very large aperture of f/1.4</figcaption>

    <p>On the other hand, a small aperture results in a small amount of background blur, which is typically ideal for some types of photography such as landscape and architecture. In the landscape photo below, I used a small aperture to ensure that both my foreground and background were as sharp as possible from front to back:</p>

    <img src="images/buks.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>Taken using a very small aperture of f/16 in order to remove background blur and achieve sufficient depth of field</figcaption>

    <p>Here is a quick comparison that shows the difference between using a large vs a small aperture and what it does to your depth of field:</p>

    <img src="images/baki.png" alt="dragonfly" style="width: 50%;">
    <figcaption>A comparison of two images shot using large vs small apertures</figcaption>

    <h2>Large vs Small Aperture</h2>

    <p>There’s a catch – one important part of aperture that confuses beginning photographers more than anything else. This is something you really need to pay attention to and get correct: Small numbers represent large apertures, and large numbers represent small apertures!</p>

    <p>That’s not a typo. For example, f/2.8 is <strong>larger</strong> than f/4 and much larger than f/11. Most people find this awkward, since it goes against our basic intuition. Nevertheless, this is a fact of photography. Take a look at this chart:</p>

    <img src="images/aperts.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>As you can see, an f-stop like f/16 represents a much smaller aperture opening than something like f/2.8.</figcaption>

    <h2>How to Pick the Right Aperture</h2>

    <img src="images/aperts1.png" alt="dragonfly" style="width: 50%;">

    <img src="images/aperts2.png" alt="dragonfly" style="width: 50%;">
    <img src="images/aperts3.png" alt="dragonfly" style="width: 50%;">

      <div class="textbox">
        <ul> 
            <li><a href="shutter.php"> NEXT >> Aperture</a></li> 
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


