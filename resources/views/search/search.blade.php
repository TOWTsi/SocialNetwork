@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>

                <div class="panel-body">
                <form class="form-horizontal" role="form" method="GET" action="">
                        {{ csrf_field() }}
                    <div class="form-group">
                    		<!--
                    		Adding a simple search for this project.
                    		-->
                            <label for="search" class="col-md-2 control-label">Tags</label>
                            <div class="col-md-6">
                                <input id="searchTag" type="search" class="form-control" name="searchTag" value="{{ old('search') }}" required autofocus>
                            </div>

                            <!--
                            For future sprints we could filter by a specific timespan. This feature is not implemented yet, so we decided to dont show it
                            on our site. Nobody wants to see an unfinished work, without any functions.
                            -->
                            <!--
                            <label for="search" class="col-md-4 control-label">Timespan</label>
                            -->

                            <button type="submit" class="btn btn-primary">
                          		Search
                          	</button>
                        </div>
                </form>

                <!--
                We need to search for this tag.
                -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
