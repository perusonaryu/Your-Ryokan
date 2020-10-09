<template>
  <div>
    
    <v-container>
      <h1 style="text-align:center;">御予約状況</h1>
      <v-row>
        <v-col cols="12">
          <v-data-table :headers="headers" :items="ReservationData">
            <!-- <template v-slot:item.delete="{item}">
          <v-btn
            small
            color="error"
            @click="deleteItem(item)"
          >
            delete
          </v-btn>
        </template> -->
          </v-data-table>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
    headers: [
      {
        text: 'ID',
        value: 'id',
      },
      {
        text: 'お客様名',
        value: 'name',
      },
      { text: 'メールアドレス', value: 'email' },
      { text: '電話番号', value: 'phone' },
      { text: '訪問期間', value: 'visit_duration' },
      { text: 'お部屋', value: 'room' },
      { text: '旅館ID', value: 'ryokan_id' },
      // {
      //   text:'削除',
      //   value:'delete',
      //   sortable:false
      // }
    ],
    ReservationData: [],
  }),
  mounted() {
    this.getReservation();
  },
  methods: {
    getReservation() {
      axios
        .get('/api/reservation')
        .then((res) => {
          this.ReservationData = res.data;
          console.log(res.data);
        })
        .catch((err) => {
          this.message = err;
        });
    },
  },
};
</script>

<style></style>
