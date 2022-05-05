// console.log("js ok!");

const app = new Vue({
  el: "#app",
  data() {
    return {
      dataDischi: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/PHP-Vuejs-Milestone2/api_disc.php")
      .then((response) => {
        this.dataDischi = response.data;
        console.log(this.dataDischi);
      })
      .catch((error) => console.log(error));
  },
});
