<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FINEbank.io | Home</title>
    @vite('resources/css/app.css')
        @vite('resources/css/home.css')
</head>

<body>
    <aside>
        <h1><span class="bold">FINE</span>bank.<span class="bold">IO</span></h1>
        <div class="side-actions">
            <ul>
                <li><a href="" class="active"><i class="fa-solid fa-house"></i>Overview</a></li>
                <li><a href=""><i class="fa-solid fa-wallet"></i>Balances</a></li>
                <li><a href=""><i class="fa-solid fa-right-left"></i>Transactions</a></li>
                <li><a href=""><i class="fa-solid fa-receipt"></i>Bills</a></li>
                <li><a href=""><i class="fa-solid fa-money-bill-transfer"></i>Expenses</a></li>
                <li><a href=""><i class="fa-solid fa-crosshairs"></i>Goals</a></li>
                <li><a href=""><i class="fa-solid fa-gear"></i>Settings</a></li>
            </ul>
        </div>
        <div class="side-user">
            <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
            <hr>
            <div class="side-profile">
                <div>
                    <img src="" alt="">
                </div>
                <div>
                    <span>Addi Mohammed</span>
                    <a href="">View Profile</a>
                </div>
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
        </div>
    </aside>
    <main>
        <header class="top-header">
            <div class="user-info">
                <h1>ADDI MOHAMMED</h1>
                <p> <span>>></span> {{ \Carbon\Carbon::now()->format('M d, Y') }}</p>
            </div>

            <div class="actions">
                <div class="notification">notification bell</div>
                <div class="search">
                    <input type="text">
                    <i class="fa-solid fa-magnifying-glass"></i> </div>
            </div>
        </header>

        <section class="content">

        </section>
    </main>
</body>

</html>
