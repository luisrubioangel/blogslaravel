<div>
    <div class="card">
        <div class="card-header">
            <input wire:model.live='search' type="text" class="form-control" placeholder="ingrese el nombre o correo">
        </div>
        @if ($users->count())


        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td width=10px>
                            <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}"> Editar
                            </a>
                        </td>
                        {{-- <td>
                            <a class="btn btn-primary" href="{{route('admin.users.edit')}}"> Eliminar
                            </a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="caard-body">
            <strong>
                No hay registros ......
            </strong>
        </div>
        @endif
    </div>
</div>