<template>
  <v-app 
  id="inspire"
   style= "height: 5px;"
   >
    <v-app-bar app color="pink lighten-1" dark>
    <v-layout justify-center>
      <v-toolbar-title 
      class="font-weight-black">
        <span>{{users.name}}</span>
        さんのtodo list
        </v-toolbar-title>
      </v-layout>
    </v-app-bar>
  </v-app>
</template>



<script>
  export default {
    data () {
      return{
      users:[],
    };
  },
  methods: {
    fetchUsers: function(){
      axios.get('/api/getUsers')
      .then(res=>{
        this.users = res.data
      })
    }
  },
    
    created() {
    this.fetchUsers()
  },
  };
  
</script>

