<h1>ブログページ</h1>
    @if(count($posts)>0)

        @foreach ($posts as $post)
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written On{{$post->created_at}}</small>

        @endforeach

    @endif
<br>
<br>

    <a href="/posts/create" class="btn btn-primary">{{ Form::submit('Creatae', ['class'=>'btn btn-primary']) }}</a>