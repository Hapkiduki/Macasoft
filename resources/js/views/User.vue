  <template>
  <div>
    <h2 v-text="user.fullname"></h2>
    <span>Email: {{ user.email }}</span>
    <img
      :src="user.photo"
      class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
      alt
    >
  </div>
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

