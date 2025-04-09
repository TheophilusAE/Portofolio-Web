@extends('layouts.app')

@section('content')
    <div class="welcome-container" style="text-align: center; padding: 50px;">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome to My Website!</h1>
        <p class="text-lg text-gray-500 dark:text-gray-400">Click the button below to continue to the home page.</p>
        <button id="continueButton" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
            Continue to Home
        </button>
    </div>

    <script>
        document.getElementById('continueButton').addEventListener('click', function() {
            // Redirect to the home page
            window.location.href = "{{ url('/home') }}"; // Adjust the URL to your home page route
        });
    </script>
@endsection