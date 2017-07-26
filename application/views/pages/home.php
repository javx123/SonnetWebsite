
<!-- The navigation bar part of the website -->
<nav class="navbar navbar-toggleable-sm navbar-inverse" role="navigation" id="navigation">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="/">
            <img src="./images/common/logo.png" width="auto" height="25" alt="">
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#whathow">What it is?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#messaging">Messaging</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hardware">Hardware</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reminder">Pre-Order Now!</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- The front page/homescreen section, which introduces Sonnet -->
<section class="full-screen inverse" id="home">
    <div class="container">
        <div class="row" id="slogan">
            <div class="col-xl-5 col-lg-5">
                <h1 class="display-3 text-carrot mb-3 text-sm-center text-center">Sonnet</h1>
                <p class="lead">Revolutionary communications device for the adventurer in all of us.</p>
            </div>
        </div>

        <div id="form-1">
            <h1 class="d-flex justify-content-center mb-4 text-center">Pre-Order Now!</h1>
            <!-- <form id="ks-email-form-1" class="row justify-content-md-center" method="POST">
                <div class="col-xl-5 col-lg-6 col-md-7 col-sm-12">
                    <label class="sr-only" for="ks-email-input-1">Email</label>
                    <input type="text" class="form-control form-control-lg ks-email-input" id="ks-email-input-1" name="email"  placeholder="Email" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                    <button type="submit" class="btn btn-carrot btn-block btn-lg">Notify Me!</button>
                </div>
            </form> -->
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-12">
                    <a href="https://www.kickstarter.com/projects/sonnet/sonnet-decentralized-mobile-communication?ref=d4uqn1" class="btn btn-carrot btn-lg btn-block">Check Out Our Kickstarter Campaign!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section with what it is + how it works -->
<section id="whathow">
  <div class="container">
    <div class="text-center">
    <h1 class="text-center display-4"> What it is</h1>
    <p class="display-5 whatText" > Sonnet is an off-grid, wireless communication device that enables
    your smartphone to send... </p>
  </div>
    <div class="row mb-4 hidden-xs-down">
        <div class="col-sm-2 hidden-xs"></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right">
        <!-- Image of Camera goes here -->
        <img class="illustration" src="./images/pages/home/whatHow/camera.png" alt="Camera Logo">
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 whatItIs mt-3">
        <p>Image Data </p>
      </div>
      <div class="col-lg-1 col-md-1 col-xs-12 col-sm-1">
        <!-- Image of microphone goes here -->
        <img class="illustration" src="./images/pages/home/whatHow/microphone.png" alt="Microphone Logo">
      </div>
      <div id="vR" class="col-lg-4 col-md-1 col-sm-1 col-xs-12 text-left whatItIs mt-3">
        <p>Voice Recordings </p>
      </div>
    </div>
    <div class="row mb-4 hidden-xs-down">
        <div class="col-sm-2 hidden-xs"></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right">
        <!-- Image of Messaging Logo goes here -->
        <img class="illustration" src="./images/pages/home/whatHow/messageBubble.png" id ="messageBubble"alt="Messaging Logo">
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 whatItIs mt-3">
        <p>Instant Messages</p>
      </div>
      <div class="col-lg-1 col-md-1 col-xs-12 col-sm-1">
        <!-- Image of GPS Icon goes here -->
        <img class="illustration" src="./images/pages/home/whatHow/gpsLocation.png" alt="GPS Logo">
      </div>
      <div id="GPS" class="col-lg-4 col-md-1 col-sm-1 col-xs-12 whatItIs mt-3">
        <p >GPS Coordinates </p>
      </div>
    </div>

    <!-- Hidden stuff just for xs size -->
    <div class="hidden-sm-up">
    <div class="col-xs-12 text-center">
      <img class="illustration" src="./images/pages/home/whatHow/camera.png" alt="Camera Logo">
    </div>
    <div class="col-xs-12 text-center whatItIs mt-3">
      <p>Image Data </p>
    </div>
    <div class="col-xs-12 text-center">
      <!-- Image of microphone goes here -->
      <img id="vR" class="illustration" src="./images/pages/home/whatHow/microphone.png" alt="Microphone Logo">
    </div>
    <div class="col-xs-12 text-center whatItIs mt-3">
      <p>Voice Recordings </p>
    </div>





    <div class="col-xs-12 text-center">
      <img class="illustration" src="./images/pages/home/whatHow/messageBubble.png" alt="message Logo">
    </div>
    <div class="col-xs-12 text-center whatItIs mt-3">
      <p>Instant Messages </p>
    </div>
    <div class="col-xs-12 text-center">
      <!-- Image of microphone goes here -->
      <img id="vR" class="illustration" src="./images/pages/home/whatHow/gpsLocation.png" alt="GPS Logo">
    </div>
    <div class="col-xs-12 text-center whatItIs mt-3">
      <p>GPS Coordinates</p>
    </div>
