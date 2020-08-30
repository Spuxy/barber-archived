<div class="header-wrapper menu" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large">
        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
          <!-- Begin Burger Menu -->
          <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- End Burger Menu -->
          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="navbar-item" href="#home">
                  Home
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#about-me">
                  About Me
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#services">
                  Services
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#skills">
                  Skills
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#my-work">
                  My Work
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#contact">
                  Contact
                </a>
              </div>
            </div>
          </div>
        </nav>
        <!-- End Mobile Nav -->
        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Hey there, I'm</h1>
            <h2 class="title">Ashley</h2>
            <h1 class="subtitle profession">A UI/UX Designer</h1>
            <v-btn href="/reservation">BOOK</v-btn>
          </div>
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot">
    <div class="hero-foot--wrapper">
        <div class="columns">
            <div class="column is-12 hero-menu-desktop has-text-centered">
                <ul>
                    <li class="is-active">
                        <a href="#home" v-on:click="jumpFromMenu('.home')">HOME</a>
                    </li>
                    <li>
                        <a href="#price-list" v-on:click="jumpFromMenu('.services')">PRICE LIST</a>
                    </li>
                    <li>
                        <a href="#about-me" v-on:click="jumpFromMenu('.about-me')">ABOUT US</a>
                    </li>
                    <li>
                        <a href="#services" v-on:click="jumpFromMenu('.services')">SERVICES</a>
                    </li>
                    <li>
                        <a href="#my-work" v-on:click="jumpFromMenu('.my-work')">OUR WORK</a>
                    </li>
                    <li>
                        <a href="#contact" v-on:click="jumpFromMenu('.contact')">CONTACT</a>
                    </li>                
                </ul>
            </div>
        </div>
    </div>
</div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>