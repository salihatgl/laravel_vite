<template>
    <header>
      <Head title="Programlar" />
    <Link class="link" :class="{ 'active': $page.url === '/Home' }" href="\Home"   replace>Anasayfa</Link>
    <Link class="link" :class="{ 'active': $page.url === '/Education' }" href="\Education"  replace>Okullar</Link>
    <Link class="link" :class="{ 'active': $page.url === '/Programming' }" href="\Programming"    replace>Programlama Dilleri</Link>
  </header>
    <h1 style="margin-top: 100px;">Programlama Dilleri</h1>
    <p>HTML, CSS, C#, Laravel</p>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
</script>