@extends('layouts.index')

@section('content')
    <h1>DATA MATA KULIAH YANG DIAMPU</h1>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        th, td {
            padding: 10px; /* Adjust the padding as needed */
            border: 1px solid #ddd; /* Add border for better visibility */
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pengampu Matakuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Eka Yuniar</td>
                <td>Pemrograman Framework2</td>
                <td>2</td>
            </tr>
            <!-- Add more <tr> elements for additional rows if needed -->
        </tbody>
    </table>
    
@endsection
