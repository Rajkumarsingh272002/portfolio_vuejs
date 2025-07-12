import { ref, unref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

//const bigerr2 = ref('')  YE ME CONTACT.VUE SE DUGA  then pass karuga as a parameter into contactProcess()
//const bigdata = ref('') YE ME CONTACT.VUE SE DUGA  then pass karuga as a parameter into contactProcess()

function contactProcess(name, email, message, mobile, bigdata, bigerr2) {
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
      //const res = await axios.post('http://localhost/Pro3_portfolio/messageApi.php', form)
      /*const res = await axios.post(
        'https://rksingh.infinityfreeapp.com/fresherPortfolio/messageApi.php',
        form,
      )*/
      // const res = await axios.post('http://localhost/Pro3_portfolio/messageApi.php', form)
      const res = await axios.post('http://localhost/Pro3_portfolio/messageApi.php', form)

      console.log('res.data', res.data)

      if (
        Array.isArray(res.data.response) &&
        res.data.response.includes(' message send successfully')
      ) {
        bigdata.value = res.data.response
        console.log('bigdata', bigdata.value)
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
/*
if (
  Array.isArray(res.data.response)
) {
  const successMsg = res.data.response.find((msg) =>
    msg.trim() === 'message send successfully'
  )

  if (successMsg) {
    bigdata.value = successMsg
    console.log('bigdata', bigdata.value)
    onResetFunction()
  }
}


🔎 find() method उस array element को return करता है जो सबसे पहले "message send successfully" match करता है
✅ msg.trim() इसलिए किया ताकि leading space (" message send successfully") remove हो जाए

🧾 2. Template में:
vue
Copy
Edit
<h1 class="fs-4 text-center mb-5 text-success" v-if="bigdata">
  {{ bigdata }}
</h1>
🧪 Final Output:
आपका UI अब सिर्फ ये दिखाएगा:

text
Copy
Edit
message send successfully
भले ही API response में और भी messages हों।


*/
