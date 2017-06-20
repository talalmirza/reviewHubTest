@extends ('user.masterlayout')
@section ('custom-css')
<style type="text/css">
    .abtext{
        text-align: center;
        font-family: sans-serif, 'Roboto Slab', serif;
        color: white;
        font-size: 60px;
    }
    .atext{
        text-align: center;
        font-family: sans-serif, 'Roboto Slab', serif;
        color: white;

    }
    .bgimg {
        
        background-image: url('../images/new.jpg');
        background-repeat: no-repeat;
        background-position: center;
        width: 102%;
        }

</style>
@endsection
@section ('content')
    @include ('user.partials.navbar')

    <div class="container-fluid bgimg"style="margin-left: -14px;">
        <div class="container">
            <div class="row" style="margin-top: 12%">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <h1><h1 class="abtext">About Us</h1></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h3 class="atext">We provide professional reviews of products</h3>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="heading-font text-center col-md-12 col-sm-12"> <h1 style="color: grey;">Why we are here</h1> </div>
        </div>
        <div class="row">
            <div class="heading-font text-center col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1"> <h4 style="color: grey;"> To provide reviews of products according to Pakistani market.Reviews serve as luxury to
                    people which eradicate the risk while buying the product with knowledge about it or by knowing
                    the performance as well</h4> </div>
        </div>
    </div>
    <br><br><br>

@endsection

@section ('custom-script')


@endsection