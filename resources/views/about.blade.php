<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>


		@foreach($ortu as $data)<hr>
		Nama Ibu  : {{ $data->nama_ibu}}<br>
		Nama Ayah : {{ $data->nama_ayah}}<br>
		Nama anak :

		 @foreach($data->anak as $key)
		<li>{{ $key->nama}}<br>
		 @endforeach
		 <hr>
		 @endforeach

</body>
</html>