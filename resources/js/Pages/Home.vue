<template>
    <header>
      <Head title="Anasayfa" />
    <Link class="link" :class="{ 'active': $page.url === '/Home' }" href="\Home" replace>Anasayfa</Link>
    <Link class="link" :class="{ 'active': $page.url === '/Education' }" href="\Education" preserve-scroll replace>Okullar</Link>
    <Link class="link" :class="{ 'active': $page.url === '/Programming' }" href="\Programming"  replace>Programlama Dilleri</Link>
  </header>
    <h1 style="margin-top: 100px;">Hello World!</h1>
  <button @click="ManuelVisit">Visit</button>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3';

function ManuelVisit()
{
  router.get('/visit', {
  onBefore: (visit) => {false},
  onStart: (visit) => {},
  onProgress: (progress) => {},
  onSuccess: (page) => {},
  onError: (errors) => {},
  onCancel: () => {},
  onFinish: visit => {},
})
}



</script>
<style>
.link{
  margin-right: 20px;
  text-decoration: none;
  color: white;

}
header{
  list-style-type: none; 
  margin: 0; 
  padding: 20px; 
  overflow: hidden; 
  background-color: #333; 
  position: fixed; 
  top: 0px; 
  width: 100%;
}
.active
{
  background-color:white;
  color: #333;
  padding: 20px;
}
</style>
