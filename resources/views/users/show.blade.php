@extends('layout')

@section('content')
  <div class="row col-centered">
    @if($user->isCurrentAuth())
      <a class="btn btn-primary" href="/talents/{{ $user->id }}/edit">Edit Profile</a>
      <a class="btn btn-primary" href="/talents/{{ $user->id }}/invitations">Invitations</a>
    @endif
    @if(Auth::user() && !$user->isCurrentAuth())
      <a class="btn btn-primary" href="/talents/{{ $user->id }}/chat">Chat with this talent</a>
      <a class="btn btn-primary" href="/talents/{{ $user->id }}/recruit">Recruit for one project</a>
    @endif
  </div>
  <br>

  <div class="row col-centered">
    <img class="img-circle image-256"
      @if($user->image)
        src="{{$user->image}}"
      @else
        src="{{asset('assets/images/default_profile.png')}}"
      @endif
      alt="User profile">
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      {{$user->name}}
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      {{$user->email}}
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      {{$user->last_name}}
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      {{$user->first_name}}
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Talent Description</label>
    <div class="col-sm-10">
      {{$user->talent_description}}
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Languages</label>
    <div class="col-sm-10">
      @foreach($user->languages as $language)
        {{$language->name}},
      @endforeach
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Skills</label>
    <div class="col-sm-10">
      @foreach($user->general_skills as $skill)
        {{$skill->name}},
      @endforeach
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Website</label>
    <div class="col-sm-10">
      <a href="{{$user->website}}">{{$user->website}}</a>
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">GitHub</label>
    <div class="col-sm-10">
      <a href="{{$user->github}}">{{$user->github}}</a>
    </div>
  </div>

  <div class="row">
    <label class="col-sm-2 control-label">Stack Overflow</label>
    <div class="col-sm-10">
      <a href="{{$user->stack_overflow}}">{{$user->stack_overflow}}</a>
    </div>
  </div>

@endsection
