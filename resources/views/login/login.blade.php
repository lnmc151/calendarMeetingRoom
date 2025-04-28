<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: #000000;


            background-size: 400% 400%;
            animation: moveSky 100s linear infinite;
            perspective: 1000px;
            perspective-origin: bottom;
        }



        .login-container {
            position: relative;
            width: 90%;
            max-width: 500px;
            transform: translateZ(0);
            z-index: 1;
        }

        .login-box {
            position: relative;
            padding: 50px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            text-align: center;
            /* เพิ่มให้ข้อความและโลโก้อยู่ตรงกลาง */
            transform-style: preserve-3d;
            /* เพิ่มให้มีมิติ */
            perspective: 1000px;
            /* เพิ่ม perspective */
        }

        /* .login-box:hover {
            transform: translateY(-10px) rotateX(5deg);
        } */

        .login-box img {
            width: 120px;
            /* ขนาดของโลโก้ */
            height: auto;
            margin-bottom: 5px;
            /* ระยะห่างระหว่างโลโก้กับหัวข้อ */
            transform: translateY(-30px) rotateY(10deg);
            /* เพิ่มการหมุนและย้ายโลโก้ */
            transition: transform 0.3s ease;
            /* เพิ่มการเคลื่อนไหว */
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #333;
            text-align: center;
            position: relative;
        }

        .login-box h2:after {
            content: '';
            width: 50px;
            height: 4px;
            background: #3498db;
            /* สีของเส้นแบ่งหัวข้อ */
            display: block;
            margin: 10px auto;
            border-radius: 2px;
        }

        .login-box h4 {
            margin: 0;
            padding: 5px 0;
            text-align: center;
            color: #555;
            font-size: 14px;
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            background: transparent;
            border: none;
            outline: none;
            color: #333;
            font-size: 18px;
            border-bottom: 1px solid #333;
        }

        .input-group label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 15px 0;
            pointer-events: none;
            font-size: 18px;
            color: #333;
            transition: 0.5s;
            /* transition: all 0.7s ease; */
        }

        .input-group input:focus~label,
        .input-group input:valid~label {
            top: -20px;
            left: 0;
            color: #3498db;
            /* สีของเส้นขอบใน input */
            font-size: 12px;
        }

        button {
            width: 100%;
            background: #3498db;
            /* สีปุ่ม Login */
            border: none;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            color: #fff;
            transition: 0.5s;
            border-radius: 5px;
        }

        button:hover {
            background: #2980b9;
            /* สีปุ่ม Login เมื่อ hover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .login-box {
                padding: 40px;
            }

            .input-group input {
                padding: 12px;
                font-size: 16px;
            }

            .input-group label {
                padding: 12px 0;
                font-size: 16px;
            }

            button {
                padding: 12px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 30px;
            }

            .input-group input {
                padding: 10px;
                font-size: 14px;
            }

            .input-group label {
                padding: 10px 0;
                font-size: 14px;
            }

            button {
                padding: 10px;
                font-size: 14px;
            }
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            animation: twinkling 5s infinite alternate;
        }

        @keyframes twinkling {
            0% {
                opacity: 0.3;
                transform: scale(1);
            }

            100% {
                opacity: 1;
                transform: scale(1.5);
            }
        }

        @keyframes beamAnimation {
            0% {
                transform: translateX(0) scaleY(1);
            }

            100% {
                transform: translateX(100vw) scaleY(1);
            }
        }
    </style>
</head>

<body>
  
    <div class="login-container">
        <div class="login-box">
            <img src="{{ asset('wwwroot/img/logo-hrm.png') }}" alt="logo">
            @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h2>Login</h2>
            <h4>ใช้ username และ password</h4>

            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        // neonCursor({
        //     el:document.getElementById('app'),
        //     shaderPoints:16,
        //     curvePoints:80,
        //     curveLerp:0.5,
        //     radius1: 5,
        //     radius2: 30,
        //     velocityTreshold:10,
        //     sleepRadiusX:100,
        //     sleepRadiusY:100,
        //     sleepTimeCoefX:0.0025,
        //     sleepTimeCoefY:0.0025,

        // })

        function createStar() {
            const star = document.createElement('div');
            star.classList.add('star');
            document.body.appendChild(star);

            star.style.left = `${Math.random() * window.innerWidth}px`;
            star.style.top = `${Math.random() * window.innerHeight}px`;

            setTimeout(() => {
                star.remove();
            }, 5000);
        }

        setInterval(createStar, 20);
    </script>
</body>

</html>