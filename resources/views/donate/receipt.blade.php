<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Randist</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<style type="text/css">
    	body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: rgb(89, 136, 107)!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgb(89, 136, 107)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: rgba(89, 136, 107, 0.219)!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: rgb(89, 136, 107)!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: rgb(89, 136, 107)!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}



    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
<div class="page-header text-blue-d2">

<div class="page-tools">
    <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
            Print
        </a>
        <a id="downloadBtn" class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
            Export
        </a>
        @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
    </div>
</div>
</div>
<div id="pdf-content" class="container px-0">
<div class="row mt-4">
<div class="col-12 col-lg-12">
<div class="row">
<div class="col-12">
<div class="text-center text-150">
<span class="text-default-d3">RANDIST Charity</span>
<i class="fas fa-hands-helping mr-2" style="color: rgb(89, 136, 107)"></i>

</div>
</div>
</div>

<hr class="row brc-default-l1 mx-n1 mb-4" />
<div class="row">
<div class="col-sm-6">
<div>
<div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">From:</div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>  <span class="text-600 text-90">Donor's name: </span> {{ $users->name }}</div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>  <span class="text-600 text-90">Donor's email: </span> {{ $users->email }}</div>
</div>

</div>

<div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
<hr class="d-sm-none" />
<div class="text-grey-m2">
<div class="mt-1 mb-2 text-secondary-m1 text-600 text-dark text-125">
Invoice
</div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-dark text-90">Case Name: {{ $specificCase->name }} </span></div>
<span class="text-600 text-dark text-90">Donate Date: {{ $donor->created_at->format('d-m-Y') }}</span>
</div>
</div>

</div>
<div class="mt-4">
    <div class="row text-600 text-white bgc-default-tp1 py-25">
        <div class="col-6 col-sm-5">Description</div>
        <div class="col-6 col-sm-5 d-none d-sm-block">Donation amount</div>
    </div>
    <div class="text-95 text-secondary-d3">
        <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
            <div class="col-6 col-sm-5">{{$specificCase->description}}</div>
            <div class="col-6 col-sm-5 d-none d-sm-block text-95">{{$donor->amountPaymnt}}</div>
        </div>
    </div>



<div class="row border-b-2 brc-default-l2"></div>


<div class="row mt-3">

<div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">

</div>
</div>
<hr/>
<div style="display: flex; align-items: center;">
    <span class="text-secondary-d1 text-105">Thank you, <span style="color: rgb(89, 136, 107);font-weight: bold">{{ $users->name }}</span>, for your invaluable support. Your generosity is greatly appreciated.
    </span>
    <a href="{{ Route('index') }}" class="btn btn-info btn-bold px-4 ml-auto mt-3 mt-lg-0" style="background-color: rgb(89, 136, 107)">Back to home</a>
</div>
<br>
Sincerely,
<br>
<span style="color: rgb(89, 136, 107);font-weight: bold">RANDIST Charity</span>

</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $("a[data-title='Print']").click(function() {
            window.print();
        });

        $("a[data-title='PDF']").click(function() {
            var element = document.getElementById('pdf-content'); // Replace with the ID of the element you want to convert to PDF

            html2pdf()
                .from(element)
                .save('invoice.pdf');
        });
    });
    </script>

</body>
</html>
