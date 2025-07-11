<script setup>
import { onMounted } from 'vue'

//window.addEventListener('load', () => {
onMounted(() =>
  document.querySelectorAll('.bar-fill').forEach((bar) => {
    const target = parseInt(bar.getAttribute('data-fill'))
    let count = 0
    let width = 0

    const interval = setInterval(() => {
      if (width >= target) {
        clearInterval(interval)
        bar.textContent = target + '%'
      } else {
        width++
        bar.style.width = width + '%'
        bar.textContent = width + '%'
      }
    }, 20) // control animation speed
  }),
)
</script>
<template>
  <div class="container-fluid p-5 cus_littgap">
    <div class="bg-light-purple">
      <div class="d-flex pt-5">
        <!--Row1-->
        <!-- 1. Hero Section + 2. Profile Photo -->
        <section class="row g-5 cus_row1">
          <!--Technical Skill(Core)-->
          <div class="col-12">
            <div>
              <h1 class="fs-4 fw-bold">Technical Skill(Core)</h1>
              <hr />
            </div>
            <div class="">
              <p><strong>Languages: </strong>HTML, CSS, JavaScript, PHP, MySQL</p>
              <p>
                <strong>Framework: </strong> Vue.js3-composition-Api, Bootstrap, Pinia, Vue Router
              </p>
              <p><strong>Tools & Platforms: </strong> Git, GitHub, Axios, XAMPP, VS Code, WAMP</p>
            </div>
          </div>
          <!--Frontend Skills:-->
          <div class="col-12 cus_SkillCategory">
            <div class="">
              <h1 class="fs-4 fw-bold mt-5">Skills Categories</h1>
              <hr />
            </div>
            <div>
              <strong>🖥️Frontend Skills:</strong>
              <p class="mt-2">
                <span style="color: red">&#8594;</span>HTML, CSS, JavaScript, Bootstrap,
                Vue.js3-composition-Api, Pinia, Vue Router
              </p>

              <strong class="">🛠Backend: </strong>
              <p class="mt-2"><span style="color: red">&#8594;</span>PHP, MySQL, PHP API</p>
              <strong>📦Tools & Version Control: </strong>
              <ul class="list-unstyled mt-2">
                <li>
                  <span style="color: red">&#8594;</span> Git, GitHub, Axios, XAMPP, WAMP, VS Code
                </li>
              </ul>
            </div>
            <!-- Soft Skils-->
            <div class="col-12">
              <h1 class="fs-4 fw-bold mt-5">Soft Skils</h1>
              <hr xlass="hr2" />
              <p>✅ Problem Solving</p>
              <p>✅ Time Management</p>
              <p>✅ Team Collaboration</p>
              <p>✅ Adaptability</p>
            </div>
          </div>
        </section>

        <!--Row2-->
        <!--Progressbar_stars card-->
        <section class="row cust_row2">
          <h1 class="fs-4 fw-bold">Skill Rating</h1>
          <hr class="hr2" />
          <!--html-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fab fa-html5"></i><strong>HTML</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="85%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐⭐☆</div>
            </div>
          </div>
          <!--css-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fab fa-css3-alt"></i><strong>CSS</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="80%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐⭐☆</div>
            </div>
          </div>
          <!-- javascript-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg cus_javascipt">
              <i class="fab fa-js"></i><strong>JavaScript</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="65%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐⭐☆</div>
            </div>
          </div>
          <!--bootstrap-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg cus_boot">
              <i class="fab fa-bootstrap"></i><strong>Bootstrap</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="75%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐⭐☆</div>
            </div>
          </div>
          <!--vue.js-->
          <div class="col-md-6 col-sm-4 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fab fa-vuejs"></i><strong>vue.js 3</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="60%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--pinia-->
          <div class="col-md-6 col-sm-8 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-database"></i><strong>Pinia</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="50%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐☆☆☆</div>
            </div>
          </div>
          <!--pinia-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-route"></i><strong>Vue Router</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="55%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--php-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg cus_cardbg_php">
              <i class="fab fa-php"></i><strong>PHP</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="60%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--php-APi-->
          <div class="col-md-6 cus_col1 cus_phpapi">
            <div class="p-3 border rounded shadow-sm cus_cardbg">
              <i class="fas fa-code"></i><strong>PHP-API</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="55%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--MYSql-->
          <div class="col-md-6 cus_col1 cus_mysql">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-database"></i><strong>MySql</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="60%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--Git-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fab fa-git-alt"></i><strong>Git</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="50%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐☆☆☆</div>
            </div>
          </div>
          <!--Git Hub-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fab fa-github"></i><strong>GitHub</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="55%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--Axios-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-cloud"></i><strong>Axios</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="45%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐☆☆☆</div>
            </div>
          </div>
          <!--xampp-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-server"></i><strong>XAMPP</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="60%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
          <!--wampp-->
          <div class="col-md-6 cus_col1">
            <div class="p-3 border rounded shadow-sm mb-4 cus_cardbg">
              <i class="fas fa-server"></i><strong>WAMPP</strong>
              <!-- Progress bar -->
              <div class="progress mt-2">
                <div class="progress-bar bg-primary bar-fill" data-fill="55%">0%</div>
              </div>
              <!--star-->
              <div class="stars mt-2">⭐⭐⭐☆☆</div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>
<style scoped>
.bg-light-purple {
  background-color: #f7edff;
  margin-top: -95px;
  gap: 0px;
}

