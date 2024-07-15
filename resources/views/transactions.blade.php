@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid">

        <div class="card mx-auto" style="width: 40%">
            <div class="card-header bg-secondary text-white text-center btn bg-gradient-primary">
                Laporan Transaksi Kas
            </div>
            {{-- <form method="POST" action="{{ route('kas-besar') }}"></form> --}}
            <div class="card-body">
                <div class="form-group row mb-0 ">
                    <label for="lapKas" class="col-sm-3 col-form-label">Bulan</label>
                    <div class="col-sm-15">
                        <select class="form-control" name="bulan">
                            <option value="">Pilih Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group row mt-0">
                    <label for="lapKas" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-15">
                        <select class="form-control" name="tahun">
                            <option value="">Pilih Tahun</option>
                            <?php   $tahun = date('Y');
                              for($i=2024;$i<$tahun+5;$i++) {?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                {{-- <form method="POST" action="{{ route('kas-besar') }}"> --}}
                    <button style="width: 100%" type="submit" class="btn btn bg-gradient-primary">
                        <i">
                            Lihat Laporan Kas</i>
                    </button>
                </form>
            </div>
        </div>
        </form>
    </div>
@endsection
