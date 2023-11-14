@extends('home')
@section('content')
<div class="flex items-center justify-center h-screen">

<form class="w-full max-w-md mx-auto mt-10" method="post" action="{{route('login')}}">
@if($errors->has('email'))
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Erreur!</strong>
  <span class="block sm:inline">{{ $errors->first('email') }}</span>
</div>
@endif
	
@csrf
<h2 class="text-xl font-bold mb-6">Se connecter à votre compte</h2>
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@example.com">

  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Mot de passe</label>
    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="votre mot de passe">

  </div>
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" name="remember" type="checkbox" value="true" class="w-4 h-4 border border-gray-300 focus:ring-3 focus:ring-blue-300">
    </div>
    <div class="text-sm ml-3">
      <label for="remember" class="font-medium text-gray-900">rester connecté</label>
    </div>
    <a href="{{route('password.request')}}" class="text-sm text-blue-700 hover:underline ml-auto">mot de passe oublié?</a>
    <span class="text-sm ml-2 mr-1">ou bien </span> 
    <a href="{{route('register')}}" class="text-sm text-blue-700 hover:underline "> s'identifier</a>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-base px-5 py-3 w-full sm:w-auto">Se connecter</button>
</form>
</div>



@endsection
@section('title','connection')