<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
                {{-- menambahkan link tentang perusahaan --}}
                <a href="https://edi-indonesia.co.id/id/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                </a>
                {{-- menambahkan link produk perusahaan --}}
                <a href="https://edi-indonesia.co.id/id/products/" target="_blank"
                    class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                </a>
                {{-- menambahkan link berita perusahaan --}}
                <a href="https://edi-indonesia.co.id/id/news-events/" target="_blank"
                    class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    News
                </a>
                {{-- menambahkan link kontak perusahaan --}}
                <a href="https://edi-indonesia.co.id/id/contact-us/" target="_blank"
                    class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Contact Us
                </a>
            </div>
            @if (!auth()->user() || \Request::is('static-sign-up'))
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    {{-- menambahkan link twitter perusahaan --}}
                    <a href="https://x.com/ediindonesia" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                    </a>
                    {{-- menambahkan link instagram perusahaan --}}
                    <a href="https://www.instagram.com/ediindonesia/" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    {{-- menambahkan link youtube perusahaan --}}
                    <a href="https://www.youtube.com/@ptediindonesia" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-youtube" aria-hidden="true"></span>
                    </a>
                </div>
            @endif
        </div>
        @if (!auth()->user() || \Request::is('static-sign-up'))
            {{-- menambahkan copyright perusahaan --}}
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a style="color: #252f40;" href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">PT Electronic Data Interchange Indonesia</a>
                    </p>
                </div>
            </div>
        @endif
    </div>
</footer>
