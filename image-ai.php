<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Image AI Tools</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      text-align: center;
     
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
 <p>Image Generation Ai</p>
    <P id="See"><a href="#" style="text-decoration: none; color: #007bff;
     position: relative;
     top: -60px;">Explore more</a></P>
    <div class="grid">
    <div class="item">
      <img src="./images/image-generation/adoby-firefly.png" alt="">
      <p>Adobe Firefly</p>
      <a href="https://firefly.adobe.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/image-generation/bluewillow.png" alt="" >
      <p>BlueWillow</p>
      <a href="https://www.bluewillow.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/image-generation/DALL-E.png" alt="" >
      <p>DALL·E</p>
      <a href="https://www.dalle.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/image-generation/craiyon.jpg" alt="">
      <p>Craiyon</p>
      <a href="https://www.craiyon.com/" target="_blank"><button>USE</button></a>
      </div>
      <div class="item">
      <img src="./images/image-generation/dreamstudio-icon-filled-256.png" alt="" >
      <p>DreamStudio</p>
      <a href="https://dreamstudio.ai/" target="_blank"><button>USE</button></a>  
    </div>
    <div class="item">
      <img src="./images/image-generation/leonarado.jpg" alt="" >
      <p>Leonardo AI</p>
      <a href="https://www.leonardo.ai/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/image-generation/midjourney.png" alt="">
      <p style="font-size: 22px;">Midjourney</p>
      <a href="https://www.midjourney.com/" target="_blank"><button>USE</button></a>
    </div>
    <div class="item">
      <img src="./images/image-generation/stable-diffusion.jpg" alt="" >
      <p style="font-size: 21px;">Stable Diffusion</p>
      <a href="https://stablediffusionweb.com/" target="_blank"><button>USE</button></a>
      </div><br>
</body>
</html>
<?php include 'footer.php'; ?>