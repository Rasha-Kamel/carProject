<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <div>
        Name: {{$data['first_name']}}  {{$data['last_name']}}
   </div>
   <div>
      Email:  {{$data['email']}}
   </div>
   <br/>
   <div>
        {{$data['content']}}
   </div>

</body>
</html>