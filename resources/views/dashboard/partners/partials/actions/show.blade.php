@can('view', $partner)
    <a href="{{ route('dashboard.partners.show', $partner) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
