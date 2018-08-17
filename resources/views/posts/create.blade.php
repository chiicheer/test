<div class="container">
    <h1>ブログ新規作成</h1>
    
    {!! Form::open(['url'=>'/posts', 'method'=> 'POST'])!!}
    
    <div class="Form-group">
        {{ Form::Label('title', 'Title') }}
        {{ Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title']) }}
    </div>
<br>
    <div class="Form-group">
        {{ Form::Label('body', 'Body') }}
        {{ Form::textArea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body']) }}
    </div>      
<br>
    {{ Form::submit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
</div>