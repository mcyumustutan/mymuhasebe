@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Giderler </div>

                <div class="card-body">

                <div class="jumbotron">
                    Genel Toplam : {{$toplam}} 
                </div>

                <table class="table table-hover">
                <thead>
                <tr>
                    <th>Tarih</th>
                    <th>ad</th>
                    <th>resmi_ad</th>
                    <th>hesap</th>
                    <th>tutar</th>
                    <th>aciklama</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($giderler as $giderler)
                    <tr>
                        <td>{{$giderler['tarih']}}</td>    
                        <td>{{$giderler['ad']}}</td>
                        <td>{{$giderler['resmi_ad']}}</td>
                        <td>{{$giderler['hesap']['hesap_adi']}}</td>
                        <td>{{$giderler['tutar']}}</td>
                        <td>{{$giderler['aciklama']}}</td>
                    </tr>
                        
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
