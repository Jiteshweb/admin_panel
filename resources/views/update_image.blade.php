<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    * {
        box-sizing: border-box;
    }
</style>
<h1><a href="{{ route('profile') }}">My Profile</a></h1>

<h1><a href="{{ route('imagedisplay') }}">My Images</a></h1>
<h2>Images</h2>
<form action="{{ url('imageupdate/' . $images->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Select image to upload:
    <input type="file" name="imagefile" id="fileToUpload">
    <table>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <td>
                    <img src="{{ asset('storage/admin_img/' . $images->imagefile) }}" alt="Image"
                        style="max-width: 200px; max-height: 200px;">
                </td>
            </tbody>
        </table>
        <input type="submit" value="Upload Image" name="submit" value="Search">
</form>
