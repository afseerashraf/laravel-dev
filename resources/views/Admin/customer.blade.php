<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('create') }}" method="post">
@csrf
<label for="branch">Branch Id</label> <br>
<input type="text" name="branch_id"><br>
<label for="first_name">First Name</label> <br>  
 <input type="text" name="first_name"><br>
 <label for="lastName">Last Name</label><br>
 <input type="text" name="last_name"><br>
 <label for="Mobile">Mobile</label><br>
 <input type="text" name="mobile"><br>
 <label for="email">Email</label><br>
 <input type="email" name="email"><br>
 <label for="password">Password</label><br>
 <input type="password" name="password"><br>
 <label for="dob">Date of Birth</label><br>
 <input type="date" name="dob"><br><br>
 <input type="submit" class="submit" id="submit">
</form>
</body>
</html>