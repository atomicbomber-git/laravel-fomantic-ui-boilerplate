@extends('shared.layout')
@section('title', 'Login Page')
@section('content')

<div class="ui container">
    <div class="ui segment" style="width: 400px; margin: auto">
        <form method="POST" action="{{ route("login") }}" class="ui form">
            @csrf
            
            <div class="field{{ $errors->has("username") ? " error" : "" }}">
                <label> Nama Pengguna: </label>
                <input name="username" placeholder="Nama Pengguna" type="text">
                @error("username")
                <div class="ui pointing red basic label">
                    {{ $errors->first("username") }}
                </div>
                @enderror
            </div>

            <div class="field{{ $errors->has("password") ? " error" : "" }}">
                <label> Kata Sandi: </label>
                <input name="password" placeholder="Kata Sandi" type="password">
                @error("password")
                <div class="ui pointing red basic label">
                    {{ $errors->first("password") }}
                </div>
                @enderror
            </div>

           <div class="t-a:r">
              <button class="ui button primary">
                  <i class="sign in alternate icon"></i>
                  Masuk
              </button>
           </div>
        </form>
    </div>
</div>

@endsection