</div>


    <div class="text-center whatText">
    <p > Even when you don't have... </p>
  </div>
    <div class="row text-center mb-2">
      <div class="col-md-3 col-sm-2 hidden-xs-down">
      </div>
      <div class="col-md-2 col-sm-3">
        <!-- Image of the no-towers symbol -->
        <img class="missing" src="./images/pages/home/whatHow/noTower.png" alt="No Towers symbol">
        <p class="hidden-sm-up">Cellular Coverage</p>
      </div>
      <div class="col-md-2 col-sm-3">
        <!-- Image of no satilitee symbol -->
        <img class="missing" src="./images/pages/home/whatHow/noSat.png" alt="No Sat symbol">
        <p class="hidden-sm-up">Satellite Service</p>
      </div>
      <div class="col-sm-2">
        <!-- Image of no internet symbol -->
        <img class="missing" src="./images/pages/home/whatHow/noInternet.png" alt="No Internet symbol">
        <p class="hidden-sm-up">Internet Access</p>
      </div>
      <div class="col-md-3 col-sm-2 hidden-xs-down">
      </div>
    </div>


    <div class="row text-center mb-2 hidden-xs-down">
      <div class="col-md-3 col-sm-2">
      </div>
      <div class="col-md-2 col-sm-3">
        <p>Cellular Coverage</p>
      </div>
      <div class="col-md-2 col-sm-3">
        <p>Satellite Service</p>
      </div>
      <div class="col-sm-2">
        <p>Internet Acess</p>
      </div>
      <div class="col-md-3 col-sm-2">
      </div>
    </div>
  </div>
</section>

  <section id=howItWorks3>
    <div class="container">
    <h1 class="text-left display-4"> How it Works</h1>
    <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;By downloading and connecting your smartphone to the Sonnet via the Sonnet App, you are able to
      contact any other Sonnet devices in range. Sonnet connects to your smart-phone via Wifi, relaying any
      data sent from your phone to other Sonnet devices using long-range radio waves.
      <div class="row">
        <div class="col-12 text-center">
          <img id="howItWorks" src="./images/pages/home/whatHow/diagram.png" class="hidden-sm-down" alt="How it works diagram" >
          <img id="howItWorks1" src="./images/pages/home/whatHow/diagram1.png" class="hidden-md-up" alt="how it works vertical diagram">
        </div>
      </div>
  </div>
</section>



