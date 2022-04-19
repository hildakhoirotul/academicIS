<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KARTU HASIL STUDI</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        ul li {
            list-style: none
        }

        .wrap__page__title {
            text-align: center
        }

        .page__title {
            margin: 8px 0;
        }

        .title {
            margin: auto
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #141414;
            color: white;
        }

    </style>
</head>

<body>

    <div class="wrap__page__title">
        <h3 class="page__title">INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h3>
    </div>
    <hr>
    <div class="wrap__page__title">
        <h1>KARTU HASIL STUDI (KHS)</h1>
    </div>
    <ul>
        <li><strong>Name : </strong>{{$value->name}}</li>
        <li><strong>NIM : </strong>{{$value->nim}}</li>
        <li><strong>Class : </strong>{{$value->class->class_name}}</li>
    </ul>
    <table>
        <tr>
            <th><strong>Course</strong></th>
            <th><strong>SKS</strong></th>
            <th><strong>Semester</strong></th>
            <th><strong>Value</strong></th>
        </tr>
        @foreach($value->course as $crs)
            <tr>
            <td>{{ $crs ->course_name }}</td>
            <td>{{ $crs ->sks }}</td>
            <td>{{ $crs ->semester }}</td>
            <td>{{ $crs ->pivot->value }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
