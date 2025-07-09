<script setup>
import { inject, ref } from 'vue'
import { onMounted } from 'vue'
import { RouterLink } from 'vue-router'

const darkmodeselect = inject('darkmode')
console.log('from App', darkmodeselect)
</script>
<template>
  <div class="container-fluid p-5 query-4">
    <header>
      <div class="bg-light-purple">
        <div class="row g-0 frow">
          <!--subtitle-->
          <div class="col1 col-md-3 text-start fs-1 fw-bold p-3 custom_query2 query5">
            <p>Raj Kumar Singh</p>
          </div>
          <!--navigation-->
          <div class="col-md-5 p-3 naivigation_position">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 cunstom-nav">
                    <li class="nav-item">
                      <router-link to="/" class="nav-link active" aria-current="page" href="#"
                        >Home</router-link
                      >
                    </li>
                    <li class="nav-item">
                      <RouterLink to="/about" class="nav-link active" aria-current="page" href="#"
                        >About</RouterLink
                      >
                    </li>
                    <li class="nav-item">
                      <router-link
                        to="/Project"
                        class="nav-link active"
                        aria-current="page"
                        href="#"
                        >Project</router-link
                      >
                    </li>
                    <li class="nav-item">
                      <router-link to="/skills" class="nav-link active" aria-current="page" href="#"
                        >Skill</router-link
                      >
                    </li>
                    <li class="nav-item">
                      <router-link
                        to="/contact"
                        class="nav-link active"
                        aria-current="page"
                        href="#"
                        >Contact</router-link
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <!-- login create account-account dark-->
          <div class="col-md-4 border p-2 d-flex justify-content-center custom_query1">
            <button type="button" class="cus_val btn btn-primary h-50">login</button>
            <button type="button" class="btn btn-primary m-3">create Account</button>
            <!-- dark/light-->
            <!--
          <button
            class="border border-light rounded-pill fs-6 fst-italic px-2 "
            alt="..."
            @click="darkmodeselect = !darkmodeselect"
          >
            {{ darkmodeselect ? '☀️ Light Mode' : '🌙 Dark Mode' }}
          </button>
        -->
            <button class="border-0 custom-dark-light" @click="darkmodeselect = !darkmodeselect">
              <span v-if="darkmodeselect"
                ><i class="bi-moon"></i>
                <span class="border border-light border-1 rounded-pill fs-6 fst-italic px-2"
                  >Dark Mode</span
                ></span
              >
              <span v-else
                ><i class="bi bi-brightness-high-fill"></i>
                <span class="border border-light rounded-pill fs-6 fst-italic px-2"
                  >Light Mode</span
                ></span
              >
            </button>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>
<style scoped>
.bg-light-purple {
  background-color: #f7edff;
}
/* subtitle*/
.col1 {
  font-family: 'Brush Script MT', cursive;
  color: blue;
}
/* navigation*/
.cunstom-nav {
  font-weight: 600;
}
.cunstom-nav a:hover {
  color: blue;
  font-size: 18px;
  transition: 0.4s ease-in-out;
}

.cus_val {
  transform: translatey(47%);
}
.rounded-pill:hover {
  background-color: blue;
  font-size: 18px;
  color: white;
}
.custom-dark-light {
  background-color: #f7edff;
  color: black;
  font-weight: bold;
}

/* Tablet width styling */
@media screen and (min-width: 768px) and (max-width: 991px) {
  .custom_query1 {
    background: lightblue;
    font-size: 18px;
    flex-direction: column;
    gap: 6px;
    position: absolute;
    max-width: 25%;
    transform: translateX(246%);
  }

  .custom_query2 {
    width: 37%;
  }
  .naivigation_position {
    margin-left: 3%;
  }
  .query-4 {
    height: 350px;
  }
  .g-0 {
    min-height: 280px;
  }
  .bg-light-purple {
    width: 100%;
  }
}

@media screen and (min-width: 563px) and (max-width: 767px) {
  .custom_query1 {
    background-color: #f7edff;
    font-size: 18px;
    flex-direction: column;
    gap: 6px;
  }
}

@media only screen and (min-width: 491px) and (max-width: 562x) {
  .naivigation_position {
    position: absolute;
    left: 3.3rem;
    top: 120px;
    flex-direction: column;
    background-color: #f7edff;
    max-width: 24.1rem;
  }

  .custom_query1 {
    position: absolute;
    left: 40%;
    flex-direction: column;
    gap: 6px;
    max-width: 30%;
    max-height: 144px;
    transform: translateX(64%);
  }
}
@media only screen and (max-width: 992px) {
  .custom_query2 {
    width: 220px;
  }
}
</style>
