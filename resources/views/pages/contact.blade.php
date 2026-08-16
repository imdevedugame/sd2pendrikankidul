@extends('layouts.app')
@section('title', 'Kontak Kami - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Hubungi Kami / Pengaduan</h1>
        
        <div class="about-content">
            <div>
                <h3 class="mb-3">Informasi Kontak</h3>
                <p class="text-muted mb-2"><strong>Alamat:</strong> Jl. Poncowolo Barat VIII No. 495, Semarang Tengah</p>
                <p class="text-muted mb-2"><strong>Telepon:</strong> (024) 3539427</p>
                <p class="text-muted mb-4"><strong>Email:</strong> sdpelor02@hotmail.com</p>
                
                <h3 class="mb-2">Lokasi Kami</h3>
                <div style="width: 100%; height: 300px; background-color: var(--border); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                    [Peta Google Maps dapat disematkan di sini]
                </div>
            </div>
            
            <div>
                <div class="card" style="padding: 2rem;">
                    <h3 class="mb-4">Kirim Pesan / Pengaduan</h3>
                    
                    @if(session('success'))
                        <div style="background-color: #d1fae5; color: #065f46; padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1rem;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
