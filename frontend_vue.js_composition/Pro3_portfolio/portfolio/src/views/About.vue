<script setup></script>
<template>
  <div class="container-fluid p-5">
    <div class="bg-light-purple cus_littgap">
      <section class="cus_shaw_text row container-fluid justify-content-center g-0 p-5">
        <div class="col-12 text-center ms-5 cus_mycolljour">
          <h1 class="mb-4">About Me</h1>
          <ul class="list-unstyled cus_li fs-4">
            <li>
              👋 My name is <strong>Raj Kumar Singh</strong>, a passionate and self-taught web
              developer.
            </li>
            <li>
              🎓 I have a strong foundation in <strong>HTML, CSS, JavaScript, Bootstrap</strong> and
              enjoy building user-friendly interfaces.
            </li>
            <li>
              ⚙️ I work with <strong>Vue.js3-composition-Api</strong> for frontend development, and
              use <strong>Vue Router</strong> and <strong>Pinia</strong> for routing and state
              management.
            </li>
            <li>
              🔌 I integrate APIs using <strong>Axios</strong> and build backend services using
              <strong>PHP & MySQL</strong>.
            </li>
            <li>
              🧠 I have experience creating and consuming <strong>RESTful PHP APIs</strong> to
              connect frontend and backend.
            </li>
            <li>
              🛠️ I use <strong>Git & GitHub</strong> for version control and collaborative
              development.
            </li>
            <li>
              🚀 I’m eager to contribute to real-world projects, learn from mentors, and grow into a
              full-stack developer.
            </li>
          </ul>
        </div>
      </section>
      <!--school education -->
      <section class="cus_shaw_text row container-fluid justify-content-center g-0 p-5">
        <div class="col-12 text-center ms-5 cus_mycolljour">
          <h1 class="mb-4 mt-2">My College Journey"</h1>
          <ul class="list-unstyled fs-4 cus_li2">
            <li class="mb-5">
              🎓 <strong>Bachelor of Computer Applications (BCA)</strong><br />
              <strong>IGNOU-(Indra Gandhi National Open University) – [ DEC-2010]</strong>
            </li>
            <li>
              🎓 <strong>POST GRADUCATE DIPLOMA IN WEB DESIGNING (PGDWD)</strong><br />
              <strong>GOVERNMENT POLYTECNIC LUCKNOW – [ FEB-2025]</strong>
            </li>

            <li>
              <div class="mt-5">
                <p>
                  My journey into the world of web development began with a strong academic
                  foundation. I completed my
                  <strong>Bachelor of Computer Applications (BCA)</strong> from
                  <strong>Indira Gandhi National Open University (IGNOU)</strong> in December 2010,
                  where I learned the basics of programming and computer science.
                </p>
                <p>
                  To further specialize in my interest, I enrolled in a
                  <strong>Post Graduate Diploma in Web Designing (PGDWD)</strong> from
                  <strong>Government Polytechnic, Lucknow</strong>, which I will complete by
                  <strong>February 2025</strong>. This course has sharpened my skills in modern web
                  technologies like <strong>HTML, CSS, JavaScript, Bootstrap</strong>, and
                  <strong>Vue.js3-composition-Api</strong>. I also gained practical experience in
                  backend technologies like <strong>PHP</strong> and <strong>MySQL</strong>.
                </p>
                <p>
                  During this journey, I’ve also worked on using tools like <strong>Pinia</strong>,
                  <strong>Vue Router</strong>, <strong>Axios</strong>, and practiced version control
                  with <strong>Git & GitHub</strong>. My college years have not only enhanced my
                  technical skills but also built my confidence to work on real-world web projects.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
</template>
<style scoped>
.bg-light-purple {
  background-color: #f7edff;
  margin-top: -95px;
  gap: 0px;
}
.cus_shaw_text {
  color: greenyellow;
  text-shadow:
    1px 1px 2px black,
    0 0 25px blue,
    0 0 5px darkblue;
}
.cus_li {
  text-align: justify;
  margin-left: 50px;
}
.cus_li li {
  margin: 15px;
}
@media (min-width: 481px) and (max-width: 563px) {
  .cus_mycolljour {
    width: 100%;
    margin-right: 45px;
  }
  .cus_li {
    margin-left: 5px;
  }
  .cus_li2 {
    padding: 3px;
  }
}
@media (min-width: 768px) and (max-width: 990.98px) {
  .cus_littgap {
    margin-top: -69px;
  }
}
</style>
