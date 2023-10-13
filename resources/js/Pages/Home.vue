<template>
    <header style="border: 1px solid black; text-align: center;">
      <Link style="margin-right: 20px; text-decoration: none; color: black;" href="\Home">Anasayfa</Link>
      <Link style="margin-right: 20px; text-decoration: none; color: black;" href="\Education">Okullar</Link> 
      <Link style="margin-right: 20px; text-decoration: none; color: black;" href="\Programming">Programlama Dilleri</Link>
    </header>
    <h1>Hello World!</h1>
    <Link  href="/Programming" method="get" as="button" type="button">Logout</Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
</script>