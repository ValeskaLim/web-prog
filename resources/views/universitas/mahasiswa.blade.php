@extends('layout.master')

@section('contentLms')
<h1>Daftar Mahasiswa</h1>

{{-- <?php
  echo "<p>{$jurusan}</p>"
?> --}}

<h2>Jurusan: {{$jurusan}}</h2>

{{-- <?php echo date('d-M-Y'); ?> --}}
{{date('d-M-Y')}}

<h1>Nilai: {{$nilai}}</h1>


{{-- Condition --}}
@if ($nilai >= 0  && $nilai < 50)
  <h2 class="alert alert-danger d-inline-block">Tidak Lulus</h2>
@elseif ($nilai >= 50 && $nilai < 100)
  <h2 class="alert alert-success d-inline-block">Lulus</h2>
@else
  <h2 class="alert alert-dark d-inline-block">Tidak Valid</h2>
@endif

{{-- For  --}}
@for ($i = 0; $i < 5; $i++)
  <h3 class="alert alert-dark d-inline-block">{{$i}}</h3>
@endfor

<ul>
  {{-- Foreach --}}
  {{-- <?php
    foreach ($mahasiswa as $mhs){
      echo "<li>$mhs</li>";
    }
  ?> --}}

  {{-- @foreach ($mahasiswa as $mhs)
    <li>
      {{$mhs}}
    </li>
  @endforeach --}}


  {{-- Forelse --}}
  @forelse ($mahasiswa as $nama)
  <li>
    {{$nama}}
  </li>
  @empty
    <li>Data Tidak ada</li>
  @endforelse
</ul>


@endsection