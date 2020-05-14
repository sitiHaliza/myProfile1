<html lang="en">
<head>
<style>

body {
	background-color: skyblue;
}
p {
	text-align: center;
	font-size: 40px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


<title>Photo Gallery</title>
<meta charset = "UTF-8">
</style>
</head>

<body>
<p>My Photo Gallery</p>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g2.jpg">
      <img src="https://1.bp.blogspot.com/-PlZaxybrCts/Xrz247oOmFI/AAAAAAAAABg/rYeWNSFicyQQCBWVSowOo0T72sY8yRKlgCK4BGAsYHg/s320/g2.jpg" alt="g2" width="100" height="200">
    </a>
    <div class="desc">Pantai Senok,Bachok</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g3.jpg">
      <img src="https://1.bp.blogspot.com/-4Qqo2d2UZvs/Xrz3A4DH8bI/AAAAAAAAACk/BT-ybZih5rILSJl3uS3mt9G1E1UwM7G8ACK4BGAsYHg/s320/g3.jpg" alt="g3" width="100" height="200">
    </a>
    <div class="desc">Hari Raya Aidilfitri, Kmkt</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g4.jpg">
      <img src="https://1.bp.blogspot.com/-q0Rukxo5tnA/Xrz3BZsHeuI/AAAAAAAAACo/NqKLi9xNaZ4HDhzDf70MpBShU0C1VL74wCK4BGAsYHg/s320/g4.jpg" alt="g4" width="100" height="200">
    </a>
    <div class="desc">Lab test, Kmkt</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g5.jpg">
      <img src="https://1.bp.blogspot.com/-aBviIiNpN7c/Xrz3Bn6hPhI/AAAAAAAAACs/1aF4s-bgPok3fa0fsmPFMyzDJc-yeNu0wCK4BGAsYHg/s320/g5.jpg" alt="g5" width="100" height="200">
    </a>
    <div class="desc">End of semester 1, Kmkt</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g6.jpg">
      <img src="https://1.bp.blogspot.com/-ht2-7SV3IFU/Xrz3B7yVXZI/AAAAAAAAACw/HUfv-ASvtkwAcaVX5lDxuQeG-7eD-UdigCK4BGAsYHg/s320/g6.jpgg" alt="g6" width="100" height="200">
    </a>
    <div class="desc">Smk Bachok</div>
  </div>
</div>

<video width="320" height="240" controls>
  <source src="https://www.facebook.com/nur.halieza.988/videos/1538387842997252/" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/g8.jpg">
      <img src="https://1.bp.blogspot.com/-Quunr6pPzP4/Xrz4Sr0DjNI/AAAAAAAAAEE/2DjSar2kCwM3JpnISHo5xUS1Xi1igF0KgCK4BGAsYHg/s320/g8.jpg" alt="g8" width="100" height="200">
    </a>
    <div class="desc">Birthday celebration</div>
  </div>
</div>

</body>
<html>