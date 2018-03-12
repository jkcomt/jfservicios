@extends('master')

@section('content')
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
            <h3>Recarga Movil</h3>
            <hr>
            <table class="table table-sm table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Núm. Contacto</th>
                    <th scope="col">Operador</th>
                    <th scope="col">Núm. RPM</th>
                    <th scope="col">Estado de Servicio</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rpms as $rpm)
                    <tr>
                        <td>{{$rpm->cliente_nombre}}</td>
                        <td>{{$rpm->num_contacto}}</td>
                        <td>{{$rpm->operador}}</td>
                        <td>{{$rpm->num_rpm}}</td>
                        <td class="text-capitalize "><h5 class="badge badge-pill badge-warning">{{$rpm->estado_servicio}}</h5></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$recargas->links()}}
        </div>
    </div>
@endsection