@extends('layouts.index')

@section('content')
    <h1>KRS</h1>

    <table border="2">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="/datamahasiswa/{{  $post['NIM'] }}"> {{ $post['NIM'] }}</a></td>
                    <td>{{ $post['Nama'] }}</td>
                    <td>{{ $post['Jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
