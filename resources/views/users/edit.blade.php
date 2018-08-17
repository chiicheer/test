
    <h1>編集</h1>
    
    {!! Form::open(['url'=>['/users', $user-> id], 'method'=> 'POST']) !!}

    <table class="table table-striped">
    <tr>    
    <div class="Form-group">
        <td>{{ Form::Label('name', 'Name') }}</td>
        <td>{{ Form::text('name', $user-> name, ['class'=>'form-control', 'placeholder'=>'Name']) }}</td>
    </div>
    </tr>

    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('company', 'Company') }}</td>
        <td>{{ Form::text('company', $user-> company, ['class'=>'form-control', 'placeholder'=>'Company']) }}</td>
    </div>
    </tr>

    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('email', 'Email') }}</td>
        <td>{{ Form::text('email', $user-> email, ['class'=>'form-control', 'placeholder'=>'Email']) }}</td>
    </div>
    </tr>
    
    <tr>
    <div class="Form-group">
        <td>{{ Form::Label('password', 'Password') }}</td>
        <td>{{ Form::text('password', $user-> password, ['class'=>'form-control', 'placeholder'=>'Password']) }}</td>
    </div>
    </tr>
    
    </table>

    {{ Form::hidden('_method', 'PUT') }}          
    <br>
    {{ Form::submit('submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}