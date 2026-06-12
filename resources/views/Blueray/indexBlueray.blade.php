@extends('template')

@section('title', 'Data Blueray')

@section('konten')

    <h2>Data Blueray</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ url('/blueray/create') }}">Tambah Blueray</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Blueray</th>
            <th>Merk Blueray</th>
            <th>Stock Blueray</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($bluerays as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kodeblueray }}</td>
                <td>{{ $item->merkblueray }}</td>
                <td>{{ $item->stockblueray }}</td>
                <td>
                    @if($item->tersedia == 'Y')
                        Tersedia
                    @else
                        Tidak Tersedia
                    @endif
                </td>
                <td>
                    <a href="{{ url('/blueray/'.$item->kodeblueray.'/edit') }}" class="btn btn-warning">
                        Edit
                    </a>

                    <form action="{{ url('/blueray/'.$item->kodeblueray) }}"
                          method="POST"
                          style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data blueray.</td>
            </tr>
        @endforelse
    </table>

@endsection
