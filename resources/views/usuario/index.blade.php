@section('main')

<h1>All Users</h1>

<p>{{ link_to_route('usuario.create', 'Adicionar usuario') }}</p>

@if ($lista_usuarios->count())
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Senha</th>
            <th>Email</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lista_usuarios as $user)
        <tr>

            <td>{{ $user->senha }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->nome }}</td>
            <td>{{ link_to_route('usuarios.edit', 'Editar', array($user->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method'
                => 'DELETE', 'route' => array('usuarios.destroy', $user->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach

    </tbody>

</table>
@else
There are no users
@endif

@stop
