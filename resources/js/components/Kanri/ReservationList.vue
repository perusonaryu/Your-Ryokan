<template> 
<div>
{{ReservationData}}
</div>
</template>

<script>
export default {
  data: () => ({
    ReservationData: '',
  }),
  methods: {
    getRyokanInfo() {
      axios
        .get('/api/ryokan')
        .then(res => {
          this.ReservationData = res.data;
          console.log(res.data);
        })
        .catch(err => {
          this.message = err;
        });
    },
  },
};
</script>

<style></style>
