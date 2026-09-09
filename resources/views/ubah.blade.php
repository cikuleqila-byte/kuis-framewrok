<html>
    <head>
        <title>Ubah Kategori</title>
    </head>
    <body>
        <h2>Ubah Kategori</h2>
        <form method="POST" action=" {{ url('/update-kategori') }}">
            @csrf
            @method('PUT')
            <input type ="hidden" name="id" value="{{$kategori->id}}">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" value="{{ $kategori->nama }}"></td>
                </tr>
                <tr>
                    <td><Deskripsi/td>
                    <td>
                        <textarea name="deksripsi">
                            {{$kategori->deskripsi}}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Simpan"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>