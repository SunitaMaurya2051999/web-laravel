@extends('frontend.layout.normal-main')

@section('normal-container')

<div class="container">
<div class="mt-4">
    <h5 class="text-center">SIGN UP</h5>
    <form class="mt-4 pt-4" method="POST" action="{{ url('/') }}/login-user">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="firstname" placeholder="First name">
                @error('firstname') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control" name="lastname" placeholder="Last name">
                @error('lastname') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email">
                @error('email') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <input type="text" class="form-control" name="city" placeholder="City">
                @error('city') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control" name="country" placeholder="Country">
                @error('country') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <input type="password" class="form-control" name="password" placeholder="Password">
                @error('password') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation') <span style="color:red;">  {{$message}} </span> @enderror
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
