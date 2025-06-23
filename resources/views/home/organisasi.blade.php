@extends('layouts.home')

@section('content')
    @include('layouts.navbar')

    
    <main class="main">

        <!-- Hero Section (tidak diubah sesuai permintaan) -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/profilsdn01.jpg') }}" alt="Profil SDN 01 Dororejo" data-aos="fade-in">
        </section>

<div class="tree">
  <!-- Kepala Sekolah -->
  <div class="box">Mugiyono, S.Pd<br><small>Kepala Sekolah</small></div>

  <div class="line-down"></div>

  <!-- Guru -->
  <div class="horizontal-line" style="width: 80%;"></div>

  <div class="level">
    <div class="box">Kasbi Suh. N, S.Pd<br><small>Guru</small></div>
    <div class="box">Supardi, S.Pd.SD<br><small>Guru</small></div>
    <div class="box">M. Arlon R. S, S.Pd<br><small>Guru</small></div>
    <div class="box">Martini, S.Pd<br><small>Guru</small></div>
    <div class="box">Ren Fathiyah, S.Pd<br><small>Guru</small></div>
    <div class="box">Reni Kurnia D.S, S.Pd<br><small>Guru</small></div>
    <div class="box">Arsyaudi Arfan, S.Pd<br><small>Guru</small></div>
    <div class="box">Sugiyono<br><small>Guru</small></div>
    <div class="box">Nail Rasyan, S.Pd<br><small>Guru</small></div>
    <div class="box">Roqiah, S.Pd<br><small>Guru</small></div>
    <div class="box">Umi Kalsum, S.Pd.I<br><small>Guru</small></div>
  </div>
</div>




@endsection