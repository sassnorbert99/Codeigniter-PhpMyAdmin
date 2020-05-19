<h2><?= $title ?></h2>
<p>This is a Luxury Car Saloon version 1.0</p>
<p>School: Eszterházy Károly University in Eger</p>


<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<h2>Developer</h2>

<div class="container">
  <img src="assets/images/posts/userprofile.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Sass-Gyarmati Norbert</div>
  </div>
</div>

</body>