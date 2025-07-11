<script setup>
import { ref } from 'vue'
import {} from 'vue'

//github url
const githuburl = ref('https://github.com/Rajkumarsingh272002') //this we used into bootom in <li>-gitlink
</script>
<template>
  <div class="container-fluid p-5">
    <header>
      <!-- MAKE SHAPE INTO RECTANGLE-->
      <!--<div style="overflow: hidden"> if using this then height hidden be on overfollo and your content will not show your content will be hidden with height -->
      <div>
        <div
          style="
            background-color: #f4eaff;
            /*height: 725px; if this keept thent height grow by content according you increase so plz take custom-class for height */

            /* border-top-left-radius: 50% 20%;
            border-top-right-radius: 50% 20%; inline priority first so this not work in medai-query . plz remove then use media-query ya custom class*/
          "
          class="custom-height scrollbox"
        >
          <!--MAKE FOOTER-->
          <div class="row g-0 cus_topTODownAllColumn">
            <div class="col-md-3 col-sm-6 mini">
              <h1 class="fs-5 fw-bold ps-5">Raj kumar Singh</h1>
              <p class="fs-6 cus_justify ps-5">
                I am a passionate and self-motivated Frontend Web Developer with a solid
                understanding of web technologies like HTML, CSS, JavaScript, Bootstrap, and modern
                frontend frameworks such as Vue.js. I have hands-on experience using state
                management with Pinia, routing with Vue Router, and API integration using Axios. On
                the backend side, I am familiar with PHP and MySQL for building dynamic and
                data-driven applications. I also have experience in creating and consuming RESTful
                PHP APIs to enable smooth communication between the frontend and backend.
                Additionally, I use Git and GitHub for version control and collaborative
                development. I am eager to contribute to real-world projects, continuously improve
                my skills, and grow as a full-stack web developer.
              </p>
            </div>

            <div class="col-md-3 col-sm-6 cus_more">
              <h1 class="fs-6 fw-bold">More From Us</h1>
              <div>
                <ul class="fs-6 list-unstyled cus_justify link_dark">
                  <li class="mb-3">
                    <router-link to="/" link="#" alt="">Home</router-link>
                  </li>
                  <li class="mb-3"><router-link to="/about" link="#" alt="">About</router-link></li>
                  <li class="mb-3">
                    <router-link to="/project" link="#" alt="">Project</router-link>
                  </li>
                  <li class="mb-3">
                    <router-link to="/skills" link="#" alt="">Skill</router-link>
                  </li>
                  <li class="mb-3">
                    <router-link to="/contact" link="#" alt="">Contact us</router-link>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 cus_getknow">
              <h1 class="fs-6 fw-bold">Get to Know Us</h1>
              <div>
                <ul class="list-unstyled fs-6">
                  <li>
                    <router-link
                      to="/contact"
                      style="text-decoration: none"
                      class="fw-bolder"
                      link="#"
                      alt=""
                      >Contact Us</router-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 cus_contact">
              <h1 class="fs-6 fw-bold mt-5 me-5">Contact Us</h1>
              <div>
                <ul class="fs-6 list-unstyled cus_justify">
                  <li class="mb-3"><a link="#" alt="">rks701754@gmail.com</a></li>
                  <li class="mb-3"><a link="#" alt="">WhatsApp: +91-9580682496</a></li>
                </ul>
              </div>
              <div class="footerAdjust">
                <ul class="list-unstyled cus_media d-flex">
                  <li>
                    <a><i class="fab fa-x-twitter fa-2x"></i></a>
                  </li>
                  <!--fa-2x ka matlab hai size thoda bada. Aap fa-1x, fa-3x, fa-lg bhi use kar sakte hain.-->
                  <li>
                    <a><i class="fab fa-instagram fa-2x"></i></a>
                  </li>
                  <li>
                    <a><i class="fab fa-youtube fa-2x"></i></a>
                  </li>
                  <li>
                    <a><i class="fab fa-linkedin fa-2x"></i></a>
                  </li>
                  <li>
                    <a><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a :href="githuburl" target="_blank"><i class="bi bi-github text-white"></i></a
                    ><!--we make link 'githuburl' on top-->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--copywright-->
        <div>
          <!-- underline-->
          <hr class="cus_hr" />
          <h1 class="text-center fs-6 text">
            © Copyright 2025 | Raj Kumar singh. All rights reserved.
          </h1>
        </div>
      </div>
    </header>
  </div>
</template>
<style scoped>
.cus_justify {
  text-align: justify;
}

