<template>
  <v-app>
    <v-card width="400px" class="mx-auto mt-5" v-for="item of items" v-bind:key="item.name">
      <v-card-title class="text-center" style="padding-top:0;">
        <h3>{{item.title}}</h3>
      </v-card-title>

      <v-container fluid style="padding-top:0;">
        <v-card-text style="padding-top:0;">
          <v-row>
            <v-col>
              <v-text-field :label="item.text" :prepend-icon="item.icon" v-model="todo"></v-text-field>

              <v-btn class="ma-2" outlined color="pink lighten-1" type="submit" @click="addTodo">登録</v-btn>
            </v-col>
          </v-row>
        </v-card-text>
      </v-container>
    </v-card>
  </v-app>
</template>


<script>
export default {
  data() {
    return {
      todos: [],
      items: [
        {
          title: "todo登録",
          text: "todo名",
          icon: "mdi-clipboard-check-multiple-outline"
        }
        // {title:"スヌーズ登録",text:"スヌーズ時間",icon:"mdi-watch-vibrate"},
      ],
      todo: []
    };
  },
  methods: {
    // fetchTodos: function(){
    //   axios.get('/api/get')
    //   .then(res=>{
    //     this.todos = res.data
    //   })
    // }

    addTodo: function() {
      axios
        .post("/api/add", {
          name: this.todo
        })
        .then(res => {
          console.log(res);
          this.todos = res.data;
          this.todo = "";
        });
    }
  }

  //   created() {
  //   this.fetchTodos()
  // },
};
</script>