
    <a href="/posts" class="btn btn-success">Back to posts</a>

    <h1>{{$post->title}}</h1>

    {!! $post->body !!}

    <hr class="bg-dark">

    <small>Written On{{ $post->created_at }}</small>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['url'=>['/posts', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
