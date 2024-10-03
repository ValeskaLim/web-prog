<div class="row">
  <div class="col-12">
    <div class="navbar navbar-expand-sm  navbar-dark bg-dark ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ route("admin.mahasiswa", $nilai=90)}}" class="nav-link {{$setActive}}">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a href="{{ route("admin.dosen", $nama="BINUS")}}" class="nav-link {{$setActive}}">Dosen</a>
        </li>
        <li class="nav-item">
          <a href="{{ route("admin.karyawan")}}" class="nav-link {{$setActive}}">Karyawan</a>
        </li>
      </ul>
    </div>
  </div>
</div>