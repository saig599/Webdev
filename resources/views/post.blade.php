@extends('layouts.app')
@section('content')
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
                    <div class="form-group">
                        <label for="FormControlTextarea">Content</label>
                        <form class="form" name="post_content" action="{{route('post')}}" method="POST">
                            @csrf
                            <textarea class="form-content" name="post_content" placeholder="Say something" required autocomplete="off"  rows="10"></textarea>
                        <br>
                              <button type="submit" class="btn btn-primary" />Submit</button>
                        </form> 
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
