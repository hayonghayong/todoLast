@extends('layouts.app')

@section('content')
<?php 
$id = Auth::id();
echo($id);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div id="app">
                    <!-- <my-header></my-header>
        <RouterView/> 
      <my-footer> </my-footer> -->

      <router-link to="/todoEdit">todoEdit</router-link>
    <router-view/>


                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
