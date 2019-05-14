@extends('layouts.master')

@section('splash')
    <div class="welcome-splash">
        <h1>Welcome to Neuroscience Lab</h1>
        <p>
            <img src="/img/brain.png" style="max-width:40%"/>
        </p>
    </div>
@endsection

@section('content')
    <div class="welcome-content">
        <p>Here, you can interface with the lab database. You can:
            <ul>
                <li>Run reports on studies—local (fMRI) or MTurk</li>
                <li>Create studies and participants</li>
                <li>Update studies and participants</li>
                <li>Add participants to studies</li>
        </p>
    </div>
@endsection
