@extends('layout.master')

@section('contentLms')
<?php echo "<h1>Dosen</h1>" ?>

        <ul>
          <?php
            foreach ($dosen as $dsn){
              echo "<li>$dsn</li>";
            }
          ?>
        </ul>
      
        <ul>
          <?php
            foreach ($jurusan as $jur) {
              echo "<li>$jur[nama] - $jur[jurusan]</li>";
            }
      
            echo "<br>";
            foreach ($jurusan as $jur) {
              echo "<li>".$jur["nama"]."-".$jur["jurusan"]."</li>";
            }
          ?>
        </ul>
  
@endsection