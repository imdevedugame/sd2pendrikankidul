@extends('layouts.app')
@section('title', 'Kontak Kami - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Hubungi Kami</h2>
        
        <div class="about-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
            <!-- Kolom Kiri: Informasi Kontak & Peta -->
            <div data-aos="fade-right">
                <h3 class="mb-3" style="font-size: 1.5rem;">Informasi Kontak</h3>
                <div style="background: var(--background); padding: 2rem; border-radius: var(--radius-lg); margin-bottom: 2rem;">
                    <p class="text-muted mb-3" style="display: flex; align-items: flex-start; gap: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary)" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        <span><strong>Alamat:</strong><br> {{ isset($schoolProfile) ? $schoolProfile->address : 'Alamat Belum Diatur' }}</span>
                    </p>
                    <p class="text-muted mb-3" style="display: flex; align-items: center; gap: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary)" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                        <span><strong>Telepon:</strong><br> {{ isset($schoolProfile) ? $schoolProfile->phone : 'Telepon Belum Diatur' }}</span>
                    </p>
                    <p class="text-muted" style="display: flex; align-items: center; gap: 1rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary)" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
                        <span><strong>Email:</strong><br> {{ isset($schoolProfile) ? $schoolProfile->email : 'Email Belum Diatur' }}</span>
                    </p>
                </div>
                
                <h3 class="mb-2" style="font-size: 1.5rem;">Lokasi Kami</h3>
                <div style="width: 100%; height: 350px; background-color: var(--border); border-radius: var(--radius-md); overflow: hidden; display: flex; align-items: center; justify-content: center; color: var(--text-muted); box-shadow: var(--shadow-md);">
                    @if(isset($schoolProfile) && $schoolProfile->map_iframe)
                        {!! $schoolProfile->map_iframe !!}
                    @else
                        [Peta Google Maps Belum Diatur]
                    @endif
                </div>
            </div>

            <!-- Kolom Kanan: Formulir Pengaduan -->
            <div data-aos="fade-left">
                <h3 class="mb-3" style="font-size: 1.5rem;">Kirim Pesan / Pengaduan</h3>
                <div class="card" style="padding: 2.5rem; background-color: var(--surface); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); border-top: 5px solid var(--secondary);">
                    @if(session('success'))
                        <div style="background-color: #d1fae5; color: #065f46; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('pengaduan.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email (Opsional)</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Alamat email Anda">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">No. Handphone (Opsional)</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="No. HP / WhatsApp">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Isi Pengaduan / Pesan</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Jelaskan detail pengaduan atau pesan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary" style="width: 100%; font-size: 1.1rem; padding: 1rem; border-radius: var(--radius-md);">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