:root {
  --primary-color: #007bff;
  --bg-color: #fff;
  --text-color: #333;
  --bar-bg: #eee;
  --bar-fill: #007bff;
}
.cus_row1 {
  margin-left: 100px;
  padding: 30px;
  border-radius: 25px;
  width: 145%;
  background-color: #eef7fe;
  color: #000000;
  box-shadow: 5px 10px 20px red inset;
  margin-top: 2px;
}
hr {
  margin-top: 1%;
  height: 1px;
  background-color: #000000;
  border: none;
}
.cust_row2 {
  margin-left: 50px;
  margin-right: 100px;
  padding: 30px;
  border-radius: 25px;
  min-width: 40%;
  background-color: #fff;
  color: #000000;
  box-shadow: 5px 10px 20px red inset;
  min-height: 20%;
}
.hr2 {
  margin-top: -0.1rem;
  height: 0.1rem;
  background-color: #000000;
  border: none;
}

.cus_col2 {
  margin-top: -10px;
}
.cus_col2 :hover {
  transform: scale(1.02);
  transition: transform 0.3s ease;
}
.cus_col1 {
  margin-top: 2px;
}
.cus_col1 :hover {
  transform: scale(1.02);
  transition: transform 0.3s ease;
}
.cus_SkillCategory {
  margin-top: -430px;
}
.cus_cardbg {
  background-color: #eee;
}
.progress {
  background-color: red;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  height: 22px;
  color: white;
}
.stars {
  color: gold;
  font-size: 16px;
}
.progress-bar {
  transition: width 0.4s ease-in-out;
  font-weight: bold;
  text-align: right;
  padding-right: 10px;
}
@media (min-width: 1116px) and (max-width: 1313px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
}
@media (min-width: 1116px) and (max-width: 1313px) {
  .cust_row2 {
    margin-right: 6px;
    width: 50%;
  }
}
@media (min-width: 991px) and (max-width: 1115.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 80px;
    width: 50%;
  }
}
@media (min-width: 991px) and (max-width: 1115.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
}
@media (min-width: 965px) and (max-width: 990.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 110px;

    width: 50%;
  }
}
@media (min-width: 965px) and (max-width: 990.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
}
@media (min-width: 902px) and (max-width: 964.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 65px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -450px;
  }
}
@media (min-width: 902px) and (max-width: 964.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
}
@media (min-width: 873px) and (max-width: 901.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 65px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -450px;
  }
}

@media (min-width: 872px) and (max-width: 901.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }

  .cus_javascipt {
    height: 75%;
  }
  .cus_boot {
  }
}
@media (min-width: 838px) and (max-width: 871.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 65px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -450px;
  }
  .cus_col1 {
  }
}
@media (min-width: 838px) and (max-width: 872.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
}
@media (min-width: 825px) and (max-width: 837.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 65px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -450px;
  }
}
@media (min-width: 825px) and (max-width: 837.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
  }
}
@media (min-width: 775px) and (max-width: 824.98px) {
  .cus_row1 {
    margin-left: 6px;
    gap: 75px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -410px;
  }
}
@media (min-width: 775px) and (max-width: 824.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    margin-left: -13px;
    width: 18vw;
    margin-right: -1px;
  }
}
@media (min-width: 768px) and (max-width: 774.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -955px;
  }
}
@media (min-width: 768px) and (max-width: 774.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    width: 100vw;
  }
}
@media (min-width: 655px) and (max-width: 767.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -950px;
  }
}
@media (min-width: 655px) and (max-width: 767.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    width: 100vw;
  }
}
@media (min-width: 615px) and (max-width: 654.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -930px;
  }
}
@media (min-width: 615px) and (max-width: 654.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    width: 100vw;
  }
}
@media (min-width: 590px) and (max-width: 614.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -860px;
  }
}
@media (min-width: 590px) and (max-width: 614.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 200px;
    margin-left: -19px;
  }
}
@media (min-width: 563px) and (max-width: 589.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -820px;
  }
}
@media (min-width: 562px) and (max-width: 589.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 174px;
    margin-left: -19px;
  }
}
@media (min-width: 550px) and (max-width: 561.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -830px;
  }
}
@media (min-width: 550px) and (max-width: 561.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 172px;
    margin-left: -19px;
  }
}
@media (min-width: 538px) and (max-width: 549.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -780px;
  }
}
@media (min-width: 538px) and (max-width: 549.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 164px;
    margin-left: -19px;
  }
}
@media (min-width: 530px) and (max-width: 537.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -790px;
  }
}
@media (min-width: 530px) and (max-width: 537.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 159px;
    margin-left: -19px;
  }
}
@media (min-width: 521px) and (max-width: 529.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -790px;
  }
}
@media (min-width: 521px) and (max-width: 529.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 152px;
    margin-left: -19px;
  }
}
@media (min-width: 499px) and (max-width: 520.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -630px;
  }
}
@media (min-width: 499px) and (max-width: 520.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 152px;
    margin-left: -19px;
  }
}
@media (min-width: 481px) and (max-width: 498.98px) {
  .cus_row1 {
    margin-left: 6px;
    width: 50%;
  }
  .cus_SkillCategory {
    margin-top: -620px;
  }
}
@media (min-width: 481px) and (max-width: 498.98px) {
  .cust_row2 {
    width: 50%;
    margin-right: 6px;
  }
  .cus_cardbg_php {
    height: 85%;
  }
  .cus_javascipt {
    height: 85%;
  }
  .cus_col1 {
    min-width: 143px;
    margin-left: -19px;
  }
}
@media (min-width: 768px) and (max-width: 990.98px) {
  .cus_littgap {
    margin-top: 26px;
  }
}
</style>
