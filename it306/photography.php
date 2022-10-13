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
      <h2>Introduction to Photography: The Universal Language</h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <!-- <div class="drfly" style="height:200px;">Image</div> -->
    <img src="images/tiki.jpg" alt="dragonfly" style="width: 50%;">
    <div id="ez-toc-container" class="counter-hierarchy counter-decimal ez-toc-light-blue">
      <div class="ez-toc-title-container">
        <p class="ez-toc-title">Table of Contents</p>
      </div>
      <nav>
        <ul>
          <li>What Is Photography?</li>
          <li>A Brief History of Photography and the People Who Made It Succeed</li>
            <ul>
              <li>Joseph Nicéphore Niépce</li>
              <li>Louis Daguerre</li>
              <li>Alfred Stieglitz</li>
              <li>Dorothea Lange</li>
              <li>Ansel Adams</li>
            </ul>
          <li>Do You Need a Fancy Camera?</li>
          <li>What Is the Bare Minimum Gear Needed for Photography?</li>
          <li>The Three Fundamental Camera Settings You Should Know</a></li>
          <li>The First Steps on Your Photographic Journey</li>
        </ul>
        </div>
      <img src="images/river.jpg" alt="dragonfly" style="width: 50%;">

      <h2>What Is Photography?</h2>
      <p>Photography is the art of capturing light with a camera, usually via a digital sensor or film, to create an image. With the right camera equipment, you can even photograph wavelengths of light invisible to the human eye, including UV, infrared, and radio.</p>
      <p>The first permanent photograph was captured in 1826 (some sources say 1827) by Joseph Nicéphore Niépce in France. It shows the roof of a building lit by the sun. You can see it reproduced below:</p>

      <img src="images/first.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>“View from the Window at Le Gras” by&nbsp;Joseph&nbsp;Nicéphore&nbsp;Niépce"</figcaption>

      <p>We’ve come a long way since then.</p>

      <img src="images/galaxy.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>"Image by NASA (public domain)"</figcaption>

      <p>The purpose of this article is to introduce the past and present worlds of photography. You will also find some important tips to help you take better photos along the way.</p>

      <h2>A Brief History of Photography and the People Who Made It Succeed</h2>
      <p>Color photography started to become popular and accessible with the release of Eastman Kodak’s “Kodachrome” film in the 1930s. Before that, almost all photos were monochromatic – although a handful of photographers, toeing the line between chemists and alchemists, had been using specialized techniques to capture color images<b> </b>for decades before. You’ll find some <a href="https://timeline.com/photos-earliest-color-images-f48ea4ae8e9f" target="_blank" rel="noopener noreferrer">fascinating galleries</a> of photos from the 1800s or early 1900s captured in full color, worth exploring if you have not seen them already.</p>

      <p>These scientist-magicians, the first color photographers, are hardly alone in pushing the boundaries of one of the world’s newest art forms. The history of photography has always been a history of people – artists and inventors who steered the field into the modern era.</p>

      <p>So, below, you’ll find a brief introduction to some of photography’s most important names. Their discoveries, creations, ideas, and photographs shape our own pictures to this day, subtly or not. Although this is just a brief bird’s-eye view, these nonetheless are people you should know before you step into the technical side of photography:</p>

      <h4>Joseph Nicéphore Niépce</h4>

      <ul>
        <li><b>Invention</b>: The first permanent photograph (“View from the Window at Le Gras,” shown earlier)</li>
        <li><b>Where</b>: France, 1826</li>
        <li><b>Impact</b>: Cameras had already existed for centuries before this, but they had one major flaw: You couldn’t record a photo with them! They simply projected light onto a separate surface – one which artists used to create realistic paintings, but not strictly photographs. Niépce solved this problem by coating a pewter plate with, essentially, asphalt, which grew harder when exposed to light. By washing the plate with lavender oil, he was able to fix the hardened substance permanently to the plate.</li>
        <li><b>Quote</b>: “The discovery I have made, and which I call <i>Heliography,</i> consists in reproducing spontaneously, by the action of light, with gradations of tints from black to white, the images received in the camera obscura.” Mic drop.</li>
      </ul>

      <h4><span class="ez-toc-section" id="louis-daguerre">Louis Daguerre</span></h4><ul><li><b>Invention</b>: The Daguerreotype (first commercial photographic material)</li><li><b>Where</b>: France, 1839</li><li><b>Impact</b>: Daguerreotypes are images fixed directly to a heavily polished sheet of silver-plated copper. This invention is what really made photography a practical reality – although it was still just an expensive curiosity to many people at this point. The first time you see a daguerreotype in person, you may be surprised just how <i>sharp</i> it is.</li><li><b>Quote</b>: “I have seized the light. I have arrested its flight.”</li></ul>

      <img src="images/daguerre.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>A daguerreotype of Louis Daguerre. Today, this is known as daguerreoception</figcaption>
      
      <h4><span class="ez-toc-section" id="alfred-stieglitz">Alfred Stieglitz</span></h4><ul><li><b>Genre</b>: Portraiture and documentary</li><li><b>Where</b>: United States, late 1800s through mid 1900s</li><li><b>Impact</b>: Alfred Stieglitz was a photographer, but, more importantly, he was one of the first influential members of the art community to take photography seriously as a creative medium. He believed that photographs could express the artist’s vision just as well as paintings or music – in other words, that photographers could be artists. Today’s perception of photography as an art form owes a lot to Stieglitz.</li><li><strong>Quote</strong>:&nbsp;“In photography, there is a reality so subtle that it becomes more real than reality.”</li></ul>

      <h4><span class="ez-toc-section" id="dorothea-lange">Dorothea Lange</span></h4><ul><li><b>Genre</b>: Portrait photography</li><li><b>Where</b>: United States, 1930s</li><li><b>Impact</b>: One of the most prominent documentary photographers in history, and the photographer behind one of the most influential images of all time (shown below), is Dorothea Lange. If you’ve ever seen photos from the Great Depression, you’ve seen some of her work. Her photos shaped the field of documentary photography and showed the camera’s potential for telling powerful stories perhaps more than anyone else.</li><li><b>Quote</b>: “The camera is an instrument that teaches people how to see without a camera.”</li></ul>

      <img src="images/lange.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>“Migrant Mother,” Dorothea Lange’s most famous photograph</figcaption>

      <h4><span class="ez-toc-section" id="ansel-adams">Ansel Adams</span></h4><ul><li><b>Genre</b>: Landscape photography</li><li><b>Where</b>: United States</li><li><b>When</b>: 1920s to 1960s (for most of his work)</li><li><b>Impact</b>: Ansel Adams is perhaps the most famous photographer in history, which is remarkable because he mainly took pictures of landscapes and natural scenes. (Typically, famous photographers have tended to photograph people instead.) Ansel Adams helped usher in an era of realism in landscape photography, and he was an early champion of the environmentalism and preservation movements in the United States.</li><li><b>Quote</b>: “There is nothing worse than a sharp image of a fuzzy concept.”</li></ul>

      <img src="images/rivmount.jpg" alt="dragonfly" style="width: 50%;">
      <figcaption>“The Tetons and the Snake River,” by Ansel Adams.</figcaption>

      <div class="textbox">
        <ul> 
        <li><a href="shutter.php"> NEXT >> Shutter Speed</a></li> 
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


