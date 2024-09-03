@extends('layouts.dashboard')
@section('Option-Template')
<div class="container flex items-center justify-center">
    <div class="card mr-6" style="width: 18rem;">
        <img src="https://i.pinimg.com/474x/d2/e8/19/d2e8194349266a0b75368162e82341b6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Raw Email</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href={{route('email-template-raw')}} class="btn btn-primary w-full">Create</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://i.pinimg.com/474x/d2/e8/19/d2e8194349266a0b75368162e82341b6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">HTML Design</h5>
          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary w-full">Create</a>
        </div>
      </div>
</div>

@endsection