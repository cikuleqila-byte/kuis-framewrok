<html>
    <head></head>
    <body>
        <form method="POST" action="{{ url('/kategori/simpan') }}">
             @csrf

            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama"/></td>
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