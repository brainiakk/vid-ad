@extends('layout.front-master')
@section('title', 'Lance Master | Home Page')

@section('content')
    <section class="wrapper">
        <p class="white ml-3" style="font-weight: bold;">
            Notification
        </p>

        @if (sizeof($user->notifications) < 1)
            <div class="row newsRow">
                <div class="col-sm-1 profileImg">
                    {{-- <img src="./assets/images/dummy.jpg" alt=""> --}}
                </div>
                <div class="col-sm-8 newsDesc">
                    <div>

                        <p class="white text-center">
                            No Notification Found
                        </p>
                    </div>
                    <div>
                        <p class="light">

                        </p>
                    </div>

                </div>
            </div>
        @else
            @foreach ($user->notifications as $item)

                <div class="row newsRow">
                    <div class="col-sm-1 profileImg">
                        {{-- <img src="./assets/images/dummy.jpg" alt=""> --}}
                    </div>
                    <div class="col-sm-8 newsDesc">
                        <div>

                            <p class="white">
                                {{ $item->message }}
                            </p>
                        </div>
                        <div>
                            <p class="light">
                                {{ $item->created_at }}
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif

    </section>
@endsection
