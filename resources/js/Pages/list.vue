<script export>
export default {
  props: ['items'],
  // methods:{
  //   deleteRecord()
  //   {  if (confirm('Kaydı silmek istediğinize emin misiniz?')) {
  //       // Silme işlemini başlat
  //       Inertia.delete(`/list}`).then(() => {
  //         // Silme işlemi tamamlandığında başka bir sayfaya yönlendirme veya sayfa yeniden yükleme yapabilirsiniz
  //         Inertia.visit('/list');
  //       });
  //     }

  //   },
  // },
};
</script>
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: black;
  color: white;
}
</style>
<template>
  <table>
    <tr>
      <th>Ad</th>
      <th>Soyad</th>
      <th>E-mail</th>
      <!-- <th>İşlemler</th> -->
    </tr>
    <tr v-for="item in items">
      <td>{{ item.first_name }}</td>
      <td>{{ item.last_name }}</td>
      <td>{{ item.email }}</td>
      <!-- <td><button @click="deleteRecord" style="width: 80px; margin-top: 5px;">Delete</button></td> -->
    </tr>
  </table>
</template>