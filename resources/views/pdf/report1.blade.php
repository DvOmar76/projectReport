<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    @page {
        header: page-header;
        footer: page-footer;
    }
</style>
<body dir="rtl">
<div class="">
    <h2>{{$company->company_name}}</h2>
    <h4>التقرير الدوري</h4>
    <h4> عام{{ date("Y")}}</h4>
</div>
<hr>
</body>
</html>
