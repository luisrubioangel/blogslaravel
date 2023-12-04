<div class="card">
    <div class="card-header">
        {{$searchs}}
        <input wire:model.live="search" class="form-control" placeholder="escribe lo que estas buscando" />
    </div>
    @if ($posts->count())


    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td with="10px"><a class="btn btn-primary btn-sm"
                            href="{{route('admin.posts.edit',$post)}}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">
                                Eliminar
                            </button>
                        </form>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @else
    <strong>no Existe ningun registro</strong>
    @endif
</div>
