<template>
    <header style="list-style-type: none; margin: 0; padding: 20px; overflow: hidden; background-color: #333;position: fixed; top: 0px; width: 100%;">
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Home" replace>Anasayfa</Link>
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Education" preserve-scroll replace>Okullar</Link> 
      <Link style="margin-right: 20px; text-decoration: none; color: white;" href="\Programming" replace>Programlama Dilleri</Link>
    </header>
    <h1 style="margin-top: 100px;">Hello World!</h1>
    <Link  href="/Programming" method="get" as="button" type="button">Logout</Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
</script>
