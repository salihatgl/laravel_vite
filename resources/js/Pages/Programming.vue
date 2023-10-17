<template>
    <header style="list-style-type: none; margin: 0; padding: 20px; overflow: hidden; background-color: #333; position: fixed; top: 0px; width: 100%;">
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Home">Anasayfa</Link>
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Education">Okullar</Link> 
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Programming">Programlama Dilleri</Link>
    </header>
    <h1 style="margin-top: 100px;">Programlama Dilleri</h1>
    <p>HTML, CSS, C#, Laravel</p>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
</script>