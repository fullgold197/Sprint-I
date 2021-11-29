@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h4>Editar usuarios</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('usuario.update',$usuarios->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Usuario</label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="20"
                        @if($errors->any())
                        value="{{old('name')}}">
                        {{$errors->first('name')}}
                        @else
                        value="{{$usuarios->name}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required maxlength="50"
                        @if($errors->any())
                        value="{{old('email')}}">
                        {{$errors->first('email')}}
                        @else
                        value="{{$usuarios->email}}">
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-primary" value="Cancelar">
                        <a href="{{url('/admin/usuario')}}" class="btn btn-danger">Atrás</a>

                    </div>
                </form>
            </div>

        </div>

    </div>

</body>

</html>
@endsection
