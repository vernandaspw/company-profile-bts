<footer class="text-center text-muted" style="background-color: #1f1f1f;">
    <section class="pt-2">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-2">
                        <img class="bg-white rounded-pill" width="40" height="40"
                            src="{{ Storage::url($setting->logo) }}" alt="">
                        <span class="ms-2"
                            style="font-size: 12px; color: whitesmoke">{{ $setting->perusahaan }}</span>
                    </h6>
                    <p style="color: whitesmoke">
                        {{ $setting->singkat }}
                    </p>
                </div>

                {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >
                    <h6 class="text-uppercase fw-bold mb-4" style="margin-top: 10px" style="color: whitesmoke">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset text-decoration-none" style="color: whitesmoke">Indokargo</a>
                    </p>
                </div> --}}
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4" style="margin-top: 10px; color: whitesmoke">
                        Company
                    </h6>
                    <p>
                        <a href="#about" class=" text-decoration-none" style="color: whitesmoke">About</a>
                    </p>

                    <p>
                        <a href="#!" class="text-decoration-none" style="color: whitesmoke">Privacy &
                            Policy</a>
                    </p>
                    <p>
                        <a href="#!" class="text-decoration-none" style="color: whitesmoke">Terms &
                            Conditions</a>
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4" style="margin-top: 10px; color: whitesmoke">Contact</h6>
                    <p style="color: whitesmoke">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                        </svg> {{ $setting->alamat }}
                    </p>
                    <p>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg> --}}

                    </p>
                </div>
            </div>
        </div>
    </section>
    <span class="text-dark text-center" style="font-size: 12px">
        Copyright &copy; 2022 <a class="text-reset text-decoration-none fw-bold" href="{{ url('/') }}">Bintang
            Technology Solusindo</a>
    </span>

</footer>
