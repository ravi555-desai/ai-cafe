<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Video AI Tools</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
      background-color: #f0f0f0;
    }
    header{
      background-color: white;
      width: 100%;
      text-align: center;
      padding: 20px 0;
       background-color: #f0f0f0;

    }
    header h1{
     margin: 0 auto;
    }
    footer{
      background-color: white;
      color: black;
      padding: 10px;
      bottom: 0;
      width: 100%;
      height: 80px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(4,250px);
      gap: 40px;
      justify-content: center;
      margin-top: 40px;
    }
    .item {
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        flex: 0 0 auto;
        height: 220px;
        width: 180px;
        text-align: center;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            }
    .item button {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }
    .item button:hover {
      background-color: #0056b3;
    }
    </style>
</head>
<body>
 <p>Video Generation Ai</p>
    <P id="See"><a href="#" style="text-decoration: none; color: #007bff;
     position: relative;
     top: -60px;">Explore more</a></P>
    <div class="grid">
    <div class="item">
      <img src="./images/video-generation/runway-ml.png" alt="">
      <p>Runway ML</p>
      <a href="https://runwayml.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/pictory.jpg" alt="" >
      <p>Pictory</p>
      <a href="https://www.pictory.ai/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/synthesia.png" alt="" >
      <p>Synthesia</p>
      <a href="https://www.synthesia.io/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/hey-gen.jpg" alt="">
      <p>Hey Gen</p>
      <a href="https://www.heygen.com/" target="_blank"><button>USE</button></a>
      </div>
      <div class="item">
      <img src="./images/video-generation/lumen.jpg" alt="" >
      <p>Lumen</p>
      <a href="https://www.lumen.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/invideo.png" alt="" >
      <p>InVideo</p>
      <a href="https://www.invideo.io/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/veed.png" alt="">
      <p>Veed.io</p>
      <a href="https://www.veed.io/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/video-generation/kaiber.png" alt="" >
      <p>Kaiber</p>
      <a href="https://www.kaiber.ai/" target="_blank"><button>USE</button></a>
    </div>
      </div><br>
</body>
</html>
<?php include 'footer.php'; ?>