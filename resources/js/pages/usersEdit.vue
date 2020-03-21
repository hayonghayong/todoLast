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
        <v-text-field prepend-icon="mdi-account-circle" label="名前" v-model="users.name" />
        
        <v-text-field prepend-icon="mdi-email-outline" label="メールアドレス" v-model="users.email"/>
        
      </v-form>
      <div class="text-center">
       <v-btn class="ma-2" outlined color="pink lighten-1" @click="Update(users.id)">変更</v-btn>
      </div>
    </v-card-text>
  </v-card>

  </v-app>
</template>

<script>
  export default {
    data () {
      return{
				users:{
					name: '',
					email:''
				}
    };
  },
  methods: {
    fetchUsers: function(){
      axios.get('/api/getUsers')
      .then(res=>{
        this.users = res.data
      })
    },
    Update: function(users_id){
      axios.put('/api/update',{
        id:users_id,
        user:this.users
      })
      .then(res => {
        console.log(res);
      this.users=res.data.user
      })
    }
  },
    
    created() {
    this.fetchUsers()
  },
  };
  
</script>
