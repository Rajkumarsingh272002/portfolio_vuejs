<script setup>
import Headers from './components/header.vue'
import footers from './components/footer.vue'
import home from './views/home.vue'
//import About from './views/About.vue'
import skill from './views/skill.vue'
import contact from './views/contact.vue'
import projects from './views/projects.vue'
//this is used toggle dark/white mode
import { ref, provide, watch, onMounted } from 'vue'
const isdark1 = ref(false)
provide('darkmode', isdark1)
watch(isdark1, (newVal) => {
  console.log('newVal are', newVal)
  if (newVal == true) {
    console.log('newval==false call')
    document.body.classList.add('darkmode')
    document.body.classList.remove('whitemode')
    //document.body.classList.toggle('darkmode', newVal)
  } else {
    document.body.classList.add('whitemode')
    document.body.classList.remove('darkmode')

    //document.body.classList.toggle('whitemode', newVal)
    console.log('newval==true call')
  }
})
</script>
<template>
  <Headers />
  <router-view />
  <!--<home />-->
  <!--<About />-->
  <!--<skill />-->
  <!--<projects />-->
  <!--<contact />-->
  <footers />
</template>

<style scoped>
body:global(.darkmode) {
  background-color: #121212;
  color: white;
  transition: all 0.3s ease-in-out;
}
:global(body.whitemode) {
  transition: all 0.3s ease-in-out;
  background-color: white;
}
</style>
