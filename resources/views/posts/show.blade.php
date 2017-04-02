@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>  {{ $post->title }} </h1>

        {{ $post->body }}

        <hr>
        

        <div class="comments">
            <ul class="list-group">
                @foreach ( $post->comments as $comment)
                    <li class="list-group-item">
                    
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class='card'>
            <div class="card-block">
                <form method="POST" action='/posts/{{ $post->id }}/comments' >

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" id="" placeholder="Your comment here"
                         class="form-control"  cols="30" rows="10"></textarea>                    
                    </div>
                    
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>  
                    </div>

                </form>
            </div> 

        </div>
    </div>
@endsection