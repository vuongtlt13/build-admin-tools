@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(() => {
                $("div.service-toolbar").html(`@include('services.toolbar')`);
            }, 10)
        });
    </script>
@endpush
