@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row my-5 border bg-light shadow">
            <div class="col-md-6" style="background-image: url(https://source.unsplash.com/user/a_myth); background-size: cover; background-position: center center; opacity: 1; min-height:300px;">
            </div>
            <div class="col-md-6 align-self-center p-4 ">
                <h3 class="font-weight-light text-success">Yeap! this is a title</h3>
                <p class="lead">Familiaris noster, et alia multa et hoc loco Stoicos irridebat: Quid enim?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum. Atqui reperies, inquit, in hoc quidem pertinacem; Piso, familiaris noster, et alia multa et hoc loco Stoicos irridebat: Quid enim?</p>
                <a href="#" class="btn btn-outline-success btn-sm">Learn More</a>
            </div>
        </div>

        <div class="row my-5 border bg-light shadow">
            <div class="col-md-6 order-2" style="background-image: url(https://source.unsplash.com/random); background-size: cover; background-position: center center; opacity:1; min-height:300px;">
            </div>
            <div class="col-md-6  bg-light align-self-center p-4">
                <h3 class="font-weight-light text-success">Yeap! this is a title</h3>
                <p class="lead">Familiaris noster, et alia multa et hoc loco Stoicos irridebat: Quid enim?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum. Atqui reperies, inquit, in hoc quidem pertinacem; Piso, familiaris noster, et alia multa et hoc loco Stoicos irridebat: Quid enim?</p>
                <a href="#" class="btn btn-outline-success btn-sm">Learn More</a>
            </div>
        </div>
    </div>
</section>

@endsection