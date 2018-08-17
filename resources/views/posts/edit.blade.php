<div class="container">
    <h1>ブログ編集</h1>
    
    {!! Form::open(['url'=>['/posts', $post->id], 'method'=> 'POST'])!!}
    
    <div class="Form-group">
        {{ Form::Label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title']) }}
    </div>
<br>
    <div class="Form-group">
        {{ Form::Label('body', 'Body') }}
        {{ Form::textArea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Enter your blog']) }}
    </div> 

    {{ Form::hidden('_method', 'PUT')}}     
<br>
    {{ Form::submit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
</div>