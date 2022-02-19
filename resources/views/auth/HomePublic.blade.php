@extends('Layouts.header')
@section('title','Heladeria Juan')

@section('content')
<link rel="stylesheet" href="{{asset('../../css/HomeInactive.css')}}"></link>
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div id="containerPrincipal" class="p-3">
    <div class="" id="tabla1">
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($HomeInactive as $productos)
                <tr>
                    <td>{{ $productos->nombre }}</td>
                    <td>{{ $productos->precio}}</td>
                    <td>{{ $productos->descripcion}}</td>
                    <td>  <button type="button" class="btn btn-success">Comprar</button>
                    <button type="button" class="btn btn-primary">Editar</button>      </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()

@extends('Layouts.footer')
