<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outgoing Telegraphic Transfer</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 8px; /* Reduced font size for content */
        }
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 2px; /* Reduced margin */
        }
        table {
            width: 100%;
        }
        td {
            padding: 2px;
            vertical-align: top;
        }
        tr{
            margin-bottom: 5px;
        }
        /* Add a small space between sections and content */
        tr.section-row:last-child td {
            margin-bottom: 2px;
        }
    </style>

</head>
<body>
<div class="header">
    Outgoing Telegraphic Transfer
</div>

<div class="section">
    <div class="section-title">SWIFT MT103</div>
    <div class="section-content">{{$transaction->created_at}}</div>
</div>

<div class="section">
    <div class="section-title">MT 103 SINGLE CUSTOMER CREDIT TRANSFER</div>
</div>

<table>
    <tr class="section-row">
        <td class="section-title">BASIC HEADER</td>
        <td class="section-content">F01HSBCSGS2XXX0000000000</td>
    </tr>
    <br>
    <tr class="section-row">
        <td class="section-title">APPLICATION HEADER</td>
        <td class="section-content">I1033456677888765XXXXN</td>
    </tr>
    <br>
    <tr class="section-row">
        <td class="section-title">USER HEADER</td>
        <td class="section-content">
            SERVICE CODE 103:<br>
            BANK. PRIORITY 113:<br>
            MSG USER REF. 108:<br>
            VALIDATION 119:<br>
            GPI INDICATOR 111:001<br>
            UETR REFERENCE 121:2d7a9068-f918-4721-8491-56800e805c94
        </td>
    </tr>
    <br>
    <tr class="section-row">
        <td class="section-title">SENDER'S REF.</td>
        <td class="section-content">20 :{{$transaction->ref}}</td>
    </tr>
    <br>
    <tr class="section-row">
        <td class="section-title">TIME INDICATION</td>
        <td class="section-content">13C:CODE/ /TIME SIGN OFFSET</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">BANK OPERATION CODE</td>
        <td class="section-content">23B:CRED</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">INSTRUCTION CODE</td>
        <td class="section-content">23E:</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">TRANS. TYPE CODE</td>
        <td class="section-content">26T:</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">SETTLEMENT AMOUNT</td>
        <td class="section-content">32A:DATE20240522CURRENCY{{$transaction->user->currency}}AMOUNT{{$transaction->amount}}</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">INSTRUCTED AMOUNT</td>
        <td class="section-content">33B: CUR/CODE{{$transaction->user->currency}}AMOUNT{{$transaction->amount}}</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">EXCHANGE RATE</td>
        <td class="section-content">336 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">ORDERING CUSTOMER</td>
        <td class="section-content">
            50K:/3229822125108549<br>
            {{$transaction->user->firstname}} {{$transaction->user->lastname}}<br>
            {{$transaction->user->address}}<br>
            {{$transaction->user->city}}
        </td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">SENDING INSTITUTION</td>
        <td class="section-content">51A:</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">ORDERING INST.</td>
        <td class="section-content">52 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">SENDER'S CORR.</td>
        <td class="section-content">53A:DEUTDEFFXXX</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">RECEIVER'S CORR.</td>
        <td class="section-content">54 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">THIRD REIMBURS.INST.</td>
        <td class="section-content">55 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">INTERMEDIARY</td>
        <td class="section-content">56 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">ACCOUNT WITH INST.</td>
        <td class="section-content">57A:3456677888765</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">BENEFICIARY CUSTOMER</td>
        <td class="section-content">
            59 :/{{$transaction->beneficiary}}<br>
            {{$transaction->beneficiary}}
        </td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">REMITTANCE INFO</td>
        <td class="section-content">70 :2345556667788</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">DETAILS OF CHARGES</td>
        <td class="section-content">71A:BEN</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">SENDER'S CHARGES</td>
        <td class="section-content">71F:CURRENCYUSDAMOUNT12.46</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">RECEIVER'S CHARGES</td>
        <td class="section-content">71G:CURRENCY AMOUNT</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">SEND. TO REC. INFO;</td>
        <td class="section-content">72 :</td>
    </tr>
    <br>

    <tr class="section-row">
        <td class="section-title">REGULATORY REPORT</td>
        <td class="section-content">77B:</td>
    </tr>
    <br>
</table>

</body>
</html>
