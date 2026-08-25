@extends('layouts.app')
@section('title', 'Layanan Pengaduan - SDN Pendrikan Lor 02 Semarang')

@section('content')
<section class="section bg-white">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 class="section-title text-center" data-aos="fade-up">Layanan Pengaduan</h2>
        <p class="text-center text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Sampaikan keluhan, kritik, atau saran Anda demi kemajuan sekolah kita. Laporan Anda akan ditindaklanjuti secara profesional.</p>
        
        <div class="card" style="padding: 2.5rem; background-color: var(--surface); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); border-top: 5px solid var(--secondary);" data-aos="fade-up" data-aos-delay="200">
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
                <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div>
                        <label for="email" class="form-label">Email (Opsional)</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Alamat email Anda">
                    </div>
                    <div>
                        <label for="phone" class="form-label">No. Handphone (Opsional)</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="No. HP / WhatsApp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Isi Pengaduan / Pesan</label>
                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Jelaskan detail pengaduan atau pesan Anda..." required></textarea>
                </div>
                <button type="submit" class="btn btn-secondary" style="width: 100%; font-size: 1.1rem; padding: 1rem; border-radius: var(--radius-md);">Kirim Pengaduan</button>
            </form>
        </div>
    </div>
</section>
@endsection
