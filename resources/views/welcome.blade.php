@extends('layouts.app')

@section('content')
    <div class="welcome-container" style="background-color: #1a1a1a; color: black; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <h1 class="text-3xl font-bold" style="color: black;">Welcome to My Website!</h1>
        <p class="text-lg" style="color: black;">Click the button below to continue to the home page.</p>
        <button id="continueButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Continue to Home
        </button>
    </div>

    <script>
        document.getElementById('continueButton').addEventListener('click', function() {
            window.location.href = "{{ url('/home') }}";
        });
    </script>
@endsection