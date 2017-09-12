@extends('layouts.reports')

@section('content')
<style>
    .table,
    .container
    {
        width: 90%;
    }
    th, td
    {
        text-align: center;
    }
</style>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Evento</th>
                <th>Fecha creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($report as $r)
            <tr>
                <td>{{ $r['identity']['display'] }}</td>
                <td>{{ $r['event']['key'] }}</td>
                <td>{{ $r['createdAt'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection