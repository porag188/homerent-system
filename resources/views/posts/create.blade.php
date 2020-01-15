@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>'PostsController@store','method'=>'POST']) }}
  <div class="">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body text'])}}
  </div>
  <div class="">
    {{Form::select("size",['F' => 'Family', 'B' => 'Bacheler'], null,
             [
                "class" => "form-group",
                "placeholder" => "House Type"
             ])
           }}
           <div class="">
             {{Form::file("profile-image",
             [
                "class" => "form-group",
             ])
            }}

           </div>

  </div>
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}
</div>
@endsection
