@foreach(['success', 'warning', 'danger','primary'] as $status)
    @if(session($status))
        <div class="alert card card-{{$status}} card-outline alert-dismissible alert-alt solid fade show">
            <div class="card-header">
                <strong>{{ session($status) }}</strong>
            </div>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            
        </div>
    @endif
@endforeach

<script>
    setTimeout(() => {
        $('.alert').hide('slow')
    }, 2000);
</script>
