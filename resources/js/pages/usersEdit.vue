<template>
  <v-app
  style="margin-top:100px;"
  >

  <v-card width="400px" class="mx-auto mt-5">
    
    <div class="text-center">
      <h3 class="font-weight-black">会員情報更新</h3>
    </div>
  

    <v-card-text>
      <v-form>
        <v-text-field prepend-icon="mdi-account-circle" label="名前" value='aaa'/>
        <span>{{users.name}}</span>
        
        <v-text-field prepend-icon="mdi-email-outline" label="メールアドレス" value='ここに入れたいです'/>
        <span>{{users.email}}</span>
      </v-form>
      <div class="text-center">
      <v-btn class="ma-2" outlined color="pink lighten-1">変更</v-btn>
      </div>
    </v-card-text>
  </v-card>

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
