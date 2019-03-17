<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">Usuarios</div>

          <div class="card-body">
            <ul v-for="item in list">
              <li>
                <router-link :to="{name: 'user', params: {id: item.id}}" v-text="item.email"></router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      list: []
    };
  },
  created() {
    let url = "/api/users";

    axios
      .get(url)
      .then(result => {
        this.list = result.data.users;
        console.log(this.list);
      })
      .catch(err => {
        console.log("Error", err);
      });
  }
};
</script>


