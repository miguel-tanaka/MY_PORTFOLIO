
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    .carrossel-container {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .carrossel-slide {
      display: none;
      width: 100%;
      position: relative;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .carrossel-slide.active {
      display: block;
      opacity: 1;
    }

    .img-container {
      width: 100%;
    }

    .img-container img {
      width: 100%;
      height: auto;
    }

    .texto-container {
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);
      color: white;
      text-align: left;
      background: rgb(26, 0, 112);
      padding: 20px;
      border-radius: 10px;
      max-width: 40%;
      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    }

    .texto-container h2 {
      font-size: 2rem;
    }

    .texto-container p {
      font-size: 1rem;
      margin: 10px 0;
    }

    .btn-link{
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff6600;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      box-shadow: 5px 5px 15px rgba(8, 4, 0, 0.06);
    }

    .btn-link:hover {
      background-color:rgb(232, 224, 6);
      color: blue;
      transition: 0.5s;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      background-color: rgba(0, 23, 91, 0.53);
      color: rgb(255, 255, 255);
      border: none;
      opacity: 0.2;
      font-size: 40px;
      padding: 10px;
      cursor: pointer;
      transform: translateY(-50%);
    }

    .prev:hover, 
    .next:hover{
      opacity: 1;
      text-replace: 0.3s;
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }

    @media (max-width: 768px) {
      .texto-container {
        max-width: 80%;
        left: 5%;
      }

      .texto-container h2 {
        font-size: 1.5rem;
      }

      .texto-container p {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <div class="carrossel-container">
    <div class="carrossel-slide active">
      <div class="img-container">
        <img src="././assets/img/carousel/banner-carousel-1.png" alt="Imagem 1">
      </div>
      
    </div>
    <div class="carrossel-slide">
      <div class="img-container">
        <img src="https://picsum.photos/900/400?random=2" alt="Imagem 2">
      </div>
    </div>
    <div class="carrossel-slide">
      <div class="img-container">
        <img src="https://picsum.photos/900/400?random=3" alt="Imagem 3">
      </div>
    
    </div>

    <button class="prev" onclick="mudarSlide(-1)"><i class="bi bi-caret-left"></i></button>
    <button class="next" onclick="mudarSlide(1)"><i class="bi bi-caret-right"></i></button>
  </div>

  <script>
    let slideIndex = 0;

    function mostrarSlides() {
      const slides = document.querySelectorAll('.carrossel-slide');
      slides.forEach(slide => slide.classList.remove('active'));
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].classList.add('active');
    }

    function mudarSlide(n) {
      slideIndex += n - 1;
      const slides = document.querySelectorAll('.carrossel-slide');
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      }
      if (slideIndex < 0) {
        slideIndex = slides.length - 1;
      }
      mostrarSlides();
    }

    document.addEventListener('DOMContentLoaded', () => {
      setInterval(mudarSlide, 5000, 1);
    });
  </script>

</body>
</html>