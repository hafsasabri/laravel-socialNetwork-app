@extends('layouts.master')

@section('title')
   welcome
@endsection


@section('content')
  @include('includes.message-block')
   <div class="row">
      <div class="col-md-6">
         <h3>Sign Up</h3>
         <form action="{{ route('signup') }}" method="post">
            @csrf
            <div class="form-group">
               <label for="email">Your E-mail</label>
               <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" >
               @if ($errors->has('email'))
                <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->get('email') as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div>
               @endif
            </div>
            <div class="form-group">
               <label for="first_name">Your First name</label>
               <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
               @if ($errors->has('first_name'))
                 <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->get('first_name') as $error)
                     <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                 </div>
               @endif
            </div>
            <div class="form-group">
               <label for="password">Your Password</label>
               <input class="form-control" type="password" name="password" id="password">
               
               @if ($errors->has('password'))
                 <div class="alert alert-danger">
                   <ul>
                    @foreach ($errors->get('password') as $error)
                     <li>{{ $error }}</li>
                    @endforeach
                   </ul>
                 </div>
               @endif
            </div>
            <button type="submit" class="btn btn-primary ">Submit </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" >
         </form>
      </div>
      <div class="col-md-6">
         <h3>Sign In</h3>
         <form action="{{ route ('signin')}}" method="post">
         @csrf
            <div class="form-group">
               <label for="email">Your E-mail</label>
               <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
               <label for="password">Your Password</label>
               <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" >
         </form>
      </div>
   </div>
@endsection