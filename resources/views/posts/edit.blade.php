@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) }}
  <div class="">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="">
    {{Form::label('body','Body')}}
    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body text'])}}
  </div>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}
  @include('footer.footer')
  <div class="page-footer font-small cyan darken-3">
  @yield('content')
  </div>

</div>
@endsection
