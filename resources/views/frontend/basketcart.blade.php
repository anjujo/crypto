@extends('layouts.frontlayout')
@section('content')
<section class="py-4 basket-cart">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xs-12 basket-cart-wrapper">
          <div class="title">
            <h3 class="text-white">Basket/Cart section</h3>
          </div>
          <div class="card bg-green rounded-3 overflow-hidden">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr class="px-3 dark-green-color text-white">
                    <th scope="col" class="p-3">Bin</th>
                    <th scope="col" class="p-3">Exp</th>
                    <th scope="col" class="p-3">Country</th>
                    <th scope="col" class="p-3">Address</th>
                    <th scope="col" class="p-3">City</th>
                    <th scope="col" class="p-3">State</th>
                    <th scope="col" class="p-3">Zip</th>
                    <th scope="col" class="p-3">Phone</th>
                    <th scope="col" class="p-3">Email</th>
                    <th scope="col" class="p-3">Price</th>
                    <th scope="col" class="p-3"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-white">
                    <td class="p-3">4320230
                      DEBIT</td>
                    <td class="p-3">6 / 2023</td>
                    <td class="p-3">UNITED STATES
                      HORIZON COMMUNITY BANK
                      2022-02-11 13-02-2022 USA_1</td>
                    <td class="p-3">+</td>
                    <td class="p-3">FORT MOHAVE</td>
                    <td class="p-3">AZ</td>
                    <td class="p-3">86426</td>
                    <td class="p-3">+</td>
                    <td class="p-3">--</td>
                    <td class="p-3">9.00$
                      norefundable</td>
                    <td class="p-3 text-end"><button class="btn btn-primary btn-big align-content-center">Delete</button></td>
                  </tr>
                  <tr class="text-white">
                    <td class="p-3">4320230
                      DEBIT</td>
                    <td class="p-3">6 / 2023</td>
                    <td class="p-3">UNITED STATES
                      HORIZON COMMUNITY BANK
                      2022-02-11 13-02-2022 USA_1</td>
                    <td class="p-3">+</td>
                    <td class="p-3">FORT MOHAVE</td>
                    <td class="p-3">AZ</td>
                    <td class="p-3">86426</td>
                    <td class="p-3">+</td>
                    <td class="p-3">--</td>
                    <td class="p-3">9.00$
                      norefundable</td>
                    <td class="p-3 text-end"><button class="btn btn-primary btn-big align-content-center">Delete</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection()