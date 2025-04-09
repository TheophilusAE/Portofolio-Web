
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/2ab29f499f.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="copyright">
                <p>Copyright © Theophilus. 2025</p>
        </div>
    </footer>

    <script>
        function opentab(tabName, event) {
            const tabContents = document.querySelectorAll('.tab-contents');
            const tabLinks = document.querySelectorAll('.tab-links');

            tabContents.forEach(content => {
                content.classList.remove('active-tab');
            });

            tabLinks.forEach(link => {
                link.classList.remove('active-link');
            });
            
            document.getElementById(tabName).classList.add('active-tab');
            event.currentTarget.classList.add('active-link');
        }
    </script>
</body>
</html>