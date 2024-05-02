
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HSBC</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>
<div id="root">
    <div class="page-wrapper-22">
        <div
            class="header-login d-flex justify-content-end align-items-center"
        >

        </div>
        <div style="display: flex; justify-content: space-between; background-color: white; align-items: center;">
            <img
                src="{{ asset('Logo.jpg') }}"
                alt="logo"
                style="width: 140px; padding-top: 30px; padding-bottom: 25px;"
            />
            <form action="{{ route('logout') }}" method="POST" style="margin-right: 20px;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>


        <div
            class="d-flex justify-content-center"
            style="display: flex; justify-content: center"
        >
            <div
                id="carouselExampleControls"
                class="carousel slide login-container"
                data-bs-ride="carousel"
                data-bs-touch="false"
                data-bs-interval="false"
                style="
              background-color: white;
              width: 87%;
              height: 610px;
              margin-top: 50px;
              border-radius: 5px;
            "
            >
                <div
                    class="header-login d-flex justify-content-end align-items-center"
                    style="
                padding-bottom: 0px;
                padding-top: 15px;
                padding-left: 0.5rem;
                color: #fff;
                background-color: #212529;
                display: block;
                font-family: Arial,serif;
                unicode-bidi: isolate;
                font-weight: bold;
                font-size: 14px;
              "
                >
                    MY ACCOUNTS
                </div>
                <table class="table1">
                    <tr>
                        <td class="outertable1">
                            <table class="table2" >
                                <tr>
                                    <td class="row1 clickable-div">
                                        <div
                                            style="display: flex; justify-content: space-between"
                                        >
                                            <h6 class="form-page">ACCOUNTS</h6>
                                            <h6 class="form-page">0</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row1 clickable-div">
                                        <div
                                            style="display: flex; justify-content: space-between"
                                        >
                                            <h6 class="form-page">{{$user->firstname}} {{$user->lastname}}</h6>
                                            <h6 class="form-page">0</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row1 clickable-div">
                                        <div
                                            style="display: flex; justify-content: space-between"
                                        >
                                            <h6 class="form-page">HSBC Advance Current</h6>
                                            <h6 class="form-page">0</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row1 clickable-div">
                                        <div
                                            style="display: flex; justify-content: space-between"
                                        >
                                            <h6 class="form-page">Saving Account</h6>
                                            <h6 class="form-page">0</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row1 clickable-div">
                                        <div
                                            style="display: flex; justify-content: space-between"
                                        >
                                            <h6 class="form-page">HSBC ISA Account</h6>
                                            <h6 class="form-page">0</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="panell"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="outertable2 " style="padding-top: 200px">
                            <div
                                class="active"
                                style="margin-left: 15px; margin-top: 10px"
                            >
                                <table style="margin-top: -340px; width: max-content">
                                    <tr>
                                        <td style="width: 800px">
                                            <div
                                                style="
                              display: flex;
                              justify-content: space-between;
                              width: max-content;
                            "
                                            >
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 40px">
                                            <div
                                                style="
                              display: flex;
                              justify-content: space-between;
                            "
                                            >
                                                <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                <span>balance</span>
                                                <span>{{$user->balance}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 40px">
                                            <div
                                                style="
                              display: flex;
                              justify-content: space-between;
                            "
                                            >
                                                <span>| Current account |</span>
                                                <span>Funds available</span>
                                                <span></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 40px">
                                            <div
                                                style="
                              display: flex;
                              justify-content: space-between;
                            "
                                            >
                                                <span>Last updated: {{$user->updated_at}}</span>
                                                <span>Overdraft</span>
                                                <span></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <button
                                    id="continueBtn"
                                    class="btn login-btn"
                                    data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next"
                                    style="
                        height: 35px;
                        width: 110px;
                        background-color: #dc3545;
                        color: white;
                        font-size: 15px;
                        margin-top: 10px;
                        padding: 10px 0px;
                        border: none;
                      "
                                    data-toggle="modal" data-target="#addTransactionModal"
                                >
                                    Wire Transfer
                                </button>
                                <div style="margin-top: 20px; margin-bottom: 20px;margin-left: -200px; text-align: center;">
                                    <input type="text" id="searchInput" placeholder="Search by date...">
                                    <button style="border-radius: 9px" onclick="searchTable()">Search</button>
                                </div>
                                <table class="table mt-3 mb-0" style="width: 800px; margin-top: 30px; background-color: rgb(233, 236, 239);">
                                    <thead class="table" style="font-size: 20px; padding: 5px 13px; border-bottom: solid black;">
                                    <tr>
                                        <td style="font-weight: 500; padding-left: 5px; height: 30px;">Date</td>
                                        <td style="font-weight: 500; padding-left: 5px">Amount</td>
                                        <td style="font-weight: 500; padding-left: 5px">PDF</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td style="height: 30px; font-size: 15px; padding-left: 7px">{{ $transaction->date }}</td>
                                            <td style="font-size: 15px; padding-left: 7px">-{{ $transaction->amount }}</td>
                                            <td style="font-size: 15px; padding-left: 7px">
                                                <a href="{{ asset('storage/' . $transaction->pdf) }}" target="_blank">View PDF</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- Pagination Controls -->
                                <div style="display: flex; justify-content: center; margin-top: 10px; margin-left: -200px">
                                    @if ($transactions->onFirstPage())
                                        <span style="margin-right: 10px;">« Previous</span>
                                    @else
                                        <a href="{{ $transactions->previousPageUrl() }}" style="margin-right: 10px;">« Previous</a>
                                    @endif

                                    @if ($transactions->hasMorePages())
                                        <a href="{{ $transactions->nextPageUrl() }}">Next »</a>
                                    @else
                                        <span>Next »</span>
                                    @endif
                                </div>


                            </div>
                        </td>

                    </tr>
                </table>
            </div>


        </div>




        <!-- Add Transaction Modal -->
        <div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTransactionModalLabel">Add Transaction</h5>

                    </div>
                    <form action="{{ route('user.transactions.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <!-- Add form fields for transaction attributes here -->
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ref">Ref:</label>
                                <input type="text" name="ref" id="ref" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="beneficiary">Beneficiary:</label>
                                <input type="text" name="beneficiary" id="beneficiary" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="account">Account:</label>
                                <input type="text" name="account" id="account" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="iban">IBAN:</label>
                                <input type="text" name="iban" id="iban" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="swift">SWIFT:</label>
                                <input type="text" name="swift" id="swift" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="bank_beneficiary">Bank Beneficiary:</label>
                                <input type="text" name="bank_beneficiary" id="bank_beneficiary" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" name="amount" id="amount" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="digit">Digit:</label>
                                <input type="number" name="digit" id="digit" class="form-control" required>
                            </div>




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div
            style="border: 0.5px solid rgb(215, 215, 215); opacity: 0.5"
        ></div>
        <table style="margin-top: 15px"></table>
    </div>
</div>

<div class="footer-login text-white" style="margin-bottom: 0px">
    <center>
        <table style="margin: 0px 10px">
            <tr>
                <td class="tddd">
                    <div class="col-3 columns">
                        <div class="d-flex align-items-center gap-3">
                            <svg
                                stroke="currentColor"
                                fill="currentColor"
                                stroke-width="0"
                                viewBox="0 0 512 512"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                                style="color: white"
                            >
                                <path
                                    d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
                                ></path>
                            </svg>
                            <div
                                class=""
                                style="
                          font-weight: 500;
                          font-size: 0.8rem;
                          color: white;
                        "
                            >
                                contact us
                            </div>
                        </div>
                        <div
                            class="pt-2 ps-4 ms-2"
                            style="font-size: 0.7rem; font-weight: 200; color: white"
                        >
                            Chat, call or make an appointment
                        </div>
                    </div>
                </td>
                <td class="tddd">
                    <div class="col-3 columns">
                        <div class="d-flex align-items-center gap-3 ms-3">
                            <svg
                                style="color: white"
                                stroke="currentColor"
                                fill="currentColor"
                                stroke-width="0"
                                viewBox="0 0 384 512"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
                                ></path>
                            </svg>
                            <div
                                class=""
                                style="
                          font-weight: 500;
                          font-size: 0.8rem;
                          color: white;
                        "
                            >
                                Find a branch
                            </div>
                        </div>
                        <div
                            class="pt-2 ps-4 ms-4"
                            style="font-size: 0.7rem; font-weight: 200; color: white"
                        >
                            Locate your nearest ATM or branch
                        </div>
                    </div>
                </td>
                <td class="tddd">
                    <div class="col-3 columns">
                        <div class="d-flex align-items-center gap-3 ms-3">
                            <svg
                                style="color: white"
                                stroke="currentColor"
                                fill="currentColor"
                                stroke-width="0"
                                viewBox="0 0 512 512"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"
                                ></path>
                            </svg>
                            <div
                                class=""
                                style="
                          font-weight: 500;
                          font-size: 0.8rem;
                          color: white;
                        "
                            >
                                Help &amp; Support
                            </div>
                        </div>
                        <div
                            class="pt-2 ps-4 ms-4"
                            style="font-size: 0.7rem; font-weight: 200; color: white"
                        >
                            FAQs, Fees &amp; Charges and Policies
                        </div>
                    </div>
                </td>
                <td class="tddd">
                    <div class="col-3 columns">
                        <div class="d-flex align-items-center gap-3 ms-3">
                            <svg
                                style="color: white"
                                stroke="currentColor"
                                fill="none"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M3.6 9h16.8"></path>
                                <path d="M3.6 15h16.8"></path>
                                <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                            </svg>
                            <div
                                class=""
                                style="
                          font-weight: 500;
                          font-size: 0.8rem;
                          color: white;
                        "
                            >
                                About HSBC
                            </div>
                        </div>
                        <div
                            class="pt-2 ps-4 ms-4"
                            style="font-size: 0.7rem; font-weight: 200; color: white"
                        >
                            Careers, media, investor and corporate information
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const clickableDivs = document.querySelectorAll(".clickable-div");
        const h6 = document.querySelectorAll("h6");

        clickableDivs.forEach(function (div) {
            div.addEventListener("click", function () {
                // Remove "clicked" class from all clickable divs
                clickableDivs.forEach(function (div) {
                    div.classList.remove("clicked");
                });

                // Reset color to its original value for all h6 elements
                h6.forEach(function (h6) {
                    h6.style.setProperty("color", "#727272"); // Reset color property to its initial value
                });

                // Add "clicked" class to the clicked div
                div.classList.add("clicked");

                // Set color:white to all h6 elements inside the clicked div
                const clickedH6 = div.querySelectorAll("h6");
                clickedH6.forEach(function (h6) {
                    h6.style.setProperty("color", "white");
                });
            });
        });
    });
    function searchTable() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.querySelector(".table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Assuming the date is in the first column
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendors/progressbar.js/progressbar.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
</body>
</html>
