


<head>





    <!-- Fonts -->

    <!-- Styles -->

    @vite("resources/css/app.css")
    @vite('resources/sass/ass.scss')


</head>
<body >
<form>
    <div class="form-group" >
        <label  for="inputemail" >EmailAddress</label>
        <input type="text" class="form-control" id="inputemail" aria-describedby="emailHelp" placeholder="enteremail" >
        <small id="emailHelp" class="form-text text-muted"> wil never share your email with anyone else</small>
    </div>
    <div class="form-group" >
        <div class="form-group form-check" >
        <input type="checkbox" class="form-check-input" id="examplCheck1"  >
            <label class="form-check-label"  for="examplCheck1" >Check me out </label>

            <button type="submit" class="btn btn-primary">  Submit </button> </div>
    </div>
</form>
</body>
