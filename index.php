<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/avatar.png">
    <title>Magali Garcia Muñoz</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <script
      src="https://kit.fontawesome.com/e9aab52371.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <nav>
          <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="hide">
            <i class="fa-solid fa-bars"></i>
          </div>
        </nav>
         <nav class="navbar">
          
      </header>
      
      <main class="main">
       
        <div class="info-content">
          
          <h1> 👋 Hi, I'm Magali!</h1>
          <p>I'm <span>Full Stack web developer</span></p>
          <a download href="#">
            <button class="download-cv" download="">Download CV</button></a
          >
        </div>
        <img src="./img/avatar.png" alt="" />
      </main>
    </div>
    <div class="angle angle1"></div>
    <div class="about" id="about">
      <div class="about-info">
        <h2>About me</h2>
        <h3>Who is Magali?</h3>
        <img src="./img/yop-modified.png" alt="" />
        <h4>A curiosity-driven Full-Stack Developer.</h4>
        <p>
          I'm passionate about bringing both the technical and visual aspects of
          digital products to life. User experience and writing clean
          accessible, human code matters to me. <br />
          Eager to apply my knowledge, learn and grow in this exciting field.
        </p>
        <button class="download-cv read-more">Read More</button>
      </div>
    </div>
    <div class="angle angle2"></div>
  

    <section class="skilss-tools">
      <h2>skilss & tools</h2>
      <h3>My Toolbox & Things I Can Do</h3>
      <p>
        The skills, tools and technologies i use to bring your products to life:
      </p>
      <div class="container-icons">
        <div class="box-icon">
          <i class="fa-brands fa-html5"></i>
          <p>HTML</p>
        </div>
        <div class="box-icon">
          <i class="fa-brands fa-css3"></i>
          <p>CSS</p>
        </div>
        <div class="box-icon">
          <i class="fa-brands fa-css3"></i>
          <p>CSS</p>
        </div>
        <div class="box-icon">
          <i class="fa-brands fa-js" ></i>
          <p>JavaScript</p>
        </div> <div class="box-icon">
          <i class="fa-brands fa-react"></i>
          <p>React</p>
        </div>
        <div class="box-icon">
          <i class="fa-brands fa-github"></i>
          <p>Github</p>
        </div>
        <div class="box-icon">
          <i class="fas fa-cogs"></i>
          <p>RESTful APIs</p>
        </div>
        <div class="box-icon">
          <i class="fa-solid fa-terminal"></i>
          <p>Command Line</p>
        </div>
        <div class="box-icon">
          <i class="fa-solid fa-laptop"></i><i class="fa-solid fa-tablet-screen-button"></i><i class="fa-duotone fa-mobile-screen-button"></i>
          <p>Responsive websites</p>
        </div>
      </div>
    </section>
    <div class="angle angle3"></div>
    <div class="portfolio" id="portfolio">
      <div class="portfolio-headings">
        <h2>My Portfolio</h2>
        <h3>a selection of stuff i've built</h3>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-img"></div>
          <div class="card-title">
            <h2>Project Description</h2>
            <p>E-commerce</p>
          </div>
          <div class="projects-links">
            <a class="github" href="https://github.com/Magaligm" target="_blank"
              ><i class="fa-brands fa-github"></i>
            </a>
            <a href="">
              <i class="fa-solid fa-earth-americas"></i>
            </a>
            <a href="">
              <i class="fa-solid fa-code"></i>
            </a>
          </div>
          <div class="proyect-detail-content">
            <button class="project-details download-cv">
              Project Details
              <a href=""></a>
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-img-todo"></div>
          <div class="card-title">
            <h2>Project Description</h2>
            <p>App TodoList</p>
          </div>
          <div class="projects-links">
            <a class="github" href="https://github.com/Magaligm" target="_blank"
              ><i class="fa-brands fa-github"></i>
            </a>
            <a href="">
              <i class="fa-solid fa-earth-americas"></i>
            </a>
            <a href="">
              <i class="fa-solid fa-code"></i>
            </a>
          </div>
          <div class="proyect-detail-content">
            <button class="project-details download-cv">
              Project Details
              <a href=""></a>
            </button>
          </div>
        </div>
      </div>
    </div>
<div class="angle angle4"></div>
    <div class="container-section" id="contact">
      <div class="contact-headings">
        <h2>contact</h2>
        <h3>Get in touch</h3>
      </div>
      <div class="container-contact">
        <!-- <img src="./img/contact.jpg" alt="" /> -->

        <div class="contact-form">
          <p>Dropping a line to say g’day, ask for my resume or see if we can build something amazing together?<br> I’d love to hear from you!</p>
          <form id="form" action="mailto:magalinicole.gm@gmail.com"  method="post" class="form">
            <input type="text" placeholder="Name" name="name" required />
            <input type="email" placeholder="Email" name="email" required/>
            <textarea type="text" placeholder="Message" name="message" required>
            </textarea>
            <button type="submit" id="button" class="btn-submit">Send email</button>
          </form>
          
        </div>  
        <div class="container-social">
          <p class="bold">Feeling social? Find me on these online spaces too!</p>
          <div class="sotial-network">
            <a href="https://www.linkedin.com/in/magali-garcia-m">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a class="github" href="https://github.com/Magaligm" target="_blank"
              ><i class="fa-brands fa-github"></i>
            </a>
          </div>
        </div>      
      </div>
    </div>

    <footer class="footer">
      <div class="footer-content">
        <p>© 2022 | Designed &amp; coded with 💙 by Magali Garcia Muñoz</p>
       
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
      var contador = 1;
      $(".hide").on("click", function () {
        $("nav ul").toggle("slow");
      });
      $(window).resize(function () {
        var obtener_ancho = $(this).width();
        if (obtener_ancho > 480 && $("nav ul").is(":hidden")) {
          $("nav ul").removeAttr("style");
        }
      });
    </script>
    
<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('6YI7Xl_nTL1_WSnba')
</script>
<script>
const btn = document.getElementById("button");

document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();

  btn.value = "Sending...";

  const serviceID = "default_service";
  const templateID = "template_gnb6dab";

  emailjs.sendForm(serviceID, templateID, this).then(
    () => {
      btn.value = "Send Email";
      alert("Sent!");
    },
    (err) => {
      btn.value = "Send Email";
      alert(JSON.stringify(err));
    }
  );
});
</script>
  </body>
</html>


