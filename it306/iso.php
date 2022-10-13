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
      <h2>Introduction to ISO (sensitivity to light)</h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <!-- <div class="drfly" style="height:200px;">Image</div> -->
    <img src="images/iso.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>By using a high ISO setting here, I was able to select a fast shutter speed and freeze the birds in flight.</figcaption>
    <div id="ez-toc-container" class="counter-hierarchy counter-decimal ez-toc-light-blue">
      <div class="ez-toc-title-container">
        
      </div>
     
        </div>
      

    <h2>What is ISO?</h2>
    <p>In very basic terms, ISO is simply a camera setting that will brighten or darken a photo. As you increase your ISO number, your photos will grow progressively brighter. For that reason, ISO can help you capture images in darker environments, or be more flexible about your aperture and shutter speed settings.</p>

    <p>However, raising your ISO has consequences. A photo taken at too high of an ISO will show a lot of grain, also known as noise, and might not be usable. So, brightening a photo via ISO is always a trade-off. You should only raise your ISO when you are unable to brighten the photo via shutter speed or aperture instead (for example, if using a longer shutter speed would cause your subject to be blurry).</p>

    <img src="images/iso1.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>Motion blur.</figcaption>


    <h2>What is the Meaning of ISO?</h2>

    <p>The acronym ISO stands for “International Organization for Standardization”. However, camera ISO does not directly refer to the organization that creates various technology and product standards. Ever since two film standards called ASA and DIN were combined into ISO standards in 1974 (later revised for both film and digital photography), they were referred to as one word “ISO” from that point on. Although ISO initially defined only film sensitivity, it was later adopted by digital camera manufacturers with the purpose of maintaining similar brightness levels as film.</p>

    <h2>Common ISO Values</h2>

    <p>Every camera has a different range of ISO values (sometimes called <em>ISO speeds</em>)&nbsp;that you can use. A common set is as follows:</p>

    <ul>
        <li>ISO 100 (low ISO)</li>
        <li>ISO 200</li>
        <li>ISO 400</li>
        <li>ISO 800</li>
        <li>ISO 1600</li>
        <li>ISO 3200</li>
        <li>ISO 6400 (high ISO)</li>
    </ul>

    <p>Quite simply, when you double your ISO speed, you are doubling the brightness of the photo. So, a photo at ISO 400 will be twice brighter than ISO 200, which will be twice brighter than ISO 100.</p>

    <h2>Low vs High ISO Noise Visibility</h2>

    <img src="images/iso3.jpg" alt="dragonfly" style="width: 50%;">
    <p>The difference is clear – the image at ISO 3200 has much more noise than the one at ISO 200 (which I brightened with a long shutter speed instead). This is why you should avoid high ISOs whenever possible, unless conditions require you to use them.</p>

    <h2>When to Use Low ISO</h2>

    <p>As discussed above, you should always try to stick to the lowest ISO (base ISO) of your camera, which is typically ISO 100 or 200, whenever you can. If there is plenty of light, you are free to use a low ISO and minimize the appearance of noise as much as possible.</p>


    <h2>When to Use High ISO</h2>
    <p>Even though it is ideal to use low ISOs, there will be plenty of times when a high ISO is necessary in order to take a good photo in the first place. The simple reason is that you are often fighting against motion blur, and you will need to pick between a sharp photo at a high ISO, or a blurry photo at a low ISO. Take a look at the image below:</p>

    <img src="images/langgam.jpg" alt="dragonfly" style="width: 50%;">
    <figcaption>An image of Black Skimmers captured at ISO 800 and 1/2000 shutter speed</figcaption>



      <div class="textbox">
        <ul> 
            <li><a href="aperture.php"> NEXT >> Aperture</a></li> 
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


