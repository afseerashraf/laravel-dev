<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li>Name: {{ $customer->first_name }} </li>
        <li>Mobile: {{ $customer->mobile }} </li>
        <li>Branch Name: {{ $customer->branch->name }}</li>
    </ul>
</body>
</html>