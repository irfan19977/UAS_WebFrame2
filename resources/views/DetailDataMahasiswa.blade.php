@extends('layouts.index')

@section('content')
@if ($post)
<table>
    <tr>
        <td>NIM</td>
        <td>KodeMatakuliah</td>
        <td>NamaMatkul</td>
        <td>SKS</td>
        <td>Semester</td>
    </tr>
    <tr>
        <td>{{ $post['NIM'] }}</td>
        {{-- <td>{{ $post['KodeMatkul'] }}</td>
        <td>{{ $post['NamaMatkul'] }}</td>
        <td>{{ $post['SKS'] }}</td>
        <td>{{ $post['Semester'] }}</td> --}}
    </tr>
</table>
@else
<p>post tidak ditemukan.</p>
@endif
@endsection

