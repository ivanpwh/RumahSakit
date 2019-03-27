<table class="table">
    <thead class="thead-dark">
        <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Tanda Pengenal</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $pasien)
            <tr>
            {{-- <th scope="row">{{$pasien->id}}</th> --}}
            <td>{{$pasien->nama}}</td>
            <td>{{$pasien->alamat}}</td>
            <td>{{$pasien->tglLahir}}</td>
            {{-- <td><a href="{{url('img')}}" class="btn btn-link">Image</a></td> --}}
            <td><img src="{{asset($pasien->file)}}" height="80"></td>
            <td>
                <a href="{{route('pasien.show', $pasien->id)}}" class="btn btn-success">Details</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
