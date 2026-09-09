<html>
    <head></head>
    <body>
        <h2>Ubah Kategori</h2>
        <form method="POST" action="{{ url('/kategori/update') }}">
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="{{ $kategori->id }}">

    <table>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" value="{{ $kategori->nama }}"></td>
        </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
            </table>
        </form>
    </body>
</html>