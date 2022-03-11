<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>To-do List</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- Section : Navbar -->
  <div class="navbar-fixed">
    <nav class="blue-grey darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Creative</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#search">Search</a>
            </li>
            <li>
              <a href="#popular">Popular Blogs</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
            <li>
              <a class="waves-effect waves-light deep-purple accent-3 btn" href="Login/login.php"><i class="material-icons left">login</i>Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-demo">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
      <a href="#search">Search</a>
    </li>
    <li>
      <a href="#popular">Popular Places</a>
    </li>
    <li>
      <a href="#gallery">Gallery</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
    <li>
      <a class="waves-effect waves-light deep-purple accent-3 btn" href="Login/login.php"><i class="material-icons left">login</i>Login</a>
    </li>
  </ul>

  <!-- Section: Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
        <div class="caption center-align">
          <h2>Make your life easier with us!</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam non illo earum cumque id est!</h5>
          <a href="#" class="btn btn-large deep-purple accent-3">Learn More</a>
        </div>
      </li>
      <li>
        <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
        <div class="caption left-align">
          <h2>Manage your tasks here!</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam non illo earum cumque id est!</h5>
          <a href="#" class="btn btn-large deep-purple accent-3">Learn More</a>
        </div>
      </li>
      <li>
        <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
        <div class="caption right-align">
          <h2>Be Productive</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam non illo earum cumque id est!</h5>
          <a href="#" class="btn btn-large deep-purple accent-3">Learn More</a>
        </div>
      </li>
    </ul>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search deep-purple accent-3 darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search </h3>
          <div class="input-field">
            <input class="white grey-text autocomplete" placeholder="Aruba, Cancun, etc..." type="text" id="autocomplete-input">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large deep-purple-text">account_circle</i>
            <h4>Create Your Account</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large deep-purple-text">create</i>
            <h4>Manage Tasks</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large deep-purple-text">security</i>
            <h4>Secure</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Popular Blogs -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="deep-purple-text">Popular</span> Blogs</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
              <span class="card-title">Cancun, Mexico</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
              <span class="card-title">The Bahamas</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
              <span class="card-title">Nova Scotia</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <a href="#contact" class="btn btn-large grey darken-3">
            <i class="material-icons left">send</i> Visit Blogs
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Follow -->
  <section class="section section-follow deep-purple accent-3 darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Creative</h4>
          <p>Follow us on social media for special offers</p>
          <a href="htttps://facebook.com" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="htttps://twitter.com" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="htttps://linkedin.com" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="htttps://googleplus.com" target="_blank" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="htttps://pinterest.com" target="_blank" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery scrollspy">
    <div class="container">
      <h4 class="center">
        <span class="deep-purple-text">Photo </span> Gallery
      </h4>
      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travel" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?nature" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach, travel" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beaches" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?traveling" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?bridge" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?boat, travel" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?water" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?building" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?trees" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?cruise" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel deep-purple accent-3 white-text center">
            <i class="material-icons medium">email</i>
            <h5>Contact Us</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus sed praesentium delectus. Sit, mollitia
              quo. Veniam repellat voluptas ipsum doloremque?</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">Creative Agency</li>
            <li class="collection-item">Lorem, ipsum dolor.</li>
            <li class="collection-item">Lorem ipsum dolor sit.</li>
          </ul>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Please fill out this form</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" id="name">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" id="phone">
              <label for="phone">Phone</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
              <label for="message">Message</label>
            </div>
            <input type="submit" value="Submit" class="btn deep-purple accent-3">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="section deep-purple accent-3 darken-2 white-text center">
    <p class="flow-text">Creative &copy; 2022</p>
  </footer>
<!-- partial -->
  <script src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js'></script><script  src="./script.js"></script>

</body>
</html>