.cus_more {
  padding-left: 12%;
  font-weight: bolder;
  text-decoration: none;
}
.cus_more a:link {
  text-decoration: none;
}
.cus_more a,
router-ink {
  color: blue;
}
.cus_more a:hover {
  color: red;
}
.cus_getknow a:hover {
  color: red;
}
.cus_getknow a {
  color: blue;
}
.cus_getknow {
  transform: translateX(16%);
}
.cus_contact {
  transform: translatex(-10%);
}
.cus_topTODownAllColumn {
  transform: translateY(25%);
  color: black;
}
.cus_media {
  gap: 7%;
}
.cus_media li {
  background: #000;
  color: white;
  padding: 5px;
  border-radius: 8px;
}
.cus_media li :hover {
  background: #444;
}
.cus_hr {
  margin-top: 0px;
  background-color: beige;
  border: 2px solid green;
}
/* tblet */
@media (min-width: 768px) and (max-width: 991px) {
  .footerAdjust {
    margin-left: -140px;
    /*background-color: red;*/
  }
  .custom-height {
    /* min-height: 1900px;  takes at least full screen . screen do small ya big space become increse and decrease */
    border-top-left-radius: 25% 8%;
    border-top-right-radius: 25% 8%;
    margin-top: -90px;
    scrollbar-width: thin;
  }
  .cus_contact {
    margin-top: -220px;
    margin-right: 0px;
  }

  .mini {
    margin-top: -170px;
  }
  .cus_getknow {
    margin-top: -170px;
    margin-left: -8px;
  }
  .cus_more {
    margin-top: -170px;
  }
  .cus_contact {
    margin-left: 8px;
  }
  .custom-height {
    overflow: auto;
  }
}

@media (min-width: 991px) {
  .footerAdjust {
    margin-left: -80px;
    /*background-color: aqua;*/
  }
  .cus_contact {
    margin-top: -47px;
  }
  .custom-height {
    min-height: 100vh; /* Minimum height poore screen ke barabar . if screen small size then also content will be show */
    height: auto; /* Height jitna content ho, utna badh jaye . but there just not work*/
    overflow-x: hidden; /* Horizontal scroll ko roke */
    overflow-y: auto; /* Vertical scroll allow karein agar zarurat ho */
    /* overflow: auto; if you keep only this you work will be complete*/
    margin-top: -90px;
    border-top-left-radius: 25% 8%;
    border-top-right-radius: 25% 8%;
    scrollbar-width: thin;
  }
  .mini {
    margin-top: -80px;
  }
  .cus_more {
    margin-top: -80px;
  }
  .cus_getknow {
    margin-top: -80px;
  }
  .cus_contact {
    margin-top: -130px;
  }
  .cus_justify {
  }
}
/* Large Mobile / Phablet */
@media (min-width: 576px) and (max-width: 768px) {
  /* This will apply from 576px and above */
  .cus_topTODownAllColumn {
    /*    background-color: aqua;*/
  }
  .custom-height {
    border-top-left-radius: 25% 8%;
    border-top-right-radius: 25% 8%;
    margin-top: -90px;
    /*min-height: 1150px;*/
    /*min-height: 100vh; /* Minimum height poore screen ke barabar */
    /*height: auto; /* Height jitna content ho, utna badh jaye */
  }
  .scrollbox {
    scrollbar-width: thin; /* Firefox */
    overflow-x: hidden; /* Horizontal scroll ko roke */
    overflow-y: auto; /* Vertical scroll allow karein agar zarurat ho */
  }
  .scrollbox::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
  }
  .footerAdjust {
    margin-left: -80px;
  }
  .cus_contact {
    margin-top: -50px;
  }
  .mini {
    margin-top: -115px;
  }
  .cus_more {
    margin-top: -115px;
  }
}
/*minor problem */
/* Large Mobile / Phablet */
@media (min-width: 563px) and (max-width: 575.98px) {
  /* This will apply for width 563px to just below 576px */
  .cus_topTODownAllColumn {
    /* background-color: yellow;*/
  }
  .custom-height {
    min-height: 1000px; /* takes at least full screen */
    border-top-left-radius: 25% 8%;
    border-top-right-radius: 25% 8%;
    margin-top: -90px;
  }
  .footerAdjust {
    display: flex;
    justify-content: start;
    margin-top: 30px;
    margin-left: -5px;
  }
  .cus_contact {
    margin-top: -25px;
    margin-left: 95px;
  }
  .cus_justify {
    text-align: center;
    margin-right: 40px;
    text-align: justify;
  }
  .mini {
    text-align: center;
    text-align: justify;
    margin-top: -175px;
  }
  .cus_getknow {
    margin-left: -20px;
    margin-top: 15px;
    text-align: justify;
  }
  .cus_more {
    margin-top: 20px;
    text-align: justify;
  }
}

/* Large Mobile / Phablet */
@media (min-width: 481px) and (max-width: 563px) {
  .cus_topTODownAllColumn {
    /*background-color: yellow;*/
  }
  .custom-height {
    min-height: 1158px; /* takes at least full screen */
    border-top-left-radius: 25% 8%;
    border-top-right-radius: 25% 8%;
    margin-top: -90px;
  }
  .footerAdjust {
    display: flex;
    justify-content: start;
    margin-top: 30px;
    margin-left: -5px;
  }
  .cus_contact {
    margin-top: -25px;
    margin-left: 75px;
  }
  .cus_justify {
    text-align: center;
    margin-right: 40px;
    text-align: justify;
  }
  .mini {
    text-align: center;
    text-align: justify;
    margin-top: -175px;
  }
  .cus_getknow {
    margin-left: -20px;
    margin-top: 15px;
    text-align: justify;
  }
  .cus_more {
    margin-top: 20px;
    text-align: justify;
  }
}
</style>
