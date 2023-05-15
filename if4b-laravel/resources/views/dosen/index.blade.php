@extends('layout.main')

@section('content')
<div class="card">
  <div class="card-image">
    <img src="gambar-kartu.png" alt="Gambar Kartu">
  </div>
  <div class="card-content">
    <h2>Nama Lengkap</h2>
    <p>Alamat</p>
    <p>No. Telepon</p>
    <p>Email</p>
  </div>
</div>

<style>
.card {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;
  max-width: 500px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

.card-image {
  flex: 1;
  max-width: 150px;
  text-align: center;
  margin-top: 10px;
}

.card-image img {
  width: 100%;
}

.card-content {
  flex: 2;
  padding: 20px;
}

.card-content h2 {
  margin-top: 0;
  font-size: 24px;
  font-weight: bold;
}

.card-content p {
  margin: 0 0 10px 0;
  font-size: 18px;
}
</style>

@endsection
