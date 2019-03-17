<template>
  <h2 v-text="user.fullname"></h2>

</template>

<script>
export default {
  props: ["id"],
  data() {
    return {
      user: {}
    };
  },
  created() {
    let url = "/api/users/" + this.id;
    axios
      .get(url)
      .then(result => {
        this.user = result.data.user;
        console.log(this.user);
      })
      .catch(err => {
        console.log("Error", err);
      });
  }
};
</script>

