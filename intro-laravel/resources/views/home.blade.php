@extends ('layout/layout')

@section ('header')

<header>
    <div class="overlay">
        <h1>Welcome to <br> <span>Sushi house!</span></h1>
        <p>Order your favorite sushi below</p>

    </div>
</header>

@endsection

@section ('meals')
<h2>Choose your favorite sushi</h2>
<div class="meals">
    <div class="first-meal meal">
        <div class="image-container">
            <img src="vinicius-benedit--1GEAA8q3wk-unsplash.jpg" alt="sushi">
        </div>
        <div class="text">
            <p class="title">Philadelphia roll</p>
            <p class="description"> A Philadelphia roll is a makizushi (also classified as a kawarizushi) type of sushi
                generally made with smoked salmon, cream cheese, and cucumber. It can also include other ingredients,
                such as other types of fish, avocado, scallions, and sesame seed.</p>
        </div>
    </div>

    <div class="second-meal meal">
        <div class="image-container">
            <img src="matsami-matsami-BIhxjllZbLI-unsplash.jpg" alt="sushi">
        </div>
        <div class="text">
            <p class="title">Vegetarian sushi</p>
            <p class="description"> A perfect choice for vegetarian friends : rice, zucchini, cucumber and seaweed! </p>
        </div>
    </div>

    <div class="third-meal meal">
        <div class="image-container">
            <img src="luigi-pozzoli-wmPDe9OnXT4-unsplash.jpg" alt="sushi">
        </div>
        <div class="text">
            <p class="title">Classical sashimi</p>
            <p class="description"> Sashimi is a Japanese delicacy consisting of fresh raw fish or meat sliced into thin
                pieces and often eaten with soy sauce.</p>
        </div>
    </div>
</div>

@endsection