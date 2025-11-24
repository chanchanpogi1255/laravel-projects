<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Christian Raymundo Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    /* Reset & Base */
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family: 'Inter', sans-serif; background: #0f0c23; color: #fff; scroll-behavior: smooth; }
    a { text-decoration:none; color: inherit; }
    img { max-width:100%; display:block; }

    /* Header */
    header { display:flex; justify-content:space-between; align-items:center; padding:20px 50px; position:fixed; width:100%; top:0; background: rgba(15,12,35,0.9); z-index:100; }
    .logo { font-weight:700; font-size:1.5rem; }
    nav ul { display:flex; gap:30px; list-style:none; }
    nav ul li a { font-weight:500; transition:0.3s; }
    nav ul li a:hover { color:#FFE400; }

    /* Hero */
    .hero { height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:0 20px; }
    .hero h1 { font-size:3rem; margin-bottom:10px; }
    .hero p { font-size:1.2rem; margin-bottom:20px; color:#ccc; }
    .hero button { padding:12px 30px; background:#FFE400; color:#0f0c23; border:none; font-weight:600; cursor:pointer; transition:0.3s; }
    .hero button:hover { background:#fff; }

    /* Sections */
    section { padding:100px 50px; }
    h2 { font-size:2rem; margin-bottom:40px; border-bottom:2px solid #FFE400; display:inline-block; padding-bottom:5px; }

    /* About */
    .about { display:flex; align-items:center; gap:50px; flex-wrap:wrap; }
    .about img { border-radius:50%; width:250px; }
    .about-text { max-width:600px; }
    .about-text p { margin-bottom:15px; color:#ccc; }

    /* Projects */
    .projects { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; }
    .project-card { background: rgba(255,255,255,0.05); padding:20px; border-radius:10px; transition:0.3s; }
    .project-card:hover { background: rgba(255,255,255,0.15); }
    .project-card img { border-radius:10px; margin-bottom:15px; }
    .project-card h3 { margin-bottom:10px; }
    .project-card p { color:#ccc; margin-bottom:15px; }
    .project-card button { padding:8px 20px; background:#FFE400; color:#0f0c23; border:none; cursor:pointer; font-weight:600; transition:0.3s; }
    .project-card button:hover { background:#fff; }

    /* Skills / Services */
    .skills { display:flex; gap:30px; flex-wrap:wrap; justify-content:center; }
    .skill { background: rgba(255,255,255,0.05); padding:20px; border-radius:10px; text-align:center; flex:1 1 200px; transition:0.3s; }
    .skill:hover { background: rgba(255,255,255,0.15); }

    /* Featured / Testimonials */
    .featured { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:30px; }
    .featured-item { background: rgba(255,255,255,0.05); padding:20px; border-radius:10px; transition:0.3s; }
    .featured-item:hover { background: rgba(255,255,255,0.15); }

    /* Footer */
    footer { text-align:center; padding:50px; background:#0d0b1f; color:#ccc; }
    footer a { color:#FFE400; margin:0 10px; }

    @media(max-width:768px){
      header { flex-direction:column; gap:15px; }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">Chanok</div>
    <nav>
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero" id="hero">
    <h1>Christian Raymundo</h1>
    <p>Time is Gold</p>
    <button>See My Work</button>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <img src="chan.png" alt="Christian Raymundo">
    <div class="about-text">
      <h2>About Me</h2>
      <p>Hello! I am Christian Raymundo, a student working on my school portfolio. I like designing and coding.</p>
      <p>More info will come here later.</p>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects">
    <h2>My Projects</h2>
    <div class="projects">
      <div class="project-card">
        <img src="project1.png" alt="Project 1">
        <h3>School Project 1</h3>
        <p>Description of project 1.</p>
        <button>Learn More</button>
      </div>
      <div class="project-card">
        <img src="project2.png" alt="Project 2">
        <h3>School Project 2</h3>
        <p>Description of project 2.</p>
        <button>Learn More</button>
      </div>
      <div class="project-card">
        <img src="project3.png" alt="Project 3">
        <h3>School Project 3</h3>
        <p>Description of project 3.</p>
        <button>Learn More</button>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills">
    <h2>Skills</h2>
    <div class="skills">
      <div class="skill">HTML & CSS</div>
      <div class="skill">JavaScript</div>
      <div class="skill">Figma Design</div>
      <div class="skill">Teamwork</div>
    </div>
  </section>

  <!-- Featured / Testimonials -->
  <section class="featured">
    <div class="featured-item">
      <h3>Featured Project</h3>
      <p>This is an example of a featured project.</p>
    </div>
    <div class="featured-item">
      <h3>Featured Project</h3>
      <p>This is another example of a featured project.</p>
    </div>
  </section>

  <!-- Contact -->
  <footer id="contact">
    <p>Contact me: raymundochan022@gmail.com</p>
    <p>
      <a href="#">Instagram</a> | 
      <a href="#">GitHub</a> | 
      <a href="#">Facebook</a>
    </p>
  </footer>

</body>
</html>
