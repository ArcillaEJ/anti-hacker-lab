<!DOCTYPE html>
<html>
<head>
    <title>Week 11 Activity: The Anti-Hacker Lab</title>

    <style>

        *{
            box-sizing:border-box;
        }

        body{
            margin:0;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:'Segoe UI', sans-serif;

            background:
            radial-gradient(circle at center,
            #ffe066 0%,
            #ffb703 18%,
            #fb8500 38%,
            #d62828 60%,
            #780000 100%);
        }

        .card{
            width:100%;
            max-width:750px;
            background:#fff8e7;
            border-radius:30px;
            padding:45px;
            text-align:center;

            border:8px solid #ff7b00;

            box-shadow:
            0 0 0 10px #ffb703,
            0 0 0 18px #d62828,
            0 25px 60px rgba(0,0,0,0.45);
        }

        .logo img{
            width:120px;
            height:auto;
            margin-bottom:10px;
        }

        h1{
            margin:0;
            font-size:42px;
            color:#d62828;
            font-weight:900;
            line-height:1.2;
        }

        .subtitle{
            margin-top:14px;
            color:#5f0f40;
            font-size:17px;
            margin-bottom:35px;
        }

        .panel{
            background:white;
            border-radius:22px;
            padding:25px;
            border:3px dashed #ff7b00;
        }

        form{
            display:flex;
            gap:12px;
        }

        input{
            flex:1;
            padding:16px;
            border-radius:14px;
            border:2px solid #ffb703;
            font-size:16px;
            outline:none;
            background:#fffdf7;
        }

        input:focus{
            border-color:#d62828;
            box-shadow:0 0 0 5px rgba(214,40,40,0.15);
        }

        button{
            padding:16px 24px;
            border:none;
            border-radius:14px;
            background:#d62828;
            color:white;
            font-weight:800;
            cursor:pointer;
            font-size:15px;
        }

        button:hover{
            background:#a4161a;
        }

        .output{
            margin-top:25px;
            background:#5f0f40;
            color:white;
            padding:22px;
            border-radius:18px;
            text-align:left;
        }

        .output h3{
            margin-top:0;
            color:#ffb703;
        }

        code{
            color:#ffe066;
            word-break:break-all;
            font-size:15px;
        }

        .footer{
            margin-top:28px;
            display:flex;
            justify-content:center;
            gap:12px;
            flex-wrap:wrap;
        }

        .tag{
            background:#ffe066;
            color:#780000;
            padding:10px 14px;
            border-radius:999px;
            font-size:13px;
            font-weight:700;
        }

    </style>
</head>

<body>

<div class="card">

    <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/en/1/17/Bugs_Bunny.svg"
             alt="Bugs Bunny">
    </div>

    <h1>
        Week 11 Activity:<br>
        The Anti-Hacker Lab
    </h1>

    <p class="subtitle">
        Advanced Web Development • CI4 Security Implementation
    </p>

    <div class="panel">

        <form method="post" action="<?= site_url('submit') ?>">

            <?= csrf_field() ?>

            <input
                type="text"
                name="user_input"
                placeholder="Try: <script>alert('Hacked')</script>"
            >

            <button type="submit">
                TEST
            </button>

        </form>

        <?php if (isset($user_input)): ?>

            <div class="output">

                <h3>Protected Output</h3>

                <code>
                    <?= esc($user_input) ?>
                </code>

            </div>

        <?php endif; ?>

    </div>

    <div class="footer">

        <div class="tag">CSRF Active</div>

        <div class="tag">XSS Escaping Enabled</div>

        <div class="tag">CodeIgniter 4</div>

    </div>

</div>

</body>
</html>