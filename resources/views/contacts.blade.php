<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Contacts</title>
</head>

<body>
   <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
         <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
               <a class="nav-link" aria-current="page" href="/">Home</a>
            </div>
            <div class="navbar-nav">
               <a class="nav-link" aria-current="page" href="/about">About</a>
            </div>
            <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" href="/contacts">Contacts</a>
            </div>
         </div>
      </div>
   </nav>

   <div class="container mt-3">
      <h1>Contacts</h1>
      <p>Hi, my name is {{$name}} {{$lastname}} and I am {{$age}} years old</p>
   </div>

</body>

</html>