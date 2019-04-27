
@extends('layouts/app')

@section('content')

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="fontlara" >Daftarkan Jasa</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                    @csrf
                        <div class="form-row">
                            <div class="name fontlara">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="name fontlara">Kategori</div>
                        <select name="Kategori">
    <option value="volvo">BABIK</option>
    <option value="saab">KAU</option>
    <option value="fiat">SON</option>
    <option value="audi">!!</option>
  </select>
  </div>

                        <div class="form-row">
                            <div class="name fontlara">Nama Jasa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="namajasa" placeholder="......">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name fontlara">Harga</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="harga" placeholder="......">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name fontlara">Deskripsi</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Deskripsi Data"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name fontlara">Upload Gambar</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your Picture or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Input</button>
                </div>
            </div>
        </div>
    </div>

    @endsection
