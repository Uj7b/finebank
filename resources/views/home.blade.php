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
            <a href="" class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
            <hr>
            <div class="card">
                <img src={{ asset("assets/pfp.png") }} class="avatar">

                <div class="info">
                    <h3>ADDI MOHAMMED</h3>
                    <p>View profile</p>
                </div>

                <div class="menu">⋮</div>
            </div>
        </div>
    </aside>
    <main>
        <header class="top-header">
            <div class="user-info">
                <h1>ADDI MOHAMMED</h1>
                <p> <span>>></span>Time on server</p>
            </div>

            <div class="actions">
                <div class="notification"><i class="fa-solid fa-bell"></i></div>
                <div class="search">
                    <input type="text">
                    <i class="fa-solid fa-magnifying-glass"></i> </div>
            </div>
        </header>

        <section class="content">
            <div>
                <div class="total-balance">
                    <h1>Total expenses</h1>
                </div>
                <div class="goals">
                    <h1>Goals</h1>
                </div>
                <div class="upcoming-bills">
                    <h1>Upcomming Bill</h1>
                    <a href="">View all <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="recent-transactions">
                <h1>Recent Transaction</h1>
                <a href="">View all<i class="fa-solid fa-angle-right"></i></a>
            </div>
            <div class="statistics">
                <h1>Statistics</h1>
            </div>
            <div class="expenses-breakdown">
                <h1>Expenses Breakdown</h1>
                <span>*Compared to last month</span>
            </div>
        </section>
    </main>
</body>

</html>
