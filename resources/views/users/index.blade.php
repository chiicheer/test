<div class="container">
    <h1>はっはー</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Company') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->name }}</a></td>
                        <td><a href="{{ url('users/'.$user->id) }}">{{ $user->company }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <br>
        <a href="/users/create" class="btn btn-primary">{{ Form::submit('Creatae', ['class'=>'btn btn-primary']) }}</a>
    </div>
</div>