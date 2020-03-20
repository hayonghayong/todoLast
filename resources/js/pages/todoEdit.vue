<template>
  <v-app style="height:0px">
    <v-card width="400px" class="mx-auto mt-5" v-for="item of items" v-bind:key="item.name">
      <v-card-title class="text-center">
      {{item.title}}
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

    <div class="text-center" style="margin-top:10%;">
    <span class="title">登録todo一覧</span>
    </div>

<div style="margin-top:10%;">
<v-simple-table>
<tr v-for="todo in todos" v-bind:key="todo.id">
  <!-- <td class="text-xs-center">{{ todo.id }}</td> -->
  <td class="text-left">
    <span class="title">{{ todo.name }} </span>
  </td>

  <td class="text-left">
    <v-icon @click="Delete(todo.id)">
    mdi-trash-can-outline
    </v-icon>
  </td>
</tr>
  </v-simple-table>
</div>

<v-card width="400px" class="mx-auto mt-5" v-for="time of times" v-bind:key="time.name">
      <v-card-title class="text-center">
      {{time.title}}
      </v-card-title>

      <v-container fluid style="padding-top:0;">
        <v-card-text style="padding-top:0;">
          <v-row>
            <v-col>
              <v-text-field :label="time.text" :prepend-icon="time.icon" v-model="snoozes"></v-text-field>

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
      ],
      times: [
        {
          title:"スヌーズ登録",
          text:"スヌーズ時間",
          icon:"mdi-watch-vibrate"
      },
      ],
      selected: [],
      todo: [],
      snoozes:[]
    }
  },
  methods: {
    fetchTodos: function(){
      axios.get('/api/get')
      .then(res=>{
        this.todos = res.data
      })
    },

    addTodo: function() {
      axios.post("/api/add", {
          name: this.todo
        })
        .then(res => {
          console.log(res);
          this.todos = res.data;
          this.todo = "";
        });
    },
    
    Delete: function(task_id){ 
    axios.post('/api/del',{
      id: task_id
    }).then((res)=>{
      this.todos = res.data
    })
    }
  },

    created() {
    this.fetchTodos()
  },
};
</script>