<!-- Section with all the messaging features of the Sonnet -->
<section id="messaging">
  <div class="container" id="messagingFeatures">
    <h1 id="messagingTitle" class="display-4 mb-4"> Messaging</h1>
    <div class="row">
      <div class="col-lg-8 col-md-12 info-section-ncl">
        <div class="row pad-bot-sm">
          <div class="col-md-6">
            <h4 class="orange"> Broadcasting </h4>
              <p>
                The Sonnet retains the functions of the walkie-talkie, with the capabilitiy to broadcast
                messages to all Sonnet users in range.
              </p>
            </div>
            <div class="col-md-6">
              <h4 class="orange"> Group Chat </h4>
              <p>
                In addition to 1 on 1 messaging, with the Sonnet, there is the option of setting up
                multi-people chat rooms.
              </p>
            </div>
          </div>
          <div class="row pad-bot-sm">
            <div class="col-md-6">
              <h4 class="orange"> MultiMedia Messaging </h4>
              <p>
                The Sonnet goes beyond what is allowed by walkie-talkies,
                as it supports sending text messages, images and audio recordings.
              </p>
            </div>
            <div class="col-md-6">
              <h4 class="orange"> GPS Location </h4>
              <p>
                With Sonnet, sending your GPS coordinates to other Sonnet users is as easy as a push of
                a button.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12">
          <img id="convoImage" src="./images/pages/home/others/ConversationImage.png" alt="Phone with messaging open">
        </div>
      </div>
    </div>
</section>


<!-- This section includes the features of Sonnet that are not related to messaging -->
<section class="py-6" id="features">
  <div class="container">
    <h1 class="text-center display-4 mb-4">Features</h1>
      <div class="row text-center">
        <div class="col-xl-3  col-lg-3 col-md-12 col-sm-12 mb-4">
          <img class="illustration" src="./images/pages/home/features/offlineMaps.png" alt="Battery Logo">
          <h4 class="my-3">Offline Maps</h4>
            <p class="featureText">
              The Sonnet App features an offline map that can be accessed without Internet, data
              or even cellular signal. A group of Sonnet users can sync their GPS coordinates to visualize
              the relative location of everyone in the group in real time.
            </p>
        </div>
        <div class="col-xl-3  col-lg-3 col-md-12 col-sm-12 mb-4">
          <img class="illustration" src="./images/pages/home/features/LocationSharing.png" alt="Battery Logo">
          <h4 class="my-3">Location Sharing</h4>
            <p class="featureText">
              Never get lost in the wild again! With Sonnet's built in features, the Sonnet App will
              automatically record your GPS coordinates as you move, leaving a bread-crumb trail that can seen and retraced
              by you and your friends and family.
            </p>
        </div>
        <div class="col-xl-3  col-lg-3 col-md-12 col-sm-12  mb-4">
          <img class="illustration" src="./images/pages/home/features/SOS.png" alt="Battery Logo">
          <h4 class="my-3" id="safetyAndSecurity">Safety and Security </h4>
            <p class="featureText">
              Freely explore uncharted territory with Sonnet's built in SOS fucntion, which
              can be activated with a press of a button. Once triggered, Sonnet will broadcast a distress
              call with the current location of the user to all Sonnet devices in range.
            </p>
        </div>
        <div class="col-xl-3  col-lg-3 col-md-12 col-sm-12  mb-4">
          <img class="illustration" src="./images/pages/home/features/meshNetwork.png" alt="Mesh Design">
          <h4 class="my-3" id="meshNetworking">Mesh Networking </h4>
            <p class="featureText">
              The Sonnet makes use of mesh networks rather then traditional networks.
              By routing messages securely through other users to reach friends out of the typical range,
              the more people using Sonnet, the greater the coverage!
            </p>
        </div>
      </div>
  </div>
</section>


<!-- This section lists the hardware features of the Sonnet -->


