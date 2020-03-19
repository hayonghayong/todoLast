<template>
<v-app style="height:250px"
 >

  <v-card
    width="400"
    class="mx-auto"
  >
    <v-card-text margin-bottom="0">

    <v-container fluid
    style="padding-top:0;height:60px"
    >
    <v-row>
      <v-col 
      cols="30"
      style="padding-top:0;"
      >
        <v-row>
        <v-col
            cols="3"
            md="3"
             style="padding-top:15px;"
          >
        <v-btn
        icon
        @click="clear"
      >
      <v-icon x-large >
        mdi-trash-can-outline
      </v-icon>
      </v-btn>
      </v-col>

      <v-col
            cols="5"
            md="2"
            style="padding-top:0px;"
          >
      <v-switch 
      color= "pink lighten-1" v-model="switch1" :label="`スヌーズ `">
      </v-switch>
      </v-col>

      <v-col 
      cols="3"
      md="3"
      style="padding-top:10px;">
      <v-btn class="ma-2" outlined color="pink lighten-1">スタート</v-btn>
      </v-col>
        </v-row>
      </v-col>
        </v-row>

  </v-container>
  
      <v-select
        v-model="selection"
        :items="todos"
        prepend-icon="mdi-clipboard-check-multiple-outline"
        label="to doを選択"
        style="padding-top:0;"
      >

      </v-select>

      <v-select
        v-model="time"
        :items="times"
       prepend-icon="mdi-bell-check-outline"
        label="タイマー時間を選択"
      ></v-select>


    </v-card-text>
  </v-card>

  </v-app>
</template>

<script>
  export default {
    data: () => ({
      selection: [],
      todos: [],
      time: [],
      times: ['5分', '10分', '15分', '20分'],

      switch1: true,
      }),
    
     methods: {

    clear: function (selection) {
      selection.val("");
    },

    fetchTodos: function(){
      axios.get('/api/get')
      .then(res=>{
        console.log(res)
        this.todos = res.data
      })
    },
    },
    
    created() {
    this.fetchTodos()
  },
  }
</script>

