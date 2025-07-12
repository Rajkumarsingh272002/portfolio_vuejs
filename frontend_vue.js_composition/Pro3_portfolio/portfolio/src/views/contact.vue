<script setup>
const bigdata = ref('')
const bigerr2 = ref('')
import { ref } from 'vue'
import { useForm } from 'vee-validate'
const { errors, values, defineField, handleSubmit } = useForm({
  validationSchema: yup.object({
    email: yup.string().email().required(),
    full_name: yup.string().required(),
    message: yup.string().required(),
    mobile: yup
      .string()
      .required('Mobile number is required')
      .matches(/^[6-9]\d{9}$/, 'Invalid Indian mobile number'),
  }),
})

import { contactProcess } from '@/composable_messageProcess/contactProcess'

// ✅ Step 3: Call contactProcess inside submitForm handler
const onSubmit = handleSubmit(() => {
  console.log('Full Name:', full_name.value)
  console.log('Email:', email.value)
  console.log('Message:', message.value)
  console.log('Mobile:', mobile.value)
  const { contactMessage } = contactProcess(
    full_name.value,
    email.value,
    message.value,
    mobile.value,
    bigdata,
    bigerr2, //ye jayega contact.vue me tab waha se ref banega. yaha par onSubmit() ke andar he islye ye globally ref nahi bana is reason se {{bigData}}-contact.vue-me (bigData) not instace crate
  )

  contactMessage() // ⬅️ Trigger the function with updated values
})

const [full_name, full_nameAttrs] = defineField('full_name')
const [email, emailAttrs] = defineField('email')
const [message, messageAttrs] = defineField('message')
const [mobile, mobileAttrs] = defineField('mobile')
import * as yup from 'yup'

//cleaer message
function clearMessage() {
  bigdata.value = ''
  bigerr2.value = ''
  full_name.value = ''
  email.value = ''
  message.value = ''
  mobile.value = ''
}
</script>
<template>
  <div class="container-fluid p-5 cus_formGap cus_littgap">
    <div class="bg-light-purple">
      <div class="row g-3 justify-content-center m-2">
        <div class="col-6 border border-3 border-secondary m-2">
          <div>
            <!--  <h1 class="fs-4 text-center mb-5 text-success" v-if="bigdata">{{ bigdata[4] }}</h1>-->
            <h1 class="fs-4 text-center mb-5 text-success" v-if="bigdata">{{ bigdata[4] }}</h1>
            <h1 class="fs-4 text-center mb-5 text-danger" v-else-if="bigerr2[0]">
              {{ bigerr2[0] }}
            </h1>
          </div>
          <form @submit.prevent="onSubmit" class="row g-3">
            <!--full name-->
            <div class="col-md-6 sm-col-12">
              <label for="inputEmail4" class="form-label">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="inputEmail4"
                v-model="full_name"
                v-bind="full_nameAttrs"
                placeholder="rajkumar singh"
              />
              <span v-if="errors.full_name" class="red_alert">{{ errors.full_name }}</span>
            </div>
            <!--email-->
            <div class="col-md-6 sm-col-12">
              <label for="inputemail" class="form-label">Email Address </label>
              <input
                type="email"
                class="form-control"
                id="inputemail"
                v-model="email"
                v-bind="emailAttrs"
                placeholder="vpsingh405@gmail.com"
              />
              <span v-if="errors.email" class="red_alert">{{ errors.email }}</span>
            </div>
            <div class="col-md-6 sm-col-12">
              <label for="inputAddress" class="form-label">Your Message</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                placeholder="1234 Main St"
                v-model="message"
                v-bind="messageAttrs"
              />
              <span v-if="errors.message" class="red_alert">{{ errors.message }}</span>
            </div>

            <div class="col-md-6 sm-col-12">
              <label for="inputAddress" class="form-label">Mobile Number</label>
              <input
                type="number"
                class="form-control"
                id="inputAddress"
                placeholder="1234 "
                v-model="mobile"
                v-bind="mobileAttrs"
              />
              <span v-if="errors.mobile" class="red_alert">{{ errors.mobile }}</span>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">
                <span> Submit </span>
              </button>
              &nbsp;&nbsp;&nbsp;<button
                type="button"
                @click="clearMessage"
                class="btn btn-primary cus_messageClear"
              >
                Message clear
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.red_alert {
  color: red;
}
.bg-light-purple {
  background-color: #f7edff;
  margin-top: -102px;
  gap: 0px;
  height: 400px;
}
.border-secondary {
  width: 450px;
  padding: 5px;
  border-radius: 10px;
  padding-top: 25px;
  color: black;
}
@media (min-width: 768px) and (max-width: 990px) {
  .bg-light-purple {
    margin-top: -76px;
  }
}
@media (min-width: 481px) and (max-width: 767px) {
  :deep(.bg-light-purple) {
    height: 620px;
  }
  :deep(.border-secondary) {
    width: 350px;
    padding: 5px;
    padding-top: 25px;
  }
}
@media (min-width: 768px) and (max-width: 990.98px) {
  .cus_littgap {
    margin-top: -1px;
  }
}
.cus_messageClear {
}
</style>
