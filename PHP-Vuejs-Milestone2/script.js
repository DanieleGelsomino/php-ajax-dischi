// console.log("js ok!");

const app = new Vue({
  el: "#app",
  data() {
    return {
      dataDischi: [],
    };
  },
  mounted() {
    console.log("test");
    axios
      .get(
        "http://localhost:8888/php-ajax-dischi/PHP-Vuejs-Milestone2/api_disc.php"
      )
      .then((response) => {
        this.dataDischi = response.data;
        console.log(this.dataDischi);
      })
      .catch((error) => console.log(error));
  },
});
