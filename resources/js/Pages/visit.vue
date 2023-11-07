<script setup>
import { useForm } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3';


 const form = useForm({
   email: null,
   first_name: null,
   last_name: null,
 })
// const form2 = useForm({
//   name: null,
//   avatar: null,
// })

// function submit() {
//   form2.post('/users')
  
// }
// function scroll(){
//   router.visit('/Education', {
//         preserveScroll: false,
//       })
// }
</script>

<template>
       <Head title="Form" />
  <form @submit.prevent="form.transform((data) =>({
    ...data,
    first_name: data.first_name.toUpperCase(),  // isim verisinin tün harflerini büyük harf yaparak veri tabanına ekler
  })).post('/users')">
    <!-- first_name -->
    <label for="first_name">First name</label>
    <input id="first_name" type="text" v-model="form.first_name">
    <div v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
    <!-- last_name  -->
    <label for="last_name">last name</label>
    <input id="last_name" type="text" v-model="form.last_name">
    <div v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
    <!-- email  -->
    <label for="email">Email</label>
    <input id="email" type="text" v-model="form.email">
    <div v-if="form.errors.email">{{ form.errors.email }}</div>
    <!-- submit  -->
    <button type="submit" :disabled="form.processing">Save</button>
  </form> 
  <!-- <button @click="scroll">Visit</button> -->
  <!-- <form @submit.prevent="submit">
    <input type="text" v-model="form2.name">
    <input type="file" @input="form2.avatar = $event.target.files[0]">
    <progress v-if="form2.progress" :value="form2.progress.percentage" max="100"> {{ form2.progress.percentage }}%</progress>
    <button type="submit">Submit</button>
</form> -->

</template>

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