<section id="hardware">
  <div class="container">
    <div class="title">
      <h1 class="display-4 text-center mb-4"> Hardware</h1>
    </div>
    <div class="row">
      <div class="col-12 hidden-lg-up text-center">
        <img src="./images/pages/home/others/frontalImage.png" class="" id="sonnet">
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <ul class="list-unstyled">
          <li class="block">
            <div class="row">
              <div class="col-sm-12 col-lg-2 mt-4 ml-3">
                <img src="./images/pages/home/symbols/batteryLife.png" class="illustration">
              </div>
              <div class="col-sm-12 col-lg-9">
                <div class="text">
                  <h3 class="p-l main-color2 orange">
                    Battery Life
                  </h3>
                    <p>
                      Communicate across long distances without compromising on battery life!
                      Sonnet is powered by a 4000mAh battery, which will last
                      24 hours on a charge.
                    </p>
                </div>
              </div>
            </div>
          </li>
          <li class="block">
            <div class="row">
              <div class="col-sm-12 col-lg-2 mt-4 ml-3">
                <img src="./images/pages/home/symbols/chargePhone.png" class="illustration">
              </div>
              <div class="col-sm-12 col-lg-9">
                <div class="text">
                  <h3 class="p-l main-color2 orange">
                    External Battery
                  </h3>
                    <p >
                      With the Sonnet, you won’t have to worry about your smartphone running out of
                      power! The Sonnet can charge phones, with enough power to
                      provide a full charge.
                    </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 m-b-mob-30 hidden-md-down hidden-xs text-center mt-5">
        <img src="./images/pages/home/others/frontalImage.png" class="text-center" id="sonnet">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <ul class="list-unstyled">
          <li class="block">
            <div class="row">
              <div class="col-sm-12 col-lg-2 mt-4 ml-3">
                <img src="./images/pages/home/symbols/waterResistant.png" class="illustration" id="waterSymbol">
              </div>
              <div class="col-sm-12 col-lg-9">
                <div class="text">
                  <h3 class="p-l main-color2 orange">
                    Water Resistant
                  </h3>
                    <p>
                      The Sonnet is water resistant, so whether you are going on a boat-ride or
                      exploring on a rainy day, the Sonnet can accompany you on all
                      your adventures.
                    </p>
                </div>
              </div>
            </div>
          </li>
          <li class="block">
            <div class="row">
              <div class="col-sm-12 col-lg-2 mt-4 ml-3">
                <img src="./images/pages/home/symbols/durable.png" class="illustration">
              </div>
              <div class="col-sm-12 col-lg-9">
                <div class="text">
                  <h3 class="p-l main-color2 orange">
                      Durable
                  </h3>
                    <p>
                      With its rugged exterior design, the Sonnet is suited for outdoor use.
                      It has an IP rating of 66, meaning it is dust tight and is protected from the heavy
                      seas.
                    </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Section with the price, and final message -->
<section id="reminder">
  <div class="container">
    <!-- <div class="row">
      <div class="col-sm-12 col-lg-6">
      </div>
      <div class="col-sm-12 col-lg-6 align-self-center" >
        <h2 class="display-3" id="price"> $89/pair </h2>
      </div>
    </div>
    <div id="comingSoon" class="hidden-sm-down">
      <div class="row">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6 col-sm-12">
          <h1>Coming soon to</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
          <img id="kickStarter" class="align-self-center mb-3" src="./images/pages/home/others/kickStarter.png"
          alt="kickStarter Logo">
        </div>
      </div>
    </div>
    <div class="hidden-md-up">
      <h2 class="d-flex justify-content-center mb-4 text-center">Coming soon to &nbsp;
        <img id="kickStarter1" class="align-self-center" src="./images/pages/home/others/kickStarter.png"
        alt="kickStarter Logo">
      </h2>
    </div>
    <form id="emailForm2" class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-7 col-sm-12">
        <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
      </div>
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
        <button class="btn btn-lg btn-block btn-warning" type="submit">Notify me! </button>
      </div>
    </form> -->
    <h1 class="d-flex justify-content-center mb-4 text-center">Pre-Order Today!</h1>
    <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-12 text-center">
                <a href="https://www.kickstarter.com/projects/sonnet/sonnet-decentralized-mobile-communication?ref=1bseda" class="btn btn-carrot btn-lg btn-block">Check Out Our Kickstarter Campaign!</a>
            </div>
        </div>
  </div>
</section>
