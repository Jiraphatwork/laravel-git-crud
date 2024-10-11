<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Jiraphat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse-navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">หน้าแรก</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">เกี่ยวกับเรา</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/blog">งานทั้งหมด</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/create">เพิ่มงาน</a>
                    </li>

                  

                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-2">
        @yield('content')
    </div>

</body>

</html>
