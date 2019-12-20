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
                    
                        <h1>All Posts</h1>
                        <ul class="list-group">
                        @foreach($data as $data)
                        <li class="list-group-item list-group-item-info">Posted by {{$data->name}} : {{$data->post_content}}
                            <li class="list-group-item list-group-item-info">Commented by {{$data->name}} : {{$data->comment_content}}
                                <div class="form-group">
                                    <label for="FormControlTextarea">Add a comment</label>
                                    <form class="form" name="comment_content" action="{{route('comment')}}" method="POST">
                                        @csrf
                                        <textarea class="form-content" name="comment_content" placeholder="Say something" required autocomplete="off" rows="1"></textarea>
                                    <br>
                                          <button type="submit" class="btn btn-primary" />Submit</button>
                                    </form> 
                                  </div>
                                </li> 
                            </li><br><br>
                            @endforeach
                        
                        
                       
                        
                        
                            
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
