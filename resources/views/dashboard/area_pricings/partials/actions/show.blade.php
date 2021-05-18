@can('view', $area_pricing)
    <a href="{{ route('dashboard.area_pricings.show', $area_pricing) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
