@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="Kitchen Sink"></x-titlebar>

    <x-panel title="Typography">
        <h1 class="ui header">Heading 1</h1>
        <h2 class="ui header">Heading 2</h2>
        <h3 class="ui header">Heading 3</h3>
        <h4 class="ui header">Heading 4</h4>
        <h5 class="ui header">Heading 5</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, doloribus fugit inventore quaerat quas quis ratione saepe sint totam. Distinctio laborum praesentium sit tempore voluptatem. Aspernatur odio provident repellat voluptate.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, doloribus fugit inventore quaerat quas quis ratione saepe sint totam. Distinctio laborum praesentium sit tempore voluptatem. Aspernatur odio provident repellat voluptate.</p>
        <div class="ui container text">
            <h1 class="ui header">Text Container</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis cumque distinctio dolore ea enim et expedita in nobis nulla odit possimus quae quam quas quos reiciendis tempore temporibus, veritatis!</p>
        </div>

        <div class="ui divider section"></div>
        <div class="ui right floated horizontal list">
            <div class="disabled item" href="#">© GitHub, Inc.</div>
            <a class="item" href="#">Terms</a>
            <a class="item" href="#">Privacy</a>
            <a class="item" href="#">Contact</a>
        </div>
        <div class="ui horizontal list">
            <a class="item" href="#">About Us</a>
            <a class="item" href="#">Jobs</a>
        </div>

    </x-panel>

    <x-panel title="Button">
        <x-button label="Primary Button" type="primary"></x-button>
        <x-button label="Secondary Button" type="secondary"></x-button>
        <x-button label="Basic Button" type="basic"></x-button>

        <div class="ui divider section"></div>

        <x-button label="Negative Button" type="negative"></x-button>
        <x-button label="Positive Button" type="positive"></x-button>

        <div class="ui divider section"></div>

        <div class="ui horizontal list">
            @foreach(config('laravolt.ui.colors') as $color => $hex)
                <div class="item">
                    <button class="ui button {{ $color }}">{{ $color }}</button>
                </div>
            @endforeach
        </div>
        <div class="ui horizontal list">
            @foreach(config('laravolt.ui.colors') as $color => $hex)
                <div class="item">
                    <button themed class="ui button secondary {{ $color }}">{{ $color }}</button>
                </div>
            @endforeach
        </div>
        <div class="ui horizontal list">
            @foreach(config('laravolt.ui.colors') as $color => $hex)
                <div class="item">
                    <button themed class="ui button basic {{ $color }}">{{ $color }}</button>
                </div>
            @endforeach
        </div>
    </x-panel>


    <x-panel title="Label">
        <div class="ui horizontal list">
            @foreach(config('laravolt.ui.colors') as $color => $hex)
                <div class="item">
                    <div class="ui label {{ $color }}">{{ $color }}</div>
                </div>
            @endforeach
        </div>
        <div class="ui horizontal list">
            @foreach(config('laravolt.ui.colors') as $color => $hex)
                <div class="item">
                    <div class="ui label basic {{ $color }}">{{ $color }}</div>
                </div>
            @endforeach
        </div>
    </x-panel>


@endsection
