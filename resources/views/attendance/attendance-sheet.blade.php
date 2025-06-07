<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance Sheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Employee Attendance Sheet</h2>
    <table>
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Date</th>
                <th>present</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendanceData as $attendance)
                <tr>
                    <td>{{ $attendance->emp_name }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->present }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
