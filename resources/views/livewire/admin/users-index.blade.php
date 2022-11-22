<div class="p-2">
    <div class="card ">
        {{-- CARD HEADER --}}
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        {{-- CARD HEADER --}}

        @if ($users->count())
            {{-- CARD BODY --}}
            <div class="card-body">
                {{-- TABLE --}}
                <table class="table table-striped">
                    {{-- TABLE HEAD --}}
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th></th>
                        </tr>
                    </thead>
                    {{-- TABLE HEAD --}}

                    {{-- TABLE BODY --}}
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <a href=" {{ route('admin.users.edit', $user) }} " class="btn btn-primary">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- TABLE BODY --}}
                </table>
                {{-- TABLE --}}
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros.</strong>
            </div>
        @endif

    </div>
</div>
