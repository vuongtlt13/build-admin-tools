@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(() => {
                $("div.application-toolbar").html(`@include('applications.toolbar')`);
            }, 10)
        });
    </script>
@endpush
