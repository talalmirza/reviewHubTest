@extends ('user.masterlayout')


@section('custom-css')
    <style>
        #everything{
            color: white;
        }

        li#dash{
            width: 101%;
            text-align:center;
        }
        a#sub:visited{
            border-color: rgb(1, 1, 41);
            background-color: rgb(1, 1, 41);
            color: white;
            border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
        }

        #card{box-shadow:0 6px 6px 0 rgba(0,0,0,0.80),0 6px 10px 0 rgba(0,0,0,0.80)}
        a#everything:hover{
            border-color: rgb(1, 1, 41);
            background-color:rgb(1, 1, 41);
            color:white;
            border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
        }


    </style>



@endsection

@section('searchkeyword')
    {{$keyword}}
    @endsection

@section ('content')
    @include ('user.partials.navbar')
    <div class="container" style="background-color: white">
        <div class="row" style="margin-bottom: 50px;">
            <div class="row"><h1>Search results for category "{{$keyword}}"</h1></div>
            <div class="row">


                <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">


                            <div class="row">
                                <div class="col-md-10 col-sm-10" style="margin-bottom: 30px;">

                                    @if($reviews->isEmpty())

                                        <div class="alert alert-danger text-center" role="alert">
                                            <strong>Oops</strong> No reviews were found for the this category..</a>.
                                        </div>



                                        @elseif(!$reviews->isEmpty())
                                    @include ('user.partials.reviews')

                                        @endif
                                </div>




                            </div>


                            @if(!$categories->isEmpty())

                                @if(!$reviews->isEmpty())
                            <hr style="border-top:5px solid #eee">
                                @endif

                            <div class="row">
                                <div class="col-md-10">


                                <a href="/home#category_list" style="text-decoration: none"> <button class="btn btn-primary btn-block">Show All Categories</button></a>
                                </div>

                            </div>



                            @endif

                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

