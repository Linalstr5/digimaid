@extends('app.customer-layout')

@section('title', 'Pembayaran')

@section('content')
    <div class="content-body">
        <section class="invoice-preview-wrapper">
            <div class="row invoice-preview">
                <!-- Invoice -->
                <div class="col-xl-9 col-md-8 col-12">
                    <div class="card invoice-preview-card">
                        <div class="card-body invoice-padding pb-0">
                            <!-- Header starts -->
                            <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                <div>
                                    <div class="logo-wrapper">
                                        
                                        <h3 class="text-primary invoice-logo">DIGIMAID</h3>
                                    </div>
                                    <p class="card-text mb-25">Jl. Kesambi No. 202, Drajat</p>
                                    <p class="card-text mb-25">Kec. Kesambi, Kota Cirebon 45133</p>
                                    <p class="card-text mb-0">0231200418 - customer.care@digimaid.com</p>
                                </div>
                                <div class="mt-md-0 mt-2">
                                    <h4 class="invoice-title">
                                        Invoice
                                        <span class="invoice-number">#{{ $Payment['id'] . '-' . $Payment['maid_id'] . '-' . $Payment['customer_id'] }}</span>
                                    </h4>
                                    <div class="invoice-date-wrapper">
                                        <p class="invoice-date-title">Tanggal Dibuat:</p>
                                        {{-- <p class="invoice-date">25/08/2020</p> --}}
                                        <p class="invoice-date">{{ $Payment['tgl_mulai'] }}</p>
                                    </div>
                                    <div class="invoice-date-wrapper">
                                        <p class="invoice-date-title">Jatuh Tempo:</p>
                                        {{-- <p class="invoice-date">29/08/2020</p> --}}
                                        <p class="invoice-date">{{ $Payment['tgl_selesai'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Header ends -->
                        </div>

                        <hr class="invoice-spacing">

                        <!-- Address and Contact starts -->
                        <div class="card-body invoice-padding pt-0">
                            <div class="row invoice-spacing">
                                <div class="col-xl-8 p-1">
                                    <h6 class="mb-2">Pembayaran Ditujukan Kepada:</h6>
                                    {{-- <h6 class="mb-25">Thomas shelby</h6> --}}
                                    <h6 class="mb-25">{{ $Payment['nama_maid'] }}</h6>
                                    {{-- <p class="card-text mb-25">Shelby Company Limited</p> --}}
                                    {{-- <p class="card-text mb-25">Small Heath, B10 0HF, UK</p> --}}
                                    <p class="card-text mb-25">{{ $Payment['alamat_maid'] }}</p>
                                    {{-- <p class="card-text mb-25">718-986-6062</p> --}}
                                    <p class="card-text mb-25">{{ $Payment['no_tlp_maid'] }}</p>
                                    {{-- <p class="card-text mb-0">peakyFBlinders@gmail.com</p> --}}
                                    <p class="card-text mb-0">{{ $Payment['email_maid'] }}</p>
                                </div>
                                <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                    <h6 class="mb-2">Detail Pembayaran:</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="pr-1">Total Tagihan</td>
                                                <td>:</td>
                                                {{-- <td><span class="font-weight-bold">$12,110.55</span></td> --}}
                                                <td><span class="font-weight-bold">{{ $Payment['upah'] }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="pr-1">Metode Pembayaran</td>
                                                <td>:</td>
                                                <td>Transfer Bank</td>
                                            </tr>
                                            <tr>
                                                <td class="pr-1">Negara</td>
                                                <td>:</td>
                                                <td>Indonesia</td>
                                            </tr>
                                            <tr>
                                                <td class="pr-1">Kode Pembayaran</td>
                                                <td>:</td>
                                                <td>{{ $Payment['dm_va'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="pr-1">Atas Nama</td>
                                                <td>:</td>
                                                <td>{{ Auth::user()->name }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- <hr>
                                    ** Gunakan Kode Pembayaran Virtual Account Di Atas Pada Saat Melakukan Pembayaran Melalui Transfer  Bank --}}
                                </div>
                            </div>
                        </div>
                        <hr class="invoice-spacing">

                        <!-- Invoice Note starts -->
                        <div class="card-body invoice-padding pt-0">
                            <div class="row">
                                <div class="col-12">
                                    <span class="font-weight-bold">Note:</span>
                                    <span>Gunakan Kode Pembayaran Virtual Account Di Atas Pada Saat Melakukan Pembayaran Melalui Transfer  Bank</span>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice Note ends -->
                    </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary btn-block mb-75" data-toggle="modal"
                                data-target="#send-invoice-sidebar">
                                Download Tagihan
                            </button>
                            {{-- <button
                                class="btn btn-outline-secondary btn-block btn-download-invoice mb-75">Download</button>
                            <a class="btn btn-outline-secondary btn-block mb-75" href="app-invoice-print.html"
                                target="_blank">
                                Print
                            </a> --}}
                            {{-- <a class="btn btn-outline-secondary btn-block mb-75" href="app-invoice-edit.html"> Edit </a> --}}
                            <button class="btn btn-success btn-block" data-toggle="modal"
                                data-target="#add-payment-sidebar">
                                Cetak Tagihan
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>
        </section>

        <!-- Send Invoice Sidebar -->
        <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
            <div class="modal-dialog sidebar-lg">
                <div class="modal-content p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                    <div class="modal-header mb-1">
                        <h5 class="modal-title">
                            <span class="align-middle">Send Invoice</span>
                        </h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                        <form>
                            <div class="form-group">
                                <label for="invoice-from" class="form-label">From</label>
                                <input type="text" class="form-control" id="invoice-from"
                                    value="shelbyComapny@email.com" placeholder="company@email.com">
                            </div>
                            <div class="form-group">
                                <label for="invoice-to" class="form-label">To</label>
                                <input type="text" class="form-control" id="invoice-to"
                                    value="qConsolidated@email.com" placeholder="company@email.com">
                            </div>
                            <div class="form-group">
                                <label for="invoice-subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="invoice-subject"
                                    value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
                            </div>
                            <div class="form-group">
                                <label for="invoice-message" class="form-label">Message</label>
                                <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11"
                                    placeholder="Message...">
                            Dear Queen Consolidated,

                            Thank you for your business, always a pleasure to work with you!

                            We have generated a new invoice in the amount of $95.59

                            We would appreciate payment of this invoice by 05/11/2019</textarea>
                            </div>
                            <div class="form-group">
                                <span class="badge badge-light-primary">
                                    <i data-feather="link" class="mr-25"></i>
                                    <span class="align-middle">Invoice Attached</span>
                                </span>
                            </div>
                            <div class="form-group d-flex flex-wrap mt-2">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Send Invoice Sidebar -->

        <!-- Add Payment Sidebar -->
        <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
            <div class="modal-dialog sidebar-lg">
                <div class="modal-content p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                    <div class="modal-header mb-1">
                        <h5 class="modal-title">
                            <span class="align-middle">Add Payment</span>
                        </h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                        <form>
                            <div class="form-group">
                                <input id="balance" class="form-control" type="text"
                                    value="Invoice Balance: 5000.00" disabled="">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="amount">Payment Amount</label>
                                <input id="amount" class="form-control" type="number" placeholder="$1000">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="payment-date">Payment Date</label>
                                <input id="payment-date" class="form-control date-picker" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="payment-method">Payment Method</label>
                                <select class="form-control" id="payment-method">
                                    <option value="" selected="" disabled="">Select payment
                                        method</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Debit">Debit</option>
                                    <option value="Credit">Credit</option>
                                    <option value="Paypal">Paypal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="payment-note">Internal Payment Note</label>
                                <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                            </div>
                            <div class="form-group d-flex flex-wrap mb-0">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Send</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Payment Sidebar -->

    </div>
    </div>
    </div>
    <!-- END: Content-->

@endsection
