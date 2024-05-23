<!-- profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Perfil de Usuario</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar Perfil</a>
        </div>
    </div>
</div>
@endsection

