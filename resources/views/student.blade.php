<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudentData</title>
    <style>
        body{
            background-color:rgb(0, 24, 26);
        }
        .heading{
            display: flex;
            justify-content: center;
        }
        .heading h1{
            text-transform: uppercase;
            align-items: center;
            color: #ffffff;
            margin-top: 100px;
        }
        .heading span{
            color:rgb(45, 237, 255);
        }
        .data-table{
            padding: 40px;
            margin-top: 100px;
        }
        .student-data{
            color: #ffffffcf;
            display: flex;
            justify-content: center;
        }
        .student-data table{
            border: 2px solid rgb(45, 237, 255);
            padding: 70px;
            background-color: rgba(0, 65, 95, 0.759);
            border-radius:10px;
        }
        .student-data table td,th{
            border: 2px solid rgb(8, 35, 37);
            border-radius: 5px;
            padding: 5px;
        }
        .backToHome a{
            text-decoration: none;
        }
        .backToHome a button{
            border: 0;
            background-color:rgba(0, 65, 95, 0.759);
            color: rgb(45, 237, 255);
            font-size: 1.1em;
            font-weight: 500;
            padding: 15px 25px;
            margin: 50px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="backToHome">
        <a href="/students">
            <button>Back</button>
        </a>
    </div>

    <div class="heading">
        <h1>Data For <span>Student</span></h1>
    </div>

    <div class="data-table">
        <div class="student-data">
            <table>
                <thead>
                    <th>Name</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <td>{{$name}}</td>
                    <td>{{$city}}</td>
                    <td>{{$phone}}</td>
                    <td>{{$email}}</td>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
