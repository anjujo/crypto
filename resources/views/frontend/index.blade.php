 @extends('layouts.frontlayout')
 @section('content')
 <section class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xs-12 login-data">
          <div class="wrapper card bg-green p-4">
            <ul>
              <li>
                <div class="one user-name">
                  <span>User Name:</span>
                  <span>xZMqxpAkxQVP</span>
                </div>
                <div class="two card-today">
                  <span>Cards(today):</span>
                  <span>~ 0 pcs</span>
                </div>
                <div class="three spent-today">
                  <span>Spent(today):</span>
                  <span>~ 0,0 USD</span>
                </div>
              </li>
              <li>
                <div class="one balance">
                  <span>Balance:</span>
                  <span>3,0 USD</span>
                </div>
                <div class="two card-month">
                  <span>Cards(1 month):</span>
                  <span>~ 0 pcs</span>
                </div>
                <div class="three spent-month">
                  <span>Spent(month):</span>
                  <span>~ 0,0 USD</span>
                </div>
              </li>
              <li>
                <div class="one last-login">
                  <span>Last login:</span>
                  <span>2022-05-23 15:30:28</span>
                </div>
                <div class="two card-total">
                  <span>Cards(total):</span>
                  <span>~ 0 pcs</span>
                </div>
                <div class="three spent-total">
                  <span>Spent(total):</span>
                  <span>~ 36,0 USD</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-4 news-updates">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xs-12 news-updates-wrapper overflow-hidden">
          <div class="card bg-green">
            <div class="header px-4 py-3 dark-green-color">
              <h3 class="text-secondary">New & Updates</h3>
            </div>
            <div class="wrapper p-4">
              <ul>
                <li>
                  <a href="#">
                    <span class="updates">US 80 VALID RATE</span>
                  <span class="time-date">
                    2022-05-23
                  </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                  <span class="updates">BIG BASE UPLOADED 230K CARDS USAEUROPE LOW VALIDITY AT
                    PRICE OF 1 EACH CARD see the IPHONE BASE</span>
                  <span class="time-date">
                    2022-05-23
                  </span>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection()