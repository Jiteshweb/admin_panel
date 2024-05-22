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
<h1>Images</h1>
<table style="width:100%">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image File</th>
                <th>Image</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $image->imagefile }}</td>
                    @if ($image->usertype_id === '1')
                        {
                        <td>
                            <img src="{{ asset('storage/admin_img/' . $image->imagefile) }}" alt="Image"
                                style="max-width: 200px; max-height: 200px;">
                        </td>
                        }
                    @else{
                        <td>
                            <img src="{{ asset('storage/img/' . $image->imagefile) }}" alt="Image"
                                style="max-width: 200px; max-height: 200px;">
                        </td>
                        }
                    @endif
                    <td>
                        <form method="POST" action="{{ url('imagedelete/' . $image->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs py-0 text-danger">Delete</button>
                        </form>
                        <button class="btn btn-danger btn-xs py-0 text-danger"><a
                                href="{{ url('editimage/' . $image->id) }}">Update</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
