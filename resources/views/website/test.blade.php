@include('includes.website_includes.css_includes')
    <!DOCTYPE html>
<head>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{URL('website_assets/images/shopping.jpg')}})

        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="custom_menu d-flex flex-row-reverse">
            <ul>
                <br>
                <Button class="btn btn-black"><a href="{{URL('/website/home')}}">Home</a></Button>
                <Button class="btn btn-black"><a href="{{URL('/login')}}">Admin login</a></Button>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="fashion_taital" ><br>Registration<br></h1>
</div>
<div class="container-fluid ">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="price">Student Name </label><br>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Student Email </label><br>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Student College </label><br>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Student GPA </label><br>
            <input type="text" name="price" class="form-control">
        </div>

        <button type="submit" class="btn btn-black btn-lg"><a>Submit</a></button>
    </form>
</div>
</body>
