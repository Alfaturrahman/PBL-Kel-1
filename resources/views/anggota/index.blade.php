@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Anggota') }}</div>

                <div class="card-body">
                    
                    <a href="/anggota/create">ADD</a>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>No Anggota</th>
                                <th>Nama</th>
                                <th>Total Simpanan</th>
                                <th>Status</th>
                            </tr>
                            @foreach($anggota as $w)
                            <tr>

                                <td>{{$w->no_anggota}}</td>
                                <td>{{$w->nama}}</td>
                                <td>{{$w->total_simpanan}}</td>
                                <td>{{$w->Status}}</td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
                

               
            </div>
        </div>
    </div>
</div>
</div>
@endsection
