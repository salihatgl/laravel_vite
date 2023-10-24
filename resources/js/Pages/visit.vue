<template>
  <form @submit.prevent="submit">
    <label for="first_name">First name:</label><br>
    <input id="first_name" v-model="form.first_name" /><br>
    <label for="last_name">Last name:</label><br>
    <input id="last_name" v-model="form.last_name" /><br>
    <label for="email">Email:</label><br>
    <input id="email" v-model="form.email" /><br>
    <button type="submit">Submit</button>
  </form>
</template>

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  first_name: null,
  last_name: null,
  email: null,
})

function submit() {
  router.post('/users', form)
}
</script>
<style>
form{
  padding: 20px;
    background-color:#f2f2f2;
    border: 1px solid #bebed6;
    width: 600px;
    max-width: 100%;
  display: inline-block;
  margin-left: 30%;
  margin-top:10%;
}
label{
font-size: medium;
}
input{
  width: 100%;
  padding: 10px 0px;
  margin-top: 10px;
  margin-bottom: 10px;
}
button{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
}
</style>