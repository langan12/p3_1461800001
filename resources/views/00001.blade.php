<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data pegawai</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 2px solid #ddd;
        }
        thead {
        background-color: red;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: black;
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
  <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('mahasiswa.create') }}"> tambah data </a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nim</th>
                <th>nama pegawai</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($pegawai as $pgw)
                
           
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pgw-->nbi }}</td>
                <td>{{ $pgw-->nama_mhs }}</td>
                <td> 
                    <a href="#"> Edit</a>
                    <a href="#">hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

</body>

  