        <div class="content__dashboard">
            <nav class="dashboard__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li nav__link___choosen">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li">Статьи</li></a>
                    <a class="nav__link" href="/profile"><li class="nav__li nav__li___user"><?=\Controllers\Dashboard::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="content__header___title">Панель управления</h1>
            <div class="header__analytics">
                <svg height="300" version="1.1" width="304" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.3125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,261H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,202H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,143H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,84H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,25H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="78.71015502738655" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><path fill="#20b4c4" stroke="none" d="M45.34375,225.6C53.68535125684664,193.15,70.3685537705399,104.65,78.71015502738655,95.80000000000001C87.05175628423318,86.95000000000002,103.73495879792645,154.8,112.07656005477308,154.8C120.41816131161971,154.8,137.10136382531297,95.80000000000001,145.44296508215962,95.80000000000001C153.8074200410798,95.80000000000001,170.5363299589202,154.8,178.90078491784038,154.8C187.242386174687,154.8,203.9255886883803,104.65,212.2671899452269,95.80000000000001C220.60879120207355,86.95,237.2919937157668,87.6875,245.63359497261345,84C253.9751962294601,80.3125,270.6583987431534,70.72500000000001,279,66.30000000000001L279,261L45.34375,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#04a2b3" d="M45.34375,225.6C53.68535125684664,193.15,70.3685537705399,104.65,78.71015502738655,95.80000000000001C87.05175628423318,86.95000000000002,103.73495879792645,154.8,112.07656005477308,154.8C120.41816131161971,154.8,137.10136382531297,95.80000000000001,145.44296508215962,95.80000000000001C153.8074200410798,95.80000000000001,170.5363299589202,154.8,178.90078491784038,154.8C187.242386174687,154.8,203.9255886883803,104.65,212.2671899452269,95.80000000000001C220.60879120207355,86.95,237.2919937157668,87.6875,245.63359497261345,84C253.9751962294601,80.3125,270.6583987431534,70.72500000000001,279,66.30000000000001" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="225.6" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="78.71015502738655" cy="95.80000000000001" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="112.07656005477308" cy="154.8" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="145.44296508215962" cy="95.80000000000001" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.90078491784038" cy="154.8" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="212.2671899452269" cy="95.80000000000001" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="245.63359497261345" cy="84" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="279" cy="66.30000000000001" r="3" fill="#04a2b3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#57b3e7" stroke="none" d="M45.34375,249.2C53.68535125684664,230.02499999999998,70.3685537705399,178.4,78.71015502738655,172.5C87.05175628423318,166.6,103.73495879792645,202,112.07656005477308,202C120.41816131161971,202,137.10136382531297,172.5,145.44296508215962,172.5C153.8074200410798,172.5,170.5363299589202,202,178.90078491784038,202C187.242386174687,202,203.9255886883803,178.4,212.2671899452269,172.5C220.60879120207355,166.6,237.2919937157668,157.01250000000002,245.63359497261345,154.8C253.9751962294601,152.5875,270.6583987431534,154.8,279,154.8L279,261L45.34375,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#00a3ff" d="M45.34375,249.2C53.68535125684664,230.02499999999998,70.3685537705399,178.4,78.71015502738655,172.5C87.05175628423318,166.6,103.73495879792645,202,112.07656005477308,202C120.41816131161971,202,137.10136382531297,172.5,145.44296508215962,172.5C153.8074200410798,172.5,170.5363299589202,202,178.90078491784038,202C187.242386174687,202,203.9255886883803,178.4,212.2671899452269,172.5C220.60879120207355,166.6,237.2919937157668,157.01250000000002,245.63359497261345,154.8C253.9751962294601,152.5875,270.6583987431534,154.8,279,154.8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34375" cy="249.2" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="78.71015502738655" cy="172.5" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="112.07656005477308" cy="202" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="145.44296508215962" cy="172.5" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.90078491784038" cy="202" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="212.2671899452269" cy="172.5" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="245.63359497261345" cy="154.8" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="279" cy="154.8" r="3" fill="#00a3ff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg>
            </div>
            <div class="header__analytics">
                <svg height="300" version="1.1" width="304" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84375" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,261H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,202H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,143H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,84H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84375" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#3d4956" d="M45.34375,25H279" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="264.396484375" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="176.775390625" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="89.154296875" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><rect x="54.105859375" y="25" width="4.34140625" height="236" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="61.447265625" y="48.60000000000002" width="4.34140625" height="212.39999999999998" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="83.312890625" y="84" width="4.34140625" height="177" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="90.654296875" y="107.6" width="4.34140625" height="153.4" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="112.519921875" y="143" width="4.34140625" height="118" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="119.861328125" y="166.60000000000002" width="4.34140625" height="94.39999999999998" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="141.726953125" y="84" width="4.34140625" height="177" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="149.068359375" y="107.6" width="4.34140625" height="153.4" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="170.933984375" y="143" width="4.34140625" height="118" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="178.275390625" y="166.60000000000002" width="4.34140625" height="94.39999999999998" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="200.141015625" y="84" width="4.34140625" height="177" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="207.482421875" y="107.6" width="4.34140625" height="153.4" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="229.348046875" y="25" width="4.34140625" height="236" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="236.689453125" y="48.60000000000002" width="4.34140625" height="212.39999999999998" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="258.555078125" y="48.60000000000002" width="4.34140625" height="212.39999999999998" rx="0" ry="0" fill="#04a2b3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="265.896484375" y="84" width="4.34140625" height="177" rx="0" ry="0" fill="#00a3ff" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg>
            </div>