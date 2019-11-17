@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gider Ekle</div>

                    <div class="card-body">

{{--                        {{ $hesaplar }}--}}

                        <form method="post" action="{{ route('saveGider') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="ad" class="col-4 col-form-label">Gider Adı</label>
                                <div class="col-8">
                                    <input id="ad" name="ad" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="resmi_ad">Resmi Ad</label>
                                <div class="col-8">
                                    <input id="resmi_ad" name="resmi_ad" type="text" class="form-control"
                                           required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tarih" class="col-4 col-form-label">Tarih</label>
                                <div class="col-8">
                                    <input id="tarih" name="tarih" type="date" class="form-control" required="required" value="{{\Carbon\Carbon::now()->toDateString()}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hesap" class="col-4 col-form-label">Hesap</label>
                                <div class="col-8">
                                    <select id="hesap" name="hesap" class="custom-select" required="required">
                                        @foreach ($hesaplar as $hesap)
                                            <option @if ($hesap->varsayilan == 1) selected @endif value="{{ $hesap->id }}">{{ $hesap->hesap_adi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tutar" class="col-4 col-form-label">Tutar</label>
                                <div class="col-8">
                                    <input id="tutar" name="tutar" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="aciklama" class="col-4 col-form-label">Açıklama</label>
                                <div class="col-8">
                                    <textarea id="aciklama" name="aciklama" cols="40" rows="5"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
