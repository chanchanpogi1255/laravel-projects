<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Christian Raymundo | Portfolio</title>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6.5.8/swiper-bundle.min.css" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;600&family=Pacifico&display=swap" rel="stylesheet">

<style>
  /* Reset & Base */
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Karla', sans-serif; line-height: 1.6; color: #fff; scroll-behavior: smooth; background: #001f3f; }
  a { text-decoration: none; color: inherit; }
  img { max-width: 100%; display: block; }

  /* Header */
  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(11,61,145,0.95);
    color: #fff;
    z-index: 100;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    backdrop-filter: blur(8px);
  }
  header .logo { font-weight: 700; font-size: 1.2rem; }
  header nav a {
    margin-left: 1.5rem;
    font-weight: 500;
    font-size: 0.9rem;
    position: relative;
    transition: color 0.3s;
  }
  header nav a::after {
    content: "";
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0;
    height: 2px;
    background: #fff;
    transition: width 0.3s;
  }
  header nav a:hover::after { width: 100%; }
  header nav a:hover { color: #ffcc00; }

  /* Sections */
  section { padding: 100px 20px; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; }

  /* Hero Section */
  #home {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    padding-top: 120px;
  }
  #home .text { max-width: 50%; text-align: left; }
  #home .text h1 {
    font-size: 3rem;
    font-weight: 700;
  }
  #home .text h1 .cursor {
    display: inline-block;
    width: 2px;
    background: #FFE400;
    animation: blink 0.8s infinite;
  }
  @keyframes blink { 0%, 50%, 100% { opacity:1; } 25%, 75% { opacity:0; } }
  #home .text p { font-size: 1.2rem; margin-top: 10px; opacity: 0; transform: translateY(20px); transition: all 0.6s ease; }
  #home .image { max-width: 45%; }
  #home .image img { width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 15px; box-shadow: 0 0 50px rgba(255,228,0,0.5); }

  /* Swiper */
  .swiper-container { width: 80%; max-width: 900px; margin: 2rem auto; }
  .swiper-slide { background: #f5f5f5; border-radius: 10px; box-shadow:0 4px 15px rgba(0,0,0,0.2); padding: 2rem; color: #333; }
  .swiper-slide img { border-radius: 10px; margin-bottom: 1rem; }

  /* Scroll Reveal */
  .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.6s ease-out; }
  .fade-in.appear { opacity: 1; transform: translateY(0); }

  /* Responsive */
  @media screen and (max-width: 1024px){
    #home { flex-direction: column; padding-top: 120px; }
    #home .text, #home .image { max-width: 100%; margin-bottom: 2rem; text-align: center; }
  }
</style>
</head>
<body>

<header>
  <div class="logo" aria-label="Homepage">chan.dev</div>
  <nav aria-label="Main Navigation">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<section id="home">
  <div class="text">
    <h1 id="typingText"></h1>
    <p id="homeDesc" class="fade-in">I'm a UI/UX Designer passionate about building interactive and professional websites.</p>
  </div>
  <div class="image">
    <img src="{{ asset('images/chan.png') }}" alt="Chan">
  </div>
</section>

<section id="about" class="fade-in">
  <h2>About Me</h2>
  <p>I have experience in UI/UX design and creating interactive projects using modern technologies.</p>
</section>

<section id="projects" class="fade-in">
  <h2>My Projects</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+1">
        <h3>Project 1</h3>
        <p>A responsive web app built with HTML, CSS, and JavaScript.</p>
      </div>
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+2">
        <h3>Project 2</h3>
        <p>A professional portfolio website with interactive features.</p>
      </div>
      <div class="swiper-slide">
        <img src="https://via.placeholder.com/600x300?text=Project+3">
        <h3>Project 3</h3>
        <p>A React JS project with dynamic components and animations.</p>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section id="contact" class="fade-in">
  <h2>Contact Me</h2>
  <p>Email: <a href="mailto:raymundochan022@gmail.com">raymundochan022@gmail.com</a></p>
  <p>Instagram: <a href="https://instagram.com/chanokig_" target="_blank">@chanokig_</a></p>
  <p>Phone: 0945-729-5833</p>
  <p>Facebook: <a href="https://www.facebook.com/chan.raymundo.3/" target="_blank">Christian R. Raymundo</a></p>
</section>

<footer>
  &copy; {{ date('Y') }} Christian Raymundo. All Rights Reserved.
</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@6.5.8/swiper-bundle.min.js"></script>

<script>
  // Swiper
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
  });

  // Typing Text
  const text = "Hello, I'm Christian Raymundo";
  const typingElement = document.getElementById('typingText');
  let index = 0;
  function type() {
      if(index < text.length){
          typingElement.innerHTML = text.slice(0,index) + '<span class="cursor">|</span>';
          index++;
          setTimeout(type, 80);
      } else {
          typingElement.innerHTML = text;
      }
  }
  type();

  // Scroll reveal
  const faders = document.querySelectorAll('.fade-in');
  const appearOptions = { threshold: 0.2 };
  const appearOnScroll = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if(entry.isIntersecting){
              entry.target.classList.add('appear');
              observer.unobserve(entry.target);
          }
      });
  }, appearOptions);
  faders.forEach(fader => appearOnScroll.observe(fader));
</script>

</body>
</html>
