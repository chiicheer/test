<div class="container">
    <h1>新規作成</h1>
    
    {!! Form::open(['url'=>'/users', 'method'=> 'POST'])!!}

    <table class="table table-striped">
    <tr>    
    <div class="Form-group">
        <td>{{ Form::Label('name', 'Name') }}</td>
        <td>{{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name']) }}</td>
    </div>
    </tr>

    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('company', 'Company') }}</td>
        <td>{{ Form::text('company', '', ['class'=>'form-control', 'placeholder'=>'Company']) }}</td>
    </div>
    </tr>

    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('email', 'Email') }}</td>
        <td>{{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Email']) }}</td>
    </div>
    </tr>
    
    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('password', 'Password') }}</td>
        <td>{{ Form::text('password', '', ['class'=>'form-control', 'placeholder'=>'Password']) }}</td>
    </div>
    </tr>
    
    </table>          

    {{ Form::submit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
</div>