<! DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../styles/style-contact.css">
    <link rel="stylesheet" type="text/css" href="../styles/12-column-grid.css">
    <title>Contact</title>
  </head>

  <body>
    <div class="all-nav">
    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"><img class="menu" src="../images/menu.png" height="30" width="23"/></i>
          </span>
        <a href="index.html" class="logo"><img class="flag" src="../images/flag.png" height="33"/></a>
          <ul class="main-nav" id="js-menu">
              <li><a href="index.html" class="nav-links">Home</a></li>
              <li><a href="#" class="nav-links" id="js-drop-toggle">Information</a>
                <ul class="nav-dropdown" id="js-dropdown">
                  <li><a href="info-mac.html" class="drop-links">Mac</a></li>
                  <li><a href="info-iphone.html" class="drop-links">iPhone</a></li>
                </ul>
              </li>
              <li><a href="#" class="nav-links" id="js-drop-toggle-1">Setup</a>
                <ul class="nav-dropdown" id="js-dropdown-1">
                  <li><a href="setup-mac.html" class="drop-links">Mac</a></li>
                  <li><a href="setup-iphone.html" class="drop-links">iPhone</a></li>
                </ul>
              </li>
              <li><a href="#" class="nav-links" id="js-drop-toggle-2">Support</a>
                <ul class="nav-dropdown" id="js-dropdown-2">
                  <li><a href="support-mac" class="drop-links">Mac</a></li>
                  <li><a href="support-iphone" class="drop-links">iPhone</a></li>
                </ul>
              </li>
              <li><a href="resources.html" class="nav-links">Resources</a></li>
              <li><a href="contact.html" class="nav-links">Contact</a></li>
          </ul>
      </nav>
    </div>

    <script>
      let mainNav = document.getElementById('js-menu');
      let navBarToggle = document.getElementById('js-navbar-toggle');

      navBarToggle.addEventListener('click', function () {
        mainNav.classList.toggle('active');
      });

      let navDropInfo = document.getElementById('js-dropdown');
      let navDropSetup = document.getElementById('js-dropdown-1');
      let navDropSupport = document.getElementById('js-dropdown-2');
      let navDropToggleInfo = document.getElementById('js-drop-toggle');
      let navDropToggleSetup= document.getElementById('js-drop-toggle-1');
      let navDropToggleSupport= document.getElementById('js-drop-toggle-2');

      navDropToggleInfo.addEventListener('mouseover', function () {
        navDropInfo.classList.toggle('activedrop');
      })
      navDropToggleSetup.addEventListener('mouseover', function () {
        navDropSetup.classList.toggle('activedrop');
      })

      navDropToggleSupport.addEventListener('mouseover', function () {
        navDropSupport.classList.toggle('activedrop');
      })
    </script>

    <div class="titlehead">
      <div class="row">
          <h1>Contact</h1>
      </div>
    </div>

    <main>
    <div class="six">
    <div class="all-form">
      <h2>Still need assistance?</h2>
      <p>Tell us about your problem in the form below. We're here to help!</p>

      <form class="contact-form" action="contactform.php" method="post">
        <div class="row">
          <input type="text" name="name" placeholder="Full name">
        </div>
        <div class="row">
          <input type="text" name="email" placeholder="Your email">
        </div>
        <div class="row">
          <input type="text" name="subject" placeholder="Subject">
        </div>
        <div class="row">
          <textarea name="message" placeholder="Message"></textarea>
        </div>
        <div class="row" id="warning">
          <p>**Please do not use this form for technical support. For more support, call your help desk (numbers available <a href="resources.html">here</a>).<p>
        </div>
        <div class="row">
          <button type="submit" name="submit">Send</button>
        </div>

      </form>
    </div>
    </div>
    </main>

    <div class="contact-img">
    <div class="six">
      <img src="../images/contact.png" height="200"/>
    </div>
    </div>

  </body>


</html>
