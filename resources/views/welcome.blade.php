<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Professional Portfolio</title>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6.5.8/swiper-bundle.min.css" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;600&family=Pacifico&display=swap" rel="stylesheet">

<style>
  /* Reset & Base */
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Karla', sans-serif; line-height: 1.6; color: #333; scroll-behavior: smooth; }
  a { text-decoration: none; color: inherit; }
  img { max-width: 100%; display: block; }

  /* Header */
  header { position: fixed; top:0; left:0; width:100%; background:#111; color:#fff; z-index:100; display:flex; justify-content:center; padding:1rem 0; }
  header nav a { margin: 0 1.5rem; font-weight: 500; transition: color 0.3s; }
  header nav a:hover { color: #ffcc00; }

  /* Sections */
  section { padding: 100px 20px; min-height:100vh; display:flex; flex-direction: column; justify-content:center; align-items:center; text-align:center; }
  #home { background:#f5f5f5; }
  #about { background:#e0e0e0; }
  #projects { background:#fff; }
  #contact { background:#111; color:#fff; }

  h1, h2 { font-weight: 600; margin-bottom: 1rem; }
  h2 { font-size: 2rem; }
  p { max-width:600px; margin-bottom: 1rem; }

  /* About */
  #about img { width:150px; border-radius:50%; margin-bottom:1rem; }

  /* Swiper */
  .swiper-container { width: 80%; max-width: 900px; margin: 2rem auto; }
  .swiper-slide { background:#f5f5f5; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.2); padding:2rem; }
  .swiper-slide img { border-radius:10px; margin-bottom:1rem; }
  .swiper-slide h3 { margin-bottom:0.5rem; }
  .swiper-slide p { font-size:0.95rem; }

  /* Footer */
  footer { padding:2rem; text-align:center; background:#111; color:#fff; }
  footer a { color:#ffcc00; }

  /* Responsive */
  @media screen and (max-width:768px){
    header nav a { margin: 0 0.8rem; }
    .swiper-container { width: 95%; }
  }
</style>
</head>
<body>

<header>
  <nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<section id="home">
  <h1>Hello, I'm Christian Raymundo</h1>
  <p>I'm a UI/UX Designer passionate about building interactive and professional websites.</p>
</section>

<section id="about">
  <img src="https://via.placeholder.com/150" alt="Profile Photo">
  <h2>About Me</h2>
  <p>I have experience in web development, UI/UX design, and creating interactive projects using modern technologies.</p>
</section>

<section id="projects">
  <h2>My Projects</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+1" alt="Project 1">
        <h3>Project 1</h3>
        <p>A responsive web app built with HTML, CSS, and JavaScript.</p>
      </div>
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+2" alt="Project 2">
        <h3>Project 2</h3>
        <p>A professional portfolio website with interactive features.</p>
      </div>
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+3" alt="Project 3">
        <h3>Project 3</h3>
        <p>A React JS project with dynamic components and smooth animations.</p>
      </div>
    </div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section id="contact">
  <h2>Contact Me</h2>
  <p>Email: <a href="mailto:christian@example.com">christian@example.com</a></p>
  <p>LinkedIn: <a href="#">linkedin.com/in/christian</a></p>
</section>

<footer>
  &copy; {{ date('Y') }} Christian Raymundo. All Rights Reserved.
</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@6.5.8/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

</body>
</html>
