@extends('layouts.app')

{{-- /*

 ______     __     ______     ______   ______     __  __     ______
/\  == \   /\ \   /\  ___\   /\__  _\ /\  __ \   /\ \/ /    /\  __ \
\ \  __<   \ \ \  \ \___  \  \/_/\ \/ \ \  __ \  \ \  _"-.  \ \  __ \
 \ \_____\  \ \_\  \/\_____\    \ \_\  \ \_\ \_\  \ \_\ \_\  \ \_\ \_\
  \/_____/   \/_/   \/_____/     \/_/   \/_/\/_/   \/_/\/_/   \/_/\/_/

    https://github.com/BisTaka
    https://duniacoder.com
    https://bistaka.github.com



*/ --}}
@section('content')
<br>
<div class="container">
    <div class="center">
        <h2>Dashboard {{ Auth::user()->name }}</h2>
    </div>
</div>
<br>
<div class="container">
    <div class="center">
        <h4>{{ $tips->tips }}</h4>
    </div>
    <br>
    <div class="center">
        <a class="btn light-blue lighten-1 modal-trigger" href="#modal4">Absen Yuk!</a>
    </div>
</div>
<br>
<div class="row container" id="coba1">
    <section>
        <div class="col s12 m6 l3">
            <div class="card center-align hoverable">
                <div class="card-content">
                    <i id="gmbrtensi" style="color: #ef5350;" class="fas fa-9x fa-heartbeat animated heartBeat delay-2s"></i>
                    <h6 class="">Tensi</h6>
                    <h5 class=""><span id="tensi1">{{ $userdata->tensi }}</span>/<span id="tensi2">{{ $userdata->tensi2 }}</span></h5>
                    <span>mmHg</span>
                    <p id="komentensi"></p>
                </div>
                <div class="card-action"><a href="#modal3" class="modal-trigger center">Riwayat</a></div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card center-align hoverable">
                <div class="card-content">
                    <i id="gmbr1" style="color: #2196f3;" class="fas fa-9x fa-weight animated jello delay-3s"></i>
                    <h6 class="">Berat Badan</h6>
                    <h5 id="berat_badan">{{ $userdata->berat_badan }}</h5><span>Kg</span>
                    <p class="center" id="komen"></p>
                </div>
                <div class="card-action"><a href="#modal2" class="modal-trigger center">Riwayat</a></div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card center-align hoverable">
                <div class="card-content">
                    <i style="color: #ba68c8;" class="fas fa-9x fa-arrows-alt-v animated tada delay-4s"></i>
                    <h6 class="">Tinggi Badan</h6>
                    <h5 id="tinggi_badan">{{ $userdata->tinggi_badan }}</h5><span>Cm</span>
                    <p>Anda Tumbuh Dengan Baik</p>
                </div>
                <div class="card-action center"><a href="#modal1" class="modal-trigger center">Riwayat</a></div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card center-align hoverable animated bounce delay-5s">
                <div class="card-content">
                    <h3 id="jam"></h3>
                    <h6 id="tanggal">Tutup</h6>
                </div>
            </div>
        </div>
    </section>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Riwayat Tinggi</h4>
            <table>
                <thead>
                    <th>No.</th>
                    <th>Tinggi Badan</th>
                    <th>Tanggal</th>
                </thead>
                <tbody>
                    @foreach ($riwayat as $history)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $history->tinggi_badan }}</td>
                        <td>{{ $history->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4>Riwayat Berat Badan</h4>
            <table>
                <thead>
                    <th>No.</th>
                    <th>Berat Badan</th>
                    <th>Tanggal</th>
                </thead>
                <tbody>
                    @foreach ($riwayat as $history)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $history->berat_badan }}</td>
                        <td>{{ $history->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <h4>Riwayat Tensi Darah</h4>
            <table>
                <thead>
                    <th>No.</th>
                    <th>Berat Badan</th>
                    <th>Tanggal</th>
                </thead>
                <tbody>
                    @foreach ($riwayat as $history)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $history->tensi }}/{{ $history->tensi2 }}</td>
                        <td>{{ $history->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <h4>Absen Dulu!</h4>
            <form action="{{ route('test.store') }}" method="POST">
                @method('post')
                @csrf
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="TekSis" type="number" class="validate" name="tensi">
                                <label for="TekSis">Tekanan Sistolik</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="TekDias" type="number" class="validate" name="tensi2">
                                <label for="TekDias">Tekanan Diastolik.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field col s12">
                                    <input id="BBin" type="number" class="validate" name="berat_badan">
                                    <label for="BBin">Berat Badan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field col s12">
                                    <input id="TBin" type="number" class="validate" name="tinggi_badan">
                                    <label for="TBin">Tinggi Badan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn light-blue lighten-1" type="submit">Absen!</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
</div>
@endsection
@push('javascript')
$(document).ready(function (){
    let tinggibadan = parseInt($('#tinggi_badan').text())
    let beratbadan = parseFloat($('#berat_badan').text())
    let index;
    let tb = parseFloat(tinggibadan/100)

    index = beratbadan / (tb * tb)
    index = index.toFixed(1)
    output = parseFloat(index)

    if (output < 18.5){
        $('#gmbr1').attr('style', 'color: #ffc107;')
        $('#komen').attr('style', 'color: #ffc107;')
        $('#komen').text('Anda Kekurusan')
    }
    if (output >= 18.5 && output < 23) {
        $('#gmbr1').attr('style', 'color: #42a5f5;')
        $('#komen').attr('style', 'color: #42a5f5;')
        $('#komen').text('Selamat Anda Sehat')
    }
    if (output >=23 && output < 30){
        $('#gmbr1').attr('style', 'color: #fbc02d;')
        $('#komen').attr('style', 'color: #fbc02d;')
        $('#komen').text('Anda Kegemukan')
    }
    if (output >= 30){
        $('#gmbr1').attr('style', 'color: #f44336;')
        $('#komen').attr('style', 'color: #f44336;')
        $('#komen').text('Anda Obesitas')
    }
    //tensi

    let tensi1 = parseInt($('#tensi1').text())
    let tensi2 = parseInt($('#tensi2').text())

    let check1 = tensi1 < 90 || tensi2 < 60
    let check2 = tensi1 >= 90 || tensi2 >= 60
    let check3 = tensi1 > 130 || tensi2 > 80
    if (check1){
        $('#gmbrtensi').attr('style', 'color: #fbc02d;' )
        $('#komentensi').attr('style', 'color: #fbc02d;' )
        $('#komentensi').text('Tekanan darah anda rendah, Periksa!')
    }
    if (check2){
        $('#gmbrtensi').attr('style', 'color: #42a5f5;')
        $('#komentensi').attr('style', 'color: #42a5f5;')
        $('#komentensi').text('Tekanan darah anda Normal')
    }
    if (check3){
        $('#gmbrtensi').attr('style', 'color: #f44336;')
        $('#komentensi').attr('style', 'color: #f44336;')
        $('#komentensi').text('Tekanan darah anda Tinggi, PERIKSA!')
    }
})

function waktu(){
    let jam = moment().format('HH:mm:ss')
    let tanggal = moment().format("DD-MMMM-YYYY")
    $('#jam').html(jam)
    $('#tanggal').html(tanggal)
}
setInterval(waktu, 1000);


@endpush
