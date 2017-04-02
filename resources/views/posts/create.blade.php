@extends ('layouts.master')


@section('content')

    <div class="col-sm-8 blog-main">

        <h1>  Create a post </h1>

        <form method='POST' action='/posts'>
            {{ csrf_field() }}

            @include('layouts.errors')

            <div class="form-group">
                <label for="exampleInputEmail1">Title:</label>
                <input type="text" class="form-control" id="title" name='title' >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body"  class="form-control" cols="30" rows="10" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>  
            </div>


        </form>

    </div>
@endsection



