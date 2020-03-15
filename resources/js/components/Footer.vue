<template>
  <v-app
   style= "height: 10px;">
    <v-footer color="pink lighten-1" dark app>
    <v-layout wrap>

    <v-flex xs2.5 sm6 md4>
      <v-btn icon to="/home">
        <v-icon>
          mdi-home
        </v-icon>
      </v-btn>
      </v-flex>

      <v-flex xs2.5 sm6 md4>
      <v-btn icon to="/todoEdit">
        <v-icon>
          mdi-file-document-edit-outline
        </v-icon>
      </v-btn>
      </v-flex>

      <v-flex xs2.5 sm6 md4>
      <v-btn icon to="/usersEdit">
        <v-icon>
          mdi-account-edit
        </v-icon>
      </v-btn>
       </v-flex>

<v-flex xs2.5 sm6 md4>
      <v-btn icon>
        <v-icon 
        >mdi-email-outline
        </v-icon>
      </v-btn>
       </v-flex>

<v-flex xs2 sm6 md4>
      <v-btn icon>
      <v-icon>
        mdi-logout
      </v-icon>
      </v-btn>
       </v-flex>

       </v-layout>
    </v-footer>
  </v-app>
</template>