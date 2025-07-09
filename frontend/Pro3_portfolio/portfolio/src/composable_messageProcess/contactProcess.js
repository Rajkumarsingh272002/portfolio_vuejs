import { ref, unref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

//const bigerr2 = ref('')  YE ME CONTACT.VUE SE DUGA  then pass karuga as a parameter into contactProcess()
//const bigdata = ref('') YE ME CONTACT.VUE SE DUGA  then pass karuga as a parameter into contactProcess()

function contactProcess(name, email, message, mobile, bigdata, bigerr2, onResetFunction) {
  const contactMessage = async () => {
    console.log('Full Name:', name)
    console.log('Email:', email)
    console.log('Message:', message)
    console.log('Mobile:', mobile)
    const form = {
      /*
      name: unref(name),
      email: unref(email),
      message: unref(message),
      mobile: unref(mobile), */

      name: unref(name),
      email: unref(email),
      message: unref(message),
      mobile: unref(mobile),
    }

    try {
      const res = await axios.post('http://localhost/Pro3_portfolio/messageApi.php', form)
      console.log('res.data', res.data)
      //  if (Array.isArray(res.data.response) && res.data.response.includes('message send successfully')) {
      if (res.data.response) {
        bigdata.value = res.data.response
        console.log('bigdata', bigdata.value)
        onResetFunction() // 🎯 Call the reset function
      } else if (res.data.errors) {
        bigerr2.value = res.data.errors
        console.log('bigerr', bigerr2.value)
      }
    } catch (err) {
      console.log('try error', err)
    }
  }
  return { contactMessage }
}
export { contactProcess }
