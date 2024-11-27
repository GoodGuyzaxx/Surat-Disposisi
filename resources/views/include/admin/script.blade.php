<script src="{{url("mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
<script src="{{url("mazer/dist/assets/js/bootstrap.bundle.min.js")}}"></script>

<script src="{{url("mazer/dist/assets/vendors/apexcharts/apexcharts.js")}}"></script>
<script src="{{url("mazer/dist/assets/js/pages/dashboard.js")}}"></script>

<script src="{{url("mazer/dist/assets/js/main.js")}}"></script>

<script src="{{ asset('/sw.js') }}"></script>
<script>
    if ("serviceWorker" in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
            (registration) => {
                console.log("Service worker registration succeeded:", registration);
            },
            (error) => {
                console.error(`Service worker registration failed: ${error}`);
            },
        );
    } else {
        console.error("Service workers are not supported.");
    }
</script>
