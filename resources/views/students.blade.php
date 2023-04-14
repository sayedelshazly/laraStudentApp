<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstApp</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        body{
            background-color:rgb(0, 24, 26);
        }
        .home-content{
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
        }
        .links{
            letter-spacing: 2px;
            background-color: rgba(0, 65, 95, 0.759);
            border-radius: 10px;
            width: 900px;
            padding: 15px 10px;
            margin-right: 150px;
        }
        .links hr{
            background-color: rgb(45, 237, 255);
            border-radius: 10px;
            width: 850px;
            padding: 5px;
            border: 0;
            margin: auto;
        }
        .header .nav-bar{
            background-color:  rgba(0, 65, 95, 0.759);
            border-radius: 10px;
            width: 300px;
            padding: 20px;
        }
        .header .nav-bar h1{
            color: rgb(45, 237, 255);
            text-transform: uppercase;
            margin-left: 30px;
        }
        .header .nav{
            width: 200px;
            margin: 50px 0 20px 20px;
            background-color:  rgba(0, 65, 95, 0.759);
            border-radius: 10px;
            letter-spacing: 2px;
            height: auto;
            padding: 30px;
        }
        .header .nav a{
            text-decoration: none;
            color: rgb(45, 237, 255);
            text-transform: uppercase;
        }
        .header .nav a ul li{
            list-style: none;
        }
        .home-title h1{
            text-transform: uppercase;
            text-align: center;
            color: #ffffff;
            margin-top: 250px;
            margin-right: 120px;
        }
        .home-title p{
            text-align: center;
            color: #ffffff;
            margin-right: 120px;
            margin-top: 20px;
        }
        .home-title span{
            color: rgb(45, 237, 255);
            text-transform: uppercase;
        }
        .footer{
            margin-top: 450px;
            color: #ffffffa2;
        }
        .footer span{
            color: rgb(45, 237, 255);
            font-size: 20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="home-content">
        <div class="header">
            <div class="nav-bar">
                <h1>STUDENTS</h1>
            </div>
            <div class="nav">
                @foreach ($students as $student)
                <a href='/students/{{ $student['id'] }}'>
                    <ul>
                        <li> {{ $student['name'] }}</li>
                    </ul>
                </a>
                    <br>
                @endforeach
            </div>
        </div>
        <div class="home-info">
            <div class="links">
                <hr>
            </div>
            <div class="home-title">
                <h1>Welcom in my first app with <span>Laravel</span></h1>
                <p>Project about search for the data of <span>students</span> in your class</p>
                <div class="footer">
                    <p>Made by <span>SELSHAZLY-33</span></p>
                </div>
            </div>

        </div>


    </div>

</body>
</html>

