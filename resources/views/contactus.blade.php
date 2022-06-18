@extends('user.layouts.app')

@section('content')
    <!-- Content page -->
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Pesan Tempat</h2>
                <p class="lead">Jika anda ingin berkunjung ke tempat kami silahkan lengkapi form di bawah ini. pastikan
                    data diri anda sesuai agar kami bisa menghubungi anda. Terimakasih</p>
            </div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Contact Person Kami</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Email</h6>
                                <small class="text-muted">asjdjakf@gmail.com</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Instagram</h6>
                                <small class="text-muted">@bandrekandaliman</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">whatsApp</h6>
                                <small class="text-muted">0812345678910</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>jika ingin berkunjung ke tempat kami anda bisa mengikuti rute google map yang kami
                                sediakan di bawah</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form action="{{ url('/reservation') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="namaanda" class="form-label">Nama Anda</label>
                                <input type="text" name="name" class="form-control" id="validationDefaultUsername" placeholder="" value=""
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Valid first nama is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Email Aktif</label>
                                <input type="email" name="email" class="form-control" id="lastName" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Valid last email is required.
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="typeNumber">No Hp/WA</label>
                                    <input type="number" name="phone" id="typeNumber" class="form-control" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid first No HP/WA is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="typeNumber">Nomor Meja</label>
                                    <input type="number" name="guest" id="typeNumber" class="form-control" placeholder="" value=""
                                        required>
                                    <div class="invalid-feedback">
                                        Valid nomor meja is required.
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">Tanggal Kedatangan</label>
                                        <input type="date" name="date"  class="form-control timepicker-input active" id="firstName"
                                            placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Valid first Tanggal Kedatangan is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Waktu tiba di tempat</label>
                                        <input type="time" name="time"  class="form-control" id="lastName" placeholder=""
                                            value="" required>
                                        <div class="invalid-feedback">
                                            Valid last is required.
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea name="message" class="form-control" id="form6Example7" rows="7"></textarea>
                                        <label class="form-label" for="form6Example7">Pesan</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" value="Save">Kirim Pesan</button>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <!-- Map -->
    <div class="map">
        <!-- <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div> -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5086.907373970723!2d98.71762905804279!3d2.3350194502143786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e252ebe3e90e9%3A0xf5b5c24020b9df4c!2sBandrek%20Andaliman!5e1!3m2!1sid!2sid!4v1654255804608!5m2!1sid!2sid"
            width="1349" height="550" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
