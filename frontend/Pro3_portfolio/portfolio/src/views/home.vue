<script setup>
import { ref } from 'vue'
const githuburl = ref('https://github.com/Rajkumarsingh272002') //this we used into bootom in <li>-gitlink
const linkedurl = ref('https://www.linkedin.com/in/rksingh-fullstackwebdeveloper') //this is used middle
</script>
<template>
  <div class="container-fluid p-5">
    <div class="bg-light-purple">
      <!-- 1. Hero Section + 2. Profile Photo -->
      <section class="container">
        <!--image fresher-->
        <div class="imge d-flex justify-content-center">
          <img
            src="C:\Users\Rajkumar\Desktop\portfolio_folder\image_coding_atudent.jpg"
            class="rounded-4"
            alt="raj kumar singh"
          />
        </div>
        <h1 class="text-center text-black">
          Hi, I'm <span class="text-primary">Raj Kumar Singh</span>
        </h1>
        <h1 class="text-muted text-center fs-4 mt-2">Aspiring FullStack Web-Developer</h1>
        <!-- 3. Call-to-Action Buttons -->
        <div class="d-flex gap-3 justify-content-center">
          <!--linked in-->
          <router-link
            class="p-3 fs-6 mt-3 mb-2 badge rounded-pill text-bg-primary"
            :href="linkedurl"
            target="_blank"
            >linkedin</router-link
          >
          <!--github in-->
          <router-link
            class="p-3 fs-6 mt-3 mb-2 badge rounded-pill text-bg-primary"
            :href="githuburl"
            target="_blank"
            >GitHub</router-link
          >
          <router-link
            to="/project"
            class="p-3 fs-6 mt-3 mb-2 badge rounded-pill text-bg-primary"
            href="#"
            >See my project</router-link
          >
          <router-link
            to="/contact"
            class="p-3 fs-6 mt-3 mb-2 badge rounded-pill text-bg-primary"
            href="#"
            >contact me</router-link
          >
        </div>
      </section>

      <!-- 4. About Me -->
      <section class="container mb-5">
        <div class="mt-5">
          <h1 class="text-center fs-2 fw-bold text-black">About Me</h1>
          <p class="text-center fs-5 text-black">
            I am a passionate and self-motivated Frontend Web Developer with a solid understanding
            of web technologies like HTML, CSS, JavaScript, Bootstrap, and modern frontend
            frameworks such as Vue.js. I have hands-on experience using state management with Pinia,
            routing with Vue Router, and API integration using Axios. On the backend side, I am
            familiar with PHP and MySQL for building dynamic and data-driven applications. I also
            have experience in creating and consuming RESTful PHP APIs to enable smooth
            communication between the frontend and backend. Additionally, I use Git and GitHub for
            version control and collaborative development. I am eager to contribute to real-world
            projects, continuously improve my skills, and grow as a full-stack web developer.
          </p>
        </div>
      </section>

      <!-- 5. Social Icons -->
      <section class="container text-center mb-5">
        <a :href="githuburl" target="_blank" class="me-3">
          <i class="bi bi-github" style="font-size: 2rem"></i>
        </a>
        <a link="" target="_blank" class="me-3">
          <i class="bi bi-linkedin" style="font-size: 2rem"></i>
        </a>
        <a link="" target="_blank" class="me-3">
          <i class="bi bi-twitter" style="font-size: 2rem"></i>
        </a>
        <a link="" target="_blank" class="me-3">
          <i class="bi bi-instagram" style="font-size: 2rem"></i>
        </a>
        <a link="" target="_blank" class="me-3">
          <i class="bi bi-facebook" style="font-size: 2rem"></i>
        </a>
        <a link="" target="_blank" class="me-3">
          <i class="bi bi-youtube" style="font-size: 2rem"></i>
        </a>
      </section>

      <!--skill-->
      <section class="container text-center mb-5">
        <h1 class="fw-bold fs-3 text-black">My Tech full-stack</h1>
        <div class="fs-4 customize">
          <span class="badge text-bg-dark">HTML</span>
          <span class="badge text-bg-dark">CSS</span>
          <span class="badge text-bg-dark">JavaScript</span>
          <span class="badge text-bg-dark">Bootstrap</span>
          <span class="badge text-bg-dark">Vue.js3-Composition-Api</span>

          <span class="badge text-bg-dark">Pinia</span>
          <span class="badge text-bg-dark">Vue-Router</span>
          <span class="badge text-bg-dark">PHP</span>
          <span class="badge text-bg-dark">MySQL</span>

          <span class="badge text-bg-dark">Git & GitHub</span>
          <span class="badge text-bg-dark">Axios</span>
          <span class="badge text-bg-dark">xampp</span>
          <span class="badge text-bg-dark">wamp</span>
        </div>
      </section>
      <!--download Resume-->
      <section class="container text-center">
        <a
          href="/asset/image/RajKumar_Singh_resume2.pdf"
          target="_blank"
          alt="resume"
          class="mb-5 btn btn-primary"
          >Download Resume</a
        >
      </section>
    </div>
  </div>
</template>
<style scoped>
.bg-light-purple {
  background-color: #f7edff;
  margin-top: -95px;
  gap: 0px;
  min-height: 100vh;
}
.imge img {
  margin: 5%;
}

.customize {
  display: flex;
  gap: 3px;
  flex-wrap: wrap;
  justify-content: center;
}
@media (min-width: 768px) {
  .container-fluid {
    margin-top: 26px;
    /* background-color: aquamarine; we chech here how this work on diff-2 size on screen*/
  }
}
@media (min-width: 991px) {
  .container-fluid {
    margin-top: 1px;
    /* background-color: aqua; we chech here how this work on diff-2 size on screen*/
  }
}
</style>
