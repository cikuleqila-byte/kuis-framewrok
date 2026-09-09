<html>
    <head>
        <title>Tambah Kategori</title>
    </head>
    <body>
         <h2>Tambah Kategori</h2>
        <form method="POST" action="{{ url('/kategori/simpan') }}">

            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama"/></td>
                </tr>
                <tr>
                    <td><Deksripsi/td>
                    <td>
                        <textarea name="deksripsi"></textarea>
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