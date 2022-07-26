var app = new Vue({
  el: "#root",
  data: {
    url: "http://localhost:8888/php-ajax-dischi/Milestone-2/api.php",
    albumList: [],
  },
  methods: {
    getAlbum() {
      axios
        .get(this.url)
        .then((response) => {
          this.albumList = response.data;
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
  },
  mounted() {
    this.getAlbum();
  },
});
