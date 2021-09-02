@extends(\Config::get('app.theme').'.master')
@section('content')

               
               
                <div class="row ">
                    <div class="col-12 QA_section" >
                        <div class="card QA_table ">
                            <div class="card-header">
                                Customer Bill 
                                
                                <span class="float-right"> <strong>Status:</strong> Pending</span>

                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-sm-6">
                                        
                                        <div>
                                            <strong>customer no:: {{$cus_detail->cust_no}}</strong>
                                        </div>
                                        <div>Name::{{$cus_detail->cust_name}}</div>
                                        <div>Sector No::{{$cus_detail->sector_no}}</div>
                                        <div>Plot No ::{{$cus_detail->sector_no}}</div>
                                        <div>Phone: +0000</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h6 class="mb-3">To:</h6>
                                        <div>
                                            <strong>Person 2</strong>
                                        </div>
                                        <div>England</div>
                                        <div>71-101 Szczecin, England</div>
                                        <div>Email: demo@gmail.com</div>
                                        <div>Phone: +0000</div>
                                    </div>



                                </div>

                                <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th>Description</th>

                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">4</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">5</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">6</td>
                                                <td class="left strong">Sport Shoe</td>
                                                <td class="left">export shoe</td>

                                                <td class="right">$99.00</td>
                                                <td class="center">1</td>
                                                <td class="right">$99.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5">

                                    </div>

                                    <div class="col-lg-4 col-sm-5 ml-auto QA_section">
                                        <table class="table table-clear QA_table">
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <strong>Subtotal</strong>
                                                    </td>
                                                    <td class="right">$8.497,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong>Discount (20%)</strong>
                                                    </td>
                                                    <td class="right">$1,699,40</td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong>VAT (10%)</strong>
                                                    </td>
                                                    <td class="right">$679,76</td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong>Total</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong>$7.477,36</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        
                @endsection