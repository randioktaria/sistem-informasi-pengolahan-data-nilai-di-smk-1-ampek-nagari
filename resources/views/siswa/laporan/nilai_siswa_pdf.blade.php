<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
</head>
<body style="font-size: 16px;">

    <div style="text-align: center; font-size: 26px; color: red;">
        <b>SMKN 1 AMPEK NAGARI<b>
    </div>
    <div style="text-align: center; font-size: 16px; color: blue;">
        LAPORAN NILAI SISWA
    </div>

    <hr>

    <p>

    <table width="100%" cellpadding="3">
        <tr>
            <td width="10%">Nis</td>
            <td width="2%">:</td>
            <td width="30%">{{ $siswa->nis }}</td>
            <td width="20%">Bidang Keahlian</td>
            <td width="2%">:</td>
            <td>{{ $siswa->kelas->jurusan }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $siswa->nama }}</td>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td>{{ $ta->ta }}</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>{{ $siswa->kelas->kelas }}</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <p>

    <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr align="center">
            <th rowspan="2" width="4%">No</th>
            <th rowspan="2">Mata Pelajaran</th>
            <th colspan="2">Nilai</th>
        </tr>
        <tr align="center">
            <th>Pengetahuan</th>
            <th>Keterampilan</th>
        </tr>
            @php $no = 1;  @endphp
            @foreach($nilai as $mata_pelajaran => $nilai)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $mata_pelajaran }}</td>
            <td align="center">
                <b>
                    @if ($nilai['p'] == 0)
                            {{ '-' }}
                    @else
                        {{ $nilai['p'] }}
                    @endif
                </b>
            </td>
            <td align="center">
                <b>
                    @if ($nilai['p'] == 0)
                        {{ '-' }}
                    @else
                        {{ $nilai['k'] }}
                    @endif
                </b>
            </td>
        </tr>
            @endforeach
    </table>
</body>
</html>