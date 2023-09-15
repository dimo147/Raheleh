<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./scroll/fullpage.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <title>Home</title>
    <?php
      $host_name = 'db5014435154.hosting-data.io';
      $username = 'dbu1598703';
      $password = 'Nemat1319';
      $database = 'dbs12003862';

      $conn = new mysqli($host_name, $username, $password, $database);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM paintings ORDER BY RAND() LIMIT 7";
      $result = $conn->query($sql);
    ?>
</head>

<body>
    <div id="fullpage">
        <section class="section s1">
            <div class="backbox">
            <div class="topnav">
              <p class="logo anim1">Riley Mirheydari</p>
              <div class="pages">
                <a class="active anim1" href="home/">Home</a>
                <a class="anim1" href="gallery.php">Art works</a>
                <a class="anim1" href="#Raheleh_Mirheydari">About</a>
                <a class="anim1" href="#about">Contact</a>
              </div>
            </div>
            <hr>
            <div class="landing">
              <div class="rerow">
                <div class="column">
                  <div class="text1">
                    <!-- <p class="audiowide animE">
                        Design your home
                    </p>
                    <p class="dif animE">With Paintings</p> -->
                  </div>
                  <p class="ldec animE">Check my latest colections and painting in art works. </p>
                  <button onclick="window.location.href='/gallery.html'" class="brg animE">Brows Gallery</button>
                </div>
                <div class="slideshow-container animE">
                  <?php
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<div class='mySlides fade'><img src='images/paintings/" . $row['image'] . "' style='width:100%'></div>";
                      }
                    } else {
                        echo "no paintings";
                    }
                  ?>
                  <div class="mySlides fade">
                    <img src="images/A.jpg" style="width:100%">
                  </div>
                  
                  <div class="mySlides fade">
                    <img src="images/B.jpg" style="width:100%">
                  </div>
                  
                  <div class="mySlides fade">
                    <img src="images/G.jpg" style="width:100%">
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section s2">
          <div class="rrow">
            <div class="col">
              <h2 class="anim2">Riley Mirheydari</h2>
              <p class="abt anim2"><span>Raheleh (Riley) </span>Mirheydari is a <span>modern abstract</span> artist. She studied Painting in <span>Azad University of Tehran</span>,
                Iran. She has participated in numerous solo and group <span>exhibitions</span> in Tehran, Iran. She utilizes collage
                <span>technique</span> and <span>multimedia</span> to create her <span>artworks</span>. <br>
                Her collections of artworks are <span>inspired</span> by <span>nature, memories and human's emotions</span>. <br> 
                She believes visual art purpose is to create and evokes <span>memories</span> and <span>emotions</span>.
                <span>Raheleh</span> currently is living in <span>Richmond hill, Ontario</span> with her <span>husband, son and daughter</span>. She enjoys
                walking and kayaking with her family and friends. <br>
                Raheleh is currently working on her <span>flower collection</span>, in which she uses <span>pictures</span> that she took during
                her walks. These pieces are perfect to <span>accessories</span> living spaces and add more <span class="cl">color</span> to everyday life.</p>
            </div>
            <img class="anim2 portrait" src="./images/portrait2.jpeg" alt="portrait">
          </div>
        </section>
        <section class="section s3">
            <div class="design1">
                <img class="anim3" src="./images/paintings/2.jpeg" alt="house">
                <div class="card1">
                    <div class="cardtext">
                      <h2 class="anim3">Flower Collection</h2>
                      <p class="anim3">12 x 12 inches<br>Acrylic paint on wood panel</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section s4">
          <div class="design2">
            <div class="card2">
                <div class="cardtext">
                  <h2 class="anim4">Flower Collection</h2>
                  <p class="anim4">16 x 16 inches<br>Acrylic paint on galley canvas</p>
                </div>
            </div>
            <img class="anim4" src="./images/paintings/7.jpeg" alt="house">
          </div>
        </section>
        <section class="section s5">
          <div class="about">
            <h1 class="ctext">Contanct Me</h1>
            <div class="crow">
              <img class="contactimg" src="/images/contact_me.jpg" alt="contact me">
              <div class="ccolumn">
                  <h3 class="l2">Write a Message</h3>
                  <div class="lt">
                      <form class="form-horizontal" method="post" action="">
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" />
                              </div>
                          </div>

                          <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>

                          <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                              <i class="fa fa-paper-plane"></i>
                              <span class="send-text">SEND</span>
                          </button>
                      </form>
                  </div>
                  <div class="row contact_links">
                      <div class="row">
                          <!-- <p class="alable">Instagram </p> -->
                          <a href="https://www.instagram.com/raheleh_artstudio" class="links"><i class="fa fa-instagram fa-2x"></i></a>
                      </div>
                      <div class="row email">
                          <!-- <p class="alable">Email </p> -->
                          <a href="mailto:raheleh.mirheydari@gmail.com" class="links"><i class="fa fa-envelope fa-2x"></i></a>
                      </div>
                  </div>
                  <p class="copyright">Copyright © 2023 Raheleh Mirheydari </p>
              </div>
            </div>
          </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="./scroll/fullpage.min.js"></script>
    <script src="./scroll/app.js"></script>
    <script src="./js/script.js"></script>
    <?php
      $conn->close();
    ?>
</body>

</html>